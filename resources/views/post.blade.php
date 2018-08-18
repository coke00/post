{{-- <!DOCTYPE html>
<html>
<head>
	<title>{{ $post->title }}</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<h1>{{ $post->title }}</h1>
				<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
				<p>{!! $post->body !!}</p>

			</div>
		</div>
	</div>

</body>
</html> --}}
@extends('layouts.app')

@section('content')
  {{-- <head>
  	<title>{{ $post->title }}</title>
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body> --}}
  {{-- <section class="section" id="profile">
    <div class="section-content">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="col-md-4 text-center">
              <p>aqui foto de perfil</p>
              <img src="{{ Voyager::image( $post->image ) }}" style="width:100%;border-radius: 50%;">
            </div>
            <div class="col-md-4">
              <h1>{{ $post->title }}</h1>
              <h2>Fono Contacto</h2>
              <p>Medidas. .... .... ... .. .. .. .. . . .. . .</p>
              <p>Descripción</p>
              <p>servicios</p>
              <p>{!! $post->body !!}</p>
            </div>
          </div>
        </div>
      </div>

    </div> --}}
    {{-- <div class="container-fluid col-md-12">
      @php $posts = App\Post::where('status', 'PUBLISHED')->get();

    foreach ($posts as $post) {
        echo $post->id;
    } @endphp
    </div> --}}
    <section class="section" id="profile">
   <div class="section-content">
      <div class="container">
         <article class="article-profile is-big animate animate-in">
            <figure class="bg">
               <div class="image background-image-loaded image-loaded" style="background-image: url(&quot;https://plaemst.imgix.net/img/equipo/equipo02.png?auto=enhance%2Cformat%2Ccompress&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.42&amp;fp-z=1&amp;h=330&amp;ixlib=php-1.2.1&amp;w=330&amp;s=8ffb1ec2b8f2036e9c77754de066df74&amp;mark=equipo04.png&ampmarkscale=8&ampmarkpad=30&ampmarkalign=center&quot;);">
                 <img src="https://plaemst.imgix.net/img/equipo/equipo02.png?auto=enhance%2Cformat%2Ccompress&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.42&amp;fp-z=1&amp;h=330&amp;ixlib=php-1.2.1&amp;w=330&amp;s=8ffb1ec2b8f2036e9c77754de066df74&amp;mark=equipo04.png&ampmarkscale=8&ampmarkpad=30&ampmarkalign=center" title="Vivi" alt="Vivi"></div>
            </figure>
            <div class="info">
               <h1 class="line"> {{ $post->title }} <i class="fa fa-check-circle" data-toggle="tooltip" title="" data-original-title="Entrevista Personalmente"></i> <span>| Escort VIP </span></h1>
               <h2>Sobre mí:</h2>
               <p>Atrévete a disfrutar íntimamente junto a una rubia Brasileña, educada y discreta. Me llamo Vivi y me encanta conocer caballeros elegantes y galantes para compartir eventos, viajes o encuentros privados llenos de placer y discreción. En la intimidad verás que soy una acompañante muy ardiente, estaré lista para hacer realidad todas tus fantasías.</p>
               <div class="details">
                  <ul>
                     <li>Brasileña</li>
                     <li>Trigueña</li>
                     <li>27 años</li>
                     <li>165 cm</li>
                     <li>73 kg</li>
                     <li> 106 - 73 - 116 cm</li>
                  </ul>
               </div>
               <div class="tags"> <span>Contextura Mediana</span> <span>Cabello Rubio</span> <span>Ojos Ámbar</span> <span>Busto Grande</span> <span>Cola Grande</span> <span>Depilación Full</span> <span>Depto Propio</span> <span>Hoteles</span> <span>No Fuma</span> <span>Tatuada</span> <span>Viajes</span> <span>Español</span> <span>Portugués</span></div>
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
                  <img src="//escl-prod.imgix.net/d48a9ba2-730d-44c5-a4f7-e4ca8f6b39ee?auto=enhance%2Cformat%2Ccompress&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.42&amp;fp-z=1&amp;h=46&amp;ixlib=php-1.2.1&amp;w=46&amp;s=48b681c9bb7a95d4fe918940f42e15bf" title="Vivi" alt="Vivi">
                </div>
                <div class="info">
                  <ul>
                    <li class="pretitle">27 años</li>
                    <li class="value">
                      <span>Vivi
                        <i class="fa fa-check-circle" data-toggle="tooltip" title="" data-original-title="Entrevistada Personalmente">
                        </i>
                      </span>
                    </li>
                    <li class="pretitle"> Brasileña</li>
                  </ul>
                </div>
              </div>
              <div class="item animate trigger-phone animate-in">
                <a href="tel:+56998995557" class="phone-result" data-phone="+56 9 9899 5557"> Teléfono </a>
                <div class="icon">
                  <i class="fa fa-phone">
                  </i>
                </div>
                <div class="info">
                  <ul class="show-info">
                    <li class="pretitle">&nbsp;</li>
                    <li class="value">+56 9 9899 5557</li>
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
                    <li class="value">$ 130.000
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
                    <li class="value">Las Condes</li>
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
      <section class="section" id="services">
   <div class="section-content">
      <div class="container">
         <div class="tables">
            <div class="row">
               <div class="col-md-6 animate animate-in">
                  <div class="box services equalize-load" data-equalize="box-item-table" style="height: 286px;">
                     <h2 class="line"> Servicios <small>Algunos servicios podrían tener un costo adicional.</small></h2>
                     <div class="tags"> <span>Amiga para un Trío</span> <span>Atención Lésbica</span> <span>Besos</span> <span>Eventos y Cenas</span> <span>Juguetes</span> <span>Masturbación Rusa</span> <span>Oral Americana</span> <span>Oral Natural</span> <span>Parejas con Lésbico</span> <span>Parejas Hetero</span> <span>Sexo Anal</span></div>
                  </div>
               </div>
               <div class="col-md-6 animate animate-in">
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
                  <p> <i class="fa fa-check"></i> <span class="name">Vivi</span> ha sido entrevistada Personalmente, sus fotografías están levemente retocadas.</p>
               </div>
            </div>
         </div>
         <div class="photoswipe" id="lightgallery">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 lightgallery imageContainer" data-src="//escl-prod.imgix.net/4b31d481-9bb6-407f-91ff-b8532a982191?auto=enhance%2Cformat%2Ccompress&amp;h=1440&amp;ixlib=php-1.2.1&amp;mark=https%3A%2F%2Fescl-dev.imgix.net%2Fes-watermark-final.pdf%3Fpage%3D1%26fm%3Dpng%26w%3D620%26dpr%3D2%26q%3D100&amp;markalign=center%2Cmiddle&amp;markalpha=5&amp;markscale=80&amp;w=960&amp;s=60863aa3b730856d88428945971cf2c7">
               <article class="article-media animate animate-in">
                  <figure itemprop="associatedMedia" itemtype="http://schema.org/ImageObject">
                     <a class="image fancybox magnific-popup box" href="//escl-prod.imgix.net/4b31d481-9bb6-407f-91ff-b8532a982191?auto=enhance%2Cformat%2Ccompress&amp;h=1440&amp;ixlib=php-1.2.1&amp;mark=https%3A%2F%2Fescl-dev.imgix.net%2Fes-watermark-final.pdf%3Fpage%3D1%26fm%3Dpng%26w%3D620%26dpr%3D2%26q%3D100&amp;markalign=center%2Cmiddle&amp;markalpha=5&amp;markscale=80&amp;w=960&amp;s=60863aa3b730856d88428945971cf2c7" rel="gallery" itemprop="contentUrl" data-fancybox-group="gallery">
                        <picture> <img src="//escl-prod.imgix.net/4b31d481-9bb6-407f-91ff-b8532a982191?auto=enhance%2Cformat%2Ccompress&amp;crop=entropy%2Cfaces&amp;fit=crop&amp;h=399&amp;ixlib=php-1.2.1&amp;w=399&amp;s=f51c33da5e8fb32e23ccc42e0d7b0c7a" alt="Vivi"> </picture>
                        <span class="box-inner"> <i class="fa fa-search-plus"></i> <small>Ampliar imagen</small> </span>
                     </a>
                  </figure>
               </article>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 lightgallery imageContainer" data-src="//escl-prod.imgix.net/d48a9ba2-730d-44c5-a4f7-e4ca8f6b39ee?auto=enhance%2Cformat%2Ccompress&amp;h=1440&amp;ixlib=php-1.2.1&amp;mark=https%3A%2F%2Fescl-dev.imgix.net%2Fes-watermark-final.pdf%3Fpage%3D1%26fm%3Dpng%26w%3D620%26dpr%3D2%26q%3D100&amp;markalign=center%2Cmiddle&amp;markalpha=5&amp;markscale=80&amp;w=960&amp;s=c6720dd5143fafde28fc493432e7ec5f">
               <article class="article-media animate animate-in" style="animation-delay: 0.2s;">
                  <figure itemprop="associatedMedia" itemtype="http://schema.org/ImageObject">
                     <a class="image fancybox magnific-popup box" href="//escl-prod.imgix.net/d48a9ba2-730d-44c5-a4f7-e4ca8f6b39ee?auto=enhance%2Cformat%2Ccompress&amp;h=1440&amp;ixlib=php-1.2.1&amp;mark=https%3A%2F%2Fescl-dev.imgix.net%2Fes-watermark-final.pdf%3Fpage%3D1%26fm%3Dpng%26w%3D620%26dpr%3D2%26q%3D100&amp;markalign=center%2Cmiddle&amp;markalpha=5&amp;markscale=80&amp;w=960&amp;s=c6720dd5143fafde28fc493432e7ec5f" rel="gallery" itemprop="contentUrl" data-fancybox-group="gallery">
                        <picture> <img src="//escl-prod.imgix.net/d48a9ba2-730d-44c5-a4f7-e4ca8f6b39ee?auto=enhance%2Cformat%2Ccompress&amp;crop=entropy%2Cfaces&amp;fit=crop&amp;h=399&amp;ixlib=php-1.2.1&amp;w=399&amp;s=505a5c7e7d4fa2d2e84ab5b15c4b1ac2" alt="Vivi"> </picture>
                        <span class="box-inner"> <i class="fa fa-search-plus"></i> <small>Ampliar imagen</small> </span>
                     </a>
                  </figure>
               </article>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 lightgallery imageContainer" data-src="//escl-prod.imgix.net/f77c9c8c-31db-4396-888c-6d08697b8757?auto=enhance%2Cformat%2Ccompress&amp;h=1440&amp;ixlib=php-1.2.1&amp;mark=https%3A%2F%2Fescl-dev.imgix.net%2Fes-watermark-final.pdf%3Fpage%3D1%26fm%3Dpng%26w%3D620%26dpr%3D2%26q%3D100&amp;markalign=center%2Cmiddle&amp;markalpha=5&amp;markscale=80&amp;w=960&amp;s=393bf465485d5795dfb006b7ee9b3df0">
               <article class="article-media animate animate-in" style="animation-delay: 0.4s;">
                  <figure itemprop="associatedMedia" itemtype="http://schema.org/ImageObject">
                     <a class="image fancybox magnific-popup box" href="//escl-prod.imgix.net/f77c9c8c-31db-4396-888c-6d08697b8757?auto=enhance%2Cformat%2Ccompress&amp;h=1440&amp;ixlib=php-1.2.1&amp;mark=https%3A%2F%2Fescl-dev.imgix.net%2Fes-watermark-final.pdf%3Fpage%3D1%26fm%3Dpng%26w%3D620%26dpr%3D2%26q%3D100&amp;markalign=center%2Cmiddle&amp;markalpha=5&amp;markscale=80&amp;w=960&amp;s=393bf465485d5795dfb006b7ee9b3df0" rel="gallery" itemprop="contentUrl" data-fancybox-group="gallery">
                        <picture> <img src="//escl-prod.imgix.net/f77c9c8c-31db-4396-888c-6d08697b8757?auto=enhance%2Cformat%2Ccompress&amp;crop=entropy%2Cfaces&amp;fit=crop&amp;h=399&amp;ixlib=php-1.2.1&amp;w=399&amp;s=657ebaf0e275eba883a852a902271579" alt="Vivi"> </picture>
                        <span class="box-inner"> <i class="fa fa-search-plus"></i> <small>Ampliar imagen</small> </span>
                     </a>
                  </figure>
               </article>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 lightgallery imageContainer" data-src="//escl-prod.imgix.net/9aa7e25f-b09c-4588-88d5-d167150f811e?auto=enhance%2Cformat%2Ccompress&amp;h=1440&amp;ixlib=php-1.2.1&amp;mark=https%3A%2F%2Fescl-dev.imgix.net%2Fes-watermark-final.pdf%3Fpage%3D1%26fm%3Dpng%26w%3D620%26dpr%3D2%26q%3D100&amp;markalign=center%2Cmiddle&amp;markalpha=5&amp;markscale=80&amp;w=960&amp;s=52d85ff912cf02942d361f0a7f1ba067">
               <article class="article-media animate animate-in">
                  <figure itemprop="associatedMedia" itemtype="http://schema.org/ImageObject">
                     <a class="image fancybox magnific-popup box" href="//escl-prod.imgix.net/9aa7e25f-b09c-4588-88d5-d167150f811e?auto=enhance%2Cformat%2Ccompress&amp;h=1440&amp;ixlib=php-1.2.1&amp;mark=https%3A%2F%2Fescl-dev.imgix.net%2Fes-watermark-final.pdf%3Fpage%3D1%26fm%3Dpng%26w%3D620%26dpr%3D2%26q%3D100&amp;markalign=center%2Cmiddle&amp;markalpha=5&amp;markscale=80&amp;w=960&amp;s=52d85ff912cf02942d361f0a7f1ba067" rel="gallery" itemprop="contentUrl" data-fancybox-group="gallery">
                        <picture> <img src="//escl-prod.imgix.net/9aa7e25f-b09c-4588-88d5-d167150f811e?auto=enhance%2Cformat%2Ccompress&amp;crop=entropy%2Cfaces&amp;fit=crop&amp;h=399&amp;ixlib=php-1.2.1&amp;w=399&amp;s=8772c1fba917bd5ece0ddb39229772af" alt="Vivi"> </picture>
                        <span class="box-inner"> <i class="fa fa-search-plus"></i> <small>Ampliar imagen</small> </span>
                     </a>
                  </figure>
               </article>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 lightgallery imageContainer" data-src="//escl-prod.imgix.net/cfdd40f0-4a1e-40ac-91a2-d919e983bddb?auto=enhance%2Cformat%2Ccompress&amp;h=1440&amp;ixlib=php-1.2.1&amp;mark=https%3A%2F%2Fescl-dev.imgix.net%2Fes-watermark-final.pdf%3Fpage%3D1%26fm%3Dpng%26w%3D620%26dpr%3D2%26q%3D100&amp;markalign=center%2Cmiddle&amp;markalpha=5&amp;markscale=80&amp;w=960&amp;s=9df31744cb9e69d691f6500d318a672b">
               <article class="article-media animate animate-in" style="animation-delay: 0.2s;">
                  <figure itemprop="associatedMedia" itemtype="http://schema.org/ImageObject">
                     <a class="image fancybox magnific-popup box" href="//escl-prod.imgix.net/cfdd40f0-4a1e-40ac-91a2-d919e983bddb?auto=enhance%2Cformat%2Ccompress&amp;h=1440&amp;ixlib=php-1.2.1&amp;mark=https%3A%2F%2Fescl-dev.imgix.net%2Fes-watermark-final.pdf%3Fpage%3D1%26fm%3Dpng%26w%3D620%26dpr%3D2%26q%3D100&amp;markalign=center%2Cmiddle&amp;markalpha=5&amp;markscale=80&amp;w=960&amp;s=9df31744cb9e69d691f6500d318a672b" rel="gallery" itemprop="contentUrl" data-fancybox-group="gallery">
                        <picture> <img src="//escl-prod.imgix.net/cfdd40f0-4a1e-40ac-91a2-d919e983bddb?auto=enhance%2Cformat%2Ccompress&amp;crop=entropy%2Cfaces&amp;fit=crop&amp;h=399&amp;ixlib=php-1.2.1&amp;w=399&amp;s=697f3d32aaee6586c9c3096a19a06a00" alt="Vivi"> </picture>
                        <span class="box-inner"> <i class="fa fa-search-plus"></i> <small>Ampliar imagen</small> </span>
                     </a>
                  </figure>
               </article>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 lightgallery imageContainer" data-src="//escl-prod.imgix.net/e052cbd5-9f7a-4538-b854-7ccb4efd9cfd?auto=enhance%2Cformat%2Ccompress&amp;h=1440&amp;ixlib=php-1.2.1&amp;mark=https%3A%2F%2Fescl-dev.imgix.net%2Fes-watermark-final.pdf%3Fpage%3D1%26fm%3Dpng%26w%3D620%26dpr%3D2%26q%3D100&amp;markalign=center%2Cmiddle&amp;markalpha=5&amp;markscale=80&amp;w=960&amp;s=8f728a35930ca39dabc3719f1f7a11d4">
               <article class="article-media animate animate-in" style="animation-delay: 0.4s;">
                  <figure itemprop="associatedMedia" itemtype="http://schema.org/ImageObject">
                     <a class="image fancybox magnific-popup box" href="//escl-prod.imgix.net/e052cbd5-9f7a-4538-b854-7ccb4efd9cfd?auto=enhance%2Cformat%2Ccompress&amp;h=1440&amp;ixlib=php-1.2.1&amp;mark=https%3A%2F%2Fescl-dev.imgix.net%2Fes-watermark-final.pdf%3Fpage%3D1%26fm%3Dpng%26w%3D620%26dpr%3D2%26q%3D100&amp;markalign=center%2Cmiddle&amp;markalpha=5&amp;markscale=80&amp;w=960&amp;s=8f728a35930ca39dabc3719f1f7a11d4" rel="gallery" itemprop="contentUrl" data-fancybox-group="gallery">
                        <picture> <img src="//escl-prod.imgix.net/e052cbd5-9f7a-4538-b854-7ccb4efd9cfd?auto=enhance%2Cformat%2Ccompress&amp;crop=entropy%2Cfaces&amp;fit=crop&amp;h=399&amp;ixlib=php-1.2.1&amp;w=399&amp;s=cc5171db259ebf3e6504011d723514de" alt="Vivi"> </picture>
                        <span class="box-inner"> <i class="fa fa-search-plus"></i> <small>Ampliar imagen</small> </span>
                     </a>
                  </figure>
               </article>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 lightgallery imageContainer" data-src="//escl-prod.imgix.net/4f20bcd6-dc0c-4083-b577-84c4b9f791b1?auto=enhance%2Cformat%2Ccompress&amp;h=1440&amp;ixlib=php-1.2.1&amp;mark=https%3A%2F%2Fescl-dev.imgix.net%2Fes-watermark-final.pdf%3Fpage%3D1%26fm%3Dpng%26w%3D620%26dpr%3D2%26q%3D100&amp;markalign=center%2Cmiddle&amp;markalpha=5&amp;markscale=80&amp;w=960&amp;s=13c3b4606befa64f9a8ce9e911554cf2">
               <article class="article-media animate animate-in">
                  <figure itemprop="associatedMedia" itemtype="http://schema.org/ImageObject">
                     <a class="image fancybox magnific-popup box" href="//escl-prod.imgix.net/4f20bcd6-dc0c-4083-b577-84c4b9f791b1?auto=enhance%2Cformat%2Ccompress&amp;h=1440&amp;ixlib=php-1.2.1&amp;mark=https%3A%2F%2Fescl-dev.imgix.net%2Fes-watermark-final.pdf%3Fpage%3D1%26fm%3Dpng%26w%3D620%26dpr%3D2%26q%3D100&amp;markalign=center%2Cmiddle&amp;markalpha=5&amp;markscale=80&amp;w=960&amp;s=13c3b4606befa64f9a8ce9e911554cf2" rel="gallery" itemprop="contentUrl" data-fancybox-group="gallery">
                        <picture> <img src="//escl-prod.imgix.net/4f20bcd6-dc0c-4083-b577-84c4b9f791b1?auto=enhance%2Cformat%2Ccompress&amp;crop=entropy%2Cfaces&amp;fit=crop&amp;h=399&amp;ixlib=php-1.2.1&amp;w=399&amp;s=b6534bd45dd3585eb29ca2d6fe4e66fc" alt="Vivi"> </picture>
                        <span class="box-inner"> <i class="fa fa-search-plus"></i> <small>Ampliar imagen</small> </span>
                     </a>
                  </figure>
               </article>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 lightgallery imageContainer" data-src="//escl-prod.imgix.net/ae77f7be-3bff-4383-b4f4-2facbcce8753?auto=enhance%2Cformat%2Ccompress&amp;h=1440&amp;ixlib=php-1.2.1&amp;mark=https%3A%2F%2Fescl-dev.imgix.net%2Fes-watermark-final.pdf%3Fpage%3D1%26fm%3Dpng%26w%3D620%26dpr%3D2%26q%3D100&amp;markalign=center%2Cmiddle&amp;markalpha=5&amp;markscale=80&amp;w=960&amp;s=008f6486c52910a1b1275d6c8f7ad3bb">
               <article class="article-media animate animate-in" style="animation-delay: 0.2s;">
                  <figure itemprop="associatedMedia" itemtype="http://schema.org/ImageObject">
                     <a class="image fancybox magnific-popup box" href="//escl-prod.imgix.net/ae77f7be-3bff-4383-b4f4-2facbcce8753?auto=enhance%2Cformat%2Ccompress&amp;h=1440&amp;ixlib=php-1.2.1&amp;mark=https%3A%2F%2Fescl-dev.imgix.net%2Fes-watermark-final.pdf%3Fpage%3D1%26fm%3Dpng%26w%3D620%26dpr%3D2%26q%3D100&amp;markalign=center%2Cmiddle&amp;markalpha=5&amp;markscale=80&amp;w=960&amp;s=008f6486c52910a1b1275d6c8f7ad3bb" rel="gallery" itemprop="contentUrl" data-fancybox-group="gallery">
                        <picture> <img src="//escl-prod.imgix.net/ae77f7be-3bff-4383-b4f4-2facbcce8753?auto=enhance%2Cformat%2Ccompress&amp;crop=entropy%2Cfaces&amp;fit=crop&amp;h=399&amp;ixlib=php-1.2.1&amp;w=399&amp;s=d09aa0e543fcef0c1bee793a096d9f7a" alt="Vivi"> </picture>
                        <span class="box-inner"> <i class="fa fa-search-plus"></i> <small>Ampliar imagen</small> </span>
                     </a>
                  </figure>
               </article>
            </div>
         </div>
         <div class="videos"></div>
      </div>
   </div>
</section>
{{--  --}}
  {{-- </body> --}}
@endsection
