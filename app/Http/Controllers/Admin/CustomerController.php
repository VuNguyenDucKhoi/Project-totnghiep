<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Services\Payment\CustomerService;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        return view('backend.components.payment.customer',[
            'title'=> 'Danh Sách Khách Hàng',
            'customers' => $this->customerService->getAll(),
        ]);
    }


    public function destroy(Request $request): JsonResponse
    {
        $result = $this->customerService->destroy($request);
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
