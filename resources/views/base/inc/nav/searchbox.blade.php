<!--Search Engine-->

<?php
  $categories = App\Models\Shop\Category::all();
?>
<!--Search Engine-->
<div class="col-5 mt-1">
    <div class="input-group border-bottom border-secondary">
      <div class="input-group-prepend">
        <!--Search Button-->
        <button class="btn bg-white rounded-0 no-outline">
          <span class="fa fa-search" style="opacity:.6;"></span>
        </button>
      </div>
      <input id="siteSearchInput" class="form-control no-outline border-0 pb-0 pl-3 pr-3 rounded-0 mb-0" style="font-size:13px;" type="text" placeholder="Search by Category, Brand, Series or Product Name...">
    </div>

    <!--Search Items-->
    <div id="search_box" class="rounded-0 p-0 bg-white collapse border" id="searchBoxcollapse" style="position:absolute; top:60px; left:0px; width:800px; height:370px;">
        <div id="searchlist" style="width:798px; margin-top:10px;">
            <div class="row m-0 p-0">
                <!--Products-->
                <div class="col-6">
                  <h5 class="border-bottom">Products</h5>
                  <div class="" style="height:310px; overflow-y: auto;">
                    @foreach($categories as $category)
                      @foreach($category->getBrands() as $brand)
                        @foreach($brand->getSeries() as $series)
                          @foreach($series->getProducts() as $product)
                            <div id="slist" class="row m-0 p-2 pl-0 pr-0 mt-1 mb-1 border rounded-0 bg-light">
                              <div class="col-2 p-0">
                                <a class="text-dark" href="{{ route('products.show', $product)}}" style="text-decoration:none;">
                                  <img class="m-0 p-0"src="{{url($product->getImage()->path)}}" alt="" style="width:100%; object-fit:contain;">
                                </a>
                              </div>
                              <div class="col-10 p-0 pl-2">
                                <a class="text-dark" href="{{ route('products.show', $product)}}" style="text-decoration:none;">
                                  <p class="m-0 p-0 text-justify"style="font-size:13px;font-family:'Times New Roman', Times, serif;">
                                    {{$product->name}}
                                  </p>

                                  <div class="row m-0 p-0 mt-2">
                                    <div class="col-6 p-0 m-0">
                                      <p class="m-0 p-0 font-weight-bold"style="font-size:12px;font-family:'Times New Roman', Times, serif;">
                                        {{$product->getNormalPrice()}}
                                      </p>
                                      <p class="m-0 p-0 font-weight-bold"style="font-size:12px;font-family:'Times New Roman', Times, serif;">
                                        {{rand(0,20)}} Units Left
                                      </p>
                                    </div>
                                    <div class="col-6 p-0 m-0 text-right">
                                      <p class="m-0 p-0 text-danger font-weight-bold"style="font-size:15px;font-family:'Times New Roman', Times, serif;">
                                        {{$product->getDiscount()}}
                                      </p>
                                    </div>
                                  </div>

                                  <!--hidden names-->
                                  <p class="m-0 p-0 d-none">
                                    {{$category->name}}
                                  </p>
                                </a>
                              </div>
                            </div>
                          @endforeach
                        @endforeach
                      @endforeach
                    @endforeach
                  </div>
                </div>

                <!--Series-->
                <div class="col-3">
                  <h5 class="border-bottom">Series</h5>
                  <div class="" style="height:310px; overflow-y: auto;">
                    @foreach($categories as $category)
                      @foreach($category->getBrands() as $brand)
                        @foreach($brand->getSeries() as $series)
                          <a id="slist" class="text-dark" href="{{route('series.show', $series)}}" style="text-decoration:none;">
                            <div class="row m-0 p-2 pl-0 pr-0 mt-1 mb-1 border rounded-0 bg-light">
                              <div class="col-2 p-0">
                                <img class="m-0 p-0"src="{{url($series->getImage()->path)}}" alt="" style="width:100%; object-fit:contain;">
                              </div>
                              <div class="col p-0 m-0">
                                <p class="m-0 p-0 text-justify text-right" style="font-size:15px;font-family:'Times New Roman', Times, serif;">
                                  {{$series->name}}
                                </p>

                                <!--hidden names-->
                                <p class="m-0 p-0 d-none">
                                  {{$category->name}}
                                </p>
                                <p class="m-0 p-0 d-none">
                                  {{$brand->name}}
                                </p>
                                @foreach($series->getProducts() as $product)
                                  <p class="m-0 p-0 d-none">
                                    {{$product->name}}
                                  </p>
                                @endforeach
                              </div>
                            </div>
                          </a>
                        @endforeach
                      @endforeach
                    @endforeach
                  </div>
                </div>

                <!--Brands-->
                <div class="col-3">
                  <h5 class="border-bottom">Brands</h5>
                  <div class="" style="height:310px; overflow-y: auto;">
                    @foreach($categories as $category)
                      @foreach($category->getBrands() as $brand)
                        <a id="slist" class="text-dark" href="{{route('brands.show', $brand)}}" style="text-decoration:none;">
                          <div class="row m-0 p-2 pl-0 pr-0 mt-1 mb-1 border rounded-0 bg-light">
                            <div class="col-2 p-0">
                              <img class="m-0 p-0"src="{{url($brand->getLogo()->path)}}" alt="" style="width:100%; object-fit:contain;">
                            </div>
                            <div class="col p-0 m-0">
                              <p class="m-0 p-0 text-justify text-right" style="font-size:15px;font-family:'Times New Roman', Times, serif;">
                                {{$brand->name}}
                              </p>

                              <!--hidden names-->
                              <p class="m-0 p-0 d-none">
                                {{$category->name}}
                              </p>
                              @foreach($brand->getSeries() as $series)
                                <p class="m-0 p-0 d-none">
                                  {{$series->name}}
                                </p>
                                @foreach($series->getProducts() as $product)
                                  <p class="m-0 p-0 d-none">
                                    {{$product->name}}
                                  </p>
                                @endforeach
                              @endforeach
                            </div>
                          </div>
                        </a>
                      @endforeach
                    @endforeach
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--search Box Script-->
<script>
  $(document).ready(function(){
    $("#siteSearchInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      if(value != 0){
        $("#searchlist #slist").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
        $('#search_box').css('display', 'block');
      }
      else {
        $('#search_box').css('display', 'none');
      }
    });

    $(document).click(function (e) {
      e.stopPropagation();
      //check if the clicked area is dropDown or not
      if ($('#search_box').has(e.target).length === 0) {
        $('#siteSearchInput').val('');
        $('#search_box').hide();
      }
    });
  });
</script>
