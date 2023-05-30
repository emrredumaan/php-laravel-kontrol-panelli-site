<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
      <!-- basic -->
      @include('home.homecss')
   </head>
   <body>

      <!-- header section start -->
      <div class="header_section">
           @include('home.header')
         
      </div>
      <!-- header section end -->

        

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="/postimage/{{$post->image}}" class="services_img mb-3 mt-3">
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <h1><b>{{$post->title}}</b></h1>
                    <p>{{$post->description}}</p>
                </div>
            </div>
        </div>
            


        <!-- footer section start -->
             @include('home.footer')
        <!-- footer section end -->
   </body>
</html>
