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
      <link rel="stylesheet" href="{{url('plugins/slick/slick.css')}}">
      <link rel="stylesheet" href="{{url('plugins/font-awesome/fontawesome.min.css')}}">
      <link rel="stylesheet" href="{{url('plugins/font-awesome/brands.css')}}">
      <link rel="stylesheet" href="{{url('plugins/font-awesome/solid.css')}}">
      <!-- # Main Style Sheet -->
      <link rel="stylesheet" href="{{url('css/style.css')}}">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="stylesheet" href="{{ url('css/toastr.min.css')}}">
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
      <!-- CSS only -->
      <style>
          .mb-2 {
            margin-bottom: 0.5rem !important;
            font-size: 18px;
            }
    .rowd{
        padding-bottom: 15px;
    }        
      </style>
       
   </head>
   <body>
     <!-- navigation -->
     <header class="navigation bg-tertiary">
         <nav class="navbar navbar-expand-xl navbar-light text-center py-3">
            <div class="container">
               <a class="navbar-brand" href="{{url('index')}}">
               <img loading="prelaod" decoding="async" class="img-fluid" width="160" src="{{url('images/logo.png')}}" alt="Wallet">
               </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mb-2 mb-lg-0">
                     <!-- <li class="nav-item"> <a class="nav-link" href="{{url('index')}}">Home</a>
                     </li> -->
                     <!-- <li class="nav-item "> <a class="nav-link" href="#">Schedules</a>
                     </li>
                     <li class="nav-item "> <a class="nav-link" href="#">Speakers</a>
                     </li>
                     {{-- <li class="nav-item "> <a class="nav-link" href="#">Booking</a>
                     </li> --}} -->
                     <!-- <li class="nav-item "> <a class="nav-link" href="{{url('registration_details')}}">Registration</a>
                     </li> -->
                  </ul>
                  {{-- <a href="#!" class="btn btn-primary ms-2 ms-lg-3">asamiindia.com</a> --}}
               </div>
            </div>
         </nav>
      </header>

