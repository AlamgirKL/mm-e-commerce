
<section class="product-tabs section-padding position-relative">
    <div class="container">
        <div class="section-title style-2 wow animate__animated animate__fadeIn">
            <h3>{{ $skip_cat_1->cat_name }}</h3>

        </div>
        <!--End nav-tabs-->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row product-grid-4">


                    @foreach($skip_prod_0 as $item)
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="{{ url('product/details/'.$item->id.'/'.$item->product_slug) }}">
                                        <img class="default-img" src="{{asset($item->product_thumbnail)}}" alt="" />
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                @php
                                    $amount = $item->selling_price - $item->discount_price;
                                    $discount =  ($amount/$item->selling_price) * 100;
                                    $vendor =  App\Models\User::where('id',$item->vendor_id)->first();
                                    $category =  App\Models\Category::where('id',$item->category_id)->first();
                                @endphp
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    @if($item->selling_price == NULL)
                                        <span class="new">New</span>
                                    @else
                                        <span class="hot">Save {{ round($discount) }}%</span>
                                    @endif
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">{{ $category->cat_name }}</a>
                                </div>
                                <h2><a href="{{ url('product/details/'.$item->id.'/'.$item->product_slug) }}">{{ $item->product_name }}</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    @if($item->vendor_id == NULL)
                                        <span class="font-small text-muted">By <a href="vendor-details-1.html">Owner</a></span>
                                    @else
                                        <span class="font-small text-muted">By <a href="vendor-details-1.html">{{ $vendor->name }}</a></span>
                                    @endif
                                </div>
                                <div class="product-card-bottom">
                                    @if($item->discount_price == NULL)
                                        <div class="product-price">
                                            <span>{{ $item->selling_price }}</span>
                                        </div>
                                    @else
                                        <div class="product-price">
                                            <span>{{ $item->discount_price }}</span>
                                            <span class="old-price">{{ $item->selling_price }}</span>
                                        </div>
                                    @endif
                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    @endforeach

                </div>
                <!--End product-grid-4-->
            </div>


        </div>
        <!--End tab-content-->
    </div>


</section>