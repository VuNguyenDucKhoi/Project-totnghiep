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
            <strong>DANH SÁCH CHUYẾN TÀU</strong>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>Tên chuyến</th>
                            <th>Tàu</th>
                            <th>Tuyến</th>
                            <th>Giá vé</th>
                            <th>Ghi chú</th>
                            <th>Mô tả</th>
                            <th>Thời gian</th>
                            <th>Trạng thái</th>
                            <th style="width: 200px;">Hành động</th>
                          </tr>
                        </thead>
                        <tbody>
                            {!! \App\Helpers\Helper::chuyen($chuyens) !!}
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
</div>
</div>
        </div>
</div>

@endsection
@section('foot')
    <!-- Plugins JS start-->
    <script src="{{asset('template/admin/assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/tooltip-init.js')}}"></script>
    <!-- Plugins JS Ends-->
    <script src="{{asset('template/admin/assets/js/delete.js')}}"></script>
@endsection



