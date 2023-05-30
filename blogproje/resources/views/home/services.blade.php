<div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Blog Yazıları </h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2">
               <div class="row">
                  
               @php
                  $post = App\Models\Post::take(100)->get();
               @endphp

                  @foreach($post as $postlar)

                  <div class="col-md-4">
                     <div>
                        <img style="margin:bottom 10px; height:200px; width:350px;" src="/postimage/{{$postlar->image}}"   class="services_img mb-2">
                     </div>
                     
                     <h4>{{$postlar->title}}</h4>
                     <div class="mb-2">
                        <a href="{{url('post_details',$postlar->id)}}">Devamını Oku  <i class="fa fa-long-arrow-right"></i></a>
                     </div>
                     
                  </div>
                  @endforeach
                  
               </div>
            </div>
         </div>
      </div>