<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Contact\ContactService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        return view('backend.components.contact.list',[
            'title'=> 'Danh Sách Liên Hệ',
            'contacts' => $this->contactService->getAll(),
        ]);
    }

    public function reply(Request $request): JsonResponse
    {
        $result = $this->contactService->reply($request);
        if($result){
            return response()->json([
                'error' => false,
                'message' => 'Loại bỏ thành công!'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }
}
