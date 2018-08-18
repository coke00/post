
@extends('layouts.app')

@section('perfile')
{{--
@php
$im = imagecreatefromjpeg('css/imagenes/estampa.png');

// Primero crearemos nuestra imagen de la estampa manualmente desde GD
$estampa = imagecreatetruecolor(100, 70);
imagefilledrectangle($estampa, 0, 0, 99, 69, 0x0000FF);
imagefilledrectangle($estampa, 9, 9, 90, 60, 0xFFFFFF);
$im = imagecreatefromjpeg('original.png');
imagestring($estampa, 5, 20, 20, 'libGD', 0x0000FF);
imagestring($estampa, 3, 20, 40, '(c) 2007-9', 0x0000FF);

// Establecer los márgenes para la estampa y obtener el alto/ancho de la imagen de la estampa
$margen_dcho = 10;
$margen_inf = 10;
$sx = imagesx($estampa);
$sy = imagesy($estampa);

// Fusionar la estampa con nuestra foto con una opacidad del 50%
imagecopymerge($im, $estampa, imagesx($im) - $sx - $margen_dcho, imagesy($im) - $sy - $margen_inf, 0, 0, imagesx($estampa), imagesy($estampa), 50);

// Guardar la imagen en un archivo y liberar memoria
imagepng($im, 'foto_estampa.png');
imagedestroy($im);
@endphp --}}
    <section class="section" id="imgprofile">
      <div class="section-content">
        <div class="container">
          <div class="row">
            <div class="item">
              <h1 class="line titulos"> {{ $perfile->apodo }} <i class="fa fa-check-circle" data-toggle="tooltip" title="" data-original-title="Entrevista Personalmente"></i> <span>{{ $perfile->tipo_scort}}</span></h1>

            </div>
            <div class="row">

            <div class="item animate animate-in" style="animation-delay: 0.6s;">
              <div class="image">
                <img src="{{Voyager::image( $perfile->foto_perfil )}}" title="{{ $perfile->apodo }}" alt="{{ $perfile->apodo }}">
                <div class="centered">DiosasChile</div>

              </div>
              <div class="info">
                <ul>
                  <li class="pretitle">&nbsp;</li>
                  {{-- <li class="value">Sin eXPeriencias</li> --}}
                  <li class="comment">&nbsp;</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        </div>

      </div>

    </section>
    <section class="section" id="profile">

   <div class="section-content">
      <div class="container">
         <article class="article-profile is-big animate animate-in">
           {{-- <figure class="bg">
               <div class="image background-image-loaded image-loaded" style="background-image:url({{ Voyager::image( $perfile->foto_perfil ) }});"> <!--url(&quot;https://plaemst.imgix.net/img/equipo/equipo02.png?auto=enhance%2Cformat%2Ccompress&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.42&amp;fp-z=1&amp;h=330&amp;ixlib=php-1.2.1&amp;w=330&amp;s=8ffb1ec2b8f2036e9c77754de066df74&amp;mark=equipo04.png&ampmarkscale=8&ampmarkpad=30&ampmarkalign=center&quot;);">-->
                 <img src="{{ Voyager::image( $perfile->foto_perfil ) }}" title="{{ $perfile->apodo }}" alt="{{ $perfile->apodo }}">

               </div>--}}
                 {{-- <img src="{{ Voyager::image( $perfile->foto_perfil ) }}" style="background-image:url('{{ Voyager::image( $perfile->foto_perfil ) }}')width:100%;border-radius: 50%;"> --}}
            {{--</figure> --}}

            <div class="info">
               {{-- <h1 class="line"> {{ $perfile->apodo }} <i class="fa fa-check-circle" data-toggle="tooltip" title="" data-original-title="Entrevista Personalmente"></i> <span>{{ $perfile->tipo_scort}}</span></h1> --}}
               <h2>Sobre mí:</h2>
               @php
                 echo $perfile->about;
               @endphp
               <div class="details">
                  <ul>
                     <li>{{ $perfile->nacionalidad }}</li>
                     <li>{{ $perfile->piel }}</li>
                     <li>{{ $perfile->edad }} años</li>
                     <li>{{ $perfile->altura }} cm</li>
                     <li>{{ $perfile->peso }} kg</li>
                     <li> {{$perfile->medida_pecho}} - {{$perfile->medida_cintura}} - {{$perfile->medida_cadera}} cm</li>
                  </ul>
               </div>
               <div class="tags">
                 @foreach ($perfil_caracteristicas->where('perfile_id','=', $perfile->id) as $perfil_caracteristicas)
                   @foreach ($caracteristicas as $caracteristica)

                     @if ($caracteristica->id==$perfil_caracteristicas->caracteristicas_detallada_id)
                       <span>{{ $caracteristica->titulo }}</span>
                     @endif
                   @endforeach
                   {{-- <span>{{ $perfil_caracteristicas->caracteristicas_detallada_id }}</span> --}}
                 @endforeach
                 {{-- <span>Contextura Mediana</span>
                  <span>Cabello Rubio</span>
                  <span>Ojos Ámbar</span>
                  <span>Busto Grande</span>
                  <span>Cola Grande</span>
                  <span>Depilación Full</span>
                  <span>Depto Propio</span>
                  <span>Hoteles</span>
                  <span>No Fuma</span>
                  <span>Tatuada</span>
                  <span>Viajes</span>
                  <span>Español</span>
                  <span>Portugués</span> --}}
                </div>
            </div>
         </article>
      </div>
   </div>
</section>
  {{-- </section> --}}
      <section class="section" id="price">
        <div class="section-content">
          <div class="container">
            <div class="row">
              <div class="item item-image">
                <div class="icon">
                  <img src="//escl-prod.imgix.net/d48a9ba2-730d-44c5-a4f7-e4ca8f6b39ee?auto=enhance%2Cformat%2Ccompress&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.42&amp;fp-z=1&amp;h=46&amp;ixlib=php-1.2.1&amp;w=46&amp;s=48b681c9bb7a95d4fe918940f42e15bf" title="{{ $perfile->apodo }}" alt="{{ $perfile->apodo }}">
                </div>
                <div class="info">
                  <ul>
                    <li class="pretitle">27 años</li>
                    <li class="value">
                      <span>{{ $perfile->apodo }}
                        <i class="fa fa-check-circle" data-toggle="tooltip" title="" data-original-title="Entrevistada Personalmente">
                        </i>
                      </span>
                    </li>
                    <li class="pretitle"> Brasileña</li>
                  </ul>
                </div>
              </div>
              <div class="item animate trigger-phone animate-in">
                <a href="tel:+56{{$perfile->fono_contacto}}" class="phone-result" data-phone="+56 {{$perfile->fono_contacto}}"> Teléfono </a>
                <div class="icon">
                  <i class="fa fa-phone">
                  </i>
                </div>
                <div class="info">
                  <ul class="show-info">
                    <li class="pretitle">&nbsp;</li>
                    <li class="value">+56 {{$perfile->fono_contacto}}</li>
                    <li class="comment">Tengo Whatsapp</li>
                  </ul>
                </div>
              </div>
              <div class="item animate animate-in" style="animation-delay: 0.2s;">
                <div class="icon">
                  <i class="fa fa-usd"></i>
                </div>
                <div class="info">
                  <ul>
                    <li class="pretitle">&nbsp;</li>
                    <li class="value">$ {{ $perfile->precio }}
                      <small>por 1 hora</small>
                    </li>
                    <li class="comment">&nbsp;</li>
                  </ul>
                </div>
              </div>
              <div class="item animate animate-in" style="animation-delay: 0.4s;">
                <div class="icon">
                  <i class="fa fa-map-marker"></i>
                </div>
                <div class="info">
                  <ul>
                    <li class="comment">&nbsp;</li>
                    <li class="value">{{$ciudades->nombre}}</li>
                    <li class="pretitle">Tengo estacionamiento.</li>
                  </ul>
                </div>
              </div>
              <div class="item animate animate-in" style="animation-delay: 0.6s;">
                <div class="icon">
                  <i class="fa fa-comments-o">
                  </i>
                </div>
                <div class="info">
                  <ul>
                    <li class="pretitle">&nbsp;</li>
                    <li class="value">Sin eXPeriencias</li>
                    <li class="comment">&nbsp;</li>
                  </ul>
                </div>
              </div>
            </div>

          </div>

        </div>

      </section>
      <section class="section hidden-xs hidden-sm" id="services">
   <div class="section-content">
      <div class="container">
         <div class="tables">
            <div class="row">
               <div class="col-md-6 animate animate-in">
                  <div class="box services equalize-load" data-equalize="box-item-table" style="height: 286px;">
                     <h2 class="line"> Servicios <small>Algunos servicios podrían tener un costo adicional.</small></h2>
                     <div class="tags">
                       @foreach ($perfil_servicios->where('perfile_id','=', $perfile->id) as $perfil_servicios)
                         @foreach ($servicios as $servicio)

                           @if ($servicio->id==$perfil_servicios->servicio_id)
                             <span>{{ $servicio->titulo }}</span>
                           @endif
                         @endforeach
                         {{-- <span>{{ $perfil_caracteristicas->caracteristicas_detallada_id }}</span> --}}
                       @endforeach
                       {{-- <span>Amiga para un Trío</span>
                        <span>Atención Lésbica</span>
                        <span>Besos</span>
                        <span>Eventos y Cenas</span>
                        <span>Juguetes</span>
                        <span>Masturbación Rusa</span>
                        <span>Oral Americana</span>
                        <span>Oral Natural</span>
                        <span>Parejas con Lésbico</span>
                        <span>Parejas Hetero</span>
                        <span>Sexo Anal</span> --}}
                      </div>
                  </div>
               </div>
               <div class="col-md-6 animate animate-in ">
                  <div class="box schedule equalize-load" data-equalize="box-item-table" style="height: 286px;">
                     <h2 class="line"> Horario <small>La disponibilidad es relativa, recuerda siempre confirmar.</small></h2>
                     <div class="table">
                        <table>
                           <thead>
                              <tr>
                                 <th><span>LUN</span></th>
                                 <th><span>MAR</span></th>
                                 <th><span>MIE</span></th>
                                 <th><span>JUE</span></th>
                                 <th><span>VIE</span></th>
                                 <th><span>SAB</span></th>
                                 <th><span>DOM</span></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td> <span>FULL<br>TIME</span></td>
                                 <td> <span>FULL<br>TIME</span></td>
                                 <td> <span>FULL<br>TIME</span></td>
                                 <td> <span>FULL<br>TIME</span></td>
                                 <td> <span>FULL<br>TIME</span></td>
                                 <td> <span>FULL<br>TIME</span></td>
                                 <td> <span>FULL<br>TIME</span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="section" id="media">
   <div class="section-content">
      <div class="container">
         <div class="details">
            <div class="row">
               <div class="col-lg-12">
                  <p> <i class="fa fa-check" ></i> <span class="name">{{ $perfile->apodo }}</span> ha sido entrevistada Personalmente, sus fotografías están levemente retocadas.</p>
               </div>
            </div>
         </div>
         <div class="photoswipe  imgresponsive" id="lightgallery">
           @foreach ($albumes->where('author_id','=', $perfile->author_id) as $albumes)

            @php
            $imagenes = json_decode($albumes->imagenes);
            if($imagenes != null)
            {
            @endphp


                @foreach($imagenes as $imagen)
                <div class=" col-md-4 col-lg-4 lightgallery imageContainer" data-src="{{ Voyager::image( $imagen ) }}">
                <article class="article-media animate animate-in">
                <figure itemprop="associatedMedia" itemtype="http://schema.org/ImageObject">
                <a class="image fancybox magnific-popup box" href="{{ Voyager::image( $imagen ) }}" rel="gallery" itemprop="contentUrl" data-fancybox-group="gallery">
                <picture>
                <img class="albumresponsive"src="{{ Voyager::image( $imagen ) }}"  data-id="{{ $albumes->id }}" alt="{{ $perfile->apodo }}">
                </picture>
                <span class="box-inner"> <i class="fa fa-search-plus"></i> <small>Ampliar imagen</small> </span>
                </a>
                </figure>
                </article>
                </div>
              @endforeach
              @php

            }
            @endphp


           @endforeach

         </div>
         <div class="videos"></div>
      </div>
   </div>
</section>
{{--  --}}
  {{-- </body> --}}
@endsection
