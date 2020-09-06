@extends('layouts.main')

@section('content')


<!-- BLOG -->
<section class="section bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-heading">
                    <h2 class="color-green text-center dot">{{ __('content.blog')}}</h2>
                    <div class="row justify-content-center">
                    <p class="mx-auto my-3 col-lg-6 col-md-6 col-sm-12 text-center">
                        @if (App::getLocale() == 'en')
                            {{ $blog->first()->intro_en }}
                        @else
                            {{ $blog->first()->intro_ar }}
                        @endif
                    </p>

                    </div>

                    
                    @if (App::getLocale() == 'en')
                        @forelse ($blog as $item)
                            <div class="row mx-0 justify-content-center">
                                <div class="col-lg-10 col-md-7 col-sm-12 col-xs-12 my-3">
                                    <div class="row mx-0 article">
                                        <div class="col-lg-4 blog-img px-0">
                                            <img src="{{asset($item->image_full_path) }}" class="img-responsive img-blog-side " alt="">
                                            <div class="blog-overlay"></div>
                                            
                                        </div>
                                        <div class="blog-text col-lg-6">
                                            <h4 class="my-3 text-black word-keep">
                                                {{ $item->blog_name_en}}
                                            </h4>
                                            <p class="">
                                                {{ $item->Brief_en}}
                                            </p>
                                            <a href="{{route('article', $item->id)}}" class="btn-blog">{{ __('content.readFull')}}</a>
                                        </div>
                                        <div class="col-lg-2">
                                            <h5 class="my-3 text-green2 text-center blog-date"> <span class="d-block day">{{\Carbon\Carbon::parse($item->created_at)->format('H') }}</span> <span  class="d-block month">Novmber</span> <span class="d-block year">2020</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            
                        @endforelse
                    @else
                        @forelse ($blog as $item)
                            <div class="row mx-0 justify-content-center">
                                <div class="col-lg-10 col-md-7 col-sm-12 col-xs-12 my-3">
                                    <div class="row mx-0 article">
                                        <div class="col-lg-4 blog-img px-0">
                                            <img src="{{asset($item->image_full_path) }}" class="img-responsive img-blog-side " alt="">
                                            <div class="blog-overlay"></div>
                                            
                                        </div>
                                        <div class="blog-text col-lg-6">
                                            <h4 class="my-3 text-black word-keep">
                                                {{ $item->blog_name_en}}
                                            </h4>
                                            <p class="">
                                                {{ $item->Brief_en}}
                                            </p>
                                            <a href="{{route('article', $item->id)}}" class="btn-blog">{{ __('content.readFull')}}</a>
                                        </div>
                                        <div class="col-lg-2">
                                            <h5 class="my-3 text-green2 text-center blog-date"> <span class="d-block day">{{\Carbon\Carbon::parse($item->created_at)->format('H') }}</span> <span  class="d-block month">{{\Carbon\Carbon::parse($item->created_at)->format('F') }}</span> <span class="d-block year">{{\Carbon\Carbon::parse($item->created_at)->format('yy') }}</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            
                        @endforelse
                    @endif

                    {{-- <div class="row mx-0 justify-content-center">
                        <div class="col-lg-10 col-md-7 col-sm-12 my-3">
                            <div class="row mx-0 article">
                                <div class="col-lg-4 blog-img px-0">
                                    <img src="images/about/about-page.jpg" class="img-responsive img-blog-side " alt="">
                                    <div class="blog-overlay"></div>
                                    
                                </div>
                                <div class="blog-text col-lg-6">
                                    <h4 class="my-3 text-black word-keep">Sunset in North Sudan</h4>
                                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, aspernatur.</p>
                                    <a href="#" class="btn-blog">Read Full</a>
                                </div>
                                <div class="col-lg-2">
                                    <h5 class="my-3 text-green2 text-center blog-date"> <span class="d-block day">5</span> <span  class="d-block month">Novmber</span> <span class="d-block year">2020</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mx-0 justify-content-center">
                        <div class="col-lg-10 col-md-7 col-sm-12 my-3">
                            <div class="row mx-0 article">
                                <div class="col-lg-4 blog-img px-0">
                                    <img src="images/about/about-page.jpg" class="img-responsive img-blog-side " alt="">
                                    <div class="blog-overlay"></div>
                                    
                                </div>
                                <div class="blog-text col-lg-6">
                                    <h4 class="my-3 text-black">Sunset in North Sudan</h4>
                                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, aspernatur.</p>
                                    <a href="#" class="btn-blog">Read Full</a>
                                </div>
                                <div class="col-lg-2">
                                    <h5 class="my-3 text-green2 text-center blog-date"> <span class="d-block day">5</span> <span  class="d-block month">Novmber</span> <span class="d-block year">2020</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mx-0 justify-content-center">
                        <div class="col-lg-10 col-md-7 col-sm-12 my-3">
                            <div class="row mx-0 article">
                                <div class="col-lg-4 blog-img px-0">
                                    <img src="images/about/about-page.jpg" class="img-responsive img-blog-side " alt="">
                                    <div class="blog-overlay"></div>
                                    
                                </div>
                                <div class="blog-text col-lg-6">
                                    <h4 class="my-3 text-black">Sunset in North Sudan</h4>
                                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, aspernatur.</p>
                                    <a href="#" class="btn-blog">Read Full</a>
                                </div>
                                <div class="col-lg-2">
                                    <h5 class="my-3 text-green2 text-center blog-date"> <span class="d-block day">5</span> <span  class="d-block month">Novmber</span> <span class="d-block year">2020</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mx-0 justify-content-center">
                        <div class="col-lg-10 col-md-7 col-sm-12 my-3">
                            <div class="row mx-0 article">
                                <div class="col-lg-4 blog-img px-0">
                                    <img src="images/about/about-page.jpg" class="img-responsive img-blog-side " alt="">
                                    <div class="blog-overlay"></div>
                                    
                                </div>
                                <div class="blog-text col-lg-6">
                                    <h4 class="my-3 text-black">Sunset in North Sudan</h4>
                                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, aspernatur.</p>
                                    <a href="#" class="btn-blog">Read Full</a>
                                </div>
                                <div class="col-lg-2">
                                    <h5 class="my-3 text-green2 text-center blog-date"> <span class="d-block day">5</span> <span  class="d-block month">Novmber</span> <span class="d-block year">2020</span></h5>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    
                </div>
                <div class="row justify-content-center my-3">
                    {{ $blog->links() }}    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BLOG END -->



@endsection

