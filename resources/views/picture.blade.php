<!DOCTYPE html>
<html>
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   

        <title></title> 

        <meta name="keywords" content="{{ $makeup_detail->shop }}" />
        <meta name="description" content="{{ $makeup_detail->shop }}"> 

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="/vendor/animate/animate.min.css">
        <link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="/vendor/magnific-popup/magnific-popup.min.css">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="/css/theme.css">
        <link rel="stylesheet" href="/css/theme-elements.css">
        <link rel="stylesheet" href="/css/theme-blog.css">
        <link rel="stylesheet" href="/css/theme-shop.css">
        
        <!-- Demo CSS -->


        <!-- Skin CSS -->
        <link rel="stylesheet" href="/css/skins/default.css"> 

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="/css/custom.css">

        <!-- Head Libs -->
        <script src="/vendor/modernizr/modernizr.min.js"></script>

    </head>
    <body>

        <div class="body">
            <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
                <div class="header-body border-top-0">
                    <div class="header-container container-fluid px-lg-4">
                        <div class="header-row">
                            <div class="header-column header-column-border-right flex-grow-0">
                                <div class="header-row pr-4">
                                    <div class="header-logo">
                                        <a href="/">
                                            <img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="/img/logo-default-slim.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-nav header-nav-links justify-content-center">
                                        <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                            <nav class="collapse header-mobile-border-top">
                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li class="active"><a  href="/" class="dropdown-item active">Home</a></li>

                                                    <li><a data-hash data-hash-offset="60" href="/listings" class="dropdown-item">Listings</a></li> 

                                                    @if(isset($city))
                                                        <li><a data-hash data-hash-offset="60" href="/{{ $city }}/categories" class="dropdown-item">Categories</a></li> 
                                                    @else
                                                        <li><a data-hash data-hash-offset="60" href="/categories" class="dropdown-item">Categories</a></li> 
                                                    @endif  

                                                    <li><a data-hash data-hash-offset="60" href="/support" class="dropdown-item">Support</a></li> 

                                                    <li>&nbsp;&nbsp;</li> 

                                                    <li class="social-icons-twitter"><a href="https://www.instagram.com/myonlyask/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                    <li class=" "><a href="https://www.facebook.com/Myonlyask-117324786321899/" title="Facebook" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                                                    <li class="social-icons-linkedin"><a href="https://api.whatsapp.com/send?phone=919916789507" target="_blank" title="Whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-column header-column-border-left flex-grow-0 justify-content-center">
                                <div class="header-row pl-4 justify-content-end">
                                    <ul class="" style="list-style: none;">

                                        @if (Route::has('login'))
                                            @if (Auth::check())
                                                <li class=" text-white"><a  href="/portal" class=" font-weight-bold text-dark " >Portal</a></li>
                                            @else
                                                <li class=" text-white"><a  href="/login" class=" font-weight-bold text-dark " >Sign In</a></li>
                                            @endif
                                         @endif

                                     <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                     </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div role="main" class="main">

                <section class="page-header page-header-modern bg-secondary  bg-color-hover-tertiary page-header-sm">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12 align-self-center p-static order-1 text-center">

                                <h1 class="text-color-light font-weight-extra-bold text-12 line-height-2 mb-4"  >{{ $picturedetails->name }}</h1>

                                <span class="sub-title  font-weight-bold text-grey mb-2">{{ $picturedetails->eventdate }}</span>
                                   
                            </div>
 
                        </div>
                    </div>
                </section> 


                <div class="container py-4">

                    <blockquote class="blockquote">
                        <h4 class="font-weight-bold text-center">{{ $makeup_detail->details }}</h4>
                    </blockquote>

                </div>
 
                <div class="container py-4">
 

                    <div class="row">
                        <div class="col">
                            <div class="blog-posts single-post">
                            
                                <article class="post post-large blog-single-post border-0 m-0 p-0">

                                    <div class="post-image ml-0">
                                        <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                                            <div class="row mx-0">

                                               @foreach( $picturedetails->image as $image) 

                                                @php
                                                    

                                                    $ext   = pathinfo($image, PATHINFO_EXTENSION);
                                                    $thumb = basename($image, ".$ext") . '-thumb.' . $ext;
                                                    $medium = basename($image, ".$ext") . '-medium.' . $ext;
                                               

                                                @endphp

                                                <div class="">
                                                    <a href="/storage/{{ $medium }}">
                                                        <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                                                            <span class="thumb-info-wrapper">
                                                                <img src="/storage/{{ $thumb }}" class="img-fluid" alt="" />
                                                                <span class="thumb-info-action">
                                                                    <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div> 

                                                @endforeach


                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                      <div class="card-body">  

                                        <a href="/c/{{ $url }}/{{ $makeup_detail->makeupkey }}" class="btn btn-primary btn-modern">Contact</a>
                                      </div>
                                    </div> 
                              
                                </article>
                            
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <footer id="footer"> 
                <div class="footer-copyright">
                    <div class="container py-2">
                        <div class="row py-4"> 
                            <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                                <p>© Copyright 2019. All Rights Reserved.</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Vendor -->
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/jquery.appear/jquery.appear.min.js"></script>
        <script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="/vendor/jquery.cookie/jquery.cookie.min.js"></script>
        <script src="/vendor/popper/umd/popper.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="/vendor/common/common.min.js"></script>
        <script src="/vendor/jquery.validation/jquery.validate.min.js"></script>
           <script src="/vendor/jquery.lazyload/jquery.lazyload.min.js"></script> 
        <script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
            
        <!-- Theme Base, Components and Settings -->
        <script src="/js/theme.js"></script>
        
        <!-- Theme Custom -->
        <script src="/js/custom.js"></script>
        
        <!-- Theme Initialization Files -->
        <script src="/js/theme.init.js"></script> 
    </body>
</html>
