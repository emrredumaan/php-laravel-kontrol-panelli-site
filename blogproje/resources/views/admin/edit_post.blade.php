<!DOCTYPE html>
<html>
  <head> 
 
    <base href="/public">
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
 

            <h1 class="post_title">Güncelleme Sayfası</h1>
        
        <form  action="{{url('update_post', $post->id)}}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="form_group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="color:white;" > Post Başlığı<span class="required">*</span>
            </label>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <input  type="text" id="first-name"  name="title" value="{{$post->title}}" class="form-control col-md-7 col-xs-12" style="color:white;">
            </div>
            </div>

            <div class="form_group mt-3">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="color:white;">Post Açıklaması <span class="required">*</span>
            </label>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <textarea name="description" id="" cols="90" rows="8">{{$post->description}}</textarea>
            </div>
            </div>          

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="color:white;" for="first-name">Güncel Resim<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <img width="200" height="100" src="/postimage/{{$post->image}}" alt="">
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="color:white;">Resim Seç <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input style="color:white;" type="file" id="first-name" name="image"  class="form-control col-md-7 col-xs-12">
                </div>
            </div>

            <br>
            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 mb-5">
                <button type="submit" value="update" name="update" class="btn btn-primary">Güncelle</button>
            </div>
        </form>
        </div>

        
        <!-- Footer Start-->
            @include('admin.footer')
        <!-- Footer End-->
  </body>
</html>