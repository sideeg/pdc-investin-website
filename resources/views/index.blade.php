@extends('layouts.main')

@section('content')


    <!-- HOME START-->
    <section class="bg-half" style="background-image: url('images/home/bg-home-7.jpg');object-fit: contain;" id="home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container title-perticle">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="title-heading text-center">
                                <img src="images/Investin-logo.png" class="mb-2 home-logo" alt="missing_logo">
                                <!-- <h1 class="text-green">INVESTIN</h1> -->

                                <h2 class="text-black text-uppercase word-keep">{{ __('content.investmentCompany')}}</h2>
                                <div class="row justify-content-center">
                                <p class="text-black landing-3 col-lg-6 col-md-6 col-sm-12">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit cumque voluptatem ipsam ab hic explicabo reprehenderit est exercitationem animi nemo quas accusantium maxime, delectus vel nisi vero obcaecati ipsa nostrum.
                                
                                </p>
                                    
                                </div>
                                <!-- <div class="text-center subcribe-form mt-5">
                                    <form action="#">
                                        <input type="text" name="email" placeholder="E-mail">
                                        <button type="submit" class="btn btn-custom">Subcribe</button>
                                    </form>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOME END--> 

    <!-- ABOUT US -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-heading">
                        <h2 class="color-green text-center word-keep dot">{{ __('content.aboutUs')}}</h2>
                        <div class="row justify-content-center">
                        <p class="mx-auto my-3 text-center col-lg-6 col-md-6 col-sm-12">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                <div id="history" class="row">
                                    <div class="row time-line-row mx-2">
                                        <div class="col-12 row m-0 time-line">
                                            <div class="col-12 text-green font-b">2014</div>
                                            <div class="col-12 mb-5">Establishment of the company</div>
                                        </div>
                                        <div class="col-12 row  m-0 time-line">
                                            <div class="col-12 text-green font-b">2015 - 2018</div>
                                            <div class="col-12 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, numquam!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima numquam beatae aliquid architecto necessitatibus voluptatibus, asperiores accusamus aspernatur quas exercitationem quos at. Ad dolorum, magni tempora sapiente voluptatum deserunt deleniti fugit nostrum veritatis perspiciatis vel error necessitatibus cupiditate atque magnam recusandae voluptate adipisci ut! Id numquam, nam, accusantium earum totam temporibus tempora maiores natus repudiandae eius, possimus ducimus quod quisquam.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT US END -->
    
    <!-- SECTORS -->
    <section class="section bg-green">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-heading">
                        <h2 class="text-uppercase text-center text-white word-keep dot-white">{{ __('content.investmentSectors')}}</h2>
                        <div class="row justify-content-center">
                        <p class="mx-auto my-4 text-center text-white col-lg-6 col-md-6 col-sm-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, voluptates?</p>

                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="feature">
                                        <div class="fe-icon row ">
                                            <!-- <i class="fas fa-seedling"></i> -->
                                            <img src="images/blog/blog-10.jpg" alt="" srcset="">
                                            <h3 class="word-keep">Agriculture Sector</h3>
                                        </div>
                                        <div class="fe-head">
                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled</p>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-md-4">
                                    <div class="feature">
                                        <div class="fe-icon row">
                                            <!-- <i class="fas fa-desktop"></i> -->
                                            <img src="images/blog/blog-10.jpg"  alt="" srcset="">
                                            <h3 class="word-keep">Technology Sector</h3>
                                        </div>
                                        <div class="fe-head">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of at its layout.</p>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-md-4">
                                    <div class="feature">
                                        <div class="fe-icon row">
                                            <!-- <i class="fas fa-industry"></i> -->
                                            <img src="images/blog/blog-10.jpg"  alt="" srcset="">
                                            <h3 class="word-keep">Industry Sector</h3>
                                        </div>
                                        <div class="fe-head">
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their text, and a search.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTORS END -->
    
    <!-- OUR NETWORK -->
    <section class="section bg-grey">
        <div class="container">
            <div class="title-heading text-center">
                <h2 class="text-uppercase word-keep dot">{{ __('content.ourNetwork')}}</h2>
                <p class="mx-auto text-center my-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, voluptates?</p>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class=" network">
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> -->
                                    <img src="images/about/about-page.jpg" class="img-responsive img-network" alt="" srcset="">
                                    <!-- <h4 class="text-uppercase mt-2">cat</h4> -->

                                <!-- </div> -->
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="head-network">
                                        <h3 class="text-uppercase">cat</h3>
                                        <p>Lorem ipsum dolor sit.</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 ">
                            <div class=" network">
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> -->
                                    <img src="images/about/about-page.jpg" class="img-responsive img-network" alt="" srcset="">
                                <!-- </div> -->
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="head-network">
                                        <h3 class="text-uppercase">cat</h3>
                                        <p>Lorem ipsum dolor sit.</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 ">
                            <div class=" network">
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> -->
                                    <img src="images/about/about-page.jpg" class="img-responsive img-network" alt="" srcset="">
                                <!-- </div> -->
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="head-network">
                                        <h3 class="text-uppercase">cat</h3>
                                        <p>Lorem ipsum dolor sit.</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                                                            
                        <div class="col-lg-4 col-md-4 col-sm-6 ">
                            <div class=" network">
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> -->
                                    <img src="images/about/about-page.jpg" class="img-responsive img-network" alt="" srcset="">
                                <!-- </div> -->
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="head-network">
                                        <h3 class="text-uppercase">cat</h3>
                                        <p>Lorem ipsum dolor sit.</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 ">
                            <div class=" network">
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> -->
                                    <img src="images/about/about-page.jpg" class="img-responsive img-network" alt="" srcset="">
                                <!-- </div> -->
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="head-network">
                                        <h3 class="text-uppercase">cat</h3>
                                        <p>Lorem ipsum dolor sit.</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class=" network">
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> -->
                                    <img src="images/about/about-page.jpg" class="img-responsive img-network" alt="" srcset="">
                                <!-- </div> -->
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="head-network">
                                        <h3 class="text-uppercase">cat</h3>
                                        <p>Lorem ipsum dolor sit.</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR NETWORK END -->

    <!-- BLOG -->
    <section class="section bg-green">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-heading text-center">
                        <h2 class="text-uppercase text-white word-keep dot-white">{{ __('content.blog')}}</h2>
                        <p class="mx-auto my-5 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, voluptates?</p>
                        <div class="container">
                            <div class="row blog align-items-start">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="post-articles">
                                        <div class="first-section">
                                            <img src="images/about/about-page.jpg" class="img-responsive img-blog-top" alt="" srcset="">
                                            <div class="first-section-overlay"></div>
                                            <h4 class="blog-title text-white word-keep">Sunset in North Sudan</h4>
                                        </div>
                                        <div class="second-section">
                                            <p class="text-left mx-4 mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nemo odio alias molestiae obcaecati facilis neque esse minus assumenda possimus.
                                            </p>
                                            <p class="text-muted text-small text-left mx-4 pb-4 d-block row"><i class="mdi mdi-calendar text-black mx-1"></i> <span class=""> 12 November 2020</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="post-articles">
                                        <div class="first-section">
                                            <img src="images/about/about-page.jpg" class="img-responsive img-blog-top" alt="" srcset="">
                                            <div class="first-section-overlay"></div>
                                            <h4 class="blog-title text-white word-keep">Sunset in North Sudan</h4>
                                        </div>
                                        <div class="second-section">
                                            <p class="text-left  mx-4 mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nemo odio alias molestiae obcaecati facilis neque esse minus assumenda possimus.
                                            </p>
                                            <p class="text-muted text-small text-left mx-4 pb-4">12 November 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="post-articles">
                                        <!-- <div class="first-section img-blog-top" style="background-image: url(images/about/about-page.jpg);">
                                            <img src="images/about/about-page.jpg" class="img-responsive " alt="" srcset="">
                                            <h4>Sunset in North Sudan</h4>
                                        </div> -->
                                        <div class="first-section">
                                            <img src="images/about/about-page.jpg" class="img-responsive img-blog-top" alt="" srcset="">
                                            <div class="first-section-overlay"></div>
                                            <h4 class="blog-title text-white word-keep">Sunset in North Sudan</h4>
                                        </div>
                                        <div class="second-section">
                                            <p class="text-left  mx-4 mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nemo odio alias molestiae obcaecati facilis neque esse minus assumenda possimus.
                                            </p>
                                            <p class="text-muted text-small text-left mx-4 pb-4">12 November 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-center text-white mt-5 more-arrow">{{ __('content.more')}}</h4>
        </div>
    </section>
    <!-- BLOG END -->
    
    <!-- SUCCESS -->
    <section class="section bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-heading">
                        <h2 class="text-uppercase text-center text-green dot">{{ __('content.successStories')}}</h2>
                        <p class="mx-auto my-5 text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, voluptates?</p>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div id="owl-success-stories" class="owl-crousel">
                                    <div class="col-lg-4 col-md-6 col-sm-12 bg-white m-2 success-story item">
                                        <div class="row w-100">
                                            <div class="col-3">
                                                <!-- <a href="https://fontawesome.com/icons?d=gallery&q=arrow&m=free" target="_blank"> -->
                                                <img src="images/about/about-page.jpg" class="success-avatar my-2" alt="" srcset="">
                                                <!-- </a> -->
                                            </div>
                                            <div class="col-9 success-name">
                                                <h5 class="my-2">mohammed saeed</h5>
                                                <span>3 Days Later</span>
                                            </div>
                                        </div>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic autem ratione laborum modi, obcaecati saepe dolorum aliquid? Magni, nulla minus!</p>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-6 col-sm-12 bg-white m-2 success-story item">
                                        <div class="row w-100">
                                            <div class="col-3">
                                            <img src="images/about/about-page.jpg" class="success-avatar my-2" alt="" srcset="">
                                            </div>
                                            <div class="col-9">
                                                <h5 class="my-2">mohammed saeed</h5>
                                                <span>3 Days Later</span>
                                            </div>
                                        </div>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic autem ratione laborum modi, obcaecati saepe dolorum aliquid? Magni, nulla minus!</p>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12 bg-white m-2 success-story item">
                                        <div class="row w-100">
                                            <div class="col-3">
                                            <img src="images/about/about-page.jpg" class="success-avatar my-2" alt="" srcset="">
                                            </div>
                                            <div class="col-9">
                                                <h5 class="my-2">mohammed saeed</h5>
                                                <span>3 Days Later</span>
                                            </div>
                                        </div>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic autem ratione laborum modi, obcaecati saepe dolorum aliquid? Magni, nulla minus!</p>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12 bg-white m-2 success-story item">
                                        <div class="row w-100">
                                            <div class="col-3">
                                            <img src="images/about/about-page.jpg" class="success-avatar my-2" alt="" srcset="">
                                            </div>
                                            <div class="col-9">
                                                <h5 class="my-2">mohammed saeed</h5>
                                                <span>3 Days Later</span>
                                            </div>
                                        </div>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic autem ratione laborum modi, obcaecati saepe dolorum aliquid? Magni, nulla minus!</p>
                                    </div>
                                    
                                </div>
                                
                                <!-- <div class="col-lg-4 col-md-6 col-sm-12">

                                    <div id="testi-two" class="owl-carousel">
                                        <div class="testi-box">
                                            <div class="bg-white m-2 success-story">
                                                <div class="row">
                                                    <div class="col-3">
                                                    <img src="images/about/about-page.jpg" class="success-avatar m-2" alt="" srcset="">
                                                    </div>
                                                    <div class="col-9">
                                                        <h4>mohammed saeed</h4>
                                                        <span>3 Days Later</span>
                                                    </div>
                                                </div>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic autem ratione laborum modi, obcaecati saepe dolorum aliquid? Magni, nulla minus!</p>
                                            </div>
                                        </div>
                                        <div class="testi-box">
                                            <div class="bg-white m-2 success-story">
                                                <div class="row">
                                                    <div class="col-3">
                                                    <img src="images/about/about-page.jpg" class="success-avatar m-2" alt="" srcset="">
                                                    </div>
                                                    <div class="col-9">
                                                        <h4>mohammed saeed</h4>
                                                        <span>3 Days Later</span>
                                                    </div>
                                                </div>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic autem ratione laborum modi, obcaecati saepe dolorum aliquid? Magni, nulla minus!</p>
                                            </div>
                                        </div>
                                        <div class="testi-box">
                                            <div class="bg-white m-2 success-story">
                                                <div class="row">
                                                    <div class="col-3">
                                                    <img src="images/about/about-page.jpg" class="success-avatar m-2" alt="" srcset="">
                                                    </div>
                                                    <div class="col-9">
                                                        <h4>mohammed saeed</h4>
                                                        <span>3 Days Later</span>
                                                    </div>
                                                </div>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic autem ratione laborum modi, obcaecati saepe dolorum aliquid? Magni, nulla minus!</p>
                                            </div>
                                        </div>
                                    </div>

                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SUCCESS END -->

    <!-- CONTACT US -->
    <section class="section bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-heading">
                        <h2 class="text-uppercase text-center text-green word-keep dot">{{ __('content.contactUs')}}</h2>

                        <div class="container mt-5">
                            <div class="row justify-content-space">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <form action="#" class="p-4 bg-green custom-form">
                                        <div class="">
                                            <div class="input-data">
                                                <input type="text" required >
                                                <div class="underline"></div>
                                                <label for="">{{ __('content.fullName')}}</label>
                                            </div>
                                            <div class="input-data">
                                                <input type="text" required>
                                                <div class="underline"></div>
                                                
                                                <label for="">{{ __('content.email')}}</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="message" class="text-white">{{__('content.message')}}</label>
                                                <textarea name="" id="message" class="form-control" cols="30" rows="10"></textarea>

                                            </div>

                                            <button type="submit" class="btn btn-contact text-uppercase py-2"> {{ __('content.sendMessage')}}</button>

                                        </div>
                                    </form>
                                
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                                    <div class="map video-app-box mt-30">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" style="border: 1px solid #fff;width:100%;height:20rem" allowfullscreen></iframe>
                                    </div>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ea corporis aut explicabo fugit aperiam qui commodi, atque tempore dolorem molestiae, necessitatibus perferendis totam? Architecto molestiae, impedit vel nam recusandae distinctio illo. Culpa cupiditate dolor eaque nemo, neque quas explicabo!
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="contact-info">
                                        <div class="contact-row m-2 row"><span class="icon m-2"><i class="fas fa-at m-3"></i></span><span>INVOICE@GMAIL.COM</span></div>
                                        <div class="contact-row m-2 row"><span class="icon m-2"><i class="fas fa-at m-3"></i></span><span>+123456789</span><span>+123456789</span></div>
                                        <div class="contact-row m-2 row"><span class="icon m-2"><i class="fas fa-map-marker-alt m-3"></i></span><span>SUDAN, KHARTOUM KH STREET BUILDING 22</span></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT US END -->



@endsection
