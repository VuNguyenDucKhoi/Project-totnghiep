<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderAdminService;
use App\Http\Services\Frontend\ChuyenService;
use function PHPUnit\Framework\countOf;

class SearchController extends Controller
{
    protected $sliderAdminService;
    protected $chuyenService;

    public function __construct(SliderAdminService $sliderAdminService, ChuyenService $chuyenService)
    {
        $this->sliderAdminService = $sliderAdminService;
        $this->chuyenService = $chuyenService;
    }

    public function index(Request $request){
        $tukhoa = $request->input('tukhoa');
        $chuyens = $this->chuyenService->getChuyenAll($tukhoa , $request);
        $tuyens = $this->chuyenService->getTuyen();
        return view('frontend.search', [
            'title' => 'Tìm kiếm'. $tukhoa,
            'tukhoa' => $tukhoa,
            'sliders' => $this->sliderAdminService->show(),
            'chuyens' => $chuyens,
            'tuyens' => $tuyens,
        ]);
    }
    public function search(Request $request){
        $idtuyen = $request->input('idtuyen');
        $chuyens = $this->chuyenService->getChuyenTuyen($idtuyen , $request);
        $gettuyen = $this->chuyenService->getTuyen2($idtuyen , $request);
        $tuyens = $this->chuyenService->getTuyen();
        return view('frontend.search', [
            'title' => 'Tìm kiếm',
            'tukhoa' =>  $gettuyen->start .' - '. $gettuyen->stop,
            'sliders' => $this->sliderAdminService->show(),
            'chuyens' => $chuyens,
            'tuyens' => $tuyens,
        ]);
    }
}
