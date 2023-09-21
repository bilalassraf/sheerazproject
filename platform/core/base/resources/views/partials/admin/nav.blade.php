<!-- Menu -->
<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-xxl d-flex h-100">
        <ul class="menu-inner active ">
            <li class="menu-item @yield('dashboardActive')">
                <a href="{{route('dashboard.index')}}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div data-i18n="Dashboard">Dashboard</div>
                </a>
            </li>
            <li
                class="menu-item @yield('airportActive')
                @yield('airlineActive') @yield('passengerActive')
                @yield('travelActive') ">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div data-i18n="Products">Products</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item @yield('airportActive')">
                        <a href="{{route('products.index')}}" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-chart-pie-2"></i>
                            <div data-i18n="View Products">View Products</div>
                        </a>
                    </li>
                    <li class="menu-item @yield('airlineActive')">
                        <a href="{{route('products.create')}}" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-3d-cube-sphere"></i>
                            <div data-i18n="Create New Product">Create New Product</div>
                        </a>
                    </li>

                </ul>
            </li>
            <li
                    class="menu-item @yield('airportActive')
                    @yield('airlineActive') @yield('passengerActive')
                    @yield('travelActive') ">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-smart-home"></i>
                        <div data-i18n="Categories">Categories</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item @yield('airportActive')">
                            <a href="#" class="menu-link">
                                <i class="menu-icon tf-icons ti ti-chart-pie-2"></i>
                                <div data-i18n="View Categories">View Categories</div>
                            </a>
                        </li>
                        <li class="menu-item @yield('airlineActive')">
                            <a href="#" class="menu-link">
                                <i class="menu-icon tf-icons ti ti-3d-cube-sphere"></i>
                                <div data-i18n="Create New Category">Create New Category</div>
                            </a>
                        </li>

                    </ul>
                </li>


            <li class="menu-item @yield('umrahActive')">
                <a href="#" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div data-i18n="Orders">Orders</div>
                </a>
            </li>
            <li class="menu-item @yield('umrahActive')">
                <a href="#" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div data-i18n="Users">Users</div>
                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- / Menu -->
