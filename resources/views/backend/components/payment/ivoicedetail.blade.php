@extends('backend.modules.main')
@section('head')
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('template/admin/assets/css/datatables.css')}}">
    <!-- Plugins css Ends-->
@endsection
@section('content')
<div class="page-body">
    <!-- Container-fluid starts-->
            <div class="container invoice">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card">
                    <div class="card-body">
                      <div>
                        <div>
                          <div class="row invo-header">
                            <div class="col-sm-6">
                              <div class="media">
                                <div class="media-body m-l-20">
                                  <h4 class="media-heading f-w-600">CHI TIẾT HÓA ĐƠN</h4>

                                </div>
                              </div>
                              <!-- End Info-->
                            </div>
                            <div class="col-sm-6">
                              <div class="text-md-end text-xs-center">
                                <h3>Hóa đơn #<span class="digits counter">{{$invoices->id}}</span></h3>
                                <p>Thời gian tạo: <span class="digits"> {{$invoices->updated_at}}</span><br>
                              </div>
                              <!-- End Title-->
                            </div>
                          </div>
                        </div>
                        <!-- End InvoiceTop-->
                        <div class="row invo-profile">
                          <div class="col-xl-4">
                            <div class="media">
                              <div class="media-body m-l-20">
                                <h4 class="media-heading f-w-600">Họ Tên: {{$invoices->customers->name}}</h4>
                                <p>Email: {{$invoices->customers->email}}<br>
                                    <span class="digits">Điện thoại: {{$invoices->customers->phone}}</span><br>
                                    <span class="digits">Địa chỉ:  {{$invoices->customers->address}}, {{$invoices->customers->country}}</span></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-8">
                            <div class="text-xl-end" id="project">
                              <h6>Ghi chú</h6>
                              <p>{{$invoices->customers->notes}}</p>
                            </div>
                          </div>
                        </div>
                        <!-- End Invoice Mid-->
                        <div>
                          <div class="table-responsive invoice-table" id="table">
                              @php $total = 0; @endphp
                            <table class="table table-bordered table-striped">
                              <tbody>
                                <tr>

                                  <td class="Hours">
                                    <h6 class="p-2 mb-0">Chuyến</h6>
                                  </td>
                                  <td class="Rate">
                                    <h6 class="p-2 mb-0">Giá</h6>
                                  </td>
                                  <td class="subtotal">
                                    <h6 class="p-2 mb-0">Số lượng</h6>
                                  </td>
                                  <td class="subtotal">
                                    <h6 class="p-2 mb-0">Tổng cộng</h6>
                                  </td>
                                </tr>
                                <tr>

                                  <td>
                                    <p class="itemtext digits">{{$invoices->chuyens->tenchuyen}}</p>
                                  </td>
                                  <td>
                                    <p class="itemtext digits">{{ number_format($invoices->chuyens->gia, 0, '', '.') }} VNĐ</p>
                                  </td>
                                  <td>
                                    <p class="itemtext digits">{{ $invoices->pty }}</p>
                                  </td>
                                  <td>
                                    <p class="itemtext digits">{{ number_format($invoices->chuyens->gia * $invoices->pty, 0, '', '.') }} VNĐ</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td></td>
                                  <td class="Rate">
                                    <h6 class="mb-0 p-2">Tổng tiền</h6>
                                  </td>
                                  <td class="payment digits">
                                    <h6 class="mb-0 p-2">{{ number_format($invoices->chuyens->gia * $invoices->pty, 0, '', '.') }} VNĐ</h6>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <!-- End Table-->

                        </div>
                        <!-- End InvoiceBot-->
                      </div>
                      <div class="col-sm-12 text-center mt-3">
                        <button class="btn btn btn-primary me-2" type="button" onclick="window.print()">Print</button>
                        <a href="/admin/payment/list" class="btn btn-secondary" type="button">Cancel</a>
                      </div>
                      <!-- End Invoice-->
                      <!-- End Invoice Holder-->
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

@endsection







