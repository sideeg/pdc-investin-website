
<!-- Navigation Bar-->
<nav class="navbar navbar-expand-md fixed-top navbar-custom sticky sticky-dark bg-white">
    <div class="container row mx-0 d-flex justify-content-center">
        {{-- <div class="row"> --}}
            <!-- LOGO -->
            <a class="navbar-brand logo text-green" href="{{ route('home') }}">
                <img src="{{ asset('images/Investin-logo.png') }}" alt="missing_logo" height="40">
                <!-- Invesin -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>    
        {{-- </div> --}}
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav navbar-center px-auto text-center text-grey" id="mySidenav">
                {{-- <div class="row"> --}}
                    <li class="nav-item current">
                    <a href="{{ route('home') }}" class="nav-link px-0 text-uppercase">{{ __('content.home')}}</a>
                    </li>
                    @if (Route::CurrentRouteName() == 'home' )
                        <li class="nav-item"> 
                            <a href="#about" class="nav-link px-0 text-uppercase">{{ __('content.about')}}</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link px-0 text-uppercase">{{ __('content.investmentSectors')}}</a>
                        </li>
                        <li class="nav-item">
                            <a href="#network" class="nav-link px-0 text-uppercase">{{ __('content.network')}}</a>
                        </li>    
                    @endif
                    
                    <li class="nav-item">
                        <a href="{{ route('blog') }}" class="nav-link px-0 text-uppercase">{{ __('content.blog')}}</a>
                    </li>
                    
                    {{-- <li class="nav-item last-elements">
                        <span class="nav-link px-0">
                            @if (App::getLocale() == 'en')
                                <img src="{{asset('images/sudan.svg')}}" class="lang-svg" alt=""> <a href="{{ url('locale/ar') }}" class="mx-1">{{__('content.arabic')}}</a> 
                            @else
                                <a href="{{ url('locale/en') }}" class=""><img src="{{asset('images/united-kingdom.svg')}}" class="lang-svg mx-1" alt=""> {{__('content.english')}}</a>
                            @endif
                        </span>
                    </li> --}}
                {{-- </div> --}}
            </ul>

            
            <ul class="navbar-nav navbar-center ml-auto" id="mySidenav">
                <li class="nav-item">
                    <span class="nav-link px-0 text-center">
                        @if (App::getLocale() == 'en')
                            <img src="{{asset('images/sudan.svg')}}" class="lang-svg" alt=""> <a href="{{ url('locale/ar') }}" class="mx-1">{{__('content.arabic')}}</a> 
                        @else
                            <a href="{{ url('locale/en') }}" class=""><img src="{{asset('images/united-kingdom.svg')}}" class="lang-svg mx-1" alt=""> {{__('content.english')}}</a>
                        @endif
                    </span>
                </li>
            </ul>
        </div>
    </div>
