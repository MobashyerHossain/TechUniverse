@extends('base.layout.app')

@section('title', $product->name)

@section('content')
  <div class="content">
    <div class="text-secondary" style="margin:30px 60px;color:rgba(33,37,41,0.8);">
      <!-- breadcrumbs -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color:transparent;">
          <li class="breadcrumb-item">
            <a style="text-decoration: none;" href="{{route('categories.show', $product->getSeries()->getBrand()->getCategory())}}">
              {{$product->getSeries()->getBrand()->getCategory()->name}}
            </a>
          </li>
          <li class="breadcrumb-item">
            <a style="text-decoration: none;" href="{{route('brands.show', $product->getSeries()->getBrand())}}">
              {{$product->getSeries()->getBrand()->name}}
            </a>
          </li>
          <li class="breadcrumb-item">
            <a style="text-decoration: none;" href="{{route('series.show', $product->getSeries())}}">
              {{$product->getSeries()->name}}
            </a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            {{$product->name}}
          </li>
        </ol>
      </nav>

      <!-- product image and detail -->
      <div class="row" style="margin:10px 0px;">
          <div class="col" style="margin-right:10px;background-color:rgba(255,255,255,0);">
              <div class="row" style="margin-bottom:20px; height:400px; background-color:#ffffff;">
                  <!-- product image -->
                  <div class="col-5 text-center border">
                      <p class="float-left p-2">{{$product->getTotalViews()}} views</p>

                      <!-- product image carousel-->
                      <div class="carousel slide mb-3" data-ride="carousel" id="carousel-1" style="height:200px;" data-interval="1000">
                          <div class="carousel-inner" role="listbox">
                            @foreach($product->getImages() as $key=>$extra)
                              @if($key == 0)
                                <div class="carousel-item active" style="height:200px;">
                                  <a href="" data-toggle="modal" data-target="#productfullview{{$extra->id}}">
                                    <img class="w-100 d-block" src="{{url($extra->getImage()->path)}}" alt="Slide Image" style="max-height:100%; object-fit: contain;"/>
                                  </a>
                                </div>
                              @else
                                <div class="carousel-item" style="height:200px;">
                                  <a href="" data-toggle="modal" data-target="#productfullview{{$extra->id}}">
                                    <img class="w-100 d-block" src="{{url($extra->getImage()->path)}}" alt="Slide Image" style="max-height:100%; object-fit: contain;"/>
                                  </a>
                                </div>
                              @endif
                            @endforeach
                          </div>
                      </div>

                      <!-- Fullscreen product image Modal -->
                      <div class="modal fade" id="viewFullScreen" tabindex="-1" role="dialog" aria-labelledby="viewFullScreenTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content rounded-0 border-0">
                            <div class="modal-body">
                              <img src="{{url($product->getImage()->path)}}" data-bs-hover-animate="pulse" style="width:80%; object-fit: contain;">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row" style="margin-right:10px;margin-left:-5px;position:absolute;bottom:0px;">
                        @foreach($product->getImages() as $extra)
                          <!-- Button trigger modal -->
                          <div class="col-3 text-left p-3" style="padding:0px;">
                            <a href="" data-toggle="modal" data-target="#productfullview{{$extra->id}}">
                              <img src="{{url($extra->getImage()->path)}}" data-bs-hover-animate="pulse" style="width:100%; object-fit: contain;">
                            </a>
                          </div>

                          <!-- Extra image Modal -->
                          <div class="modal fade" id="productfullview{{$extra->id}}" tabindex="-1" role="dialog" aria-labelledby="productfullview{{$extra->id}}Title" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                              <div class="modal-content rounded-0 border-0">
                                <div class="modal-body">
                                  <img src="{{url($extra->getImage()->path)}}" data-bs-hover-animate="pulse" style="width:100%; height:400px; object-fit: contain;">
                                </div>
                              </div>
                            </div>
                          </div>
                        @endforeach

                        @for($i=0; $i<(3-count($product->getImages())); $i++)
                          <!-- same image -->
                          <div class="col-3 text-left p-3" style="padding:0px;">
                            <img src="{{url($product->getImage()->path)}}" data-bs-hover-animate="pulse" style="width:100%; height:80px; object-fit: contain;">
                          </div>
                        @endfor
                      </div>
                  </div>

                  <!-- product summary -->
                  <div class="col border" style="padding:14px;font-family: 'Times New Roman', Times, serif;">
                      <h5 class="float-left text-uppercase">
                        {{$product->name}}
                      </h5>
                      <h1 class="float-right text-danger">
                        {{$product->getDiscount()}}
                      </h1>
                      <div class="table-responsive" style="margin-top:80px;">
                          <table class="table table-sm">
                              <tbody>
                                  <tr class="border-top-0">
                                      <td class="border-top-0" style="width:30%; font-family: 'Times New Roman', Times, serif;">Normal Selling Price</td>
                                      <td class="border-top-0" style="font-family: 'Times New Roman', Times, serif;">: <del>{{$product->getNormalPrice()}}</del></td>
                                  </tr>
                                  <tr class="border-top-0">
                                      <td class="border-top-0" style="width:30%; font-family: 'Times New Roman', Times, serif;">Discounted Price</td>
                                      <td class="border-top-0" style="font-family: 'Times New Roman', Times, serif;">: {{$product->getDiscountedPrice()}}</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                      <div style="position:absolute; bottom:30px; width:100%;" class="m-0 pl-1 pr-5">
                        @if(Auth::check())

                        @else
                          <button class="btn btn-primary float-right no-outline rounded-0" data-toggle="modal" data-target="#LoginModalCenter" type="button">
                            Add to <i class="fa fa-shopping-cart"></i>
                          </button>
                        @endif
                      </div>
                  </div>
              </div>

              <!-- detail pane -->
              <div class="row border" style="margin-top:20px;background-color:#ffffff;">
                  <div class="col">
                      <div>
                          <ul class="nav nav-pills border-bottom" style="margin-top:10px;">
                              <li class="nav-item">
                                <a class="nav-link border rounded-0 border-bottom-0 active" role="tab" data-toggle="pill" href="#tab-1" style="padding:5px;">
                                  Product Specifications
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link border rounded-0 border-bottom-0" role="tab" data-toggle="pill" href="#tab-2" style="padding:5px; margin:0px 5px;">
                                  Series Details
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link border rounded-0 border-bottom-0" role="tab" data-toggle="pill" href="#tab-3" style="padding:5px; margin:0px 5px;">
                                  Brand Details
                                </a>
                              </li>
                          </ul>
                          <div class="tab-content">
                              <div class="tab-pane fade show active" role="tabpanel" id="tab-1">
                                  <div class="table-responsive" style="margin-top:20px;margin-bottom:10px;">
                                      @if(count($product->getSpecifications()) > 0)
                                        <table class="table table-sm">
                                            <tbody>
                                              @foreach($product->getSpecifications() as $specification)
                                                <tr>
                                                    <td class="border-top-0" style="width:30%;">{{$specification->specification_criteria}}</td>
                                                    <td class="border-top-0 text-center" style="width:10%;">:</td>
                                                    <td class="border-top-0">{{$specification->specification}}</td>
                                                </tr>
                                              @endforeach
                                            </tbody>
                                        </table>
                                      @endif
                                  </div>
                              </div>

                              <div class="tab-pane fade" role="tabpanel" id="tab-2">
                                  <div class="row">
                                      <div class="col-8">
                                          <div class="table-responsive text-justify" style="margin-top:20px;margin-bottom:10px;">
                                              <p>{{$product->getSeries()->details}}</p>
                                          </div>
                                      </div>
                                      <div class="col" style="padding:10px;">
                                        <img src="{{url($product->getSeries()->getImage()->path)}}" style="width:100%;">
                                      </div>
                                  </div>
                              </div>

                              <div class="tab-pane fade" role="tabpanel" id="tab-3">
                                  <div class="row">
                                      <div class="col-8">
                                          <div class="table-responsive text-justify" style="margin-top:20px;margin-bottom:10px;">
                                              <p>{{$product->getSeries()->getBrand()->details}}</p>
                                          </div>
                                      </div>
                                      <div class="col pt-4 pb-4" style="padding:10px;">
                                        <img src="{{url($product->getSeries()->getBrand()->getLogo()->path)}}" style="width:100%;">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- recomanded Item list -->
              @include('base.inc.recommendation')
          </div>

          <!-- You may also like -->
          <div class="col-3" style="margin-left:10px;background-color:#ffffff;padding:0px 10px;">
              <h6 style="margin:10px 0px;">You May Like</h6>
              <ul class="list-group list-group-flush">
                @foreach($product->getSeries()->getBrand()->getSeries() as $series)
                    @foreach($series->getProducts() as $moreproduct)
                      @if($moreproduct->id != $product->id)
                      <li class="list-group-item"style="padding:0px 0px;">
                        <div class="row" style="margin:5px 0px;">
                            <div class="col-3" style="padding:5px;">
                              <a class="nav nav-link m-0 p-0" href="{{ route('products.show', $moreproduct) }}">
                                <img src="{{ url($moreproduct->getImage()->path)}}" class="border-0" style="width:100%;">
                              </a>
                            </div>
                            <div class="col" style="padding:5px;">
                              <a class="nav nav-link m-0 p-0" href="{{ route('products.show', $moreproduct) }}">
                                <p class="m-0 text-secondary" style="font-size:13px;font-family: 'Times New Roman', Times, serif;">{{$moreproduct->getShortedName(30)}}</p>
                                <p class="m-0 text-secondary" style="font-size:13px;font-family: 'Times New Roman', Times, serif;">{{$moreproduct->getNormalPrice()}}</p>
                                <p class="m-0 text-secondary" style="font-size:13px;font-family: 'Times New Roman', Times, serif;">{{rand(1,20)}} Pieces Left</p>
                              </a>
                            </div>
                            <div class="col-2 mr-2">
                              @if(Auth::check())

                              @else
                                <button class="btn btn-link no-outline rounded-0 p-0 m-0" data-toggle="modal" data-target="#LoginModalCenter" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>
                              @endif
                            </div>
                        </div>
                      </li>
                      @endif
                    @endforeach
                @endforeach
              </ul>
          </div>
      </div>
    </div>
  </div>

@endsection

@section('style')

@stop

@section('script')

@stop
