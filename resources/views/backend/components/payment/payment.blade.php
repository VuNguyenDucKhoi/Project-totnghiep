@extends('backend.modules.main')
@section('head')
<!-- meta ajax -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('template/admin/assets/css/datatables.css')}}">
    <!-- Plugins css Ends-->
@endsection
@section('content')
<div class="page-body">
          <div class="container-fluid">
            <div class="page-header">

<div class=" card mb-4">
        <div class="card-header">
            <strong>DANH SÁCH ĐƠN HÀNG</strong>
        </div>
        @include('backend.modules.alert')
        <div class="card-body">
            <div class="table-responsive">
                <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>Tên Khách Hàng</th>
                            <th>Số điện thoại</th>
                            <th>Tổng tiền</th>
                            <th>Ngày tạo</th>
                            <th>Hành động</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($payments as $payment)
                                <tr>
                                    <td>{{$payment->customers->name}}</td>
                                    <td>{{$payment->customers->phone}}</td>
                                    <td>{{number_format($payment->chuyens->gia * $payment->pty,0,'','.')}} VNĐ</td>
                                    <td>{{$payment->created_at}}</td>
                                    <td class="table-action center-content">
                                        <a href="/admin/payment/view/{{$payment->id}}"  class="btn btn-warning"> <i class="fa fa-eye"></i></a>
                                        <a onclick="removeRow({{$payment->id}},'/admin/payment/destroy')" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div></div></div>

@endsection
@section('foot')

    <!-- Plugins JS start-->
    <script src="{{asset('template/admin/assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/tooltip-init.js')}}"></script>
    <!-- Plugins JS Ends-->
    <script src="{{asset('template/admin/assets/js/delete.js')}}"></script>
@endsection






