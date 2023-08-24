@extends('masterpage')
@section('title', 'Botanical - Contact')
@section('content')

    <section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url({{ asset('images/b-bg7.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-lg-23 pt-md-15 pt-sm-10 pt-6 text-center">
                    <h1 class="headingIV fwEbold playfair mb-4">Contact</h1>
                    <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
                        <li class="mr-2"><a href="/">Home</a></li>
                        <li class="mr-2">/</li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="contactSec container pt-xl-24 pb-xl-23 py-lg-20 pt-md-16 pb-md-10 pt-10 pb-0">
        <div class="row">
            <div class="col-12">
                <ul class="list-unstyled contactListHolder mb-0 d-flex flex-wrap text-center">
                    <li class="mb-lg-0 mb-6">
                        <span class="icon d-block mx-auto bg-lightGray py-4 mb-4"><i
                                class="fas fa-map-marker-alt"></i></span>
                        <strong class="title text-uppercase playfair mb-5 d-block">address</strong>
                        <address class="mb-0">7th floor - Palace Building - 221B Walk of Fame -<span class="d-block">
                                London - UK</span></address>
                    </li>
                    <li class="mb-lg-0 mb-6">
                        <span class="icon d-block mx-auto bg-lightGray py-4 mb-3"><i class="fas fa-headphones"></i></span>
                        <strong class="title text-uppercase playfair mb-5 d-block">phone</strong>
                        <a href="tel:84123456789" class="d-block">(+84) - 123 - 456 - 789</a>
                        <a href="tel:84321654987" class="d-block">(+84) - 321 - 654 - 987</a>
                    </li>
                    <li class="mb-lg-0 mb-6">
                        <span class="icon d-block mx-auto bg-lightGray py-5 mb-3"><i class="fas fa-envelope"></i></span>
                        <strong class="title text-uppercase playfair mb-5 d-block">email</strong>
                        <a href="#" class="d-block">Two-support@Two.lnk</a>
                        <a href="#" class="d-block">info@Two.lnk</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- mapHolder -->
    <div class="mapHolder">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.91477127143!2d-74.11976341808828!3d40.697403441901386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1573223498837!5m2!1sen!2s"
            style="border:0;" allowfullscreen="">
        </iframe>
    </div>
    <section class="contactSecBlock container pt-xl-23 pb-xl-24 pt-lg-20 pb-lg-10 pt-md-16 pb-md-8 py-10">
        <div class="row">
            <header class="col-12 mainHeader mb-10 text-center">
                <h1 class="headingIV playfair fwEblod mb-7">Get In Touch</h1>
                <p>Lorem ipsum dolor consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna<br class="d-block"> aliquam erat volutpatcommodo consequat.</p>
            </header>
        </div>
        <div class="row">
            <div class="col-12">
                <form class="contactForm">
                    <div class="d-flex flex-wrap row1 mb-md-1">
                        <div class="form-group coll mb-5">
                            <input type="text" id="name" class="form-control" name="name"
                                placeholder="Your name  *">
                        </div>
                        <div class="form-group coll mb-5">
                            <input type="email" class="form-control" id="email" name="Email"
                                placeholder="Your email  *">
                        </div>
                        <div class="form-group coll mb-5">
                            <input type="tel" class="form-control" id="tel" name="tel"
                                placeholder="Telephone number  *">
                        </div>
                    </div>
                    <div class="form-group w-100 mb-6">
                        <textarea class="form-control" placeholder="Meesage  *"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="btn btnTheme btnShop md-round fwEbold text-white py-3 px-4 py-md-3 px-md-4">Send
                            Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
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
