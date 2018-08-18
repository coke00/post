@extends('layouts.app')

<style>


#navbar2 {
overflow: hidden;
background-color: #333;
}

#navbar2 a {
float: left;
display: block;
color: #f2f2f2;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}

#navbar2 a:hover {
background-color: #ddd;
color: black;
}

#navbar2 a.active {
background-color: #ff3399;
color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}

</style>

  <div id="navbar2"  class="navbar navbar-dark bg-dark navbar-inverse navbar-fixed-top" style="margin-top:40px;margin-bottom:10px;">
    @php
      $contar=0;
    @endphp
    @foreach ($ciudades as $ciudad)
     {{-- <h3>aqui ciudad</h3> --}}
     @php
       $contar++;
     @endphp
     @if($contar == $perfile->ciudad)
     <a class="active" href="/ciudad/{{ $ciudad->id }}">
       {{ $ciudad->nombre }}
     </a>
   @else
     <a href="/ciudad/{{ $ciudad->id }}">{{ $ciudad->nombre }}</a>
   @endif

   @endforeach
   <a href="/inicio">Todas</a>
  </div>
@section('right')
  <div class="col-md-3" style="margin-top:10px;">
    @extends('slider.right-ciudad')
  </div>
@endsection
  @section('content')
  <div class="container-fluid" style="margin-top:10px;">
      <div class="col-md-8" style="margin-top:10px;">
        {{-- @extends('static.vip')
        @extends('static.gold') --}}
        @extends('slider.main-ciudad')
      </div>

  </div>
  @endsection

  <script>
  window.onscroll = function() {myFunction()};

  var navbar = document.getElementById("navbar2");
  //var navbar = document.getElementById("navbar");
  // var sticky2 = navbar.offsetTop;
  var sticky = navbar.offsetTop;

  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }
  </script>
