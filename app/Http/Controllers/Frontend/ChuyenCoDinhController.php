<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderAdminService;
use App\Http\Services\Frontend\ChuyenService;
use App\Http\Services\Blog\BlogService;

class ChuyenCoDinhController extends Controller
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

        return view('frontend.trips.codinh',[
            'title' => 'Chuyến Cố Định',
            'sliders' => $this->sliderAdminService->show(),
            'chuyens' => $this->chuyenService->getChuyen($request),
            'chuyenhds' => $this->chuyenService->gethd($request),
            'blogs' => $this->blogService->get3(),
        ]);
    }
}
