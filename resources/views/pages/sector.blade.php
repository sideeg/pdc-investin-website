@extends('layouts.main')

@section('content')


<!-- HOME START-->
<section class="bg-half" style="background-image: url('{{ asset($sector[0]->background_image_full_path) }}');" id="home">
    <div class="bg-overlay"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container title-perticle">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="title-heading text-center">
                            <!-- <img src="images/logo.png" class="mb-2" alt="missing_logo" width="400"> -->
                            <div class="icon-heading text-center">
                                {{-- <i class="fas fa-seedling d-block"></i> --}}
                                <img src="{{ asset($sector[0]->icon_full_path) }}" class="mb-2" alt="missing_logo" width="400">
                            </div>
                            <h1 class="text-black word-keep text-uppercase">
                                @if (App::getLocale() == 'en')
                                    {{ $sector[0]->sector_name_en}}
                                @else
                                    {{ $sector[0]->sector_name_ar}}
                                @endif
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HOME END--> 

<section class="bg-white">
    <div class="d-flex justify-content-center">
        <div class="sector bg-white">
            <div class="row m-5">
                <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center">
                    <!-- <img src="images/about/about-pic.jpg" class="" style="border-radius: 30px;" width="350" alt="" srcset="" > -->

                    <div class="intro-container">
                        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
            
                            <ol class="carousel-indicators">
                                <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#mycarousel" data-slide-to="1" ></li>
                                <li data-target="#mycarousel" data-slide-to="1" ></li>
                            </ol>
            
                            <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
            
                                <div class="carousel-background img-carousel"><img src="{{ asset($sector[0]->image1_full_path) }}" alt=""></div>
                                <div class="carousel-container">
                                <div class="carousel-content">
                                    <!-- <h3 class="text-white">title</h3>
                                    <p class="text-white" style="color:black;">discription</p> -->
                                    <!-- {{-- <a href="#partners" class="btn-get-started scrollto">Get Started</a> --}} -->
                                </div>
                                </div>  
                                <div class="carousel-container">
                                    <div class="carousel-content">
                                    <!-- <h2 class="scrollto"></h2> -->
                                    <!-- <a href="#featured-services" class="btn-get-started scrollto"></a> -->
                                    </div>
                                </div>
                            </div>
                            
                            <div class="carousel-item">
            
                                <div class="carousel-background img-carousel"><img src="{{ asset($sector[0]->image2_full_path) }}" alt=""></div>
                                <div class="carousel-container">
                                <div class="carousel-content">
                                    <!-- <h4 class="text-black">title</h4>
                                    <p class="text-black" style="color:black;">Discription</p> -->
                                    <!-- {{-- <a href="#partners" class="btn-get-started scrollto">Get Started</a> --}} -->
                                </div>
                                </div>  
                                <div class="carousel-container">
                                    <div class="carousel-content">
                                    <!-- <h2 class="scrollto"></h2> -->
                                    <!-- <a href="#featured-services" class="btn-get-started scrollto"></a> -->
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
            
                                <div class="carousel-background img-carousel"><img src="{{ asset($sector[0]->image3_full_path) }}" alt=""></div>
                                <div class="carousel-container">
                                <div class="carousel-content">
                                    <!-- <h3 class="text-white">title</h3>
                                    <p class="text-white" style="color:black;">discription</p> -->
                                    <!-- {{-- <a href="#partners" class="btn-get-started scrollto">Get Started</a> --}} -->
                                </div>
                                </div>  
                                <div class="carousel-container">
                                    <div class="carousel-content">
                                    <!-- <h2 class="scrollto"></h2> -->
                                    <!-- <a href="#featured-services" class="btn-get-started scrollto"></a> -->
                                    </div>
                                </div>
                            </div>
                                
                            </div>
                            <!-- {{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% carousel right to left %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  --}} -->
                            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
            
                                <!-- <span class=" fas fa-chevron-left" aria-hidden="true"></span> -->
                            <span class="sr-only">Previous</span>
                            </a>
            
                            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                            
                                <!-- <span class="fas fa-chevron-right" aria-hidden="true"></span> -->
                            
                            <span class="sr-only">Next</span>
                            </a>
            
                        </div>
                    </div>


                </div>
                <div class="col-lg-6 col-md-12 col-sm-12  d-flex align-items-center">
                    <p class="text-center my-3">
                        @if (App::getLocale() == 'en')
                            {{ $sector[0]->text_en}}
                        @else
                            {{ $sector[0]->text_ar}}
                        @endif
                    </p>
                </div>
            </div>
            <div class="row bg-grey align-items-center mx-0">
                <div class="text-center my-4 col-lg-3 col-md-3">
                    <div class="skills chart" data-percent="85">
                        <div class="pie-chart-value">85%</div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="sector-shares">
                        <h3 class="text-green text-uppercase">First Session</h3>
                        <p class="text-capitalize"><span>{{ __('content.numberOfShares')}}</span> <span class="text-green mx-2">1000</span></p>
                        <p class="text-capitalize"><span>{{ __('content.remainingShare')}}</span> <span class="text-warning mx-2">100</span></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 my-3 d-flex justify-content-center">
                    <a href="#" data-toggle="modal" data-target="#largeModal" class="btn-blog mx-3 py-2 px-4">{{ __('content.details')}}</a>
                    <a href="order.html" class="btn-order mx-3 py-2 px-4">{{ __('content.order')}}</a>
                </div>
            </div>
            <div class="row bg-white align-items-center mx-0">
                <div class="text-center my-4 col-lg-3 col-md-3">
                    <div class="skills chart" data-percent="74">
                        <div class="pie-chart-value">74%</div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="sector-shares">
                        <h3 class="text-green text-uppercase">First Session</h3>
                        <p class="text-capitalize"><span>Number of shares</span> <span class="text-green mx-2">1000</span></p>
                        <p class="text-capitalize"><span>Remaining shares</span> <span class="text-warning mx-2">100</span></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 my-3 d-flex justify-content-center">
                    <a href="#" data-toggle="modal" data-target="#largeModal" class="btn-blog mx-3 py-2 px-4">Details</a>
                    <a href="order.html" class="btn-order mx-3 py-2 px-4">Order</a>
                </div>
            </div>
            <div class="row bg-grey align-items-center mx-0">
                <div class="text-center my-4 col-lg-3 col-md-3">
                    <div class="skills chart" data-percent="85">
                        <div class="pie-chart-value">85%</div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="sector-shares">
                        <h3 class="text-green text-uppercase">First Session</h3>
                        <p class="text-capitalize"><span>Number of shares</span> <span class="text-green mx-2">1000</span></p>
                        <p class="text-capitalize"><span>Remaining shares</span> <span class="text-warning mx-2">100</span></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 my-3 d-flex justify-content-center">
                    <a href="#" data-toggle="modal" data-target="#largeModal" class="btn-blog mx-3 py-2 px-4">Details</a>
                    <a href="order.html" class="btn-order mx-3 py-2 px-4">Order</a>
                </div>
            </div>
            <div class="row bg-white align-items-center mx-0">
                <div class="text-center my-4 col-lg-3 col-md-3">
                    <div class="skills chart" data-percent="50">
                        <div class="pie-chart-value">50%</div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="sector-shares">
                        <h3 class="text-green text-uppercase">First Session</h3>
                        <p class="text-capitalize"><span>Number of shares</span> <span class="text-green mx-2">1000</span></p>
                        <p class="text-capitalize"><span>Remaining shares</span> <span class="text-warning mx-2">100</span></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 my-3 d-flex justify-content-center">
                    <a href="#" data-toggle="modal" data-target="#largeModal" class="btn-blog mx-3 py-2 px-4">Details</a>
                    <a href="order.html" class="btn-order mx-3 py-2 px-4">Order</a>
                </div>
            </div>

            <!-- <div class="row align-items-center mx-0">
                <div class="text-center my-4 col-lg-3">
                    <div class="skills chart" data-percent="65.5">
                        <div class="pie-chart-value">65.5%</div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <h3 class="text-green text-uppercase">First Session</h3>
                    <p class="text-capitalize">Number of shares <span class="text-green">1000</span></p>
                    <p class="text-capitalize">Remaining shares <span class="text-warning">100</span></p>
                </div>
                <div class="col-lg-4 my-3 d-flex justify-content-center">
                    <a href="#" data-toggle="modal" data-target="#largeModal" class="btn-blog mx-3 py-2 px-4">Details</a>
                    <a href="order.html" class="btn-order mx-3 py-2 px-4">Order</a>
                </div>
            </div>
            <div class="row bg-grey align-items-center mx-0">
                <div class="text-center my-4 col-lg-3">
                    <div class="skills chart" data-percent="75">
                        <div class="pie-chart-value">75%</div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <h3 class="text-green text-uppercase">First Session</h3>
                    <p class="text-capitalize">Number of shares <span class="text-green">1000</span></p>
                    <p class="text-capitalize">Remaining shares <span class="text-warning">100</span></p>
                </div>
                <div class="col-lg-4 my-3 d-flex justify-content-center">
                    <a href="#" data-toggle="modal" data-target="#largeModal" class="btn-blog mx-3 py-2 px-4">Details</a>
                    <a href="order.html" class="btn-order mx-3 py-2 px-4">Order</a>
                </div>
            </div> -->

        </div>
    </div>
</section>


<!-- MODAL -->
<div>
    <div id="largeModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header row mx-0">
                    <h4 class="modal-title">Session Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam libero unde, quaerat reprehenderit dolor odit nemo blanditiis quisquam a sed error molestiae quod soluta sequi repellat cum, modi, aut velit eum id impedit? Sequi natus quo est recusandae illo, quas tenetur totam fuga voluptatum exercitationem doloremque incidunt amet sunt minima accusantium aspernatur possimus atque reiciendis eos beatae eum obcaecati asperiores rerum consequatur. Illum magni facere similique vitae dolore voluptate obcaecati praesentium. Dignissimos ducimus ad libero sapiente? Deserunt unde dignissimos corrupti.
                </div>
                <div class="row mx-0 modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> -->
                    <button type="button" class="btn btn-custom" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

