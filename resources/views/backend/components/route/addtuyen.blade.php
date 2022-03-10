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
              <div class="row">
                <div class="col-sm-6">
                  <h3>Quản Lý Tuyến</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item">Tuyen</li>
                    <li class="breadcrumb-item active">addtuyen</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                @include('backend.modules.alert')
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Thêm Tuyến</h5>
                  </div>

                  <form class="form theme-form" action="" method="post">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Điểm đi</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="start" type="text" placeholder="Nhập điểm đi">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Điểm đến</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="stop" type="text" placeholder="Nhập điểm đến">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Mô tả</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="desc" type="text"></textarea>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Kích hoạt</label>
                            <div class="col-sm-9">
                            <div class="radio radio-primary">
                                <input id="active" type="radio" name="active" checked="" value="1">
                                <label for="active">Có</label>
                            </div>
                            <div class="radio radio-danger">
                                <input id="no_active" type="radio" name="active" value="0">
                                <label for="no_active">Không</label>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <div class="col-sm-9 offset-sm-3">
                        <button class="btn btn-primary" type="submit">Thêm</button>
                      </div>
                    </div>
                    @csrf
                  </form>
                </div>

                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Danh Sách Tuyến</h5>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>Điểm đi</th>
                            <th>Điểm đến</th>
                            <th>Mô tả</th>
                            <th>Update</th>
                            <th style="width: 200px;">Trạng thái</th>
                            <th style="width: 200px;">Hành động</th>
                          </tr>
                        </thead>
                        <tbody>
                            {!! \App\Helpers\Helper::tuyen($tuyens) !!}
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>

@endsection
@section('foot')
    <!-- Plugins JS start-->
    <script src="{{asset('template/admin/assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/tooltip-init.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- delete  -->
    <script src="{{asset('template/admin/assets/js/delete.js')}}"></script>


@endsection
