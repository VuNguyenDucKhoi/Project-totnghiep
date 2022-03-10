<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderAdminService;
use App\Http\Services\Blog\BlogService;

class BlogController extends Controller
{
    protected $sliderAdminService;
    protected $blogService;

    public function __construct(SliderAdminService $sliderAdminService, BlogService $blogService)
    {
        $this->sliderAdminService = $sliderAdminService;
        $this->blogService = $blogService;
    }

    public function index()
    {
        return view('frontend.blog.blog', [
            'title' => 'Tin Tức',
            'sliders' => $this->sliderAdminService->show(),
            'blogs' => $this->blogService->getData()
        ]);
    }
}
