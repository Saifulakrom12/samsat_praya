<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Admin Dashboard Templates" />
    <meta name="keywords"
        content="Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Wrapbootstrap" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="{{ asset('img/main.jpg') }}" />
    <title>@yield('title')</title>

    <!--
   **********************
   **********************
   Common CSS files
   **********************
   **********************
  -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

    <!-- Icomoon Icons CSS -->
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/icomoon.css') }}" />

    <!-- Master CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}" />

    <!-- Daterange CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/daterange/daterange.css') }}" />

    <!--
   **********************
   **********************
   Optional CSS files
   **********************
   **********************
  -->
    <!-- Morris CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/morris/morris.css') }}" />

    <!-- Circliful CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/circliful/circliful.css') }}" />

    <!-- Datepickers css -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}" />

    <!-- Data Tables -->
    <link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4-custom.css') }}" />
</head>

<body>

    <!-- Loading starts -->
    <div id="loading-wrapper">
        <div id="loader">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            <div class="line4"></div>
            <div class="line5"></div>
            <div class="line6"></div>
        </div>
    </div>
    <!-- Loading ends -->

    <!-- BEGIN .app-wrap -->
		<div class="app-wrap">

			<!-- BEGIN .app-heading -->
			@include('layouts.components.navbar')
			<!-- END: .app-heading -->

			<!-- BEGIN .app-container -->
			<div class="app-container">

				<!-- BEGIN .app-side -->
				@include('layouts.components.sidebar')
				<!-- END: .app-side -->

                @yield('content')

			</div>
			<!-- END: .app-container -->

		</div>
		<!-- END: .app-wrap -->


    <!--
   **********************
   **********************
   Common JS files
   **********************
   **********************
  -->

    <!-- jQuery first, then Tether, then other JS. -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>

    <script src="{{ asset('js/tether.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/MilestoneNav/MilestoneNav.js') }}"></script>
    <script src="{{ asset('vendor/onoffcanvas/onoffcanvas.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script>

    <!-- Daterange JS -->
    <script src="{{ asset('vendor/daterange/daterange.js') }}"></script>
    <script src="{{ asset('vendor/daterange/custom-daterange.js') }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('vendor/slimscroll/slimscroll.min.js') }}"></script>
    <script src="{{ asset('vendor/slimscroll/custom-scrollbar.js') }}"></script>


    <!--
   **********************
   **********************
   Optional JS files - Plugns
   **********************
   **********************
  -->

    <!-- Morris Graphs -->
    <script src="{{ asset('vendor/morris/raphael-min.js') }}"></script>
    <script src="{{ asset('vendor/morris/morris.min.js') }}"></script>
    <script src="{{ asset('vendor/morris/custom/areaChart.js') }}"></script>

    <!-- Circliful -->
    <script src="{{ asset('vendor/circliful/circliful.min.js') }}"></script>
    <script src="{{ asset('vendor/circliful/circliful.custom.js') }}"></script>

    <!-- JVector Maps -->
    <script src="{{ asset('vendor/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('vendor/jvectormap/usa.js') }}"></script>
    <script src="{{ asset('vendor/jvectormap/custom/map-usa1.js') }}"></script>

    <!-- Data Tables -->
    <script src="{{ asset('vendor/datatables/dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap.min.js') }}"></script>

    <!-- Custom Data tables -->
    <script src="{{ asset('vendor/datatables/custom/custom-datatables.js') }}"></script>
    <script src="{{ asset('vendor/datatables/custom/fixedHeader.js') }}"></script>

    <!-- Common JS -->
    <script src="{{ asset('js/common.js') }}"></script>

    <script type="text/javascript">
        //Datepicker
        $(function() {
            $("#datepicker").datepicker();
        });
    </script>

</body>

</html>
