@extends('backend.modules.main')
@section('head')
     <!-- meta ajax -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="/ckeditor/ckeditor.js"></script>

@endsection
@section('content')
    <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Quản Lý Chuyến </h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item">Chuyenhd</li>
                    <li class="breadcrumb-item active">Addchuyenhd</li>
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
                    <h5>Thêm Chuyến Hợp Đồng</h5>
                  </div>

                  <form class="form theme-form" action="{{route('chuyen.store')}}" method="post">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Tên chuyến</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="tenchuyen" type="text" placeholder="Nhập tên chuyến">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Loại</label>
                            <div class="col-sm-9">
                                <select class="form-select" name="loai" aria-label="Default select example">
                                    <option value="Loại">Loại</option>
                                    <option value="Một chiều">Một chiều</option>
                                    <option value="Hai chiều trong ngày">Hai chiều trong ngày</option>
                                    <option value="Hai chiều qua đêm">Hai chiều qua đêm</option>

                                </select>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Tuyến</label>
                            <div class="col-sm-9">
                                <select class="form-select" name="idtuyen" aria-label="Default select example">
                                    <option value="0">Tuyến</option>
                                    @foreach($tuyens as $tuyen)
                                        <option value="{{$tuyen->id}}">{{$tuyen->start}} - {{$tuyen->stop}}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Tàu</label>
                            <div class="col-sm-9">
                                <select class="form-select" name="idtau" aria-label="Default select example">
                                    <option value="0">Tàu</option>
                                    @foreach($taus as $tau)
                                        <option value="{{$tau->id}}">{{$tau->tentau}}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Giá gói</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="gia" type="number" placeholder="VNĐ">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Mô tả </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="content" name="description"></textarea>
                            </div>
                          </div>
                          <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Ảnh</label>

                    <div class="col-sm-9">
                        <input class="form-control" id="thumb" type="file">
                    </div>
                </div>
                 <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9" id="image_show">

                    </div>
                    <input type="hidden" name="thumb" id="file">
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
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>

@endsection
@section('foot')

    <script>
        CKEDITOR.replace( 'content');
    </script>
    <!-- delete  -->
    <script src="{{asset('template/admin/assets/js/delete.js')}}"></script>


@endsection

