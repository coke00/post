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
</style>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<!--termina slider vertical-->

<div class="container">
   <div class="row well">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <h2>Destacadas de la Semana</h2>
         <div id="myCarousel" class="vertical-slider carousel vertical slide" data-ride="carousel">
           <!-- boton control superior
            <!--div class="row">
               <div class="col-md-4">
                  <span data-slide="next" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-up "
                     style="font-size: 30px"></span>
               </div>
               <div class="col-md-8">
               </div>
            </div>
            <br /-->
            <!-- Carousel items -->
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-5">
                            <a href="http://dotstrap.com/"> <img src="http://placehold.it/150x150" class="thumbnail"
                                alt="Image" /></a>
                        </div>
                        <div class="row">

                        <div class="col-xs-6 col-sm-7 col-md-7 text-center">
                            slider 1 right1
                        </div>

                      </div>
                    </div>
                    <!--/row-fluid-->
                </div>
                <!--/item-->
                <div class="item ">
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-5">
                            <a href="http://dotstrap.com/"> <img src="http://placehold.it/150x150" class="thumbnail"
                                alt="Image" /></a>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-7 col-md-7">
                              slider2 right1
                          </div>

                        </div>
                    </div>
                    <!--/row-fluid-->
                </div>
                <!--/item-->
                <div class="item ">
                    <div class="row">
                      <div class="col-xs-6 col-sm-5 col-md-5">
                            <a href="http://dotstrap.com/"> <img src="http://placehold.it/150x150" class="thumbnail"
                                alt="Image" /></a>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-7 col-md-7">
                            Slider3 right1
                            </div>
                        </div>
                    </div>
                    <!--/row-fluid-->
                </div>
                <!--/item-->
            </div>
               <!--div class="item ">
                  <div class="row">
                     <div class="col-xs-6 col-sm-5 col-md-5">
                        <a href="http://dotstrap.com/"> <img src="http://placehold.it/150x150" class="thumbnail"
                           alt="Image" /></a>
                     </div>
                     <div class="col-xs-6 col-sm-7 col-md-7">
                        <div class="row">
                        <div class="price col-md-6">
                           <h5>
                              left2 slider2
                           </h5>
                           <h5 class="price-text-color">
                              $199.99
                           </h5>
                        </div>
                        <div class="rating hidden-sm col-md-3">
                           <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                           </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                           </i><i class="fa fa-star"></i>
                        </div>
                        </div>
                      </div>
                     </div>
                  </div>
                  </row-fluid>
               </div>
               </item>
            </div-->
            <!-- control abajo-->
            <!--div class="row">
               <div class="col-md-4">
                  <span data-slide="prev" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-down"
                     style="color: Black; font-size: 30px"></span>
               </div>
               <div class="col-md-8">
               </div>
            </div-->
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
