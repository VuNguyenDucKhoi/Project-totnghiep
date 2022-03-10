<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Services\Comment\CommentService;
use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderAdminService;
use App\Http\Services\Frontend\ChuyenService;
use App\Http\Services\Blog\BlogService;

class MainController extends Controller
{
    protected $sliderAdminService;
    protected $chuyenService;
    protected $blogService;
    protected $commentService;

    public function __construct(SliderAdminService $sliderAdminService, ChuyenService $chuyenService, BlogService $blogService, CommentService $commentService)
    {
        $this->sliderAdminService = $sliderAdminService;
        $this->chuyenService = $chuyenService;
        $this->blogService = $blogService;
        $this->commentService = $commentService;
    }

    public function index()
    {
        $tuyens = $this->chuyenService->getTuyen();
        $comments = $this->commentService->getCommet();
        return view('frontend.home', [
            'title' => 'Trang Chủ',
            'sliders' => $this->sliderAdminService->show(),
            'chuyens' => $this->chuyenService->get(),
            'blogs' => $this->blogService->get3(),
            'tuyens' => $tuyens,
            'comments' => $comments,
        ]);
    }
    public function loadProduct(Request $request)
    {
        $page = $request->input('page', 0);
        $result = $this->chuyenService->get($page);
        if (count($result) != 0) {
            $html = view('frontend.modules.listchuyen', ['chuyens' => $result ])->render();
            return response()->json([ 'html' => $html]);
        }
        return response()->json(['html' => '']);
    }

}
