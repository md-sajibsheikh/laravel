@include('Backend.common.header-link')
<!-- navbar -->
@include('Backend.common.header')

<!-- /.navbar -->

<!-- Main Sidebar Container -->

@include('Backend.common.sidebar')
<!--End Main Sidebar Container -->
@yield('main-content')

@include('Backend.common.footer')


</div>

<!-- jQuery -->
@include('Backend.common.js')