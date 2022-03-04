
<!DOCTYPE html>
<head>
    <base href="{{asset('admin')}}/">
    <title>Blog</title>
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
            <div class="table-agile-info">
      <div class="panel panel-default">
        <div class="panel-heading">
          Blog Table
        </div>
        <div class="row w3-res-tb">
          <div class="col-sm-5 m-b-xs">
            <select class="input-sm form-control w-sm inline v-middle">
              <option value="0">Bulk action</option>
              <option value="1">Delete selected</option>
              <option value="2">Bulk edit</option>
              <option value="3">Export</option>
            </select>
            <button class="btn btn-sm btn-default">Apply</button>                
          </div>
          <div class="col-sm-4">
          </div>
          <div class="col-sm-3">
            <div class="input-group">
              <input type="text" class="input-sm form-control" placeholder="Search">
              <span class="input-group-btn">
                <button class="btn btn-sm btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
        <div class="table-responsive">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">X</button>
                    <h4>
                        <i class="icon fa fa-check"></i>Thông báo!
                    </h4>
                    {{session('success')}}
                </div>
            @endif
          <table class="table table-striped b-t b-light">
            <thead>
              <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Name Product</th>
                <th>Price</th>
                <th>Image</th>
                <th>Description</th>
                <th style="width:30px;"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Idrawfast prot</td>
                <td>Idrawfast prot</td>
                <td>Idrawfast prot</td>
                <td>Idrawfast prot</td>
                <td><span class="text-ellipsis">{item.PrHelpText1}</span></td>
                <td><span class="text-ellipsis">{item.PrHelpText1}</span></td>
                <td>
                  <a href="{{asset('admin/blog/edit/1')}}" class="active" ui-toggle-class=""><i class="fa fa-edit text-success text-active"></i></a>
                  <a href="{{asset('admin/blog/delete/1')}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <footer class="panel-footer">
          <div class="row">
            <div class="pagination-area col-sm-12 text-right text-center-xs">
                <ul class="pagination pagination-sm m-t-none m-b-none">
                    <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                    
                    <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>
            <a class="btn btn-primary" href="">Add</a>
          </div>
        </footer>
      </div>
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
