<?php

namespace App\Http\Services\Backend;

use App\Models\Chuyen;
use App\Models\Tau;
use App\Models\Tuyen;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ChuyenService
{
    public function getAll(){
        return Chuyen::with('taus')
            ->with('tuyens')
            ->orderbyDesc('id')->get();
    }

    public function getTau(){
        return Tau::where('active', 1)->get();
    }

    public function getTuyen(){
        return Tuyen::where('active', 1)->get();
    }

    public function create($request){

        try{
            $request->except('_token');
            Chuyen::create($request->all());
            Session::flash('success', 'Tạo chuyến thành công!');
        }catch (\Exception $err){
            Session::flash('error', 'Lỗi, Tạo chuyến không thành công!');
            Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function update($request, $chuyen) : bool
    {
        try{
            $chuyen->fill($request->input());
            $chuyen->save();
            Session::flash('success', 'Cập nhật chuyến thành công');
        }catch (\Exception $err){
            Session::flash('error', 'Cập nhật chuyến lỗi');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function destroy($request){
        $chuyen = Chuyen::where('id', $request->input('id'))->first();
        if($chuyen){
            return Chuyen::where('id', $request->input('id'))->delete();
        }
        return false;
    }
}
