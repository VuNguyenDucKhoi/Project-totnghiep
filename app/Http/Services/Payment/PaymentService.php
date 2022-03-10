<?php

namespace App\Http\Services\Payment;

use App\Jobs\SendMail;
use App\Models\Chuyen;
use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PaymentService
{

    public function create($request){
        $qty = (int) $request->input('person');
        $date = $request->input('date');
        $chuyen_id = (int) $request->input('chuyen_id');
        Session::forget('ngays');

        Session::get('ngays');

        Session::put('ngays', [
            $chuyen_id => $date,
        ]);

        if ($date == null || $date <= getdate()) {
            Session::flash('error', 'Vui lòng chọn lại ngày!');
            return false;
        }
        if ($qty <= 0 || $chuyen_id <= 0) {
            Session::flash('error', 'Số lượng vé hoặc chuyến không chính xác!');
            return false;
        }
        Session::forget('pays');
        //Session::forget('ngays');

        $pays = Session::get('pays');


        if (is_null($pays)) {
            Session::put('pays', [
                $chuyen_id => $qty,
            ]);
            return true;
        }

        $exists = Arr::exists($pays, $chuyen_id);

        if($exists){
            $pays[$chuyen_id] = $qty;
            Session::put('pays', $pays);
            return true;
        }
        $pays = Session::get('pays');
        unset($pays[$chuyen_id]);
        Session::put('pays', $pays);
        $pays[$chuyen_id] = $qty;
        Session::put('pays', $pays);

    }

    public function getChuyen(){
        $pays = Session::get('pays');
        if (is_null($pays)) {
            return [];
        }
        $chuyen_id = array_keys($pays);
        return Chuyen::select('id','tenchuyen', 'gia')
            ->where('active', 1)
            ->whereIn('id', $chuyen_id)
            ->get();
    }

    public function addDatVe($request){
        try{
            DB::beginTransaction();
            $pays = Session::get('pays');
            if (is_null($pays)) {
                return false;
            }
            $ngays = Session::get('ngays');

            $customer = Customer::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'country' => $request->input('country'),
                'email' => $request->input('email'),
                'notes' => $request->input('notes'),
            ]);
            $this->infoChuyenPays($ngays, $pays, $customer->id);
            DB::commit();
            Session::flash('success', 'Đặt vé thành công');
            #queues
            SendMail::dispatch($request->input('email'))->delay(now()->addSeconds(2));
        }catch (\Exception $err){
            DB::rollBack();
            Session::flash('error', 'Đặt vé lỗi, thử lại sau!');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    protected function infoChuyenPays($ngays, $pays, $customer_id){
        $chuyen_id = array_keys($pays);
        $chuyens = Chuyen::select('id','tenchuyen', 'gia')
            ->where('active', 1)
            ->whereIn('id', $chuyen_id)
            ->get();
        $data = [];

        foreach ($chuyens as $chuyen){
            $invoices = Invoice::create ([
                'customer_id' => $customer_id,
                'product_id' => $chuyen->id,
                'pty' => $pays[$chuyen->id],
                'date' => $ngays[$chuyen->id],
                'gia' => $chuyen->gia,
            ]);

            Session::forget('invoices');
            Session::get('invoices');
            Session::put('invoices', $invoices->id);

        }
        return true;
    }



    //Admin

    public function getAll(){
        return Invoice::orderbyDesc('id')->with('customers')->with('chuyens')->get();
    }

    public function destroy($request){
        $invoice = Invoice::where('id', $request->input('id'))->first();
        if($invoice){
            return Invoice::where('id', $request->input('id'))->delete();
        }
        return false;
    }

    public function getChuyenForInvoice($id){
        return Invoice::where('id', $id)
            ->with('customers')
            ->with('chuyens')
            ->firstOrFail();
    }



    public function order_follow_month($year, $month){
        return Invoice::whereYear('created_at', $year)
            ->whereMonth('created_at', $month)
            ->get();
    }

    public function orderdetail_orderid($id){
        return Invoice::where('id', $id)
            ->get();
    }


}
