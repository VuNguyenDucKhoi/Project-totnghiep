<?php

namespace App\Http\Services\Contact;

use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ContactService
{
    //Admin
    public function getAll(){
        return Contact::orderbyDesc('id')->get();
    }
    public function reply($request){
        $contact = Contact::where('id', $request->input('id'))->first();
        if($contact){
            return Contact::where('id', $request->input('id'))->delete();
        }
        return false;
    }




    //Frontend
    public function create($request){
        try{
            $request->except('_token');
            Contact::create($request->all());
            Session::flash('success', 'Gửi thành công! Chúng tôi sẽ sớm liên hệ lại với bạn!');
        }catch (\Exception $err){
            Session::flash('error', 'Lỗi, Gửi không thành công! Vui lòng thử lại!');
            Log::info($err->getMessage());
            return false;
        }
        return true;
    }
}
