<!--div class="row"-->
<!-- col-sm-6 col-xs-6 -->
<style media="screen">
  #catepanel div:hover{
  background-color: #ff3399;
  }
</style>

<div class="container-fluid col-md-8 content" style="margin-top:15px;">

  <div class="row panel panel-default transparente text-center" >

  {{-- <div class="row panel"> --}}

  <div class="panel transparente">

      {{-- <div class="col-md-9"> --}}
        <h3>{{$tipo1='VIP'}}</h3>
      {{-- </div> --}}
      <!--controles del slider-->
      @if(count($perfile)<7)
        @php
          $display = "none";
        @endphp
      @else
        @php
          $display = "block";
        @endphp
      @endif
      <div class="col-md-3">
        <!-- remove hidden-xs para visualizar en xs telefono-->
        <div class="controls pull-right" style="display:{{ $display }};">
          <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example" data-slide="prev"></a>
          <a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"bdata-slide="next"></a>
        </div>
      </div>
    </div>
    {{-- </div> --}}
    <!-- remove hidden-xs para visualizar en xs telefono-->
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <!--li-->
        @php
          $cuenta = count($perfile);
          $cuentaslider = 0;
        @endphp
         @foreach($perfiles->where('ciudad','=',$perfile->ciudad) as $perfile)
          @foreach ($usertiposcorts->where('user_id','=',$perfile->author_id) as $usertiposcort)
            @foreach ($tiposcorts->where('id','=',$usertiposcort->id_tipo_scort) as $tiposcort)
              {{-- @php
              $cuentaslider++;
              @endphp --}}
              <div class="item active">
                {{-- <ul class="hidden-xs"> --}}
                  {{-- @if ( $cuentaslider == 7) --}}
                    {{-- <div class="row">
                      @if($tiposcort->titulo == $tipo1 && $perfile->status =='AUTORIZADO')
                        <div class="col-md-2 " style="padding: 1 1 1 1;">
                          <div class="col-item">
                            <div class="photo">
                              <a href="/perfile/{{ $perfile->slug }}">
                              <img src="{{ Voyager::image( $perfile->foto_perfil ) }}" style="width:100%">
                              <span>{{ $perfile->apodo }} {{ $perfile->status}}</span>
                              <span>{{$tiposcort->titulo}}</span>
                              </a>
                            </div>
                            <div class="info">
                            <div class="row">
                              <div class="price col-md-6">
                                <h5>header1 slider1</h5>
                                <h5 class="price-text-color">$199.99</h5>
                              </div>
                              <!--div class="rating hidden-sm col-md-3">
                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"></i>
                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"></i>
                                <i class="fa fa-star"></i>
                              </div-->
                            </div>
                            <div class="separator clear-left">
                              <i class="price-text-color fa fa-star"></i>
                              <i class="price-text-color fa fa-star"></i>
                              <i class="price-text-color fa fa-star"></i>
                              <i class="price-text-color fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <!--p class="btn-add">
                               <i class="fa fa-shopping-cart"></i>
                               <a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a>
                              </p>
                              <p class="btn-details">
                               <i class="fa fa-list"></i>
                               <a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                              </p-->
                            </div>
                            <div class="clearfix">
                            </div>
                          </div>
                          </div>
                        </div>
                      @endif
                    </div>
                  @else --}}
                  @if($tiposcort->titulo == $tipo1 && $usertiposcort->status =='AUTORIZADO')
                    <div class="col-md-2 panel panel-default transparente" style="padding: 1 1 1 1;" id="catepanel">
                      <div class="col-item">
                        <div class="photo">
                          <span>{{ $perfile->apodo }}</span>
                          <a href="/perfile/{{ $perfile->slug }}">
                            <img src="{{ Voyager::image( $perfile->foto_perfil ) }}" style="width:100%;height:80px;">
                            <div class="top-right"><i class="price-text-color fa fa-star"></i> {{$tiposcort->titulo}}</div>
                          </a>

                          {{-- <span>{{$tiposcort->titulo}}</span> --}}
                        </div>
                        <div class="info">
                          <div class="row">
                            <div class="price col-md-6">
                              <h5>+56{{$perfile->fono_contacto}}</h5>
                              <h5 class="price-text-color">${{$perfile->precio}}</h5>
                            </div>
                                <!--div class="rating hidden-sm col-md-3">
                                  <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"></i>
                                  <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div-->
                          </div>
                          {{-- <div class="separator clear-left">
                                <i class="price-text-color fa fa-star"></i>
                                <i class="price-text-color fa fa-star"></i>
                                <i class="price-text-color fa fa-star"></i>
                                <i class="price-text-color fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <!--p class="btn-add">
                                 <i class="fa fa-shopping-cart"></i>
                                 <a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a>
                                </p>
                                <p class="btn-details">
                                 <i class="fa fa-list"></i>
                                 <a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                                </p-->
                            </div> --}}
                          <div class="clearfix"></div>
                        </div>
                      </div>
                    </div>
                  {{-- @endif --}}
                  @endif
                {{-- </ul> --}}
              </div>
            @endforeach
          @endforeach
        @endforeach
      </div>
    </div>
  </div>
  {{-- <div class="row transparente">
    <div class="col-md-12 panel transparente">
      <h4>Ciudades</h4>
    </div>
    @foreach ($ciudades as $ciudad)
      <h3>aqui ciudad</h3>

    @endforeach

  </div> --}}
  <div class="row panel panel-default transparente text-center" id="catepanel">
    <div class="col-md-12 panel transparente">
      <h3>{{$tipo2='PREMIUM'}}</h3>
    </div>
    @php
      $cuenta21 = count($perfile);
      $cuenta2 = 0;
    @endphp
     @foreach($perfiles->where('ciudad','=',$perfile->ciudad) as $perfile)
      @foreach ($usertiposcorts->where('user_id','=',$perfile->author_id) as $usertiposcort)
        @foreach ($tiposcorts->where('id','=',$usertiposcort->id_tipo_scort) as $tiposcort)
          @php
            $cuenta2++;
          @endphp
          @if($tiposcort->titulo == $tipo2 && $usertiposcort->status =='AUTORIZADO')
            <div class="col-md-2 panel panel-default transparente" style="padding: 1 1 1 1;">
              <div class="col-item">
                <div class="photo">
              <span>{{ $perfile->apodo }}</span>
              <a href="/perfile/{{ $perfile->slug }}">
                <img src="{{ Voyager::image( $perfile->foto_perfil ) }}" style="width:100%">
                <div class="top-right"><i class="price-text-color fa fa-star"></i> {{$tiposcort->titulo}}</div>
              </a>
            </div>
            <div class="info">
              <div class="row">
                <div class="price col-md-6">
                  <h5>+56{{$perfile->fono_contacto}}</h5>
                  <h5 class="price-text-color">${{$perfile->precio}}</h5>
                </div>
                    <!--div class="rating hidden-sm col-md-3">
                      <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"></i>
                      <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div-->
              </div>
              {{-- <div class="separator clear-left">
                    <i class="price-text-color fa fa-star"></i>
                    <i class="price-text-color fa fa-star"></i>
                    <i class="price-text-color fa fa-star"></i>
                    <i class="price-text-color fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <!--p class="btn-add">
                     <i class="fa fa-shopping-cart"></i>
                     <a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a>
                    </p>
                    <p class="btn-details">
                     <i class="fa fa-list"></i>
                     <a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                    </p-->
                </div> --}}
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
          @else
          @endif
        @endforeach
      @endforeach
    @endforeach
  </div>
  <div class="row panel panel-default transparente  text-center" id="catepanel">
    <div class="col-md-12 panel transparente">
      <h3>{{$tipo3='GOLD'}}</h3>
    </div>
    @php
      $cuenta31 = count($perfile);
      $cuenta3 = 0;
    @endphp
     @foreach($perfiles->where('ciudad','=',$perfile->ciudad) as $perfile)
      @foreach ($usertiposcorts->where('user_id','=',$perfile->author_id) as $usertiposcort)
        @foreach ($tiposcorts->where('id','=',$usertiposcort->id_tipo_scort) as $tiposcort)
          @php
            $cuenta3++;
          @endphp
          @if($tiposcort->titulo == $tipo3 && $usertiposcort->status =='AUTORIZADO')
            <div class="col-md-2 panel panel-default transparente" style="padding: 1 1 1 1;">
              <div class="col-item">
                <div class="photo">
              <span>{{ $perfile->apodo }}</span>
              <a href="/perfile/{{ $perfile->slug }}">
                <img src="{{ Voyager::image( $perfile->foto_perfil ) }}" style="width:100%">
                <div class="top-right"><i class="price-text-color fa fa-star"></i> {{$tiposcort->titulo}}</div>
              </a>
            </div>
            <div class="info">
              <div class="row">
                <div class="price col-md-6">
                  <h5>+56{{$perfile->fono_contacto}}</h5>
                  <h5 class="price-text-color">${{$perfile->precio}}</h5>
                </div>
                    <!--div class="rating hidden-sm col-md-3">
                      <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"></i>
                      <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div-->
              </div>
              {{-- <div class="separator clear-left">
                    <i class="price-text-color fa fa-star"></i>
                    <i class="price-text-color fa fa-star"></i>
                    <i class="price-text-color fa fa-star"></i>
                    <i class="price-text-color fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <!--p class="btn-add">
                     <i class="fa fa-shopping-cart"></i>
                     <a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a>
                    </p>
                    <p class="btn-details">
                     <i class="fa fa-list"></i>
                     <a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                    </p-->
                </div> --}}
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
          @else
          @endif
        @endforeach
      @endforeach
    @endforeach
  </div>
</div>
