@extends('base.layout.app')

@section('title', $brand->name)

@section('content')
  <div class="content">
    <!-- Banner -->
    <div style="height:290px;box-shadow:0 2px 10px rgba(0, 0, 0, 0.2);" class="row m-0 p-0 bg-white">
      <div class="col m-0 p-0">
        <img src="{{url($brand->getLogo()->path)}}" style="width:100%;height:290px;object-fit:contain;" alt="">
      </div>
      <div class="col m-0 p-0">
        <table style="height: 100%; width:100%">
          <tbody>
            <tr>
              <td class="align-middle">
                <h1 class="text-capitalize text-center" style="color:rgba(33,37,41,0.8);">{{$brand->name}}</h1>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div style="margin:10px 60px;">
      <div class="m-0 p-0">
        <!-- Car Models -->
        @foreach($brand->getSeries() as $series)
        <div style="margin:50px 0px;">
            <!-- categories header -->
            <div class="row" style="padding:0px;margin-bottom:10px;margin-right:0px;margin-left:0px;">
                <div class="col align-self-center" style="padding:0px;">
                    <div class="rounded" style="height:5px;color:rgba(33,37,41,0.8);background-color:rgba(33,37,41,0.11);"></div>
                </div>
                <div class="col-3 align-self-center text-center" data-bs-hover-animate="pulse" style="padding:0px;">
                  <a href="{{ route('series.show', $series) }}" style="text-decoration:none;">
                    <h4 class="text-uppercase d-inline" style="margin:0px;color:rgba(33,37,41,0.8);">{{$series->name}}</h4>
                  </a>
                </div>
                <div class="col align-self-center" style="padding:0px;">
                    <div class="rounded" style="height:5px;color:rgba(33,37,41,0.8);background-color:rgba(33,37,41,0.11);"></div>
                </div>
            </div>

            <!-- Model show -->
            <div class="row" style="margin:0px;background-color:#ffffff;padding:0px;">
                <!-- cars -->
                <div class="col">
                    <div class="row">
                        @foreach($series->getProducts() as $product)
                          <div class="col-3 border" style="padding:15px;height:200px;">
                            <div class="row m-0">
                              <div class="col">
                                <a class="nav nav-link m-0 p-0" href="{{ route('products.show', $product) }}">
                                  <h5 class="text-capitalize" style="font-size:16px;font-family: 'Times New Roman', Times, serif;color:rgba(33,37,41,0.8);font-weight:normal;">{{$product->name}}</h5>
                                </a>
                              </div>
                              <div class="col-3 text-center m-0 p-0">
                                @if(Auth::check())

                                @else
                                  <button style="position:absolute;right:0px;top:-3px;"class="btn btn-link no-outline rounded-0 p-0 m-0" data-toggle="modal" data-target="#LoginModalCenter" type="button"><i class="fa fa-shopping-cart"></i></button>
                                @endif
                              </div>
                            </div>
                            <div class="row m-0">
                              <div class="col-6" style="height:70px;position:absolute;bottom:10px;left:10px;">
                                <h5 class="text-capitalize" style="font-size:16px;font-family: 'Times New Roman', Times, serif;color:rgba(33,37,41,0.8);font-weight:normal;"><span class="text-danger font-weight-bold">{{$product->getDiscount()}}</span></h5>
                                <h6 class="m-0 text-secondary" style="font-family: 'Times New Roman', Times, serif;">{{$product->buying_price}}</h6>
                                <p class="text-secondary" style="font-size:13px;">4 Pieces Available</p>
                              </div>
                              <div class="col-6" style="height:100px;position:absolute;bottom:10px;right:0px;">
                                <a class="nav nav-link m-0 p-0" href="{{ route('products.show', $product) }}">
                                  <img class="float-right m-0 p-0" src="{{url($product->getImage()->path)}}" data-bs-hover-animate="pulse" style="height:100px; width:200px; object-fit:contain;">
                                </a>
                              </div>
                            </div>
                          </div>
                        @endforeach
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
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection

@section('style')

@stop

@section('script')

@stop
