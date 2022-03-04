<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{asset('admin/home')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="{{asset('admin/cate')}}">
                        <i class="fa fa-book"></i>
                        <span>Category</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-bullhorn"></i>
                        <span>Font awesome </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="{{asset('admin/product')}}">
                        <i class="fa fa-th"></i>
                        <span>Product Table</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub">
                        <li><a href="javascript:;">Google Map</a></li>
                        <li><a href="javascript:;">Vector Map</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{asset('frontend/home')}}">
                        <i class="fa fa-user"></i>
                        <span>Login Page User</span>
                    </a>
                </li>
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->