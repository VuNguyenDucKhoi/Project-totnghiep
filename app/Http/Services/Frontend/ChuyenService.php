<?php

namespace App\Http\Services\Frontend;

use App\Models\Chuyen;
use App\Models\Tuyen;

class ChuyenService
{
    const LIMIT = 3;
    public function get($page = null)
    {
        return Chuyen::select('id','tenchuyen', 'idtuyen', 'idtau', 'time', 'content', 'description', 'thumb', 'gia',)
            ->orderByDesc('id')
            ->where('active',1)
            ->where('time','!=', NULL)
            ->when($page != null, function ($query) use ($page) {
                $query->offset($page * self::LIMIT);
            })
            ->limit(self::LIMIT)
            ->get();
    }

    public function getChuyen($request){
        $query = Chuyen::select('id','tenchuyen', 'idtuyen', 'idtau', 'time', 'content', 'description', 'thumb', 'gia')
            ->where('active',1)->where('time','!=', NULL);
        return $query->orderbyDesc('id')->paginate(4)->withQueryString();
    }

    public function gethd($page = null)
    {
        return Chuyen::select('id','tenchuyen', 'idtuyen', 'idtau', 'description', 'thumb', 'gia', 'loai')
            ->orderByDesc('id')
            ->where('active',1)
            ->where('time','=', NULL)
            ->limit(self::LIMIT)
            ->get();
    }

    public function getChuyenHD($request){
        $query = Chuyen::select('id','tenchuyen', 'idtuyen', 'idtau', 'description', 'thumb', 'gia', 'loai')->with('taus')
            ->where('active',1)->where('time','=', NULL);
        return $query->orderbyDesc('id')->paginate(4)->withQueryString();
    }

    public function show($id){
        return Chuyen::where('id', $id)
            ->where('active', 1)
            ->with('taus')
            ->with('tuyens')
            ->firstOrFail();
    }

    public function more($id){
        return Chuyen::select('id', 'tenchuyen', 'time', 'thumb', 'gia')
            ->where('id','!=', $id)
            ->where('time','!=', NULL)
            ->where('active', 1)
            ->limit(2)
            ->inRandomOrder()
            ->get();
    }


    public function morehd($id){
        return Chuyen::select('id','tenchuyen', 'idtau', 'thumb', 'gia', 'loai')
            ->where('id','!=', $id)
            ->where('time','=', NULL)
            ->where('active', 1)
            ->with('taus')
            ->limit(2)
            ->inRandomOrder()
            ->get();
    }

    public function getChuyenAll($tukhoa , $request){
        return Chuyen::where('tenchuyen','LIKE', '%'.$tukhoa.'%')
            ->where('active', 1)
            ->paginate(4)
            ->withQueryString();
    }

    public function getTuyen(){
        return Tuyen::where('active', 1)->get();
    }

    public function getTuyen2($idtuyen , $request){
        return Tuyen::where('id', $idtuyen)
        ->where('active', 1)->firstOrFail();
    }

    public function getChuyenTuyen($idtuyen , $request){
        return Chuyen::where('idtuyen', $idtuyen)
            ->where('active', 1)
            ->paginate(4)
            ->withQueryString();
    }

}
