<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CreateFormRequest;
use Illuminate\Http\Request;
use App\Models\Chuyen;
use App\Models\Tau;
use App\Models\Tuyen;
use Illuminate\Http\JsonResponse;
use App\Http\Services\Backend\ChuyenService;


class ChuyenController extends Controller
{
    protected $chuyenService;

    public function __construct(ChuyenService $chuyenService)
    {
        $this->chuyenService = $chuyenService;
    }


    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        return view('backend.components.trip.listchuyen',[
            'title'=> 'Danh Sách Chuyến',
            'chuyens' => $this->chuyenService->getAll(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('backend.components.trip.addchuyen', [
            'title' => 'Thêm Chuyến Mới',
            'tuyens' => $this->chuyenService->getTuyen(),
            'taus' => $this->chuyenService->getTau(),
        ]);
    }

    public function addhd(){
        return view('backend.components.trip.addchuyenhd', [
            'title' => 'Thêm Chuyến Hợp Đồng Mới',
            'tuyens' => $this->chuyenService->getTuyen(),
            'taus' => $this->chuyenService->getTau(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     */
    public function store(CreateFormRequest $request)
    {
        $this->chuyenService->create($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Chuyen $chuyen)
    {
        return view('backend.components.trip.editchuyen',[
            'title'=> 'Chỉnh Sửa Thông Tin Chuyến: ' .$chuyen->tenchuyen,
            'chuyen' => $chuyen,
            'tuyens' => $this->chuyenService->getTuyen(),
            'taus' => $this->chuyenService->getTau(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Chuyen $chuyen, CreateFormRequest $request)
    {
        $this->chuyenService->update($request, $chuyen);
        return redirect()->route('chuyen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request): JsonResponse
    {
        $result = $this->chuyenService->destroy($request);
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
