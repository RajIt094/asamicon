@extends('layouts.admin.web')

@section('content')
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
         <div class="container mrtobadd">
         <div class="row align-items-center justify-content-center">

            <div data-aos="fade-up" class="col-lg-6 mb-5 mb-lg-0">
               <p class="annualpg">Annual Conference of ASAMI India</p>
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
                     <p>Organizing Chairman</p>
                  </div>
                  <div class="cardbanner">
                     <img src="images/use1.png">
                     <h3>Dr. Jayant Sharma</h3>
                     <p>Organizing Secretary</p>
                  </div>
                   <div class="cardbanner adjmobile" style="margin-left: 145px;">
                     <img src="images/Sharma.jpg">
                     <h3>Dr. D. K Sharma</h3>
                     <p>Treasurer</p>
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
            <div data-aos="zoom-in" class="col-lg-4 col-6">
               <div class="allcircleinfo">
                  <img src="images/dr-ruta-kulkarni.jpg">
                  <h3>Dr. Ruta M Kulkarni</h3>
                  <p>President ASAMI India</p>
               </div>
            </div>

            <div data-aos="zoom-in" class="col-lg-4 col-6 mraudomobile">
               <div class="allcircleinfo">
                     <img src="images/rajat_agrwal.png">
                     <h3>Dr.Rajat Agarwal</h3>
                     <p>Vice President ASAMI India</p>
                  </div>
            </div>

            <div data-aos="zoom-in" class="col-lg-4 col-6 mraudomobile ">
               <div class="allcircleinfo">
                  <img src="images/rav-.jpg">
                  <h3>Dr. Ravi Chauhan</h3>
                  <p>Secretary ASAMI India</p>
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
                  <p>With Immense pleasure we invite you to ASAMI INDIA'S annual fest ASAMICON 2023, at INDORE, MP, INDIA. The cleanest city of the country for five times, and street food capital of the country. Indore is centrally located and well connected by Air and Rail Routes.</p>
                  <p>"Shaba-e-Malwa" is the best description of evenings of the city
                  We shall host you all in the best convention Center, with the best surgeon and speakers to enlighten us all on the 
                  "Strategies in Trauma and  Limb Reconstruction".</p>
                  <p>Continuing with the previous conferences tradition of excellence in Education and Training, We too shall try to provide the best educational and traditional feast.</p>
                  <h2><span><img src="images/namskar.png"></span>Padharo Saa<img src="images/namskar.png"></span></h2>
               </div>
            </div>
         </div>
      </section>
      <section class="about-section section bg-tertiary bgthemgrey position-relative overflow-hidden">
         <div class="container">
            <div class="row align-items-center">
               <span class="datetitele">Patrons</span>
            </div>
            <div class="row" style="margin-top: 50px; margin-bottom: 25px;">
               <div  class="col-lg-3">
               </div>
               <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/js.jpg">
                     <h3>Dr. G S Kulkarni</h3>
                     <p>Patron</p>
                  </div>
               </div>
               <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/hrjhujhunwala.jpg">
                     <h3>Dr. H R Jhunjhunwala</h3>
                     <p>Patron</p>
                  </div>
               </div>
               <div class="col-lg-3">
               </div>
            </div>

             <div class="row align-items-center">
               <span class="datetitele">Organizing Committee</span>
            </div>

            <div class="row mrbt0" style="margin-top: 30px; margin-bottom: 25px;">
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
                     <img src="images/rajat_agrwal.png">
                     <h3>Dr.Rajat Agarwal</h3>
                     <p>Vice President ASAMI India</p>
                  </div>
               </div>

                 <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/rav-.jpg">
                     <h3>Dr. Ravi Chauhan</h3>
                     <p>Secretary ASAMI India</p>
                  </div>
               </div>

            </div>
            <div class="row mrtop0" style="margin-top: 30px; ">
               
               <div data-aos="zoom-in" class="col-lg-4 col-6">
                  <div class="allcircleinfo">
                     <img src="images/anil.jpg">
                     <h3>Dr. Anil Mahajan</h3>
                     <p>Organizing Chairman</p>
                  </div>
               </div>
               <div data-aos="zoom-in" class="col-lg-4 col-6">
                  <div class="allcircleinfo">
                     <img src="images/use1.png">
                     <h3>Dr. Jayant Sharma</h3>
                     <p>Organizing Secretary</p>
                  </div>
               </div>
               <div data-aos="zoom-in" class="col-lg-4 col-6 mraudomobile">
                   <div class="allcircleinfo">
                     <img src="images/Sharma.jpg">
                     <h3>Dr. D. K Sharma</h3>
                     <p>Treasurer</p>
                  </div>
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
               
               <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/Dr-Milind-Chaudhary.jpg">
                     <h3 class="colorwithe">Dr. Milind Chaudhary</h3>
                    <!--  <p class="colorwithe">Past President ASAMI India</p> -->
                  </div>
               </div>
               <div class="col-lg-3 col-6">
                  <div data-aos="zoom-in" class="allcircleinfo">
                     <img src="images/mangal-parihar.jpg">
                     <h3 class="colorwithe">Dr. Mangal Parihar
