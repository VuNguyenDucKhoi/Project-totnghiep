<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderAdminService;
use App\Http\Services\Frontend\ChuyenService;
use App\Http\Services\Blog\BlogService;

class ChuyenHopDongController extends Controller
{
    protected $sliderAdminService;
    protected $chuyenService;
    protected $blogService;

    public function __construct(SliderAdminService $sliderAdminService, ChuyenService $chuyenService, BlogService $blogService)
    {
        $this->sliderAdminService = $sliderAdminService;
        $this->chuyenService = $chuyenService;
        $this->blogService = $blogService;
    }

    public function index(Request $request){
        return view('frontend.trips.hopdong',[
            'title' => 'Chuyến Hợp Đồng',
            'sliders' => $this->sliderAdminService->show(),
            'chuyenhds' => $this->chuyenService->getChuyenHD($request),
            'chuyens' => $this->chuyenService->get(),
            'blogs' => $this->blogService->get3(),
        ]);
    }
}
