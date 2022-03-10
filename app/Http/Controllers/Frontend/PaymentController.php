<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Frontend\ChuyenService;
use App\Http\Services\Payment\PaymentService;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function datve(Request $request){
        $result = $this->paymentService->create($request);
        if($result === false){
            return redirect()->back();
        }
        return  redirect('/dat-ve/thong-tin');
    }

    public function show(Request $request){

        $chuyens = $this->paymentService->getChuyen();
        return view('frontend.payment.payment', [
            'title' => 'Đặt Vé',
            'chuyens' => $chuyens,
            'pays' => Session::get('pays', ),
            'ngays' => Session::get('ngays'),
        ]);
    }

    public function addDatVe(Request $request){
        $result = $this->paymentService->addDatVe($request);
        $chuyens = $this->paymentService->getChuyen();
        //$invoices = Session::get('invoices');

        return view('frontend.payment.payment2',[
            'title' => 'Thanh toán',
            'chuyens' => $chuyens,
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'country' => $request->input('country'),
            'email' => $request->input('email'),
            'ngays' => Session::get('ngays'),
            'pays' => Session::get('pays', ),
            'invoices' => Session::get('invoices'),

        ]);
    }

    public function hoanThanh(Request $request){
        $chuyens = $this->paymentService->getChuyen();
        return view('frontend.payment.payment3',[
            'title' => 'Đặt vé thành công',
            'chuyens' => $chuyens,
            'ngays' => Session::get('ngays'),
            'pays' => Session::get('pays'),
        ]);
    }


    public function datvehd(Request $request){
        $result = $this->paymentService->create($request);
        if($result === false){
            return redirect()->back();
        }
        return  redirect('/dat-ve/thong-tin-hd');
    }

    public function showhd(Request $request){

        $chuyens = $this->paymentService->getChuyen();
        return view('frontend.payment.paymenthd', [
            'title' => 'Đặt Vé',
            'chuyens' => $chuyens,
            'pays' => Session::get('pays', ),
            'ngays' => Session::get('ngays'),
        ]);
    }

    public function addDatVehd(Request $request){
        $result = $this->paymentService->addDatVe($request);
        $chuyens = $this->paymentService->getChuyen();
        //$invoices = Session::get('invoices');

        return view('frontend.payment.paymenthd2',[
            'title' => 'Thanh toán',
            'chuyens' => $chuyens,
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'country' => $request->input('country'),
            'email' => $request->input('email'),
            'ngays' => Session::get('ngays'),
            'pays' => Session::get('pays', ),
            'invoices' => Session::get('invoices'),

        ]);
    }

    public function hoanThanhhd(Request $request){
        $chuyens = $this->paymentService->getChuyen();
        return view('frontend.payment.paymenthd3',[
            'title' => 'Đặt vé thành công',
            'chuyens' => $chuyens,
            'ngays' => Session::get('ngays'),
            'pays' => Session::get('pays'),
        ]);
    }



    //Thanh toán Online

    public function execPostRequest($url, $data){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }

    public function momoPayment(Request $request){
        $total = $request->input('total');
        $invoices = $request->input('invoice_id');

        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua MoMo";
        $amount = $total;
        $orderId = time() . "";
        $redirectUrl = "/";
        $ipnUrl = "/";
        $extraData = "";

        $requestId = time() . "";
        $requestType = "payWithATM";
//        $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
        //before sign HMAC SHA256 signature
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);
        $data = array('partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature);
        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);  // decode json

        //Just a example, please check more in there

//        header('Location: ' . $jsonResult['payUrl']);
        return redirect()->to($jsonResult['payUrl']);

    }

    public function vnpayPayment(Request $request){
        $total = $request->input('total');
        $invoices = $request->input('invoice_id');

        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "/";
        $vnp_TmnCode = "2T1GDIOR";//Mã 'website tại VNPAY
        $vnp_HashSecret = "HOWOBTOZDEDKEJKXXQIGCNQZPQJKCTBF"; //Chuỗi bí mật

        $vnp_TxnRef = $invoices; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh Toán';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $total * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version
//        $vnp_ExpireDate = $_POST['txtexpire'];
        //Billing

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
            , 'message' => 'success'
            , 'data' => $vnp_Url);
            if (isset($_POST['redirect'])) {
                header('Location: ' . $vnp_Url);
                die();
            } else {
                echo json_encode($returnData);
            }
        return redirect($vnp_Url) ;
    }


}
