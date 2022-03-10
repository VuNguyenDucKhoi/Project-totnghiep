<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Services\Blog\BlogService;

class BlogControler extends Controller
{
    protected $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }


    public function index()
    {
        return view('backend.components.blog.list',[
            'title'=> 'Danh Sách Chuyến',
            'blogs' => $this->blogService->getAll(),
        ]);
    }
    public function create()
    {
        return view('backend.components.blog.add',[
            'title'=> 'Danh Sách Chuyến',
        ]);
    }

    public function store(Request $request)
    {$this->validate($request,[
        'title' => 'required',
        'thumb' => 'required',
    ]);
        $this->blogService->create($request);
        return redirect()->back();


    }

    public function show(Blog $blog)
    {
        return view('backend.components.blog.edit',[
            'title'=> 'Chỉnh Sửa Thông Tin Chuyến: ' .$blog->title,
            'blog' => $blog,
        ]);

    }

    public function update(Blog $blog, Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'thumb' => 'required',
        ]);
        $resuls = $this->blogService->update($request, $blog);
        if($resuls){
            return redirect('/admin/blog/list');
        }
        return redirect()->back();

    }

    public function destroy(Request $request): \Illuminate\Http\JsonResponse
    {
        $result = $this->blogService->destroy($request);
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