<section style="padding-top: 70px; padding-left: 10px; padding-right: 10px;">
   <div class="container mrtobadd" style="position: relative;">
      <div class="container">
         <div class="tab-pane fade show active" id="pujari_detail">
            <div class="row">
                  <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between">
                              <span>User Details</span> 
                            </h5><hr>
                            <div class="row">
                                <h6 class="col-sm-4" style="color:black">Name</h6>
                                <p class="col-sm-8" style="color:black">{{$user->name}}</p>
                            </div>
                            <div class="row">
                                <h6 class="col-sm-4" style="color:black">Email</h6>
                                <p class="col-sm-8" style="color:black">{{$user->email}}</p>
                            </div>
                            <div class="row">
                                <h6 class="col-sm-4" style="color:black">Contact</h6>
                                <p class="col-sm-8" style="color:black">{{$user->contact}}</p>
                            </div>

                            <div class="row">
                              <h6 class="col-sm-4" style="color:black">WhatsApp Number</h6>
                              <p class="col-sm-8" style="color:black">{{$user->whatsapp_number}}</p>
                          </div>

                           <div class="row">
                              <h6 class="col-sm-4" style="color:black">Country</h6>
                              <p class="col-sm-8" style="color:black">{{$user->country}}</p>
                           </div>
                       
                           <div class="row">
                              <h6 class="col-sm-4" style="color:black">State</h6>
                              <p class="col-sm-8" style="color:black">{{$user->state}}</p>
                           </div>

                            <div class="row">
                              <h6 class="col-sm-4" style="color:black">Address</h6>
                              <p class="col-sm-8" style="color:black">{{$user->address}}</p>
                           </div>

                           <div class="row">
                              <h6 class="col-sm-4" style="color:black">Check-In-Date</h6>
                              <p class="col-sm-8" style="color:black">@if($user->monthtypes=='2')
                               2 March 2023
                                @endif  
                                 @if($user->monthtypes=='3')
                              3 March 2023
                                @endif   
                                @if($user->monthtypes=='4')
                              4 March 2023
                                @endif</p>
                           </div>

                           <div class="row rowd">
                              <h6 class="col-sm-4" style="color:black">Aasami Indian Member</h6>
                              <p class="col-sm-8" style="color:black">
                                   @if($user->asami_type=='0')
                            No
                          @endif
                          @if($user->asami_type=='00')
                           Yes
                                @endif
                                </p>
                           </div>
                         <div class="row rowd">
                              <h6 class="col-sm-4" style="color:black">Company Person</h6>
                              <p class="col-sm-8" style="color:black">
                                    @if($user->company_person=='0')
                            No
                          @endif
                          @if($user->company_person=='00')
                           Yes
                                @endif
                              </p>
                           </div>
                           <div class="row rowd">
                              <h6 class="col-sm-4" style="color:black">Category (Non Residential Registration Fee
)</h6>
                              <p class="col-sm-8" style="color:black">@if($user->category_id=='1')
                            Post Graduate
                          @endif
                          @if($user->category_id=='2')
                            ASAMI India Member
                                @endif
                          @if($user->category_id=='3')
                           	Non Member
                                @endif
                        @if($user->category_id=='4')
                           Foreign National ASAMI India Member
                                @endif   
                        @if($user->category_id=='5')
                            Foreign National ASAMI India Non Member
                                @endif   </p>
                           </div>

                           <div class="row rowd">
                              <h6 class="col-sm-4" style="color:black">Amount (Non Residential Registration Fee
)</h6>
                              <p class="col-sm-8" style="color:black">{{$user->amount_fast}}</p>
                           </div>

                           <div class="row rowd">
                              <h6 class="col-sm-4" style="color:black">Month Types(Residential Package
)</h6>
                              <p class="col-sm-8" style="color:black">@if($user->monthtypes=='2')
                               2 March 2023
                                @endif  
                                 @if($user->monthtypes=='3')
                              3 March 2023
                                @endif   
                                @if($user->monthtypes=='4')
                              4 March 2023
                                @endif</p>
                           </div>
                           <div class="row rowd">
                            <h6 class="col-sm-4" style="color:black">Amount (Residential Package
)</h6>
                              <p class="col-sm-8" style="color:black">{{$user->residential_price}}</p>
                           </div>
                        
                        <div class="row rowd">
                            <h6 class="col-sm-4" style="color:black">Category (Registration fee for Accompanying Person
)</h6>
                              <p class="col-sm-8" style="color:black">
                                   @if($user->category_type2=='6')
                               Indian National	
                                @endif   
                                 @if($user->category_type2=='7')
                                Foregin National
                                @endif  
                              </p>
                           </div>
                           
                        <div class="row rowd">
                            <h6 class="col-sm-4" style="color:black">Amount (Registration fee for Accompanying Person
)</h6>
                              <p class="col-sm-8" style="color:black">{{$user->amount3}}</p>
                           </div>
                           
                           
                          <!-- <div class="row">
                              <h6 class="col-sm-4" style="color:black">Accompanying Person</h6>
                              <p class="col-sm-8" style="color:black"> 
                                 @if(empty($user->accompanying_person))
                                       NA
                                 @else
                                       {{$user->accompanying_person}}
                                 @endif
                              </p>
                           </div>-->
                           @if(!empty($user->paper_type))
                              <div class="row">
                                 <h6 class="col-sm-4" style="color:black">Paper Type</h6>
                                 <p class="col-sm-8" style="color:black"> 
                                   {{$user->paper_type}}
                                 </p>
                              </div>
                           @endif

                           <div class="row">
                              <h6 class="col-sm-4" style="color:black">Amount</h6>
                              <p class="col-sm-8" style="color:black">
                                 @if($user->country == "India")
                                    ₹
                                 @else
                                    $
                                 @endif
                                 {{$user->amount}}
                              </p>
                           </div>
                           @if(!empty($user->message))
                              <div class="row">
                                 <h6 class="col-sm-4" style="color:black">Abstract</h6>
                                 <p class="col-sm-8" style="color:black"> 
                                 {{$user->message}}
                                 </p>
                              </div>

                           @endif
                        </div>
                    </div>                            
                  </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between">
                                <span>Reciept</span> 
                                <!-- <a class="edit-link" data-bs-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit me-1"></i>Edit</a> -->
                            </h5><hr>
                            <div class="col-sm-12 ">
                              <img class="border border-dark" src="{{url('/public/public/payment_reciept',$user->payment_reciept)}}" width="100%" height="500px !important">
                            </div>
                        </div>
                    </div>                            
                </div>
            </div>
        </div>
      </div> 
   </div> 
</section>
      <footer class="section bg-tertiary" style="padding-bottom: 0px;">
         <div class="container">
            <div class="row justify-content-between">
               <div class="col-lg-4 col-md-4 col-12 mb-4">
                  <div class="footer-widget">
                     <div class="footerlogo">
                        <img src="{{url('images/logofooter.png')}}">
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
     <div class="footer-bottom">
        <div class="container clearfix text-center">
           <div class="copyright-text">
              <p>Copyright © asamiindia2023. All Right Reserved
              </p>
           </div>
        </div>
     </div>
     <!-- # JS Plugins -->
     <script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
     <script src="{{url('plugins/bootstrap/bootstrap.min.js')}}"></script>
     <script src="{{url('plugins/slick/slick.min.js')}}"></script>
     <script src="{{url('plugins/scrollmenu/scrollmenu.min.js')}}"></script>
     <!-- Main Script -->
     <script src="{{url('js/script.js')}}"></script>
     <!-- JavaScript Bundle with Popper -->

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
  
</body>
</html>