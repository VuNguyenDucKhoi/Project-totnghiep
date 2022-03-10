<?php

namespace App\Http\Services\Backend;

use App\Models\Tuyen;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class TuyenService
{

    public function getAll(){
        return Tuyen::orderbyDesc('id')->get();
    }

    public function create($request){
        try{
            Tuyen::create([
                'start' => (string) $request->input('start'),
                'stop' => (string) $request->input('stop'),
                'desc' => (string) $request->input('desc'),
                'active' => (string) $request->input('active'),
            ]);
            Session::flash('success', 'Tạo tuyến thành công');
        }catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

    public function update($request, $tuyen) : bool
    {
        $tuyen->start = (string) $request->input('start');
        $tuyen->stop = (string) $request->input('stop');
        $tuyen->desc = (string) $request->input('desc');
        $tuyen->active = (string) $request->input('active');
        $tuyen->save();
        Session::flash('success', 'Cập nhật thành công!');
        return true;
    }

    public function destroy($request){
        $tuyen = Tuyen::where('id', $request->input('id'))->first();
        if($tuyen){
            return Tuyen::where('id', $request->input('id'))->delete();
        }
        return false;
    }
}
