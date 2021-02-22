@include('./component/serviceContentNav')

@extends('layout')

@section('content')
    <div class="serviceContent mt-30">
      <div class="container">
        <div class="row">
          <input type="checkbox" class="d-none" id="dropdown">
          <label for="dropdown" class="col-12">
            <span class="d-flex align-items-center">
              客服信箱<i class="fas fa-chevron-down ml-auto"></i>
            </span>
          </label>
          {{-- 左邊側邊攔 --}}
          <div class="col-md-2 ">
            @yield('serviceContentNav')
          </div>
          <div class="col-md-10">
            <div class="teachEdit">
              <div class="title">
                客服信箱
              </div>
              <div id="vueComponent">
                <contactus/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="/js/app.js"></script>
@endsection