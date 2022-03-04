
<!DOCTYPE html>
<head>
    <base href="{{asset('admin')}}/">
    <title>Edit Product</title>
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
                                Edit Product
                                <span class="tools pull-right">
                                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                                </span>
                            </header>
                            <div class="panel-body">
                                <div class=" form">
                                    <form class="cmxform form-horizontal "enctype="multipart/form-data" method="post">
                                        @csrf
                                        <div class="form-group ">
                                            <label for="product_name" class="control-label col-lg-3">Name</label>
                                            <div class="col-lg-6">
                                                <input class=" form-control" id="product_name" name="pro_name" minlength="2" type="text" value="{{$pro[0]->pro_name}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="product_cate" class="control-label col-lg-3">Category</label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="product_cate" name="pro_cate">

                                                    <option>Select Category</option>
                                                
                                                    @foreach ($cates as $item)
                                                        <option value="{{ $item->category_id }}" {{ $item->category_id == $pro[0]->pro_cate ? 'selected' : '' }} > {{ $item->category_name }}</option>
                                                    @endforeach    

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="pro_image" class="control-label col-lg-3">Image</label>
                                            <div class="col-lg-6">
                                                <input class=" form-control" id="pro_image" name="pro_image" type="file">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="pro_image" class="control-label col-lg-3"></label>
                                            <div class="col-lg-6">
                                                <img src="../upload/admin/product/{{$pro[0]->pro_image}}">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="product_image_2" class="control-label col-lg-3">Image 2</label>
                                            <div class="col-lg-6">
                                                <input class=" form-control" id="product_image_2" name="pro_image_2" type="file">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="pro_image_2" class="control-label col-lg-3"></label>
                                            <div class="col-lg-6">
                                                <img src="../upload/admin/product/{{$pro[0]->pro_image2}}">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="pro_price" class="control-label col-lg-3">Price</label>
                                            <div class="col-lg-6">
                                                <input class=" form-control" id="pro_price" name="pro_price" type="text" value="{{$pro[0]->pro_price}}">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="product_discount" class="control-label col-lg-3">Discount</label>
                                            <div class="col-lg-6">
                                                <input class=" form-control" id="product_discount" name="pro_discount" type="text" value="{{$pro[0]->pro_discount}}">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="pro_new" class="control-label col-lg-3">New</label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="pro_new" name="product_new">

                                                    <option>Select Option</option>
                                                    <option value="1" {{  $pro[0]->pro_new == 1 ? 'selected' : '' }} > New</option>  
                                                    <option value="0" {{  $pro[0]->pro_new == 0 ? 'selected' : '' }} > Old</option>  

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="product_description" class="control-label col-lg-3">Description</label>
                                            <div class="col-lg-6">
                                                <input class=" form-control" id="product_description" name="pro_description" minlength="2" type="text" value="{{$pro[0]->pro_description}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-3 col-lg-6">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                                <button class="btn btn-default" type="button">Cancel</button>
                                            </div>
                                        </div>
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
<script type="text/javascript" src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('/ckeditor/adapters/jquery.js') }}"></script>
<script type="text/javascript">
$(function() {
    $('#description').ckeditor({
        toolbar: 'Full',
        enterMode : CKEDITOR.ENTER_BR,
        shiftEnterMode: CKEDITOR.ENTER_P
    });
});
</script>

<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
