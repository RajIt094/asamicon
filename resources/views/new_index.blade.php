<!DOCTYPE html>
<html lang="en-us">
   <head>
      <meta charset="utf-8">
      <title>Asamicon</title>
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
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   </head>
   <body>
      <!-- navigation -->
      <header class="navigation bg-tertiary">
         <nav class="navbar navbar-expand-xl navbar-light text-center py-3">
            <div class="container">
               <a class="navbar-brand" href="index.html">
               <img loading="prelaod" decoding="async" class="img-fluid" width="160" src="images/logo.png" alt="Wallet">
               </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mb-2 mb-lg-0">
                     <li class="nav-item"> <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item "> <a class="nav-link" href="#">Schedules</a>
                     </li>
                     <li class="nav-item "> <a class="nav-link" href="#">Speakers</a>
                     </li>
                     <li class="nav-item "> <a class="nav-link" href="#">Booking</a>
                     </li>
                     <li class="nav-item "> <a class="nav-link" href="{{url('registration_details')}}">Registration</a>
                     </li>
                  </ul>
                  <a href="#!" class="btn btn-primary ms-2 ms-lg-3">asamiindia.com</a>
               </div>
            </div>
         </nav>
      </header>
      <!-- /navigation -->
      <div class="modal applyLoanModal fade" id="applyLoan" tabindex="-1" aria-labelledby="applyLoanLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header border-bottom-0">
                  <h4 class="modal-title" id="exampleModalLabel">How much do you need?</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <form action="#!" method="post">
                     <div class="row">
                        <div class="col-lg-6 mb-4 pb-2">
                           <div class="form-group">
                              <label for="loan_amount" class="form-label">Amount</label>
                              <input type="number" class="form-control shadow-none" id="loan_amount" placeholder="ex: 25000">
                           </div>
                        </div>
                        <div class="col-lg-6 mb-4 pb-2">
                           <div class="form-group">
                              <label for="loan_how_long_for" class="form-label">How long for?</label>
                              <input type="number" class="form-control shadow-none" id="loan_how_long_for" placeholder="ex: 12">
                           </div>
                        </div>
                        <div class="col-lg-12 mb-4 pb-2">
                           <div class="form-group">
                              <label for="loan_repayment" class="form-label">Repayment</label>
                              <input type="number" class="form-control shadow-none" id="loan_repayment" disabled>
                           </div>
                        </div>
                        <div class="col-lg-6 mb-4 pb-2">
                           <div class="form-group">
                              <label for="loan_full_name" class="form-label">Full Name</label>
                              <input type="text" class="form-control shadow-none" id="loan_full_name">
                           </div>
                        </div>
                        <div class="col-lg-6 mb-4 pb-2">
                           <div class="form-group">
                              <label for="loan_email_address" class="form-label">Email address</label>
                              <input type="email" class="form-control shadow-none" id="loan_email_address">
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <button type="submit" class="btn btn-primary w-100">Get Your Loan Now</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <section class="banner bg-tertiary position-relative overflow-hidden">
         <div class="container">
         <div class="row align-items-center justify-content-center">
            <div data-aos="fade-up" class="col-lg-6 mb-5 mb-lg-0">
               <div class="logobanner">
                  <img src="images/asami.png">
                  <img src="images/mp.png">
               </div>
               <h1 class="text-capitalize mb-4 baanertitel">Strategies in Trauma and  Limb Reconstruction</h1>
            </div>
            <div div data-aos="fade-up" class="col-lg-6">
               <div class="mansection">
                  <div class="cardbanner">
                     <img src="images/anil.jpg">
                     <h3>Dr. Anil Mahajan</h3>
                     <p>ORG Chairman</p>
                  </div>
                  <div class="cardbanner">
                     <img src="images/use1.png">
                     <h3>Dr. Jayant Sharma</h3>
                     <p>Joint Secretary</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class=" greensectinon">
         <div class="container">
            <div class="row">
               <div data-aos="fade-down" class="col-lg-5">
                  <div class="venuimage">
                     <img src="images/venuimages.png">
                  </div>
               </div>
               <div class="col-lg-7 col-md-6 ">
                  <div class="venutext">
                     <img src="images/location.png">
                     <h2>Venue</h2>
                     <h3>Brilliant Convention Centre </h3>
                     <p>Scheme Number 78, Part II, Vijay Nagar, Indore,<br> Madhya Pradesh 452010</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="about-section section bg-tertiary bgthemgrey position-relative overflow-hidden">
         <div class="container">
         <div class="row align-items-center">
            <span class="datetitele">3rd , 4th & 5th  March 2023</span>
         </div>
         <div class="row" style="margin-top: 50px; margin-bottom: 0px;">
            <div data-aos="zoom-in" class="col-lg-3 col-6">
               <div class="allcircleinfo">
                  <img src="images/dr-ruta-kulkarni.jpg">
                  <h3>Dr. Ruta M Kulkarni</h3>
                  <p>President ASAMI India</p>
               </div>
            </div>
            <div data-aos="zoom-in" class="col-lg-3 col-6">
               <div class="allcircleinfo">
                  <img src="images/rav-.jpg">
                  <h3>Dr. Ravi Chauhan</h3>
                  <p>Secretary ASAMI India</p>
               </div>
            </div>
            <div data-aos="zoom-in" class="col-lg-3 col-6">
               <div class="allcircleinfo">
                  <img src="images/anil.jpg">
                  <h3>Dr. Anil Mahajan</h3>
                  <p>ORG Chairman</p>
               </div>
            </div>
            <div data-aos="zoom-in" class="col-lg-3 col-6">
               <div class="allcircleinfo">
                  <img src="images/use1.png">
                  <h3>Dr. Jayant Sharma</h3>
                  <p>Joint Secretary</p>
               </div>
            </div>
         </div>
      </section>
      <section class="invitionbg">
         <div class="container">
            <div class="row align-items-center justify-content-between">
               <span class="invitiontitel">Invitation</span>
            </div>
            <div class="row">
               <div class="transprentbg">
                  <p>With Immense pleasure we invite you to ASAMI INDIA'S annual fest ASAMICON 2023, at INDORE, MP,INDIA.The cleanest city of the country for five times, and street food capital of the country.Indore is centrally located and well connected by Air and Real Routes</p>
                  <p>"Shaba-e-Malwa" is the best description of evenings of the city We shall host you all in the best convention Center, with the best surgeon and speakers to enlighten us all on the " strategies of Trauma and Reconstruction"</p>
                  <p>Continuing with the previous conferences tradition of excellence in education and Training, we too try to provide the Best Educational and Traditional feast</p>
                  <h2><span><img src="images/namskar.png"></span>Padharo Saa<img src="images/namskar.png"></span></h2>
               </div>
            </div>
         </div>
      </section>
      <section class="about-section section bg-tertiary bgthemgrey position-relative overflow-hidden">
         <div class="container">
            <div class="row align-items-center">
               <span class="datetitele">Organising Committee</span>
            </div>
            <div class="row" style="margin-top: 50px; margin-bottom: 25px;">
               <div  class="col-lg-3">
               </div>
               <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/js.jpg">
                     <h3>Dr. G S Kulkarni</h3>
                     <p>Past President ASAMI India</p>
                  </div>
               </div>
               <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/hrjhujhunwala.jpg">
                     <h3>Dr. H R Jhunjhunwala</h3>
                     <p>Past President ASAMI India</p>
                  </div>
               </div>
               <div class="col-lg-3">
               </div>
            </div>
            <div class="row" style="margin-top: 30px; margin-bottom: 25px;">
               <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/dr-ruta-kulkarni.jpg">
                     <h3>Dr. Ruta M Kulkarni</h3>
                     <p>President ASAMI India</p>
                  </div>
               </div>
               <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/manish_dha.jpg">
                     <h3>Dr. Manish Dhawan</h3>
                     <p>Past President ASAMI India</p>
                  </div>
               </div>
               <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/rav-.jpg">
                     <h3>Dr. Ravi Chauhan</h3>
                     <p>Secretary ASAMI India</p>
                  </div>
               </div>
               <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/rajat_agrwal.png">
                     <h3>Dr.Rajat Agarwal</h3>
                     <p>Vice President ASAMI India</p>
                  </div>
               </div>
            </div>
            <div class="row" style="margin-top: 30px; ">
               <div class="col-lg-3">
               </div>
               <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/anil.jpg">
                     <h3>Dr. Anil Mahajan</h3>
                     <p>ORG CHAIRMAN</p>
                  </div>
               </div>
               <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/use1.png">
                     <h3>Dr. Jayant Sharma</h3>
                     <p>ORG Secretary</p>
                  </div>
               </div>
               <div class="col-lg-3">
               </div>
            </div>
         </div>
      </section>
      <section class="about-section section bg-tertiary bgthemdark position-relative overflow-hidden">
         <div class="container">
            <div class="row align-items-center">
               <span class="datetitele ">Scientific Committee</span>
            </div>
            <div class="row" style="margin-top: 50px; margin-bottom: 25px;">
               <div class="col-lg-3">
               </div>
               <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/Dr-Milind-Chaudhary.jpg">
                     <h3 class="colorwithe">Dr. Milind Chaudhary</h3>
                     <p class="colorwithe">Past President ASAMI India
