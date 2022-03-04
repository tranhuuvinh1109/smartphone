
<!DOCTYPE html>
<head>
    <base href="{{asset('admin')}}/">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates" />
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
    <div class="reg-w3">
        <div class="w3layouts-main">
            <h2>Register Now</h2>
            <form method="post">
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
                @if($errors->any())
                    <div class="alert alert-success alert-dismissible">
                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">X</button>
                        <h4>
                            <i class="icon fa fa-check"></i>Thông báo!
                        </h4>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>

                    </div>
                @endif
                <label for="example-name" class="col-md-12">Name</label>
                <input type="text" class="ggg" name="name" placeholder="NAME" id="example-name">
                <label for="example-email" class="col-md-12">Email</label>
                <input type="email" class="ggg" name="email" placeholder="E-MAIL" id="example-email">
                <label for="example-phone" class="col-md-12">Phone</label>
                <input type="text" class="ggg" name="phone" id="example-phone">
                <label for="example-pass" class="col-md-12">Password</label>
                <input type="password" class="ggg" name="password" placeholder="" id="example-pass">
                <label for="example-confirm-password" class="col-md-12">Confirm Password</label>
                <input type="password" class="ggg" name="confirm-password" placeholder="" id="example-confirm-password">
                <h4><input type="checkbox" name="agree" />I agree to the Terms of Service and Privacy Policy</h4>
                <div class="clearfix"></div>
                @if($errors->any())
                    <div>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <input type="submit" value="submit" name="register">
            </form>
            <p>Already Registered.<a href="{{asset('/login')}}">Login</a></p>
    </div>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="js/jquery.scrollTo.js"></script>
</body>
</html>
