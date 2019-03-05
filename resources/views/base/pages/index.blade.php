@extends('base.layout.app')

@section('title', 'Home')

@section('content')
  @include('base.inc.banner')
  <div class="content">
      <div style="margin:30px 60px;">
          @foreach($categories as $category)
              @if(count($category->getBrands()) > 0)
                  <div class="m-0 p-0 ">
                    <!-- Seperator -->
                    <div class="row mt-4 mb-0 p-0 m-0">
                        <div class="col align-self-center" style="padding:0px;">
                            <div class="rounded" style="height:5px;color:rgba(33,37,41,0.8);background-color:rgba(33,37,41,0.11);">
                              <!-- Horizontal line -->
                            </div>
                        </div>
                        <div class="col-3 align-self-center text-center" style="padding:0px;">
                            <h2 class="text-uppercase d-inline" style="margin:0px;color:rgba(33,37,41,0.8);">
                                {{$category->name}}
                            </h2>
                        </div>
                        <div class="col align-self-center" style="padding:0px;">
                            <div class="rounded" style="height:5px;color:rgba(33,37,41,0.8);background-color:rgba(33,37,41,0.11);">
                              <!-- Horizontal line -->
                            </div>
                        </div>
                    </div>

                    <!-- Brands -->
                    @foreach($category->getBrands() as $brand)
                    <div style="margin:30px 0px;">
                        <!-- Brand Header -->
                        <div class="row" style="padding:0px;margin-bottom:10px;margin-right:0px;margin-left:0px;">
                            <div class="col-3 align-self-center" style="padding:0px;">
                                <h4 class="text-uppercase d-inline" style="margin:0px;color:rgba(33,37,41,0.8);">
                                  {{$brand->name}}
                                </h4>
                            </div>
                            <div class="col align-self-center" style="padding:0px;">
                                <div class="rounded" style="height:5px;color:rgba(33,37,41,0.8);background-color:rgba(33,37,41,0.11);">
                                  <!-- Horizontal line -->
                                </div>
                            </div>
                        </div>

                        <!-- Show Brand -->
                        <div class="row" style="margin:0px;background-color:#ffffff;padding:0px;">
                            <!-- Brand image -->
                            <div class="col-2">
                                <a href="{{route('brands.show', $brand)}}">
                                  <img class="m-0 p-0" src="{{url($brand->getLogo()->path)}}" style="width:100%; height:100%; object-fit:contain;" alt="">
                                </a>
                            </div>

                            <!-- Show Series -->
                            <div class="col">
                                <div class="row">
                                    @foreach($brand->getSeries() as $series)
                                    <div class="col-3 border-left" style="padding:15px;position:relative;height:200px;">
                                      <a class="nav nav-link m-0 p-0" href="{{route('series.show', $series)}}">
                                        <h5 class="text-capitalize" style="color:rgba(33,37,41,0.8);font-weight:normal;">
                                          {{$series->name}}
                                        </h5>
                                        <img class="float-right m-2 text-bottom" src="{{url($series->getImage()->path)}}" data-bs-hover-animate="pulse" style="position:absolute;bottom:10px;right:10px;height:100px; max-width:200px; object-fit: contain;">
                                      </a>
                                    </div>
                                    @endforeach
                                    @if(count($brand->getSeries()) < 4)
                                        <!-- coming soon -->
                                        <div class="col border-left" style="padding:15px;position:relative;height:200px;">
                                          <table style="height: 100%; width:100%">
                                            <tbody>
                                              <tr>
                                                <td class="align-middle">
                                                  <h4 class="text-capitalize text-center" style="color:rgba(33,37,41,0.8);">More<br>Coming Soon</h4>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  </div>
              @endif
          @endforeach
      </div>
  </div>
@endsection
