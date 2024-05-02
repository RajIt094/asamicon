<!DOCTYPE html>
<html lang="en-us">
   <head>
      <meta charset="utf-8">
      <title>Asamicon</title>
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo.png')}}">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
      <meta name="description" content="This is meta description">
      <meta name="author" content="Themefisher">
      <!-- # Google Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
      <!-- # CSS Plugins -->
      <link rel="stylesheet" href="plugins/slick/slick.css">
      <link rel="stylesheet" href="plugins/font-awesome/fontawesome.min.css">
      <link rel="stylesheet" href="plugins/font-awesome/brands.css">
      <link rel="stylesheet" href="plugins/font-awesome/solid.css">
      <!-- # Main Style Sheet -->
      <link rel="stylesheet" href="css/style.css">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
       <link rel="stylesheet" href="{{ url('css/toastr.min.css')}}">
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      
       @yield('style')
      
<style>

.mb-2 {
  margin-bottom: 0.5rem !important;
  font-size: 18px;
}
          
.navigation{
    position: fixed;
    top:0px!important;
    z-index: 999;
    width: 100%;
    background: #fff;
}
  
</style>
   </head>
   <body>
      <header class="navigation bg-tertiary">
         <nav class="navbar navbar-expand-xl navbar-light text-center py-3">
            <div class="container">
               <a class="navbar-brand" href="{{url('index')}}">
               <img loading="prelaod" decoding="async" class="img-fluid" width="160" src="images/logo.png" alt="Wallet">
               </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
               </button>
               <p class="dnone" style="position: absolute;right: 6px;top: 79px;">Click Here</p>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mb-2 mb-lg-0">
                     <li class="nav-item"> <a class="nav-link" href="{{url('index')}}">Home</a>
                     </li>
                     <!-- <li class="nav-item "> <a class="nav-link" href="#">Schedules</a>
                     </li>
                     <li class="nav-item "> <a class="nav-link" href="#">Speakers</a>
                     </li>
                     {{-- <li class="nav-item "> <a class="nav-link" href="#">Booking</a>
                     </li> --}} -->
                     <li class="nav-item "> <a class="nav-link" href="{{url('registration_details')}}">Registration</a>
                     </li>
                  </ul>
                  <a href="#!" class="btn btn-primary ms-2 ms-lg-3" style="height: 60px;">asamiindia.com</a>
               </div>
            </div>
         </nav>
      </header>

      @yield('content')

     <footer class="section bg-tertiary" style="padding-bottom: 0px;">
         <div class="container">
            <div class="row justify-content-between">
               <div class="col-lg-4 col-md-4 col-12 mb-4">
                  <div class="footer-widget">
                     <div class="footerlogo">
                        <img src="images/logofooter.png">
                     </div>
                     
                  </div>
               </div>
              <!--  <div class="col-lg-2 col-md-4 col-12 mb-4">
                  <div class="footer-widget">
                     <h5 class="mb-4 text-primary font-secondary">Useful Links</h5>
                     <ul class="list-unstyled">
                        <li class="mb-2"><a href="#!">Schedules</a>
                        </li>
                        <li class="mb-2"><a href="#!">Speakers</a>
                        </li>
                        <li class="mb-2"><a href="#!">Booking</a>
                        </li>
                        <li class="mb-2"><a href="registration_details.html">Registration</a>
                        </li>
                     </ul>
                  </div>
               </div> -->
               <div class="col-lg-5 col-md-4 col-12 mb-4">
                  <div class="footer-widget">
                     <h5 class="mb-4  font-secondary textasami">ASAMI India</h5>
                     <ul class="list-unstyled">
                        <li class="mb-2">Jayant Sharma (Organizing Secretary) : +91 9826035117  
                        </li>
                        <li class="mb-2">Anil Mahajan (Organizing Chairman)  : +91 9826727855 
                        </li>
                        <li class="mb-2">Email : jayantjaikishansharma@gmail.com ,  asamicon2023@gmail.com 
                        </li>
                     </ul>
                  </div>
               </div>
            </div>

         
         </div>
      </footer>
      <div class="dnone">
         <a href="{{url('registration_form')}}" class="btn btn-primary ms-2 ms-lg-3" style="background: #08188B;
       position: fixed;
       z-index: 9999;
       bottom: 10px;
       right: -9px;
       padding: 10px;
       color: #fff;
       border: 1px solid;
       box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;">Registration</a>
         </div>
      <div class="footer-bottom">
         <div class="container clearfix ">
            <div class="copyright-text">
               <p style="display:inline-block;">Copyright © asamiindia2023. All Right Reserved
               </p>
                 <a href="{{('privacy')}}" style="float: right;position: relative;left: -108px;">Privacy Policy</a>
            </div>
         </div>
      </div>
      <!-- # JS Plugins -->
       <script src="plugins/jquery/jquery.min.js"></script>
      <script src="plugins/bootstrap/bootstrap.min.js"></script>
      <script src="plugins/slick/slick.min.js"></script>
      <script src="plugins/scrollmenu/scrollmenu.min.js"></script>
      <!-- Main Script -->
      <script src="js/script.js"></script>
        <!-- Toastr -->
    <script src="{{url('js/toastr.min.js')}}"></script>
     @yield('script')

      <script type="text/javascript">
         
         AOS.init({
  disable: function() {
    var maxWidth = 800;
    return window.innerWidth < maxWidth;
  }
});
      </script>

      <script>
  AOS.init();
</script>

    
     @if (Session::get('success'))
        <script>
            (function($) {
                "use strict"
                toastr.success("{{ Session::get('success') }}", "Success", {
                    positionClass: "toast-top-right",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "2000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
            })(jQuery);

            // (function($) {
            //     "use strict"
            //     toastr.success("{{ Session::get('error') }}", "Warning", {
            //         positionClass: "toast-top-right",
            //         timeOut: 5e3,
            //         closeButton: !0,
            //         debug: !1,
            //         newestOnTop: !0,
            //         progressBar: !0,
            //         preventDuplicates: !0,
            //         onclick: null,
            //         showDuration: "300",
            //         hideDuration: "1000",
            //         extendedTimeOut: "2000",
            //         showEasing: "swing",
            //         hideEasing: "linear",
            //         showMethod: "fadeIn",
            //         hideMethod: "fadeOut",
            //         tapToDismiss: !1
            //     })
            // })(jQuery);
        </script>
    @endif
   </body>
</html>