</p>
                  </div>
               </div>
               <div class="col-lg-3 col-6">
                  <div data-aos="zoom-in" class="allcircleinfo">
                     <img src="images/mangal-parihar.jpg">
                     <h3 class="colorwithe">Dr. Mangal Parihar
</h3>
                     <p class="colorwithe">Chairman Edu. Comm. ASAMI India
</p>
                  </div>
               </div>
               <div class="col-lg-3 col-6">
               </div>
            </div>
            <div class="row" style="margin-top: 30px; margin-bottom: 25px;">
               <div data-aos="zoom-in" class="col-lg-4 col-6">
                  <div class="allcircleinfo">
                     <img src="images/dr-ruta-kulkarni.jpg">
                     <h3 class="colorwithe">Dr. Ruta M Kulkarni
</h3>
                     <p class="colorwithe">President ASAMI India
</p>
                  </div>
               </div>
               <div  data-aos="zoom-in" class="col-lg-4 col-6">
                  <div class="allcircleinfo">
                     <img src="images/rav-.jpg">
                     <h3 class="colorwithe">Dr.Ravi Chouhan</h3>
                     <p class="colorwithe">Joint Secretary ASAMI India
</p>
                  </div>
               </div>
               <div data-aos="zoom-in" class="col-lg-4 col-6">
                  <div class="allcircleinfo">
                     <img src="images/Siddhartha-Sharma-10.jpg">
                     <h3 class="colorwithe">Dr.Siddhartha Sharma
