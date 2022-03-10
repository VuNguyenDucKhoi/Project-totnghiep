<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Blog\BlogService;
use App\Http\Services\Frontend\ChuyenService;
use App\Http\Services\Comment\CommentService;

class BlogDetailController extends Controller
{
    protected $blogService;
    protected $chuyenService;
    protected $commentService;

    public function __construct(BlogService $blogService, ChuyenService $chuyenService, CommentService $commentService)
    {
        $this->blogService = $blogService;
        $this->chuyenService = $chuyenService;
        $this->commentService = $commentService;

    }

    public function index($id, $slug = ''){
        $blog = $this->blogService->show($id);
        $blogs = $this->blogService->more($id);
        $comments = $this->commentService->getblog($id);

        $count = count($comments);

        return view('frontend.blog.detail',[
            'title' => $blog->title,
            'blog' => $blog,
            'blogs' => $blogs,
            'chuyenhds' => $this->blogService->gethd(),
            'chuyens' => $this->blogService->get(),
            'comments' => $comments,
            'count' => $count
        ]);
    }

    public function comment(Request $request){
        $blog_id = $request->input('blog_id');
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required'
        ]);
        $this->commentService->create($request);
        return redirect()->back();
    }

}
