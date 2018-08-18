{{-- <div class="container-fluid col-md-8">
    <div class="row">
      <div class="col-md-12">
        <h3>Seccion Scort Gold</h3>

      </div>
    @foreach($posts as $post)

      @if ($post->status =='PENDING')
        <div class="col-md-3">
          <a href="/post/{{ $post->slug }}">
            <img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
            <span>{{ $post->title }}</span>
          </a>
        </div>
      @elseif($post->status =='PUBLISHED')
        <div class="col-md-3">
          <a href="/post/{{ $post->slug }}">
            <img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
            <span>{{ $post->title }}</span>
          </a>
        </div>
      @else
        <div class="col-md-3">
          <a href="/post/{{ $post->slug }}">
            <img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
            <span>{{ $post->title }} {{ $post->status }}</span>
          </a>
        </div>
      @endif
    @endforeach
  </div>
</div> --}}
