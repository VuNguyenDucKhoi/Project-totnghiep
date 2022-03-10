@extends('backend.modules.main')
@section('head')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        var button = document.getElementById('change-chart');
        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
          ['Month', 'Bán ra', 'Đơn hàng'],
          <?php
            foreach ($kqs as $kq){
                echo $kq;
            }
          ?>
        ]);


        var classicOptions = {
          colors: [vihoAdminConfig.primary, "#e2c636"],
          series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
          },
          title: 'Số lượng vé và chuyến bán ra từ 01/2022 - 12/2022',
        };
        function drawClassicChart() {
          var classicChart = new google.visualization.ColumnChart(chartDiv);
          classicChart.draw(data, classicOptions);
        }
        drawClassicChart();
    };

    </script>

@endsection
@section('content')
<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid general-widget">
            <div class="row">

              <div class="col-sm-6 col-xl-3 col-lg-6">
               <a href="{{asset('admin/blog/list')}}">
                <div class="card o-hidden border-0">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="list"></i></div>
                      <div class="media-body"><span class="m-0">Bài Viết</span>
                        <h4 class="mb-0 counter">{{$count_blog}}</h4><i class="icon-bg" data-feather="list"></i>
                      </div>
                    </div>
                  </div>
                </div>
               </a>
              </div>

              <div class="col-sm-6 col-xl-3 col-lg-6">
                  <a href="{{route('chuyen.index')}}">
                      <div class="card o-hidden border-0">
                          <div class="bg-secondary b-r-4 card-body">
                            <div class="media static-top-widget">
                              <div class="align-self-center text-center"><i data-feather="airplay"></i></div>
                              <div class="media-body"><span class="m-0">Chuyến</span>
                                <h4 class="mb-0 counter">{{$count_chuyen}}</h4><i class="icon-bg" data-feather="airplay"></i>
                              </div>
                            </div>
                          </div>
                      </div>
                  </a>
              </div>

              <div class="col-sm-6 col-xl-3 col-lg-6">
                 <a href="{{asset('admin/contact/list')}}">
                    <div class="card o-hidden border-0">
                      <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                          <div class="align-self-center text-center"><i data-feather="message-circle"></i></div>
                          <div class="media-body"><span class="m-0">Liên Hệ</span>
                            <h4 class="mb-0 counter">{{$count_contact}}</h4><i class="icon-bg" data-feather="message-circle"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                 </a>
              </div>

              <div class="col-sm-6 col-xl-3 col-lg-6">
                  <a href="{{asset('admin/customer/list')}}">
                    <div class="card o-hidden border-0">
                      <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                          <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                          <div class="media-body"><span class="m-0">Khách Hàng</span>
                            <h4 class="mb-0 counter">{{$count_customer}}</h4><i class="icon-bg" data-feather="user-plus"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
              </div>

            </div>
          </div>
    <!-- Container-fluid Ends-->


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Bán hàng & Doanh thu</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="chart-overflow" id="chart_div" style="height: 300px;"></div>
                        <div class="">
                            <?php
                                $sum = 0;
                                foreach($totals as $total)
                                    $sum += $total;
                            ?>
                            Tổng doanh thu: {{number_format($sum,0,'','.')}} VNĐ
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('foot')
{{--    <script src="{{asset('template/admin/assets/js/chart/google/google-chart-loader.js')}}"></script>--}}
{{--    <script src="{{asset('template/admin/assets/js/chart/google/google-chart.js')}}"></script>--}}
    <script src="{{asset('template/admin/assets/js/tooltip-init.js')}}"></script>
@endsection
