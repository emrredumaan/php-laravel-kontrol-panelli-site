         <div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="index.html">Anasayfa</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.html">Hakkımızda</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="blog.html">Blog</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>

            <div class="container">
               <div class="row">
                  <div class="col-sm-10">
                     <div class="menu_main">
                        <div class="mt-5 mr-2">
                           <ul>
                              <li class="active"><a href="index.html">Anasayfa</a></li>
                              <li><a href="about.html">Hakkımzıda</a></li>
                              <li><a href="services.html">Services</a></li>
                              <li><a href="blog.html">Blog</a></li>  
                              <li><a href="{{url('create_post')}}">Gönderi Oluştur</a></li>  
                           </ul>
                        </div> 
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="d-flex justify-content-end mt-4 ">
                        @if (Route::has('login'))

                        @auth
                        <li>
                           <x-app-layout>
                           </x-app-layout>
                        </li>
                        @else

                        

                        <button type="button" class="btn btn-light mr-2 "><a href="{{route('login')}}">Giriş Yap</a></button>
                        <button type="button" class="btn btn-light"><a href="{{route('register')}}">Kayıt Ol</a></button>
                        @endauth
                        @endif
                     </div>
                  </div>
               </div>
             </div>
            <!-- <div class="container-fluid">
               
            </div> -->
         </div>

            