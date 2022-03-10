<?php

namespace App\Http\Services\Backend;

use App\Models\Tau;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class TauService
{
    public function getAll(){
        return Tau::orderbyDesc('id')->get();
    }

    public function create($request)
    {
        try {
            Tau::create([
                'tentau' => (string)$request->input('tentau'),
                'soghe' => (string)$request->input('soghe'),
                'active' => (string)$request->input('active'),
            ]);
            Session::flash('success', 'Thêm tàu thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

    public function update($request, $tau) : bool
    {
        $tau->tentau = (string) $request->input('tentau');
        $tau->soghe = (string) $request->input('soghe');
        $tau->active = (string) $request->input('active');
        $tau->save();
        Session::flash('success', 'Cập nhật thành công!');
        return true;
    }

    public function destroy($request){
        $tau = Tau::where('id', $request->input('id'))->first();
        if($tau){
            return Tau::where('id', $request->input('id'))->delete();
        }
        return false;
    }
}
