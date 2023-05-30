<!DOCTYPE html>
<html>
  <head> 
    <!-- CSS Start-->
    @include('admin.css')
    <!-- CSS End-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
        

<h1 class="post_title mb-5">Post Listesi</h1>
    <div class="table-responsive border border-light">
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings" style="color:white;">
                    <th class="column-title text-center">Post Resim</th>
                    <th class="column-title text-center">Post Başlık</th>
                    <th class="column-title text-center">Post Metin </th>
                    <th class="column-title text-center">Post Gönderen</th>
                    <th class="column-title text-center">Post Durum</th>
                    <th class="column-title text-center">Kullanıcı</th> 
                    <th class="column-title text-center">Sil</th>
                    <th class="column-title text-center">Güncelle</th> 
                </tr>
            </thead>

        @foreach($post as $postlar)
            <tbody style="color:white;">
                <tr>
                    <td class="text-center">
                       <img src="postimage/{{$postlar->image}}" alt="" width="120px" height="100px"> 
                    </td>
                    <td class="text-center">{{$postlar->title}}</td>
                    <td class="text-center">{{$postlar->description}}</td>
                    <td class="text-center">{{$postlar->name}}</td>
                    <td class="text-center">{{$postlar->post_status}}</td>
                    <td class="text-center">{{$postlar->usertype}}</td>
                    <td class=" ">
                        <a href="{{url('delete_post', $postlar->id)}}"> 
                        <button asd="{{url('delete_post', $postlar->id)}}" class=" btn btn-danger" onclick=" confirmation(event)" style="width: 100px; height:50px;"> Sil</button>
                        </a>
                    </td>
                    <td class=" ">
                        <a href="{{url('edit_post', $postlar->id)}}"> 
                        <button href="{{url('edit_post', $postlar->id)}}" class=" btn btn-primary" style="width: 100px; height:50px;"> Güncelle</button>
                        </a>
                    </td>
                </tr>
            </tbody>
        @endforeach
        </table>
    </div>
</div>
        
        <!-- Footer Start-->
            @include('admin.footer')
        <!-- Footer End-->

        <script type="text/javascript">
            function confirmation(ev) {
                ev.preventDefault();
                var urlToRedirect = ev.currentTarget.getAttribute('asd'); 
                
                console.log(urlToRedirect); 
                swal({
                    title: "Gönderiyi Silmek İstediğinize Emin Misiniz?",
                    text: "Göderiyi Geri Alamazsınız!",
                    icon: "warning",
                    buttons: ["İPTAL", "EVET"],
                    dangerMode: true,
                })
                .then((willCancel) => {
                    if (willCancel) {
                       window.location.href = urlToRedirect;
                    }  
                });               
             }
        </script>
  </body>
</html>