@extends('masterpage')
@section('title', 'Botanical - Store')
@section('content')

    <section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url({{ asset('images/b-bg7.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-lg-23 pt-md-15 pt-sm-10 pt-6 text-center">
                    <h1 class="headingIV fwEbold playfair mb-4">Store</h1>
                    <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
                        <li class="mr-2"><a href="/">Home</a></li>
                        <li class="mr-2">/</li>
                        <li class="active">Store</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- twoColumns -->
    <div class="twoColumns container pt-lg-23 pb-lg-20 pt-md-16 pb-md-4 pt-10 pb-4">
        <div class="row">
            <div class="col-12 col-lg-9 order-lg-3">
                <!-- content -->
                <article id="content">
                    <!-- show-head -->
                    <header class="show-head d-flex flex-wrap justify-content-between mb-7">
                        <ul class="list-unstyled viewFilterLinks d-flex flex-nowrap align-items-center">
                            <li class="mr-2"><a href="javascript:void(0);" class="active"><i
                                        class="fas fa-th-large"></i></a></li>
                            <li class="mr-2"><a href="javascript:void(0);"><i class="fas fa-list"></i></a></li>
                            <li class="mr-2">Showing 1–9 of 24 results</li>
                        </ul>
                        <!-- sortGroup -->
                        <div class="sortGroup">
                            <div class="d-flex flex-nowrap align-items-center">
                                <strong class="groupTitle mr-2">Sort by:</strong>
                                <div class="dropdown">
                                    <button class="dropdown-toggle buttonReset" type="button" id="sortGroup"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Default
                                        sorting</button>
                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="sortGroup">
                                        <li><a href="javascript:void(0);">Default Order</a></li>
                                        <li><a href="javascript:void(0);">Default Order</a></li>
                                        <li><a href="javascript:void(0);">Default Order</a></li>
                                        <li><a href="javascript:void(0);">Default Order</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="row">
                        <!-- featureCol -->
                        <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="http://placehold.it/270x300" alt="image description" class="img-fluid w-100">
                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-heart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-eye d-block"></a></li>
                                        <li class="overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-arrow d-block"></a></li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-4">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                            aliquet</a></span>
                                    <span class="price d-block fwEbold"><del>80.50 $</del>68.00 $</span>
                                    <span
                                        class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
                                    <span
                                        class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block ml-8">Sale</span>
                                </div>
                            </div>
                        </div>
                        <!-- featureCol -->
                        <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="http://placehold.it/270x300" alt="image description" class="img-fluid w-100">
                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-heart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-eye d-block"></a></li>
                                        <li class="overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-arrow d-block"></a></li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-4">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                            aliquet</a></span>
                                    <span class="price d-block fwEbold">58.00 $</span>
                                </div>
                            </div>
                        </div>
                        <!-- featureCol -->
                        <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="http://placehold.it/270x300" alt="image description" class="img-fluid w-100">
                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-heart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-eye d-block"></a></li>
                                        <li class="overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-arrow d-block"></a></li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-4">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                            aliquet</a></span>
                                    <span class="price d-block fwEbold">60.00 $</span>
                                    <span
                                        class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
                                </div>
                            </div>
                        </div>
                        <!-- featureCol -->
                        <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="http://placehold.it/270x300" alt="image description"
                                        class="img-fluid w-100">
                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-heart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-eye d-block"></a></li>
                                        <li class="overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-arrow d-block"></a></li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-4">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                            aliquet</a></span>
                                    <span class="price d-block fwEbold"><del>80.50 $</del>68.00 $</span>
                                    <span
                                        class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                                </div>
                            </div>
                        </div>
                        <!-- featureCol -->
                        <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="http://placehold.it/270x300" alt="image description"
                                        class="img-fluid w-100">
                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-heart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-eye d-block"></a></li>
                                        <li class="overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-arrow d-block"></a></li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-4">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                            aliquet</a></span>
                                    <span class="price d-block fwEbold">58.00 $</span>
                                    <span
                                        class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                                </div>
                            </div>
                        </div>
                        <!-- featureCol -->
                        <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="http://placehold.it/270x300" alt="image description"
                                        class="img-fluid w-100">
                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-heart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-eye d-block"></a></li>
                                        <li class="overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-arrow d-block"></a></li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-4">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                            aliquet</a></span>
                                    <span class="price d-block fwEbold">60.00 $</span>
                                    <span
                                        class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
                                </div>
                            </div>
                        </div>
                        <!-- featureCol -->
                        <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="http://placehold.it/270x300" alt="image description"
                                        class="img-fluid w-100">
                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-heart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-eye d-block"></a></li>
                                        <li class="overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-arrow d-block"></a></li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-4">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                            aliquet</a></span>
                                    <span class="price d-block fwEbold">68.00 $</span>
                                </div>
                            </div>
                        </div>
                        <!-- featureCol -->
                        <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="http://placehold.it/270x300" alt="image description"
                                        class="img-fluid w-100">
                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-heart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-eye d-block"></a></li>
                                        <li class="overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-arrow d-block"></a></li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-4">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                            aliquet</a></span>
                                    <span class="price d-block fwEbold">58.00 $</span>
                                    <span
                                        class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">Hot</span>
                                </div>
                            </div>
                        </div>
                        <!-- featureCol -->
                        <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="http://placehold.it/270x300" alt="image description"
                                        class="img-fluid w-100">
                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-heart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-eye d-block"></a></li>
                                        <li class="overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-arrow d-block"></a></li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-4">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                            aliquet</a></span>
                                    <span class="price d-block fwEbold"><del>80.50 $</del>68.00 $</span>
                                    <span
                                        class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                                </div>
                            </div>
                        </div>
                        <!-- featureCol -->
                        <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="http://placehold.it/270x300" alt="image description"
                                        class="img-fluid w-100">
                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-heart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-eye d-block"></a></li>
                                        <li class="overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-arrow d-block"></a></li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-4">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                            aliquet</a></span>
                                    <span class="price d-block fwEbold"><del>80.50 $</del>68.00 $</span>
                                    <span
                                        class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                                </div>
                            </div>
                        </div>
                        <!-- featureCol -->
                        <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="http://placehold.it/270x300" alt="image description"
                                        class="img-fluid w-100">
                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-heart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-eye d-block"></a></li>
                                        <li class="overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-arrow d-block"></a></li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-4">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                            aliquet</a></span>
                                    <span class="price d-block fwEbold">58.00 $</span>
                                </div>
                            </div>
                        </div>
                        <!-- featureCol -->
                        <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="http://placehold.it/270x300" alt="image description"
                                        class="img-fluid w-100">
                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-heart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-eye d-block"></a></li>
                                        <li class="overflow-hidden"><a href="javascript:void(0);"
                                                class="icon-arrow d-block"></a></li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-4">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                            aliquet</a></span>
                                    <span class="price d-block fwEbold">58.00 $</span>
                                    <span
                                        class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">Hot</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pt-3 mb-lg-0 mb-md-6 mb-3">
                            <!-- pagination -->
                            <ul class="list-unstyled pagination d-flex justify-content-center align-items-end">
                                <li><a href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>
                                <li class="active"><a href="javascript:void(0);">1</a></li>
                                <li><a href="javascript:void(0);">2</a></li>
                                <li>...</li>
                                <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-12 col-lg-3 order-lg-1">
                <!-- sidebar -->
                <aside id="sidebar">
                    <!-- widget -->
                    <section class="widget overflow-hidden mb-9">
                        <form action="javascript:void(0);" class="searchForm position-relative border">
                            <fieldset>
                                <input type="search" class="form-control" placeholder="Search product...">
                                <button class="position-absolute"><i class="icon-search"></i></button>
                            </fieldset>
                        </form>
                    </section>
                    <!-- widget -->
                    <section class="widget overflow-hidden mb-9">
                        <h3 class="headingVII fwEbold text-uppercase mb-5">PRODUCT CATEGORIES</h3>
                        <ul class="list-unstyled categoryList mb-0">
                            <li class="mb-5 overflow-hidden"><a href="javascript:void(0);">Dried <span
                                        class="num border float-right">6</span></a></li>
                            <li class="mb-5 overflow-hidden"><a href="javascript:void(0);">Vegetables <span
                                        class="num border float-right">8</span></a></li>
                            <li class="mb-4 overflow-hidden"><a href="javascript:void(0);">Fruits <span
                                        class="num border float-right">9</span></a></li>
                            <li class="mb-5 overflow-hidden"><a href="javascript:void(0);">Juice <span
                                        class="num border float-right">6</span></a></li>
                            <li class="overflow-hidden"><a href="javascript:void(0);">Uncategorized <span
                                        class="num border float-right">1</span></a></li>
                        </ul>
                    </section>
                    <!-- widget -->
                    <section class="widget mb-9">
                        <h3 class="headingVII fwEbold text-uppercase mb-6">Filter by price</h3>
                        <!-- filter ranger form -->
                        <form action="javascript:void(0);" class="filter-ranger-form">
                            <div id="slider-range"></div>
                            <input type="hidden" id="amount1" name="amount1">
                            <input type="hidden" id="amount2" name="amount2">
                            <div class="get-results-wrap d-flex align-items-center justify-content-between">
                                <button type="button"
                                    class="btn btnTheme btn-shop fwEbold md-round px-3 pt-1 pb-2 text-uppercase">Filter</button>
                                <p id="amount" class="mb-0"></p>
                            </div>
                        </form>
                    </section>
                    <!-- widget -->
                    <section class="widget mb-9">
                        <h3 class="headingVII fwEbold text-uppercase mb-6">top rate</h3>
                        <ul class="list-unstyled recentListHolder mb-0 overflow-hidden">
                            <li class="mb-6 d-flex flex-nowrap">
                                <div class="alignleft">
                                    <a href="shop-detail.html"><img src="http://placehold.it/70x80"
                                            alt="image description" class="img-fluid"></a>
                                </div>
                                <div class="description-wrap pl-1">
                                    <h4 class="headingVII mb-1"><a href="shop-detail.html">Vitamin C face wash</a></h4>
                                    <strong class="price fwEbold d-block;">21.00 $</strong>
                                </div>
                            </li>
                            <li class="mb-6 d-flex flex-nowrap">
                                <div class="alignleft">
                                    <a href="shop-detail.html"><img src="http://placehold.it/70x80"
                                            alt="image description" class="img-fluid"></a>
                                </div>
                                <div class="description-wrap pl-1">
                                    <h4 class="headingVII mb-1"><a href="shop-detail.html">Organic vegetables</a></h4>
                                    <strong class="price fwEbold d-block;">21.00 $</strong>
                                </div>
                            </li>
                            <li class="mb-6 d-flex flex-nowrap">
                                <div class="alignleft">
                                    <a href="shop-detail.html"><img src="http://placehold.it/70x80"
                                            alt="image description" class="img-fluid"></a>
                                </div>
                                <div class="description-wrap pl-1">
                                    <h4 class="headingVII mb-1"><a href="shop-detail.html">Organic cabbage</a></h4>
                                    <strong class="price fwEbold d-block;">21.00 $</strong>
                                </div>
                            </li>
                            <li class="mb-6 d-flex flex-nowrap">
                                <div class="alignleft">
                                    <a href="shop-detail.html"><img src="http://placehold.it/70x80"
                                            alt="image description" class="img-fluid"></a>
                                </div>
                                <div class="description-wrap pl-1">
                                    <h4 class="headingVII mb-1"><a href="shop-detail.html">Organic vegetables</a></h4>
                                    <strong class="price fwEbold d-block;">21.00 $</strong>
                                </div>
                            </li>
                            <li class="d-flex flex-nowrap">
                                <div class="alignleft">
                                    <a href="shop-detail.html"><img src="http://placehold.it/70x80"
                                            alt="image description" class="img-fluid"></a>
                                </div>
                                <div class="description-wrap pl-1">
                                    <h4 class="headingVII mb-1"><a href="shop-detail.html">Vitamin C face wash</a></h4>
                                    <strong class="price fwEbold d-block;">21.00 $</strong>
                                </div>
                            </li>
                        </ul>
                    </section>
                    <!-- widget -->
                    <section class="widget mb-9">
                        <h3 class="headingVII fwEbold text-uppercase mb-5">product tags</h3>
                        <ul class="list-unstyled tagNavList d-flex flex-wrap mb-0">
                            <li class="text-center"><a href="javascript:void(0);" class="md-round d-block">Plant</a></li>
                            <li class="text-center"><a href="javascript:void(0);" class="md-round d-block">Floor</a></li>
                            <li class="text-center"><a href="javascript:void(0);" class="md-round d-block">Indoor</a>
                            </li>
                            <li class="text-center"><a href="javascript:void(0);" class="md-round d-block">Green</a></li>
                            <li class="text-center"><a href="javascript:void(0);" class="md-round d-block">Healthy</a>
                            </li>
                            <li class="text-center"><a href="javascript:void(0);" class="md-round d-block">Cactus</a>
                            </li>
                            <li class="text-center"><a href="javascript:void(0);" class="md-round d-block">House
                                    plant</a></li>
                            <li class="text-center"><a href="javascript:void(0);" class="md-round d-block">Office
                                    tree</a></li>
                        </ul>
                    </section>
                </aside>
            </div>
        </div>
    </div>
    <div class="container mb-lg-24 mb-md-16 mb-10">
        <!-- subscribeSecBlock -->
        <section class="subscribeSecBlock bgCover col-12 pt-lg-24 pb-lg-12 pt-md-16 pb-md-8 py-10"
            style="background-image: url(http://placehold.it/1170x465)">
            <header class="col-12 mainHeader mb-9 text-center">
                <h1 class="headingIV playfair fwEblod mb-4">Subscribe Our Newsletter</h1>
                <span class="headerBorder d-block mb-5"><img src="images/hbdr.png" alt="Header Border"
                        class="img-fluid img-bdr"></span>
                <p class="mb-6">Enter Your email address to join our mailing list and keep yourself update</p>
            </header>
            <form class="emailForm1 mx-auto overflow-hidden d-flex flex-wrap">
                <input type="email" class="form-control px-4 border-0" placeholder="Enter your mail...">
                <button type="submit" class="btn btnTheme btnShop fwEbold text-white py-3 px-4 py-md-3 px-md-4">Shop Now
                    <i class="fas fa-arrow-right ml-2"></i></button>
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
                        <li class="mb-3 d-flex flex-nowrap pr-xl-20 pr-0"><span class="icon icon-place mr-3"></span>
                            <address class="fwEbold m-0">Address: London Oxford Street, 012 United Kingdom.</address>
                        </li>
                        <li class="mb-3 d-flex flex-nowrap"><span class="icon icon-phone mr-3"></span> <span
                                class="leftAlign">Phone : <a href="javascript:void(0);">(+032) 3456 7890</a></span></li>
                        <li class="email d-flex flex-nowrap"><span class="icon icon-email mr-2"></span> <span
                                class="leftAlign">Email: <a href="javascript:void(0);">Botanicalstore@gmail.com</a></span>
                        </li>
                    </ul>
                    <ul class="list-unstyled followSocailNetwork d-flex flex-nowrap">
                        <li class="fwEbold mr-xl-11 mr-md-8 mr-3">Follow us:</li>
                        <li class="mr-xl-6 mr-md-5 mr-2"><a href="javascript:void(0);" class="fab fa-facebook-f"></a>
                        </li>
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
