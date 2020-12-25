@section('getIndex')
  <div class="container letPhotoForeverProduct">
    <div class="row justify-content-center">
      @foreach ($index->data as $item)
          <div class="col-6 col-md-4 text-center mb-md-3">
            <div class="card rounded-0">
              <div class="imgBox">
                <a href="#">
                  <img src="{{$item->productAlbum}}" alt="" class="card-img-top rounded-0">
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title text-secondary">
                  {{$item->productName}}
                </h5>
              </div>
            </div>
          </div>
      @endforeach
    </div>
  </div>
@endsection