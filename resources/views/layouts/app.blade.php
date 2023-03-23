
@include('layouts.header')
<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
   <!--Start sidebar-wrapper-->
   @include('layouts.menu')
   <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    @include('layouts.nav')
    <!--End topbar header-->

    <div class="clearfix"></div>
    <div class="content-wrapper">
        <div class="container-fluid">
        <!--Start  Content-->
            @yield('contenu')
        <!--End Dashboard Content-->
            <div class="overlay toggle-menu"></div>
        </div>
    <!-- End container-fluid-->
    </div><!--End content-wrapper-->
   
@include('layouts.footer')