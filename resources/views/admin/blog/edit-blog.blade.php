
<!DOCTYPE html>
<head>
    <base href="{{asset('admin')}}/">
    <title>EditBlog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
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
                                Edit Blog Product
                                <span class="tools pull-right">
                                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                                </span>
                            </header>
                            <div class="panel-body">
                                <div class=" form">
                                    <form class="cmxform form-horizontal " id="commentForm" method="get" action="" novalidate="novalidate">
                                        <div class="form-group ">
                                            <label for="title" class="control-label col-lg-3">Title</label>
                                            <div class="col-lg-6">
                                                <input class=" form-control" id="title" name="title" minlength="2" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="image" class="control-label col-lg-3">Image</label>
                                            <div class="col-lg-6">
                                                <input class="form-control " id="image" type="file" name="image">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="price" class="control-label col-lg-3">Price</label>
                                            <div class="col-lg-6">
                                                <input class="form-control " id="price" type="text" name="price">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="description" class="control-label col-lg-3">Description</label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control " class="ckeditor"id="description" name="description"></textarea>
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
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script> CKEDITOR.replace('description'); </script>

<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
