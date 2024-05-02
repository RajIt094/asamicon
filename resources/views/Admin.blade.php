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
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
      <!-- CSS only -->
      <style>
         table.dataTable thead tr th{
            color: black;
         }

         table.dataTable tbody tr td{
            color: black;
         }

         /* .dataTables_filter {
            margin-right: 40px;
            margin-top: 20px;
         }
         .dataTables_length{
            margin-left: 10px;
         } */

         .mb-2 {
            margin-bottom: 0.5rem !important;
            font-size: 18px;
            }
   
     
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
   </head>
   <body>
     <!-- navigation -->
     <header class="navigation bg-tertiary">
         <nav class="navbar navbar-expand-xl navbar-light text-center py-3">
            <div class="container">
               <a class="navbar-brand" href="{{url('index')}}">
               <img loading="prelaod" decoding="async" class="img-fluid" width="160" src="images/logo.png" alt="Wallet">
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
                  <a href="{{url('logout')}}" class="btn btn-primary ms-2 ms-lg-3">Logout</a>
               </div>
            </div>
         </nav>
      </header>

<section style="padding-top: 70px; padding-left: 10px; padding-right: 10px;">
   <div class="container mrtobadd" style="position: relative;">
      <div class="card-body">
         <div class="table-responsive">
               <table id="table_id" class="display" border="" style="min-width: 845px">
                  <thead>
                     <tr>
                           <th>#ID</th>
                           <th>Action</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Phone Number</th>
                           <th>Whatsapp Number</th>
                           <th>Address</th>
                           <th>State</th>
                           <th>Country</th>
                           <th>Check In Date</th>
                           <th>Asami India Member</th>
                            <th>Accompanying  Person</th>
                            <th>Category (Non Residential Registration Fee)</th>
                            <!--<th>Month (NRRF)</th>
                            <th>Types (NRRF)</th>-->
                            <th>Amount (Non Residential Registration Fee)</th>
                             <th>Month (Residential Package
)</th>
                             <!-- <th>Types (RP)</th>-->
                               <th>Amount (Residential Package
)</th>
                           <th>Category (Registration fee for Accompanying Person
)</th>
                          <!-- <th>Month TYPES (RFAP)</th>
                            <th>Types (RFAP)</th>-->
                              <th>Amount (Registration fee for Accompanying Person
)</th>
                           <!--<th>Accompanying Person</th>-->
                           <th>Paper Type</th>
                           <th>Final Amount</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($user as $data)
                     <tr>
                        <td>{{++$s_no}}</td>
                           <td>
                              <a class="btn btn-primary w-20" href="{{url('user_details',$data->id)}}">View</a>
                           </td>
                           <td>{{$data->name}}</td>
                           <td>{{$data->email}}</td>
                           <td>{{$data->contact}}</td>
                           <td>{{$data->whatsapp_number}}</td>
                           <td>{{$data->address}}</td>
                           <td>{{$data->state}}</td>
                           <td>{{$data->country}}</td>
                           <td>{{$data->date}}</td>
                           <td> @if($data->asami_type=='0')
                            No
                          @endif
                          @if($data->asami_type=='00')
                           Yes
                                @endif
                               
                             </td>
                            <td>
                            @if($data->company_person=='0')
                            No
                          @endif
                          @if($data->company_person=='00')
                           Yes
                                @endif
                            </td>
                            <td>@if($data->category_id=='1')
                            Post Graduate
                          @endif
                          @if($data->category_id=='2')
                            ASAMI India Member
                                @endif
                          @if($data->category_id=='3')
                           	Non Member
                                @endif
                        @if($data->category_id=='4')
                           Foreign National ASAMI India Member
                                @endif   
                        @if($data->category_id=='5')
                            Foreign National ASAMI India Non Member
                                @endif   
                              
                                </td>
                             <!--<td>{{$data->month_type}}</td>
                              <td>{{$data->types1}}</td>-->
                               <td>{{$data->amount_fast}}</td>
                                <td>@if($data->monthtypes=='2')
                               2 March 2023
                                @endif  
                                 @if($data->monthtypes=='3')
                              3 March 2023
                                @endif   
                                @if($data->monthtypes=='4')
                              4 March 2023
                                @endif
                                   </td>
                               <!--  <td>{{$data->residential_type}}</td>-->
                                  <td>{{$data->residential_price}}</td>
                                   <td> @if($data->category_type2=='6')
                               Indian National	
                                @endif   
                                 @if($data->category_type2=='7')
                                Foregin National
                                @endif  
                                     </td>
                                   
                           <!--<td>{{$data->month_types2}}</td>
                           <td>{{$data->conftypes2}}</td>-->
                           
                           
                             <td>{{$data->amount3}}</td>
                           <!--<td>{{$data->accommodation_type}}</td>-->
                          <!-- <td>
                              @if(empty($data->accompanying_person))
                                 NA
                              @else
                                 {{$data->accompanying_person}}
                              @endif
                           </td>-->

                           <td>
                              @if(empty($data->paper_type))
                                 NA
                              @else
                                 {{$data->paper_type}}
                              @endif

                        </td>
                           <td>
                              @if($data->country == "India")
                                 ₹
                              @else
                                 $
                              @endif
                              {{$data->amount}}
                           </td>
                     </tr>
                     @endforeach
                  </tbody>

               </table>
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
     <div class="footer-bottom">
        <div class="container clearfix text-center">
           <div class="copyright-text">
              <p>Copyright © asamiindia2023. All Right Reserved
              </p>
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
     <!-- JavaScript Bundle with Popper -->
          <!-- Toastr -->
   <script src="{{url('js/toastr.min.js')}}"></script>

     <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

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
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
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