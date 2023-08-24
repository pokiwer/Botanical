@extends('masterpage')
@section('title','Botanical - StoreDetail')
@section('content')

<section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url(http://placehold.it/1920x300);">
    <div class="container">
        <div class="row">
            <div class="col-12 pt-lg-23 pt-md-15 pt-sm-10 pt-6 text-center">
                <h1 class="headingIV fwEbold playfair mb-4">Shop</h1>
                <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
                    <li class="mr-2"><a href="home.html">Home</a></li>
                    <li class="mr-2">/</li>
                    <li class="mr-2"><a href="shop.html">Shop</a></li>
                    <li class="mr-2">/</li>
                    <li class="active">Pellentesque aliquet</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- twoColumns -->
<div class="twoColumns container pt-xl-23 pb-xl-20 pt-lg-20 pb-lg-20 py-md-16 py-10">
    <div class="row mb-6">
        <div class="col-12 col-lg-6 order-lg-1">
            <!-- productSliderImage -->
            <div class="productSliderImage mb-lg-0 mb-4">
                <div>
                    <img src="http://placehold.it/570x635" alt="image description" class="img-fluid w-100">
                </div>
                <div>
                    <img src="http://placehold.it/570x635" alt="image description" class="img-fluid w-100">
                </div>
                <div>
                    <img src="http://placehold.it/570x635" alt="image description" class="img-fluid w-100">
                </div>
                <div>
                    <img src="http://placehold.it/570x635" alt="image description" class="img-fluid w-100">
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 order-lg-3">
            <!-- productTextHolder -->
            <div class="productTextHolder overflow-hidden">
                <h2 class="fwEbold mb-2">Pellentesque aliquet</h2>
                <ul class="list-unstyled ratingList d-flex flex-nowrap mb-2">
                    <li class="mr-2"><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
                    <li class="mr-2"><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
                    <li class="mr-2"><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
                    <li class="mr-2"><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
                    <li class="mr-2"><a href="javascript:void(0);"><i class="far fa-star"></i></a></li>
                    <li>( 5 customer reviews )</li>
                </ul>
                <strong class="price d-block mb-5 text-green">65.00 $</strong>
                <p class="mb-5">Aenean id ullamcorper libero. Vestibulum imperdiet nibh. Lorem ullamcorper volutpat. Vestibulum lacinia risus.</p>
                <ul class="list-unstyled productInfoDetail mb-5 overflow-hidden">
                    <li class="mb-2">Product Code: <span>FA008</span></li>
                    <li class="mb-2">Quantity: <span>68 Items</span></li>
                    <li class="mb-2">Shipping tax: <span>Free</span></li>
                </ul>
                <ul class="list-unstyled sizeList d-flex flex-wrap mb-4">
                    <li class="text-uppercase mr-6">Size:</li>
                    <li class="mr-2">
                        <label for="check-1">
                            <input id="check-1" checked="checked" type="checkbox">
                            <span class="fake-input"></span>
                            <span class="fake-label">L</span>
                        </label>
                    </li>
                    <li class="mr-2">
                        <label for="check-2">
                            <input id="check-2" type="checkbox">
                            <span class="fake-input"></span>
                            <span class="fake-label">M</span>
                        </label>
                    </li>
                    <li class="mr-2">
                        <label for="check-3">
                            <input id="check-3" type="checkbox">
                            <span class="fake-input"></span>
                            <span class="fake-label">S</span>
                        </label>
                    </li>
                    <li class="mr-2">
                        <label for="check-4">
                            <input id="check-4" type="checkbox">
                            <span class="fake-input"></span>
                            <span class="fake-label">XL</span>
                        </label>
                    </li>
                    <li class="mr-2">
                        <label for="check-5">
                            <input id="check-5" type="checkbox">
                            <span class="fake-input"></span>
                            <span class="fake-label">XXL</span>
                        </label>
                    </li>
                </ul>
                <ul class="list-unstyled colorList d-flex flex-wrap mb-8">
                    <li class="text-uppercase mr-2">Color:</li>
                    <li class="mr-3"><a href="javascript:void(0);" class="red rounded"></a></li>
                    <li class="mr-3"><a href="javascript:void(0);" class="yellow rounded"></a></li>
                    <li class="mr-3"><a href="javascript:void(0);" class="purple rounded"></a></li>
                </ul>
                <div class="holder overflow-hidden d-flex flex-wrap mb-6">
                    <input type="number" placeholder="1">
                    <a href="javascript:void(0);" class="btn btnTheme btnShop fwEbold text-white md-round py-3 px-4 py-md-3 px-md-4">Add To Cart <i class="fas fa-arrow-right ml-2"></i></a>
                </div>
                <ul class="list-unstyled socialNetwork d-flex flex-wrap mb-sm-11 mb-4">
                    <li class="text-uppercase mr-5">SHARE THIS PRODUCT:</li>
                    <li class="mr-4"><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                    <li class="mr-4"><a href="javascript:void(0);" class="fab fa-google-plus-g"></a></li>
                    <li class="mr-4"><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                    <li class="mr-4"><a href="javascript:void(0);" class="fab fa-pinterest-p"></a></li>
                </ul>
                <ul class="list-unstyled productInfoDetail mb-0">
                    <li class="mb-2">Categories: <a href="javascript:void(0);">Butter &amp; Eggs,</a> <a href="javascript:void(0);">Fruits,</a> <a href="javascript:void(0);">Milk &amp; Cream,</a> <a href="javascript:void(0);">Vegetables</a></li>
                    <li class="mb-2">Tags: <a href="javascript:void(0);">organic food,</a> <a href="javascript:void(0);">fruits,</a> <a href="javascript:void(0);">juice</a></li>
                    <li>Brand: <a href="javascript:void(0);">KFC</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <!-- paggSlider -->
            <div class="paggSlider">
                <div>
                    <div class="imgBlock">
                        <img src="http://placehold.it/170x190" alt="image description" class="img-fluid">
                    </div>
                </div>
                <div>
                    <div class="imgBlock">
                        <img src="http://placehold.it/170x190" alt="image description" class="img-fluid">
                    </div>
                </div>
                <div>
                    <div class="imgBlock">
                        <img src="http://placehold.it/170x190" alt="image description" class="img-fluid">
                    </div>
                </div>
                <div>
                    <div class="imgBlock">
                        <img src="http://placehold.it/170x190" alt="image description" class="img-fluid">
                    </div>
                </div>
                <div>
                    <div class="imgBlock">
                        <img src="http://placehold.it/170x190" alt="image description" class="img-fluid">
                    </div>
                </div>
                <div>
                    <div class="imgBlock">
                        <img src="http://placehold.it/170x190" alt="image description" class="img-fluid">
                    </div>
                </div>
                <div>
                    <div class="imgBlock">
                        <img src="http://placehold.it/170x190" alt="image description" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- tabSetList -->
            <ul class="list-unstyled tabSetList d-flex justify-content-center mb-9">
                <li class="mr-md-20 mr-sm-10 mr-2">
                    <a href="#tab1-0" class="active playfair fwEbold pb-2">Description</a>
                </li>
                <li>
                    <a href="#tab2-0" class="playfair fwEbold pb-2">Reviews ( 2 )</a>
                </li>
            </ul>
            <!-- tab-content -->
            <div class="tab-content mb-xl-11 mb-lg-10 mb-md-8 mb-5">
                <div id="tab1-0" class="active">
                    <p>Aenean id ullamcorper libero. Vestibulum imperdiet nibh. Lorem ullamcorper volutpat. Vestibulum lacinia risus. Etiam sagittis ullamcorper volutpat. Vestibulum lacinia risus sed ligula malesuada volutpat.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                </div>
                <div id="tab2-0">
                    <p>Aenean id ullamcorper libero. Vestibulum imperdiet nibh. Lorem ullamcorper volutpat. Vestibulum lacinia risus. Etiam sagittis ullamcorper volutpat. Vestibulum lacinia risus sed ligula malesuada volutpat.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- featureSec -->
<section class="featureSec container overflow-hidden pt-xl-12 pb-xl-29 pt-lg-10 pb-lg-14 pt-md-8 pb-md-10 py-5">
    <div class="row">
        <!-- mainHeader -->
        <header class="col-12 mainHeader mb-5 text-center">
            <h1 class="headingIV playfair fwEblod mb-4">Related products</h1>
        </header>
    </div>
    <div class="row">
        <!-- featureCol -->
        <div class="col-12 col-sm-6 col-lg-3 featureCol position-relative mb-7">
            <div class="border">
                <div class="imgHolder position-relative w-100 overflow-hidden">
                    <img src="http://placehold.it/270x300" alt="image description" class="img-fluid w-100">
                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
                        <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                    </ul>
                </div>
                <div class="text-center py-5 px-4">
                    <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque aliquet</a></span>
                    <span class="price d-block fwEbold"><del>80.50 $</del> 68.00 $</span>
                    <span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                </div>
            </div>
        </div>
        <!-- featureCol -->
        <div class="col-12 col-sm-6 col-lg-3 featureCol mb-7">
            <div class="border">
                <div class="imgHolder position-relative w-100 overflow-hidden">
                    <img src="http://placehold.it/270x300" alt="image description" class="img-fluid w-100">
                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
                        <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                    </ul>
                </div>
                <div class="text-center py-5 px-4">
                    <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque aliquet</a></span>
                    <span class="price d-block fwEbold">58.00 $</span>
                </div>
            </div>
        </div>
        <!-- featureCol -->
        <div class="col-12 col-sm-6 col-lg-3 featureCol position-relative mb-7">
            <div class="border">
                <div class="imgHolder position-relative w-100 overflow-hidden">
                    <img src="http://placehold.it/270x300" alt="image description" class="img-fluid w-100">
                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
                        <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                    </ul>
                </div>
                <div class="text-center py-5 px-4">
                    <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque aliquet</a></span>
                    <span class="price d-block fwEbold">60.00 $</span>
                    <span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">Hot</span>
                </div>
            </div>
        </div>
        <!-- featureCol -->
        <div class="col-12 col-sm-6 col-lg-3 position-relative featureCol mb-7">
            <div class="border">
                <div class="imgHolder position-relative w-100 overflow-hidden">
                    <img src="http://placehold.it/270x300" alt="image description" class="img-fluid w-100">
                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
                        <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                    </ul>
                </div>
                <div class="text-center py-5 px-4">
                    <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque aliquet</a></span>
                    <span class="price d-block fwEbold"><del>80.50 $</del>65.00 $</span>
                    <span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container mb-lg-24 mb-md-16 mb-10">
    <!-- subscribeSecBlock -->
    <section class="subscribeSecBlock bgCover col-12 pt-lg-24 pb-lg-12 pt-md-16 pb-md-8 py-10" style="background-image: url(http://placehold.it/1170x465)">
        <header class="col-12 mainHeader mb-9 text-center">
            <h1 class="headingIV playfair fwEblod mb-4">Subscribe Our Newsletter</h1>
            <span class="headerBorder d-block mb-5"><img src="images/hbdr.png" alt="Header Border" class="img-fluid img-bdr"></span>
            <p class="mb-6">Enter Your email address to join our mailing list and keep yourself update</p>
        </header>
        <form class="emailForm1 mx-auto overflow-hidden d-flex flex-wrap">
            <input type="email" class="form-control px-4 border-0" placeholder="Enter your mail...">
            <button type="submit" class="btn btnTheme btnShop fwEbold text-white py-3 px-4 py-md-3 px-md-4">Shop Now <i class="fas fa-arrow-right ml-2"></i></button>
        </form>
    </section>
</div>
<!-- footerHolder -->
<aside class="footerHolder overflow-hidden bg-lightGray pt-xl-23 pb-xl-8 pt-lg-10 pb-lg-8 pt-md-12 pb-md-8 pt-10">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 mb-lg-0 mb-4">
                <h3 class="headingVI fwEbold text-uppercase mb-7">Contact Us</h3>
                <ul class="list-unstyled footerContactList mb-3">
                    <li class="mb-3 d-flex flex-nowrap pr-xl-20 pr-0"><span class="icon icon-place mr-3"></span> <address class="fwEbold m-0">Address: London Oxford Street, 012 United Kingdom.</address></li>
                    <li class="mb-3 d-flex flex-nowrap"><span class="icon icon-phone mr-3"></span> <span class="leftAlign">Phone : <a href="javascript:void(0);">(+032) 3456 7890</a></span></li>
                    <li class="email d-flex flex-nowrap"><span class="icon icon-email mr-2"></span> <span class="leftAlign">Email:  <a href="javascript:void(0);">Botanicalstore@gmail.com</a></span></li>
                </ul>
                <ul class="list-unstyled followSocailNetwork d-flex flex-nowrap">
                    <li class="fwEbold mr-xl-11 mr-md-8 mr-3">Follow  us:</li>
                    <li class="mr-xl-6 mr-md-5 mr-2"><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                    <li class="mr-xl-6 mr-md-5 mr-2"><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                    <li class="mr-xl-6 mr-md-5 mr-2"><a href="javascript:void(0);" class="fab fa-pinterest"></a></li>
                    <li class="mr-2"><a href="javascript:void(0);" class="fab fa-google-plus-g"></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 pl-xl-14 mb-lg-0 mb-4">
                <h3 class="headingVI fwEbold text-uppercase mb-6">Information</h3>
                <ul class="list-unstyled footerNavList">
                    <li class="mb-1"><a href="javascript:void(0);">New Products</a></li>
                    <li class="mb-2"><a href="javascript:void(0);">Top Sellers</a></li>
                    <li class="mb-2"><a href="javascript:void(0);">Our Blog</a></li>
                    <li class="mb-2"><a href="javascript:void(0);">About Our Shop</a></li>
                    <li><a href="javascript:void(0);">Privacy policy</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 pl-xl-12 mb-lg-0 mb-4">
                <h3 class="headingVI fwEbold text-uppercase mb-7">My Account</h3>
                <ul class="list-unstyled footerNavList">
                    <li class="mb-1"><a href="javascript:void(0);">My account</a></li>
                    <li class="mb-2"><a href="javascript:void(0);">Discount</a></li>
                    <li class="mb-2"><a href="javascript:void(0);">Orders history</a></li>
                    <li><a href="javascript:void(0);">Personal information</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-2 pl-xl-18 mb-lg-0 mb-4">
                <h3 class="headingVI fwEbold text-uppercase mb-5">PRODUCTS</h3>
                <ul class="list-unstyled footerNavList">
                    <li class="mb-2"><a href="javascript:void(0);">Delivery</a></li>
                    <li class="mb-2"><a href="javascript:void(0);">Legal notice</a></li>
                    <li class="mb-2"><a href="javascript:void(0);">Prices drop</a></li>
                    <li class="mb-2"><a href="javascript:void(0);">New products</a></li>
                    <li><a href="javascript:void(0);">Best sales</a></li>
                </ul>
            </div>
        </div>
    </div>
</aside>

@endsection