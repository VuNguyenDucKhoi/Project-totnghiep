<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('backend.components.dashboard.home',[
            'title'=>'Trang Quản Trị Admin'
        ]);
    }
}
