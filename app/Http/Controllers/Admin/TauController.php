<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CreateFromTauRequest;
use App\Http\Services\Backend\TauService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Tau;

class TauController extends Controller
{
    protected $tauService;
    public function __construct(TauService $tauService)
    {
        $this->tauService = $tauService;
    }

    public function create(){
        return view('backend.components.ships.addtau',[
            'title' => 'Danh Sách Tàu',
            'taus' => $this->tauService->getAll()
        ]);
    }

    public function store(CreateFromTauRequest $request){
        $result = $this->tauService->create($request);
        return redirect()->back();
    }

    public function show(Tau $tau){
        return view('backend.components.ships.edittau',[
            'title'=> 'Chỉnh Sửa Thông Tin Tàu: ' .$tau->tentau,
            'tau' => $tau
        ]);
    }

    public function update(Tau $tau, CreateFromTauRequest $request){
        $this->tauService->update($request, $tau);
        return redirect('admin/tau/addtau');
    }

    public function destroy(Request $request): JsonResponse
    {
        $result = $this->tauService->destroy($request);
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
