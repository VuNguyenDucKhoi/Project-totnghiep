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
            <strong>DANH SÁCH LIÊN HỆ</strong>
        </div>
        @include('backend.modules.alert')
        <div class="card-body">
            <div class="table-responsive">
                <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>Tên Khách Hàng</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Tin nhắn</th>
                            <th>Thời gian gửi</th>
                            <th>Hành động</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->sdt}}</td>
                                    <td>{{$contact->message}}</td>
                                    <td>{{$contact->updated_at}}</td>
                                    <td class="table-action">
                                    <a onclick="responded({{$contact->id}} ,'/admin/contact/reply')" class="btn btn-success"><i class="fa fa-mail-reply"></i></a>
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




