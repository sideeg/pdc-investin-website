@extends('layouts.main')

@section('content')



<section class="section">

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <article class="post m-0">
                <div class="post-preview">
                    <a href="single-post.html"><img src="images/blog/blog-3.jpg" alt="" class="img-fluid mx-auto d-block"></a>
                </div>

                <div class="post-header mb-0">
                    <ul class="post-meta">
                        <li class="row"><i class="mdi mdi-calendar"></i> <small>Fab 01, 2019</small></li>
                        <!-- <li><i class="mdi mdi-tag-text-outline"></i> -->
                            <!-- <a href="#"> <small>Photography</small></a></li> -->
                    </ul>
                    
                    <div class="post-content">
                        <h4>
                            @if (App::getLocale() == 'en')
                                {{ $blog->first()->blog_name_en }}
                            @else
                                {{ $blog->first()->blog_name_ar }}
                            @endif
                        </h4>
                        <p class="mb-0">
                            @if (App::getLocale() == 'en')
                                {{ $blog->first()->text_en }}
                            @else
                                {{ $blog->first()->text_ar }}
                            @endif
                        </p>
                    </div>
                </div>
            </article>
        </div>
    </div>

</section>

@endsection

