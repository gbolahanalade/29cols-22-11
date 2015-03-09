@include('layout.header')
<div class="wrapper">
    @yield('search') 
    <!-- /.intro-header -->
    <section class="container">
        <!-- CONTENT -->
        <div class="main-content">
            <div class="row">                      
                @yield('content')
                @yield('side')
            </div>
        </div>
    </section>
    <!-- Footer -->
</div>  <!-- wrapper ends -->
@include('layout.footer')
    <!-- jQuery Version 1.11.0 -->
    @yield('scripts2')
    

</body>

</html>