
<!DOCTYPE html>
<head>
    <base href="{{asset('admin')}}/">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <!-- //font-awesome icons -->
    <script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
    <!-- header-start -->
    @include('admin/layout/header')
    <!--header end-->
    <!-- slidebar -->
    @include('admin/layout/menu-left')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="form-w3layouts">
                <!-- page start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                My Profile
                                <span class="tools pull-right">
                                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="fa fa-cog" href="javascript:;"></a>
                                </span>
                            </header>
                            <div class="panel-body">
                                <div class="form">
                                    <form class="cmxform form-horizontal " enctype="multipart/form-data" id="signupForm" method="post" novalidate="novalidate">
                                        @csrf
                                        @if(session('success'))
                                            <div class="alert alert-success alert-dismissible">
                                                <button class="close" type="button" data-dismiss="alert" aria-hidden="true">X</button>
                                                <h4>
                                                    <i class="icon fa fa-check"></i>Thông báo!
                                                </h4>
                                                {{session('success')}}
                                            </div>
                                        @endif
                                        @if ( session('error') )
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <strong>{{session('error')}}</strong>
                                                <button class="close" type="button" data-dismiss="alert" aria-hidden="true">X</button>
                                            </div>
                                        @endif
                                        <div class="form-group ">
                                            <label for="username" class="control-label col-lg-3">Username</label>
                                            <div class="col-lg-6">
                                                <input class="form-control " id="username" name="username" type="text" value={{Auth::user()->username}}>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="email" class="control-label col-lg-3">Email</label>
                                            <div class="col-lg-6">
                                                <input class="form-control " id="email" name="email" type="email" value={{Auth::user()->email}}>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="avatar" class="control-label col-lg-3">Avatar</label>
                                            <div class="col-lg-6">
                                                <input class="form-control " id="avatar" name="avatar" type="file">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                        <label for="img" class="control-label col-lg-3"></label>
                                            <div class="col-lg-6">
                                                <img src="../upload/user/avatar/{{Auth::user()->avatar}}" id="img" alt="">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="phone" class="control-label col-lg-3">Phone</label>
                                            <div class="col-lg-6">
                                                <input class="form-control " id="phone" name="phone" type="text" value={{Auth::user()->phone}}>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class="control-label col-lg-3">Country</label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="country" name="country">

                                                    <option>Select Country</option>
                                                
                                                    @foreach ($countries as $item)
                                                        <option value="{{ $item->id }}" {{ $item->id == Auth::user()->country ? 'selected' : '' }}> {{ $item->name_country }}</option>
                                                    @endforeach    

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-offset-3 col-lg-6">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                                <button class="btn btn-default" type="button">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </div>
    </section>
    <!-- main-end -->

    <!-- footer -->
    @include('admin/layout/footer')
    <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