</h3>
                     <!-- <p class="colorwithe">Chairman Edu. Comm. ASAMI India</p> -->
                  </div>
               </div>
          
          
       
               <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/dr-ruta-kulkarni.jpg">
                     <h3 class="colorwithe">Dr. Ruta M Kulkarni
</h3>
                     <p class="colorwithe">President ASAMI India
</p>
                  </div>
               </div>
               <div  data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/rav-.jpg">
                     <h3 class="colorwithe">Dr.Ravi Chouhan</h3>
                     <p class="colorwithe"> Secretary ASAMI India</p>
                  </div>
               </div>
                 </div>

            <!--    <div data-aos="zoom-in" class="col-lg-4 col-6">
                  <div class="allcircleinfo">
                     <img src="images/Siddhartha-Sharma-10.jpg">
                     <h3 class="colorwithe">Dr.Siddhartha Sharma
</h3>
                     <p class="colorwithe">Joint Secretary ASAMI India
</p>
                  </div>
               </div> -->
          
            
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

               <div data-aos="zoom-in" class="mraudomobile col-lg-4 col-6  aos-init aos-animate">
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



 


       <section class="section greenbg overflow-hidden bg-tertiary" style="    background: #e44058;">
         <div class="container">

            <div class="row align-items-center justify-content-between">
               <span class="invitiontiteladvance">Advance Workshop </span>
            </div>
         
            <div class="row align-items-center">
               <span class="" style="text-align: center;font-size: 28px;color: #fff;margin-top: 15px;margin-bottom: 10px;font-weight: bold;">Advance Workshop to Be Divided into 2 Sessions
                </span>
            </div>

            <div class="col-lg-12 text-center">
            <p style="display: inline-block; margin: 2px 15px;color: #fff;    font-size: 20px;">1. HTO By INTERNAL FIXATION </p>

            <p style="display: inline-block; margin: 2px 15px;color: #fff;    font-size: 20px;">2. HTO By EXTERNAL FIXATION </p>

            </div>
         </div>
      </section>


      <section class="section greenbg overflow-hidden bg-tertiary">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-6 ">
                  <div class="section-title text-center">
                     <h1 class="greentitel">Workshop I <br>  HTO By INTERNAL FIXATION</h1>
                  </div>
               </div>
            </div>
         </div>
      </section>





      <section class="about-section section bg-tertiary bgthemgrey position-relative overflow-hidden">
         <div class="container">
            <div class="row align-items-center">
               <span class="datetitele">Workshop Directors Session I </span>
            </div>
            <div class="row" style="margin-top: 50px;">
               <div class="col-lg-3"></div>

               <div data-aos="zoom-in" class="col-lg-3 col-6 aos-init aos-animate">
                  <div class="allcircleinfo">
                     <img src="images/Dr-Milind-Chaudhary.jpg">
                     <h3>Dr. Milind Chaudhary</h3>
                     <p>Director</p>
                  </div>
               </div>
               <div data-aos="zoom-in" class="col-lg-3 col-6 aos-init aos-animate">
                  <div class="allcircleinfo">
                     <img src="images/image.png">
                     <h3>Dr. John Mukhopadhyay</h3>
                     <p>Director</p>
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
               <span class="datetitele">Workshop Directors Session II </span>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col-lg-3"></div>

               <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/mangal-parihar.jpg">
                     <h3>Dr.Mangal Parihar</h3>
                     <p>Director</p>
                  </div>
               </div>
               <div data-aos="zoom-in" class="col-lg-3 col-6">
                  <div class="allcircleinfo">
                     <img src="images/manish_dha.jpg">
                     <h3>Dr. Manish Dhawan</h3>
                     <p>Director</p>
                  </div>
               </div>
                <div class="col-lg-3"></div>

            
            </div>

         

         </div>
      </section>



    <section class="section greenbg overflow-hidden bg-tertiary" style="background: #050017;">
         <div class="container">

            <div class="row align-items-center" style="margin-bottom: 20px;">
               <span class="datetitele adjmobile" style="width: 19%;">Highlights </span>
            </div>

            <div class="row justify-content-center">
               <div class="col-lg-12 ">
                  <div class="section-title text-center">
                      <ul class="list-point"><li>Lecture by stalwarts</li> 
                        <li>Free papers</li>
                         <li>Gold medal papers</li>
                         <li>Postgraduates gold medal papers</li>
                     <li>Fellowships inland and overseas</li>
                   <li>Interactive sessions</li></ul>
                  </div>
               </div>
            </div>
         </div>
      </section>

      
      </section>

    @endsection
