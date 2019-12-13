<!DOCTYPE html>
<html>
    <head>
 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   
 
       <title></title>       
       <meta name="keywords" content="" />
       <meta name="description" content="">                                   
 
 
         
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="/img/apple-touch-icon.png">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,600,700" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="/vendor/animate/animate.min.css"> 
 
        <!-- Theme CSS -->
        <link rel="stylesheet" href="/css/theme.css">
        <link rel="stylesheet" href="/css/theme-elements.css"> 
 
        <!-- Demo CSS -->
        <link rel="stylesheet" href="/css/demos/demo-sass.css">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="/css/skins/skin-sass.css"> 

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="/css/custom.css">

        <!-- Head Libs -->
        <script src="/vendor/modernizr/modernizr.min.js"></script>

    

    </head>
    <body data-spy="scroll" data-target=".header-nav-main nav" data-offset="80">

        <div class="body">
            <header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': false, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
                <div class="header-body border-top-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                    <div class="header-container container-fluid px-lg-4">
                        <div class="header-row px-lg-3">
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-logo header-logo-sticky-change" style="width: 82px; height: 40px;">
                                        <a href="/">
                                            <img class="header-logo-non-sticky opacity-0" alt="MyOnlyAsk" width="82" height="40" src="/img/logo-default-slim.png">
                                            <img class="header-logo-sticky opacity-0" alt="MyOnlyAsk" width="82" height="40" src="/img/logo-default-slim.png">
                                        </a>
                                    </div>
                                </div>
                            </div> 
                            <div class="header-column justify-content-center">
                                <div class="header-row">
                                    <div class="header-nav header-nav-line header-nav-bottom-line header-nav-light-text justify-content-center">
                                        <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                            <nav class="collapse">
                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li><a  href="/" class="dropdown-item ">Home</a></li>

                                                    <li><a data-hash data-hash-offset="60" href="/listings" class="dropdown-item">Listings</a></li> 
                                                     
                                         
                                                        <li class="active"><a data-hash data-hash-offset="60" href="/categories" class="dropdown-item active">Categories</a></li> 
 

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
                            <div class="header-column">
                                <div class="header-row justify-content-end">
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
 
     
            <div class="image-gallery sort-destination full-width">
                @foreach($listings as $listing) 
                    <div class="isotope-item">
                        <div class="image-gallery-item">
                                <a target="_blank" href="/pictures/{{ $listing->id}}/{{ str_replace(' ','-',$listing->name)}}">
                                  
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                    <span class="thumb-info-wrapper">
                                        <img class="img-fluid" src="/storage/{{ $listing->profile_photo}}" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">{{ $listing->name }}</span> 
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>  
                @endforeach
 
            </div> 
 
                
            <footer id="footer" class="bg-light border-0">
 
                <div class="footer-copyright bg-light">
                    <div class="container py-2">
                        <hr class="my-2">
                        <div class="row justify-content-between pt-4 pb-5">
                            <div class="col-auto">
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
        <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="/vendor/common/common.min.js"></script>  

 
        
        <!-- Theme Base, Components and Settings -->
        <script src="/js/theme.js"></script>
         

        <!-- Demo -->
        <script src="/js/demos/demo-sass.js"></script>
         
        
        <!-- Theme Custom -->
        <script src="/js/custom.js"></script>
        
        <!-- Theme Initialization Files -->
        <script src="/js/theme.init.js"></script>


        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148147470-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-148147470-1');
        </script>
 
 
    </body>
</html>
