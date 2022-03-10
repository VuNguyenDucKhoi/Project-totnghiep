<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CreateFromTuyenRequest;
use App\Http\Services\Backend\TuyenService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Tuyen;

class TuyenController extends Controller
{
    protected $tuyenService;
    public function __construct(TuyenService $tuyenService)
    {
        $this->tuyenService = $tuyenService;
    }
    public function create(){
        return view('backend.components.route.addtuyen',[
            'title' => 'Thêm Tuyến Tàu Mới',
            'tuyens' => $this->tuyenService->getAll()
        ]);
    }

    public function store(CreateFromTuyenRequest $request){
        $result = $this->tuyenService->create($request);
        return redirect()->back();
    }

    public function show(Tuyen $tuyen){
        return view('backend.components.route.edittuyen',[
            'title'=> 'Chỉnh Sửa Thông Tin Tuyến ',
            'tuyen' => $tuyen
        ]);
    }

    public function update(Tuyen $tuyen, CreateFromTuyenRequest $request){
        $this->tuyenService->update($request, $tuyen);
        return redirect('admin/tuyen/addtuyen');
    }

    public function destroy(Request $request): JsonResponse
    {
        $result = $this->tuyenService->destroy($request);
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
