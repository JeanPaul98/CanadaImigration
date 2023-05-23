
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>Studying in Canada</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/fontawesome-all.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/swiper.css')}}" rel="stylesheet">
        <link href= "{{asset('css/styles.css')}}" rel="stylesheet">
        <script src="{{ asset('js/alerts.js') }}"></script>
        <!-- Favicon  -->
        <link rel="icon" href="{{asset('images/favicon.ico')}}">
    </head>
    <body data-bs-spy="scroll" data-bs-target="#navbarExample">
        
        <!-- Navigation -->
        @include("pages.navbar")
        <!-- end of navigation -->

        
        <!-- Header -->
        @include("pages.header")
        <!-- end of header -->
        

        <!-- description -->
        @include('pages.description')
        <!-- end of description -->

        <!-- Services -->
          @include('pages.service')
        <!-- end of services -->

        <!-- About -->
             @include("pages.about")
        <!-- end of about -->

        <!-- Register -->
             @include("pages.register")
        <!-- end of about -->


        <!-- Contact -->
            @include("pages.contact")
        <!-- end of contact -->


        <!-- Footer -->
          @include("pages.footer")
        <!-- end of footer -->


        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Copyright © Some name</p>
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright --> 
        <!-- end of copyright -->
        

        <!-- Back To Top Button -->
        <button onclick="topFunction()" id="myBtn">
            <img src="images/up-arrow.png" alt="alternative">
        </button>
        <!-- end of back to top button -->
            
        <!-- Scripts -->

        <script src="{{asset('js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
        <script src="{{asset('js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
        <script src="{{asset('js/purecounter.min.js')}}"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="{{asset('js/replaceme.min.js')}}"></script> <!-- ReplaceMe for rotating text -->
        <script src="{{asset('js/isotope.pkgd.min.js')}}"></script> <!-- Isotope for filter -->
        <script src="{{asset('js/scripts.js')}}"></script> <!-- Custom scripts -->
    </body>
</html>