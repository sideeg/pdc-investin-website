@extends('layouts.main')

@section('content')



<section class="section">

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <article class="post mx-0">
                <div class="post-preview">
                    <img src="{{asset($blog[0]->image_full_path) }}" alt="" class="img-fluid mx-auto d-block">
                </div>

                <div class="post-header mb-0">
                    <ul class="post-meta">
                        <li class="row">
                            <p class="text-muted text-small text-left mx-4 pb-4 row"><i class="mdi mdi-calendar text-black mx-1"></i> <span class=""> {{\Carbon\Carbon::parse($blog[0]->created_at)->format('d M ,yy') }}</span></p>
                            
                            {{-- <i class="mdi mdi-calendar text-black"></i> <span>{{\Carbon\Carbon::parse($blog[0]->created_at)->format('d M ,yy') }}</span> --}}
                        
                        </li>
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

