<?php

namespace App\Http\Services\Blog;

use App\Models\Chuyen;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogService
{

    //--------Admin------
    public function getAll(){
        return Blog::orderbyDesc('id')->get();
    }

    public function create($request){

        try{
            $request->except('_token');
            Blog::create($request->all());
            Session::flash('success', 'Thêm bài viết thành công!');
        }catch (\Exception $err){
            Session::flash('error', 'Lỗi, Vui lòng thử lại!');
            Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function update($request, $blog){
        try{
            $blog->fill($request->input());
            $blog->save();
            Session::flash('success', 'Cập nhật thành công!');
        }catch (\Exception $err){
            Session::flash('error', 'Lỗi, vui lòng thử lại!');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function destroy($request){
        $blog = Blog::where('id', $request->input('id'))->first();
        if($blog){
            $path = str_replace('storage', 'public', $blog->thumb);
            Storage::delete($path);
            return Blog::where('id', $request->input('id'))->delete();
        }
        return false;
    }


    //------frontend-------
    public function GetData(){
        return Blog::where('active', 1)
            ->orderbyDesc('id')
            ->paginate(6);
    }

    public function Get3(){
        return Blog::where('active', 1)
            ->limit(3)
            ->inRandomOrder()
            ->get();
    }

    public function show($id){
        return Blog::where('id', $id)
            ->where('active', 1)
            ->firstOrFail();
    }

    public function more($id){
        return Blog::where('id','!=', $id)
            ->where('active', 1)
            ->limit(4)
            ->inRandomOrder()
            ->get();
    }

    public function gethd()
    {
        return Chuyen::select('id','tenchuyen', 'idtuyen', 'idtau', 'description', 'thumb', 'gia', 'loai')
            ->orderByDesc('id')
            ->where('active',1)
            ->where('time','=', NULL)
            ->limit(3)
            ->get();
    }

    public function get()
    {
        return Chuyen::select('id','tenchuyen', 'idtuyen', 'idtau', 'time', 'content', 'description', 'thumb', 'gia',)
            ->orderByDesc('id')
            ->where('active',1)
            ->where('time','!=', NULL)
            ->limit(3)
            ->get();
    }


}
