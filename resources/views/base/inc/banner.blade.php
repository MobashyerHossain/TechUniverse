<div class="carousel slide mb-3" data-ride="carousel" id="carousel-1" style="height:400px;" data-interval="2000">
    <div class="carousel-inner" role="listbox">
      @foreach($banners as $key=>$banner)
        @if($key == 0)
          <div class="carousel-item active" style="height:400px;">
            <img class="w-100 d-block" src="{{url($banner->path)}}" alt="Slide Image" style="max-height:100%;"/>
          </div>
        @else
          <div class="carousel-item" style="height:400px;">
            <img class="w-100 d-block" src="{{url($banner->path)}}" alt="Slide Image" style="max-height:100%;"/>
          </div>
        @endif
      @endforeach
    </div>
    <div>
      <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <ol class="carousel-indicators">
      @foreach($banners as $key=>$banner)
        @if($key == 0)
          <li data-target="#carousel-1" data-slide-to="{{$key}}" class="active"></li>
        @else
          <li data-target="#carousel-1" data-slide-to="{{$key}}"></li>
        @endif
      @endforeach
    </ol>
</div>
