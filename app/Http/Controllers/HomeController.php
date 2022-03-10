<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Blog\BlogService;
use App\Http\Services\Backend\ChuyenService;
use App\Http\Services\Contact\ContactService;
use App\Http\Services\Payment\CustomerService;
use App\Http\Services\Payment\PaymentService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $chuyenService;
    protected $blogService;
    protected $customerService;
    protected $contactService;
    protected $payService;

    public function __construct(PaymentService $payService, ChuyenService $chuyenService, BlogService $blogService, ContactService $contactService, CustomerService $customerService)
    {
        $this->middleware('auth');
        $this->chuyenService = $chuyenService;
        $this->blogService = $blogService;
        $this->contactService = $contactService;
        $this->customerService = $customerService;
        $this->payService = $payService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blog = $this->blogService->getAll();
        $blog_count = count($blog);
        $chuyen = $this->chuyenService->getAll();
        $chuyen_count = count($chuyen);
        $customer = $this->customerService->getAll();
        $customer_count = count($customer);
        $contact = $this->contactService->getAll();
        $contact_count = count($contact);

        $d=getdate();
        $year=$d['year'];


        for ($i=1; $i <= 12 ; $i++)
          {
            $list_orrders = $this->payService->order_follow_month($year, $i);


            $sum = 0;
            $gia = 0;
            foreach ($list_orrders as $row_orrder)
            {
              $gia += ($row_orrder->pty * $row_orrder->gia);
              $sum += $row_orrder->pty;
            }



            if($i >= 1 && $i <=12)
            {
              $total[] = $gia;
              $kq[] = "['".$i.'/'.$year."',".$sum.",".count($list_orrders)."],";
            }
          }


        return view('backend.components.dashboard.home',[
            'title'=>'Trang Quản Trị Admin',
            'count_blog' => $blog_count,
            'count_chuyen' => $chuyen_count,
            'count_customer' => $customer_count,
            'count_contact' => $contact_count,
            'kqs' => $kq,
            'totals' => $total,

        ]);
    }
}
