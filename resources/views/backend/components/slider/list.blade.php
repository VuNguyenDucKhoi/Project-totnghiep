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
<div class=" card mb-4">
        <div class="card-header">
            <strong>DANH SÁCH SLIDER</strong>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="table-responsive">
                      <table class="display" id="basic-1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Đường dẫn</th>
                        <th>Ảnh</th>
                        <th>Active</th>
                        <th>Update</th>
                        <th style="width: 180px">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sliders as $key => $slider)
                   <tr>
                        <td>
                            {{$slider->id}}
                        </td>
                        <td>
                            {{$slider->name}}
                        </td>
                        <td>
                            <a href="{{$slider->url}}">{{$slider->url}}</a>
                        </td>
                        <td>
                            <a href="{{$slider->thumb}}" target="_blank">
                                <img src="{{$slider->thumb}}" height="100px">
                            </a>
                        </td>
                        <td>
                            {!! \App\Helpers\Helper::active($slider->active) !!}
                        </td>
                        <td>
                            {{$slider->updated_at}}
                        </td>
                        <td>
                            <a href="/admin/slider/edit/{{$slider->id}}" class="btn btn-warning"> <i class="fa fa-pencil"></i></a>
                            <a onclick="removeRow({{$slider->id}},'/admin/slider/destroy')" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                    </div></div>
        </div>
</div>
</div></div>
@endsection
@section('foot')
    <script src="{{asset('template/admin/assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/tooltip-init.js')}}"></script>
    <!-- Plugins JS Ends-->
    <script src="{{asset('template/admin/assets/js/delete.js')}}"></script>
@endsection




