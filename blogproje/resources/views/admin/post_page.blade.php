<!DOCTYPE html>
<html>
  <head> 
    <!-- CSS Start-->
    @include('admin.css')
    <!-- CSS End-->

    

    <style type="text/css">
        .post_title 
        {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;

        }
       
        

    </style>
  </head>
  <body>
        <!-- Header Start-->
            @include('admin.header')
        <!-- Header End-->

        <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
            @include('admin.sidebar')
        <!-- Sidebar Navigation end-->

        <div class="page-content ">
        @if(session()->has( 'message' ))
            <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert"
            aria-hidden="true">x</button>
            {{session()->get('message')}}
            </div>
        @endif
 

            <h1 class="post_title">Post Sayfası</h1>
        
        <form  action="{{route('add_post')}}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="form_group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="color:white;"> Post Başlığı<span class="required">*</span>
            </label>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <input  type="text" id="first-name"  name="title" value="" class="form-control col-md-7 col-xs-12" style="color:white;">
            </div>
            </div>

            <div class="form_group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="color:white;">Post Açıklaması <span class="required">*</span>
            </label>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <input type="text" id="first-name"  name="description" value="" class="form-control col-md-7 col-xs-12" style="color:white;">
            </div>
            </div>

            <div class="form_group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="color:white;">Resim Ekleme <span class="required">*</span>
            </label>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <input type="file" id="first-name"  name="image" value="" class="form-control col-md-7 col-xs-12" style="color:white;">
            </div>
            </div>
            <br>
            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="" class="btn btn-primary">Ekle</button>
            </div>
        </form>
        </div>
        
        <!-- Footer Start-->
            @include('admin.footer')
        <!-- Footer End-->
  </body>
</html>