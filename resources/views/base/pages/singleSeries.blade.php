@extends('base.layout.app')

@section('title', $series->name)

@section('content')
  <div class="content">
    <!-- Banner -->
    <div style="height:290px;box-shadow:0 2px 10px rgba(0, 0, 0, 0.2);" class="row m-0 p-0 bg-white">
      <div class="col m-0 p-0">
        <table style="height: 100%; width:100%">
          <tbody>
            <tr>
              <td class="align-middle">
                <img src="{{url($series->getImage()->path)}}" style="width:100%;height:270px;object-fit:contain;" alt="">
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col m-0 p-0">
        <table style="height: 100%; width:100%">
          <tbody>
            <tr>
              <td class="align-middle">
                <h1 class="text-capitalize text-center" style="color:rgba(33,37,41,0.8);">
                  {{$series->getBrand()->name}} {{$series->name}}
                </h1>
              </td>
            </tr>
            <tr>
              <td class="align-middle pl-3 pr-3">
                <p class="text-justify" style="font-size: 13px; color:rgba(33,37,41,0.8);">
                  {{$series->details}}
                </p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div style="margin:30px 60px;">
      <!-- breadcrumbs -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color:transparent;">
          <li class="breadcrumb-item">
            <a style="text-decoration: none;" href="{{route('categories.show', $series->getBrand()->getCategory())}}">
              {{$series->getBrand()->getCategory()->name}}
            </a>
          </li>
          <li class="breadcrumb-item">
            <a style="text-decoration: none;" href="{{route('brands.show', $series->getBrand())}}">
              {{$series->getBrand()->name}}
            </a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            {{$series->name}}
          </li>
        </ol>
      </nav>

      <!-- part list -->
      <div class="row bg-white">
          @foreach($series->getProducts() as $product)
            <div class="col-3 border" style="padding:15px;height:200px;">
              <div class="row m-0">
                <div class="col">
                  <a class="nav nav-link m-0 p-0" href="{{ route('products.show', $product) }}">
                    <h5 class="text-capitalize" style="font-size:13px;font-family: 'Times New Roman', Times, serif;color:rgba(33,37,41,0.8);font-weight:normal;">
                      {{$product->name}}
                    </h5>
                  </a>
                </div>
                <div class="col-3 text-center m-0 p-0">
                  @if(Auth::check())

                  @else
                    <button style="position:absolute;right:0px;top:-3px;"class="btn btn-link no-outline rounded-0 p-0 m-0" data-toggle="modal" data-target="#LoginModalCenter" type="button">
                      <i class="fa fa-shopping-cart"></i>
                    </button>
                  @endif
                </div>
              </div>
              <div class="row m-0">
                <div class="col-6" style="height:70px;position:absolute;bottom:10px;left:10px;">
                  <h5 class="text-capitalize" style="font-size:16px;font-family: 'Times New Roman', Times, serif;color:rgba(33,37,41,0.8);font-weight:normal;">
                    <span class="text-danger font-weight-bold">
                      {{$product->getDiscount()}}
                    </span>
                  </h5>
                  <h6 class="m-0 text-secondary" style="font-family: 'Times New Roman', Times, serif;">
                    {{$product->getNormalPrice()}}
                  </h6>
                  <p class="text-secondary" style="font-size:13px;">
                    {{rand(1,16)}} Pieces Available
                  </p>
                </div>
                <div class="col-6" style="height:100px;position:absolute;bottom:10px;right:0px;">
                  <a class="nav nav-link m-0 p-0" href="{{ route('products.show', $product) }}">
                    <img class="float-right m-0 p-0" src="{{url($product->getImage()->path)}}" data-bs-hover-animate="pulse" style="height:100px; width:150px; object-fit:contain;">
                  </a>
                </div>
              </div>
            </div>
          @endforeach
          @if(count($series->getProducts()) < 4)
            <!-- coming soon -->
            <div class="col border text-truncate" style="padding:15px;position:relative;height:200px;">
              <table style="height: 100%; width:100%">
                <tbody>
                  <tr>
                    <td class="align-middle">
                      <h3 class="text-capitalize text-center" style="color:rgba(33,37,41,0.8);">More<br>Coming Soon</h3>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          @endif
      </div>
    </div>
  </div>

@endsection

@section('style')

@stop

@section('script')

@stop
