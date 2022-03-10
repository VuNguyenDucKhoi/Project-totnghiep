<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderAdminService;

class AboutController extends Controller
{
    protected $sliderAdminService;

    public function __construct(SliderAdminService $sliderAdminService)
    {
        $this->sliderAdminService = $sliderAdminService;
    }

    public function index()
    {
        return view('frontend.about', [
            'title' => 'Giới thiệu',
            'sliders' => $this->sliderAdminService->show(),
        ]);
    }
}
