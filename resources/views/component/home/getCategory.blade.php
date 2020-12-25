@section('category')
  <section class="container-fluid">
    <div class="row aChance">
      <h2 class="eachTitle text-center font-weight-bold w-100">
        一個機會，讓生活獨特 
      </h2>
      <p class="text-center w-100 eachSecondTitle px-2">
        裝飾你的重要時刻，讓你的日常生活更加快樂
      </p>
    </div>
  </section>
  <div class="container aChanceBox">
    <div class="row justify-content-center">
      @foreach ($category as $item)
          <div class="col-sm-6 mb-30">
            <a href="#" class="aChanceInsideBox d-block">
              <div class="w-40 wordBox d-flex flex-column align-items-center justify-content-center h-100">
                <p class="wordBoxTitle text-dark">
                  {{$item->categoryName}}
                </p>
                <P class="wordBoxTitleEn text-dark">
                  {{$item->categoryEName}}
                </P>
              </div>
            <img src="{{$item->categoryImg}}" alt="" class="w-100">
            </a>
          </div>
      @endforeach
    </div>
  </div>
@endsection