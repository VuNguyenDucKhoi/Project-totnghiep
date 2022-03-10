<?php

namespace App\Http\Services\Slider;

use App\Models\Slider;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SliderAdminService
{
    public function get(){
        return Slider::orderbyDesc('id')->paginate(10);
    }
    public function insert($request){
        try{
            Slider::create($request->input());
            Session::flash('success', 'Thêm slider mới thành công!');
        }catch (\Exception $err){
            Session::flash('error', 'Lỗi, thêm slider mới không thành công!');
            Log::info($err->getMessage());
            return false;
        }
        return true;
    }
    public function update($request, $slider){
        try{
            $slider->fill($request->input());
            $slider->save();
            Session::flash('success', 'Cập nhật slider thành công');
        }catch (\Exception $err){
            Session::flash('error', 'Cập nhật slider lỗi');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }
    public function destroy($request){
        $slider = Slider::where('id', $request->input('id'))->first();
        if($slider){
            $path = str_replace('storage', 'public', $slider->thumb);
            Storage::delete($path);
            $slider->delete();
            return true;
        }
        return false;
    }
    public function show()
    {
        return Slider::where('active', 1)->orderByDesc('sort_by')->get();
    }
}
