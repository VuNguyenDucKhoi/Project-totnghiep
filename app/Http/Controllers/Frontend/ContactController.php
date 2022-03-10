<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderAdminService;
use App\Http\Services\Contact\ContactService;

class ContactController extends Controller
{
    protected $sliderAdminService;
    protected $contact;

    public function __construct(SliderAdminService $sliderAdminService, ContactService $contact)
    {
        $this->sliderAdminService = $sliderAdminService;
        $this->contact = $contact;
    }
    public function index()
    {
        return view('frontend.contact', [
            'title' => 'Liên Hệ',
            'sliders' => $this->sliderAdminService->show(),
        ]);
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        $this->contact->create($request);
        return redirect()->back();
    }
}