</nav>




        {{-- <!-- Navigation Bar-->
        <header id="topnav" class="defaultscroll fixed-top navbar-sticky sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a href="index-2.html" class="logo">
                        <img src="images/Investin-logo.png" alt="missing_logo" height="20">
                    </a>
                </div>
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a href="#">Home</a>
                        </li>

                        <li class="has-submenu">
                            <a href="javascript:void(0)">About</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="history.html">History</a></li>
                                <li class="has-submenu"><a href="javascript:void(0)">Services</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="service.html">Services</a></li>
                                        <li><a href="service-image.html">Service With Image</a></li>
                                        <li><a href="service-detail.html">Single Service</a></li>
                                    </ul>
                                </li>  
                                <li class="has-submenu"><a href="javascript:void(0)">Team Members</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="team-grid.html">Grid Teams</a></li>
                                        <li><a href="team-list.html">List Teams</a></li>
                                        <li><a href="team-detail.html">Single Team</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)">Work</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="work-col-three.html">Three Column Portfolio</a></li>                                 
                                        <li><a href="work-col-four.html">Four Column Portfolio</a></li>                                 
                                        <li><a href="work-col-six.html">Six Column Portfolio</a></li>                                 
                                        <li><a href="work-single.html">Single Portfolio</a></li>                                
                                    </ul>
                                </li>
                            </ul> 
                        </li>

                        <li class="has-submenu">
                            <a href="javascript:void(0)">Pages</a>
                            <span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="faq.html"><b class="mdi mdi-chevron-right"></b> FAQ's</a></li>
                                        <li><a href="price.html"><b class="mdi mdi-chevron-right"></b> Pricing Table</a></li>
                                        <li><a href="privacy.html"><b class="mdi mdi-chevron-right"></b> Privacy Policy</a></li>
                                        <li><a href="login.html"><b class="mdi mdi-chevron-right"></b> Log In</a></li>
                                        <li><a href="signup.html"><b class="mdi mdi-chevron-right"></b> Sign Up</a></li>
                                        <li><a href="forgot-password.html"><b class="mdi mdi-chevron-right"></b> Forgot Password</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li><a href="working-process.html"><b class="mdi mdi-chevron-right"></b> Work Process</a></li>
                                        <li><a href="contact.html"><b class="mdi mdi-chevron-right"></b> Contact Us</a></li>
                                        <li><a href="blank-page.html"><b class="mdi mdi-chevron-right"></b> Blank Page</a></li>
                                        <li><a href="coming-soon.html"><b class="mdi mdi-chevron-right"></b> Coming soon</a></li>
                                        <li><a href="404.html"><b class="mdi mdi-chevron-right"></b> 404! Error</a></li>
                                        <li><a href="500.html"><b class="mdi mdi-chevron-right"></b> 500! Error</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="javascript:void(0)">Blog</a>
                            <span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="blog.html">Blog</a></li> 
                                <li><a href="blog-left.html">Left Sidebar</a></li> 
                                <li><a href="blog-right.html">Right Sidebar</a></li> 
                                <li><a href="blog-single.html">Single BLog</a></li>                                
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="javascript:void(0)">Elements</a>
                            <span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="elements-accordions.html"><b class="mdi mdi-chevron-right"></b> Accordion</a></li>
                                        <li><a href="elements-alert.html"><b class="mdi mdi-chevron-right"></b> Alert</a></li>
                                        <li><a href="elements-button.html"><b class="mdi mdi-chevron-right"></b> Button</a></li>
                                        <li><a href="elements-blockquote.html"><b class="mdi mdi-chevron-right"></b> Blockquote</a></li>
                                        <li><a href="elements-bg.html"><b class="mdi mdi-chevron-right"></b> Backgroud Color</a></li>
                                        <li><a href="elements-breadcrumbs.html"><b class="mdi mdi-chevron-right"></b> Breadcrumbs</a></li>
                                        <li><a href="elements-boxed.html"><b class="mdi mdi-chevron-right"></b> Boxed</a></li>
                                        <li><a href="elements-cta.html"><b class="mdi mdi-chevron-right"></b> Call To Action</a></li>
                                        <li><a href="elements-dropcap.html"><b class="mdi mdi-chevron-right"></b> Dropcap</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li><a href="elements-dropdown.html"><b class="mdi mdi-chevron-right"></b> Dropdown</a></li>
                                        <li><a href="elements-funfactors.html"><b class="mdi mdi-chevron-right"></b> Fun Factors</a></li>
                                        <li><a href="elements-form-inputs.html"><b class="mdi mdi-chevron-right"></b> Form Inputs</a></li>
                                        <li><a href="elements-grid-structure.html"><b class="mdi mdi-chevron-right"></b> Grid Structure</a></li>
                                        <li><a href="elements-gallery.html"><b class="mdi mdi-chevron-right"></b> Gallery</a></li>
                                        <li><a href="elements-highlights.html"><b class="mdi mdi-chevron-right"></b> Highlights</a></li>
                                        <li><a href="elements-material-icons.html"><b class="mdi mdi-chevron-right"></b> Material Icons</a></li>
                                        <li><a href="elements-pe-7-icons.html"><b class="mdi mdi-chevron-right"></b> Pe-7 Icons </a></li>
                                        <li><a href="elements-fontawesome.html"><b class="mdi mdi-chevron-right"></b> Font Awesome Icons </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li><a href="elements-images.html"><b class="mdi mdi-chevron-right"></b> Images</a></li>
                                        <li><a href="elements-labels.html"><b class="mdi mdi-chevron-right"></b> Labels</a></li>
                                        <li><a href="elements-lightbox.html"><b class="mdi mdi-chevron-right"></b> Lightbox</a></li>
                                        <li><a href="elements-modals.html"><b class="mdi mdi-chevron-right"></b> Modals</a></li>
                                        <li><a href="elements-progress-bar.html"><b class="mdi mdi-chevron-right"></b> Progress Bar</a></li>
                                        <li><a href="elements-parallax.html"><b class="mdi mdi-chevron-right"></b> Parallax</a></li>
                                        <li><a href="elements-pagination.html"><b class="mdi mdi-chevron-right"></b> Pagination</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li><a href="elements-tab.html"><b class="mdi mdi-chevron-right"></b> Tab</a></li>
                                        <li><a href="elements-tooltip-popovers.html"><b class="mdi mdi-chevron-right"></b> Tooltip &amp; Popovers</a></li>
                                        <li><a href="elements-typography.html"><b class="mdi mdi-chevron-right"></b> Typography</a></li>
                                        <li><a href="elements-tables.html"><b class="mdi mdi-chevron-right"></b> Tables</a></li>
                                        <li><a href="elements-timeline.html"><b class="mdi mdi-chevron-right"></b> Timeline</a></li>
                                        <li><a href="elements-testimonials.html"><b class="mdi mdi-chevron-right"></b> Testimonials</a></li>
                                        <li><a href="elements-video.html"><b class="mdi mdi-chevron-right"></b> Video</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown d-none d-md-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i class="fas fa-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-search">
                                <div>
                                    <form role="search" class="navbar-form">
                                        <input type="text" placeholder="Search..." name="s" class="form-control search-bar">
                                        <a href="#" class="btn-search"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>

                            </div>
                        </li>
                    </ul>
                    <!-- End navigation menu-->
                </div>

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a href="#">Home</a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Home</a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Home</a>
                        </li>
                    </ul>
                    <!-- End navigation menu-->
                </div>
            </div>
        </header>
        <!-- End Navigation Bar--> --}}