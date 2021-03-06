<?php
   /**................................................................
    * @package eblog v 1.0
    * @author Faith Awolu
    * Hillsofts Technology Ltd.
    * (hillsofts@gmail.com)
    * ................................................................
    */

   ?>
<div class="container-fluid  col-md-4">

  <!--para el uso del slider vertical-->
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
  <style>
     .btn-vertical-slider{ margin-left:0px; cursor:pointer;}
     a {  cursor:pointer;}
     .carousel.vertical .carousel-inner .item {
     -webkit-transition: 0.6s ease-in-out top;
     -moz-transition: 0.6s ease-in-out top;
     -ms-transition: 0.6s ease-in-out top;
     -o-transition: 0.6s ease-in-out top;
     transition: 0.6s ease-in-out top;
     }
     .carousel.vertical .active {
     top: 0;
     }
     .carousel.vertical .next {
     top: 100%;
     }
     .carousel.vertical .prev {
     top: -100%;
     }
     .carousel.vertical .next.left,
     .carousel.vertical .prev.right {
     top: 0;
     }
     .carousel.vertical .active .left {
     top: -100%;
     }
     .carousel .vertical .item {
     left: 0;
     }​
     .carousel .vertical .active .right {
     top: 100%;
     }
     .imgestadoredondo{
       width:100px;
       height:100px;
       border-radius:150px;
       border:3px solid #666;
       background-color: white;
     }
  </style>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <!--termina slider vertical-->

  <div class="col-md-12">
    <div class="row panel">
      <div class="col-xs-12 col-sm-12 col-md-12 panel transparente">
         <h4>Estados</h4>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12 ">
         <div id="myCarousel" class="vertical-slider carousel vertical slide" data-ride="carousel">
           <!-- boton control superior-->
           {{-- <div class="row">
           <div class="col-md-4">
           <span data-slide="next" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-up "
           style="font-size: 30px"></span>
         </div>
         <div class="col-md-8">
          </div>
        </div>
          <br/> --}}
            <!-- Carousel items -->
            <!-- Carousel items -->
            <div class="carousel-inner">
              @php
              $cuenta=0;
              @endphp
              @foreach ($estados as $estado)
                @foreach ($perfiles->where('author_id','=',$estado->author_id) as $perfile)
                  @php
                  $cuenta++;
                  @endphp
                  @if ($cuenta==1)
                    <div class="item active">
                      <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-5">
                          <img src="{{ Voyager::image( $perfile->foto_perfil ) }}"  class="imgestadoredondo" alt="Image">
                        </div>
                        {{-- </div> --}}
                        {{-- <div class="row"> --}}
                        <div class="col-xs-2 col-sm-3 col-md-3">
                          {{$perfile->apodo}}
                          <a href="#">
                            @php
                            echo $estado->body;
                            @endphp
                          </a>

                        </div>

                      </div>
                      {{-- <div class="col-xs-6 col-sm-7 col-md-8">
                      {{$perfile->apodo}}
                    </div>
                    <div class="row">

                    <div class="col-xs-6 col-sm-5 col-md-5">
                    <a href="http://dotstrap.com/">
                    <img src="{{ Voyager::image( $perfile->foto_perfil ) }}"  style="height:20%;width:100%; border-radius:150px; float" class="thumbnail" alt="Image" />
                  </a> 
                  @php
                  echo $estado->body;

                @endphp
              </div>

            </div> --}}
            {{-- </div> --}}
            <!--/row-fluid-->
          </div>
        @else
          <div class="item ">
            <div class="row">
              <div class="col-xs-6 col-sm-5 col-md-5">
                <img src="{{ Voyager::image( $perfile->foto_perfil ) }}"   class="imgestadoredondo" alt="Image">

              </div>
              {{-- </div> --}}
              {{-- <div class="row"> --}}
              <div class="col-xs-2 col-sm-3 col-md-3">
                {{$perfile->apodo}}
                <a href="#">p
                  @php
                    echo $estado->body;
                  @endphp
                </a>

              </div>
            </div>
            <!--/row-fluid-->
          </div>

        @endif
      @endforeach

    @endforeach





              </div>

              <!-- control abajo-->
              {{-- <div class="row">
                 <div class="col-md-4">
                    <span data-slide="prev" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-down"
                       style="color: Black; font-size: 30px"></span>
                 </div>
                 <div class="col-md-8">
                 </div>
              </div> --}}
           </div>
        </div>
     </div>
  </div>
  <script type="text/javascript">
     $(document).ready(function () {

         $('.btn-vertical-slider').on('click', function () {

             if ($(this).attr('data-slide') == 'next') {
                 $('#myCarousel').carousel('next');
             }
             if ($(this).attr('data-slide') == 'prev') {
                 $('#myCarousel').carousel('prev')
             }

         });
     });
  </script>

     <div class="panel">
       <div class="text-center x-hidden ">
       </div>
    </div>


    <div class="clearfix"></div>
    <div class="col-md-12">
      <div class="row panel">
        <div class="col-xs-12 col-sm-12 col-md-12 panel transparente">
          <h4>Nuevas Chicas</h4>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 ">
          @foreach ($perfiles->sortByDesc('created_at') as $perfile)
            {{--seleccionamos el ultimo post por el created_at  --}}
            @if ($loop->first)
              {{-- <div class="panel-body">
                <ul class=""> --}}
                <div class="row">
                  {{-- <ul> --}}

                  <div class="col-xs-6 col-sm-5 col-md-5">
                    <img src="{{ Voyager::image( $perfile->foto_perfil ) }}"   class="imgestadoredondo" alt="Image">

                  </div>
                  <p>
                    <li class="text-left" style="color: #FFF"><a href="read.php?id=">{{$perfile->apodo}}</a></li>
                    <a href="#">{{$perfile->created_at}}</a>
                    <p>
                    {{-- </ul> --}}
                </div>
                    {{-- </ul>
                    <hr>
                  </div> --}}
              @continue
             @endif


       @endforeach
     </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="row panel">
      <div class="col-xs-12 col-sm-12 col-md-12 panel transparente">
        <h4>Categorias</h4>
      </div>
       <div class="row">
          @foreach($categories as $categories)
            <ul>
              <p>
                <li style="color: #ffd11a">
                  <a href="/category/{{ $categories->slug }}">
                  {{-- <img src="{{ Voyager::image( $categories->image ) }}" style="width:2%"> --}}
                  <span>{{ $categories->name }}</span>
                </a>
              </li>
              </p>
            </ul>
               {{-- <div class="col-md-3">
                <a href="/post/{{ $post->slug }}">
                  <img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
                  <span>{{ $post->title }}</span>
                </a>
              </div>  --}}

          @endforeach
       </div>
    </div>

  </div>
</div>
