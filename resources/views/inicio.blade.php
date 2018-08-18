
@extends('layouts.app')

@section('perfile')
@endsection
@section('right')
  <div class="col-md-3">
    @extends('slider.right')
  </div>
@endsection
  @section('content')
  <div class="container-fluid">
      <div class="col-md-8">
        {{-- @extends('static.vip')
        @extends('static.gold') --}}
        @extends('slider.main')
      </div>

  </div>
  @endsection
