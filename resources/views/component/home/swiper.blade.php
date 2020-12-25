@section('swiper')
  <div class="row px-0">
    <div class="swiper-container desktop">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($pc as $itm)
                <div class="swiper-slide">
                    @if($itm->href==null)
                        <img src="{{$itm->img}}"/ class="img-fluid">
                    @else
                    <a href="{{$itm->href}}"  target="_blank">
                        <img src="{{$itm-> img}}"/ class="img-fluid">
                    </a>
                    @endif
                </div>
            @endforeach
        </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
    </div>
      {{-- 手機 --}}
      <div class="swiper-container mobile">
          <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($mb as $itm)
                <div class="swiper-slide">
                    @if($itm->href==null)
                        <img src="{{$itm->img}}"/ class="img-fluid">
                    @else
                    <a href="{{$itm->href}}"  target="_blank">
                        <img src="{{$itm-> img}}"/ class="img-fluid">
                    </a>
                    @endif
                </div>
            @endforeach
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>
  </div>  
@endsection