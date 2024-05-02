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

    
   </head>
   <body>
    <section class=" greensectinon">
        <div class="container mrtobadd" style="position: relative;">
                <div class="row">
                   <div class="col-lg-6" style="margin: 0 auto;">
                      <div class="contact-form" style=" padding: 12px; background: #fff;">
                        <h3 style="margin: 0 auto;">Admin</h3>
                         <form  method="POST" id="addFarm" enctype= "multipart/form-data" action="{{url('login')}}">
                            @csrf
                            <div class="row">
                                 <div class="col-lg-12">
                                     <div class="form-group">
                                         <label for="email" class="form-label">Email</label>
                                         <input type="text" class="form-control shadow-none @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                         @error('email')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                         @enderror
                                     </div>
                                     <label class="error" for="email" style="color:red;font-size:11px;">
                                 </div>
                            </div>
                            <div class="row">
                             <div class="col-lg-12">
                                 <div class="form-group">
                                     <label for="password" class="form-label">Password </label>
                                     <input type="password" class="form-control shadow-none @error('password') is-invalid @enderror" id="password" name="password">
                                     @error('password')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>
                                 <label class="error" for="password" style="color:red;font-size:11px;">
                             </div>
                        </div>
                            <div class="row">
                               <div class="col-sm-9"></div>
                               <div class="col-sm-3">
                                  <div class="form-group mt-3" style="float:right;">
                                     <button class="btn btn-primary" type="submit">Submit</button>
                                  </div>
                               </div>
                            </div>
                         </form>
                      </div> 
                   </div> 
                </div>
        </div>
     </section>

     <!-- # JS Plugins -->
      <script src="plugins/jquery/jquery.min.js"></script>
     <script src="plugins/bootstrap/bootstrap.min.js"></script>
     <script src="plugins/slick/slick.min.js"></script>
     <script src="plugins/scrollmenu/scrollmenu.min.js"></script>
     <!-- Main Script -->
     <script src="js/script.js"></script>
       <!-- Toastr -->
   <script src="{{url('js/toastr.min.js')}}"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
   integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
   crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script>
        $("#addFarm").validate({
            rules: {
                email: {
                    required: true,
                },
                password: {
                    required: true,
                },
            },
            // Specify validation error messages
            messages: {
                email: {
                    required: "This field is required.",
                },
                password: {
                    required: "This field is required.",
                },
            },
        });
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
       </script>
       
   @endif
  </body>
</html>