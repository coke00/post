@extends('layouts.app')

@section('content')
  <section class="section" id="profile">
    <div class="section-content">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="col-md-4 text-center">
              <p>aqui foto de perfil</p>
              <img src="{{ Voyager::image( $publicate->image ) }}" style="width:100%;border-radius: 50%;">
            </div>
            <div class="col-md-4">
              <h1>{{ $publicate->titulo }}</h1>
              <h2>Fono Contacto</h2>
              <p>Medidas. .... .... ... .. .. .. .. . . .. . .</p>
              <p>Descripción</p>
              <p>servicios</p>
              <p>{!! $publicate->fono !!}</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection
