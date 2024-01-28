<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="../../asset/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../asset/boot/css/bootstrap.mini.css" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="../../asset/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
    <link href="../../asset/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="../../asset/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
         WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
      });
    </script>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!--begin::Global Theme Styles -->
		<link href="../../../asset/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="../../../asset/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
		<link href="../../../asset/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="../../../asset/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->

		<!--begin::Page Vendors Styles -->
		<link href="../../../asset/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="../../../asset/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Page Vendors Styles -->
		<link rel="shortcut icon" href="../../../asset/demo/default/media/img/logo/favicon.ico" />

</head>
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <div class="m-grid m-grid--hor m-grid--root m-page">
     @include('layout.header')
     @include('layout.sidebar')
     @yield('content')
     @include('layout.footer')

    </div> 
	<script src="../../asset/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

    <script src="../../../asset/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="../../../asset/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors -->
		<script src="../../../asset/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<script src="../../../asset/demo/default/custom/crud/datatables/basic/scrollable.js" type="text/javascript"></script>
    @yield('script_jquey')
</body>
</html>