<!-- BEGIN .app-side -->
<aside class="app-side" id="app-side">

    <!-- BEGIN .side-content -->
    <div class="side-content">
        <!-- User details start -->
        <div class="user-details">
            <img src="{{ asset('img/user6.png') }}" class="thumb" alt="Modern Admin Dashboard" />
            <h5 class="username">
                @if (Auth::check())
                    {{ Auth::user()->name }}
                @endif
            </h5>
            <h6 class="email">
                @if (Auth::check())
                    {{ Auth::user()->email }}
                @endif
            </h6>
        </div>
        <!-- User details end -->

        <!-- Custom search start -->
        <div class="form-group custom-search">
            <input type="text" class="form-control search-query" placeholder="Search for...">
            <button class="btn" type="button">
                <i class="icon-magnifying-glass"></i>
            </button>
        </div>
        <!-- Custom search end -->
        <!-- BEGIN .side-nav -->
        <nav class="side-nav">
            <div class="sidebarNavScroll">

                <!-- BEGIN: side-nav-content -->
                <ul class="customSidebarMenu" id="customSidebarMenu">
                    <li class="{{ Request::is('admin/dashboard') || Request::is('user/dashboard') ? 'selected' : '' }}">
                        <a
                            href="{{ auth()->user()->role === 'admin' ? route('admin.dashboard') : route('user.dashboard') }}">
                            <span class="has-icon">
                                <i class="icon-av_timer"></i>
                            </span>
                            <span class="nav-title">Dashboard</span>
                        </a>
                    </li>
                    @if (auth()->user()->role == 'admin')
                        <li class="{{ Request::is('admin/user/*') ? 'selected' : '' }}">
                            <a href="{{ route('admin.user.index') }}">
                                <span class="has-icon">
                                    <span class="icon-user"></span>
                                </span>
                                <span class="nav-title">Data User</span>
                            </a>
                        </li>
                    @endif
                    <li class="{{ Request::is('admin/barang/*') || Request::is('barang/*') ? 'selected' : '' }}">
                        <a href="{{ auth()->user()->role === 'admin' ? route('admin.admin.barang.index') : route('barang.index') }} ">
                            <span class="has-icon">
                                <span class="icon-shopping-cart"></span>
                            </span>
                            <span class="nav-title">Data Barang</span>
                        </a>
                    </li>


                </ul>
                <!-- END: side-nav-content -->
            </div>
        </nav>
        <!-- END: .side-nav -->

    </div>
    <!-- END: .side-content -->

</aside>
<!-- END: .app-side -->
