<!DOCTYPE html>
<html>
  <head> 
    <!-- CSS Start-->
    @include('admin.css')
    <!-- CSS End-->
  </head>
  <body>
        <!-- Header Start-->
            @include('admin.header')
        <!-- Header End-->

        <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
            @include('admin.sidebar')
        <!-- Sidebar Navigation end-->

        <!-- Body Start-->
            @include('admin.body')
        <!-- Body End-->
        
        <!-- Footer Start-->
            @include('admin.footer')
        <!-- Footer End-->
  </body>
</html>