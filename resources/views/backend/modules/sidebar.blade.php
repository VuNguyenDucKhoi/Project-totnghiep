
        <header class="main-nav">
          <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{asset('template/admin/assets/images/dashboard/1.png')}}" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">Active</span></div><a href="user-profile.html">
              <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6></a>
            <p class="mb-0 font-roboto">Quản trị viên</p>
          </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>TỔNG QUAN</h6>
                    </div>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="{{route('admin')}}"><i data-feather="home"></i><span>Trang chủ</span></a></li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>QUẢN LÝ</h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>Quản lý chuyến</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="{{route('chuyen.create')}}">Thêm chuyến</a></li>
                      <li><a href="{{route('chuyenhd.create')}}">Thêm chuyến hợp đồng</a></li>
                      <li><a href="{{route('chuyen.index')}}">Danh sách chuyến</a></li>
                    </ul>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="{{asset('admin/tuyen/addtuyen')}}"><i data-feather="compass"></i><span>Quản lý tuyến</span></a></li>
                  <li><a class="nav-link menu-title link-nav" href="{{asset('admin/tau/addtau')}}"><i data-feather="anchor"></i><span>Quản lý tàu</span></a></li>
                  <li><a class="nav-link menu-title link-nav" href="{{asset('admin/contact/list')}}"><i data-feather="message-circle"></i><span>Quản lý liên hệ</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="list"></i><span>Quản lý tin tức</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="{{asset('admin/blog/add')}}">Thêm tin tức</a></li>
                      <li><a href="{{asset('admin/blog/list')}}">Danh sách tin tức</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="tag"></i><span>Quản lý đơn hàng</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="{{asset('admin/customer/list')}}">Danh sách khách hàng</a></li>
                      <li><a href="{{asset('admin/payment/list')}}">Danh sách đơn hàng</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="sliders"></i><span>Quản lý sliders</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="{{asset('admin/slider/add')}}">Thêm slider</a></li>
                      <li><a href="{{asset('admin/slider/list')}}">Danh sách sliders</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>