</h3>
                     <p class="colorwithe">Joint Secretary ASAMI India
</p>
                  </div>
               </div>

            </div>

         </div>
      </section>
      <section class="workshop">
         <div class="container">
            <div class="row align-items-center">
               <h2 class="workshoptitel">Workshop</h2>
            </div>
            <div class="row">
               <div data-aos="zoom-in" class="col-lg-5">
                  <div class="workshopcard">
                     <h2>Basic Workshop</h2>
                     <p>* Lectures by National Faculty</p>
                     <p>* Saw Bone Workshop on Application In Femur / Tibia</p>
                     <p>* Deformity Principles</p>
                  </div>
               </div>
               <div class="col-lg-7 col-md-6 ">
                  <div data-aos="zoom-in" class="time">
                     <img src="images/circle.png">
                  </div>
               </div>
            </div>

            <div class="row align-items-center">
               <span class="" style="text-align: center;font-size: 28px;color: #000;margin-top: 34px;">Basic Workshop Directors & Coordinator

</span>
            </div>

<div class="row" style="margin-top: 50px;">

               <div data-aos="zoom-in" class="col-lg-4 col-6 aos-init aos-animate">
                  <div class="allcircleinfo">
                     <img src="images/Siddhartha-Sharma-10.jpg">
                     <h3>Dr. Siddarth Sharma</h3>
                     <p>Director</p>
                  </div>
               </div>
               <div data-aos="zoom-in" class="col-lg-4 col-6 aos-init aos-animate">
                  <div class="allcircleinfo">
                     <img src="images/samsul.png">
                     <h3>Dr. Shamshul Hoda</h3>
                     <p>Director</p>
                  </div>
               </div>

               <div data-aos="zoom-in" class="col-lg-4 col-6 aos-init aos-animate">
                  <div class="allcircleinfo">
                     <img src="images/prsaantupdhay.png">
                     <h3>Dr. Prashant Upadhyaya</h3>
                     <p>Coordinator</p>
                  </div>
               </div>



            </div>



        <!--     <div class="sectionmanage">
               <div class="row align-items-center">
                  <span class="datetitele " style="background: #000;color: #ffffff;">Workshop Directors</span>
               </div>
               <div class="row mangemargin" style="margin-top: 90px; margin-bottom: 25px;">
                  <div data-aos="zoom-in" class="col-lg-3 col-6">
                     <div class="allcircleinfo">
                        <img src="images/use1.png">
                        <h3>Dr. PN Vasudevan</h3>
                        <p>EC Member ASAMI India</p>
                     </div>
                  </div>
                  <div data-aos="zoom-in" class="col-lg-3 col-6">
                     <div class="allcircleinfo">
                        <img src="images/use1.png">
                        <h3>Dr.Rajat Agarwal</h3>
                        <p>Vice President ASAMI India</p>
                     </div>
                  </div>
                  <div data-aos="zoom-in" class="col-lg-3 col-6">
                     <div class="allcircleinfo">
                        <img src="images/use1.png">
                        <h3>Dr. Amar Soni</h3>
                        <p>Lorem demo text</p>
                     </div>
                  </div>
                  <div data-aos="zoom-in" class="col-lg-3 col-6">
                     <div class="allcircleinfo">
                        <img src="images/use1.png">
                        <h3>Dr. Prashant Upadhyay</h3>
                        <p>Lorem demo text</p>
                     </div>
                  </div>
               </div>
            </div> -->
         </div>
      </section>




    <section class="section greenbg overflow-hidden bg-tertiary" style="background: #050017;">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-6 ">
                  <div class="section-title text-center">
                     <h1 class="greentitel">Workshop I <br> HTO By INTERNAL FIXATION</h1>
                  </div>
               </div>
            </div>
         </div>
      </section>



      <section class="about-section section bg-tertiary bgthemgrey position-relative overflow-hidden">
         <div class="container">
            <div class="row align-items-center">
               <span class="datetitele">Workshop Directors</span>
            </div>
            <div class="row" style="margin-top: 50px;">
               <div class="col-lg-3"></div>

               <div data-aos="zoom-in" class="col-lg-3 col-6 aos-init aos-animate">
                  <div class="allcircleinfo">
                     <img src="images/Dr-Milind-Chaudhary.jpg">
                     <h3>Dr. Milind Chaudhary</h3>
                     <p>Past President ASAMI India</p>
                  </div>
               </div>
               <div data-aos="zoom-in" class="col-lg-3 col-6 aos-init aos-animate">
                  <div class="allcircleinfo">
                     <img src="images/use1.png">
                     <h3>Dr. John Mukhopadhya</h3>
                     <p>Chairman Edu. Comm. ASAMI India</p>
                  </div>
               </div>
               <div class="col-lg-3"></div>


            </div>


         </div>
      </section>






      <section class="section greenbg overflow-hidden bg-tertiary">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-6 ">
                  <div class="section-title text-center">
                     <h1 class="greentitel">Workshop II <br>  HTO By EXTERNAL FIXATION</h1>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="about-section section bg-tertiary bgthemgrey position-relative overflow-hidden">
         <div class="container">
            <div class="row align-items-center">
               <span class="datetitele">Workshop Directors</span>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col-lg-3"></div>

               <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/mangal-parihar.jpg">
                     <h3>Dr.Mangal Parihar</h3>
                     <p>Chairman Edu. Comm. ASAMI India</p>
                  </div>
               </div>
               <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/manish_dha.jpg">
                     <h3>Dr. Manish Dhawan</h3>
                     <p>Past President ASAMI India</p>
                  </div>
               </div>
                <div class="col-lg-3"></div>


            </div>

               <div class="row justify-content-between">
             <h3 class="internaltext">INTERNAL FIXATION AND EXTERNAL FIXATION</h3>
            </div>

         </div>
      </section>
      <footer class="section bg-tertiary" style="padding-bottom: 0px;">
         <div class="container">
            <div class="row justify-content-between">
               <div class="col-lg-3 col-md-4 col-12 mb-4">
                  <div class="footer-widget">
                     <div class="footerlogo">
                        <img src="images/logofooter.png">
                     </div>

                  </div>
               </div>
               <div class="col-lg-2 col-md-4 col-12 mb-4">
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
               </div>
               <div class="col-lg-4 col-md-4 col-12 mb-4">
                  <div class="footer-widget">
                     <h5 class="mb-4  font-secondary textasami">ASAMI India</h5>
                     <ul class="list-unstyled">
                        <li class="mb-2">Jayant Sharma (Joint Secretary) : 9826035117
                        </li>
                        <li class="mb-2">ANil Mahajan (Chairman)  : 9826727855
                        </li>
                        <li class="mb-2">Email: jayantkishansharma@gmail.com
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

      <script src="plugins/jquery/jquery.min.js"></script>
      <script src="plugins/bootstrap/bootstrap.min.js"></script>
      <script src="plugins/slick/slick.min.js"></script>
      <script src="plugins/scrollmenu/scrollmenu.min.js"></script>
      <!-- Main Script -->
      <script src="js/script.js"></script>
   </body>
</html>
