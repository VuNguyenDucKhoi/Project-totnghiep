<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Services\Comment\CommentService;
use Illuminate\Http\Request;
use App\Http\Services\Frontend\ChuyenService;
use App\Http\Services\Slider\SliderAdminService;

class ChuyenDetailController extends Controller
{
    protected $chuyenService;
    protected $sliderAdminService;
    protected $commentService;

    public function __construct(SliderAdminService $sliderAdminService, ChuyenService $chuyenService, CommentService $commentService)
    {
        $this->chuyenService = $chuyenService;
        $this->sliderAdminService = $sliderAdminService;
        $this->commentService = $commentService;
    }

    public function index($id, $slug = ''){
        $chuyen = $this->chuyenService->show($id);
        $chuyens = $this->chuyenService->more($id);
        $comments = $this->commentService->getchuyen($id);
        $count = count($comments);
        return view('frontend.tripdetail.chuyendetail',[
            'title' => $chuyen->tenchuyen,
            'chuyen' => $chuyen,
            'sliders' => $this->sliderAdminService->show(),
            'chuyens' => $chuyens,
            'comments' => $comments,
            'count' => $count
        ]);
    }

    public function indexhd($id, $slug = ''){
        $chuyen = $this->chuyenService->show($id);
        $chuyens = $this->chuyenService->morehd($id);
        $comments = $this->commentService->getchuyen($id);
        $count = count($comments);
        return view('frontend.tripdetail.chuyenhddetail',[
            'title' => $chuyen->tenchuyen,
            'chuyen' => $chuyen,
            'sliders' => $this->sliderAdminService->show(),
            'chuyens' => $chuyens,
            'comments' => $comments,
            'count' => $count
        ]);
    }

    public function comment(Request $request){
        $chuyen_id = $request->input('chuyen_id');
        $this->validate($request,[
            'name' => 'required',
            'comment' => 'required'
        ]);
        $this->commentService->create($request);
        return redirect()->back();
    }
}
