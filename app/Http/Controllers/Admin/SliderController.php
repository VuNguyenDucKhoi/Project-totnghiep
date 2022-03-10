<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Http\Services\Slider\SliderAdminService;

class SliderController extends Controller
{
    protected $sliderAdminService;

    public function __construct(SliderAdminService $sliderAdminService){
        $this->sliderAdminService = $sliderAdminService;
    }

    public function create(){
        return view('backend.components.slider.add', [
            'title' => 'Thêm Slider Mới',
        ]);
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'thumb' => 'required',
            'url' => 'required'
        ]);
        $this->sliderAdminService->insert($request);
        return redirect()->back();
    }
    public function index(){
         return view('backend.components.slider.list', [
            'title' => 'Danh Sách Sliders',
            'sliders' => $this->sliderAdminService->get()
        ]);
    }
    public function show(Slider $slider)
    {
        return view('backend.components.slider.edit',[
            'title' => 'Chỉnh Sửa Slider ' . $slider->name,
            'slider' => $slider,

        ]);
    }
    public function update(Request $request, Slider $slider){
        $this->validate($request,[
            'name' => 'required',
            'thumb' => 'required',
            'url' => 'required'
        ]);
        $resuls = $this->sliderAdminService->update($request, $slider);
        if($resuls){
            return redirect('/admin/slider/list');
        }
        return redirect()->back();
    }
    public function destroy(Request $request): \Illuminate\Http\JsonResponse
    {
        $result = $this->sliderAdminService->destroy($request);
        if($result){
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công!'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }
}
