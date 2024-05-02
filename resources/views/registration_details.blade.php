@extends('layouts.admin.web')

@section('content')
<section class=" greensectinon addone">
  <div class="container mrtobadd" style="position: relative;">

              <a href="{{url('registration_form')}}" class="btn btn-primary ms-2 ms-lg-3 registrationform">Registration Form</a>
   
              <div class="row">
                <h1 class="greenheadre">Registration Details</h1>
             </div>
          </div>
       </section>
       <section class="about-section section bg-tertiary bgthemgrey position-relative overflow-hidden">
          <div class="container">
          <h2 class="topheadding" style="margin-top:0px;">Non Residential Registration Fee</h2>
          <div class="row" style="margin-top: 50px;margin-bottom: 25px; padding: 20px;background: #050017;overflow: auto;">
            <h2 class="greenheadre">Registration Fee : ASAMICON 2023</h2>
             <table class="table table-bordered">
              <thead>
                <tr>
                  <th colspan="2" style="width: 12%;"></th>
                  <th colspan="2">Early Bird 30 September 2022</th>
                  <th colspan="2">30 November 2022</th>
                  <th colspan="2">On Spot Registration</th>
                </tr>
              </thead>
                 <tbody>
                   <tr>
                      <td colspan="2" style="width: 12%;"></td>
                     <td>Conference </td>
                     <td>Conference and workshop</td>
                     <td>Conference</td>
                     <td>Conference and workshop</td>
                     <td>Conference </td>
                     <td>Conference and workshop</td>
                   </tr>
                    <tr>
                      <td colspan="2" style="width: 12%;">Post Graduate</td>
                     <td>Rs.8,000</td>
                     <td>Rs.10,000</td>
                     <td>Rs.10,000</td>
                     <td>Rs.12,000</td>
                     <td>Rs.12,000 </td>
                     <td>Rs.14,000</td>
                   </tr>
 
                    <tr>
                      <td colspan="2" style="width: 12%;">ASAMI India Member</td>
                     <td>Rs.10,000</td>
                     <td>Rs.12,000</td>
                     <td>Rs.12,000</td>
                     <td>Rs.14,000</td>
                     <td>Rs.14,000 </td>
                     <td>Rs.16,000</td>
                   </tr>
 
                    <tr>
                      <td colspan="2" style="width: 12%;">Non Member</td>
                     <td>Rs.11,000</td>
                     <td>Rs.13,000</td>
                     <td>Rs.13,000</td>
                     <td>Rs.15,000</td>
                     <td>Rs.15,000 </td>
                     <td>Rs.17,000</td>
                   </tr>
                    <tr>
                      <td colspan="2" style="width: 12%;">Foreign National ASAMI India Member</td>
                     <td>$ 175</td>
                     <td>$ 200</td>
                     <td>$ 200</td>
                     <td>$ 225</td>
                     <td>$ 250 </td>
                     <td>$ 275</td>
                   </tr>
                   <tr>
                      <td colspan="2" style="width: 12%;">Foreign National ASAMI India Non Member</td>
                     <td>$ 200</td>
                     <td>$ 225</td>
                     <td>$ 225</td>
                     <td>$ 250</td>
                     <td>$ 275 </td>
                     <td>$ 300</td>
                   </tr>
                 </tbody>
               </table>
          </div>
 
 
 
          <h2 class="topheadding">Residential Package</h2>
          <div class="row" style="margin-top: 25px;margin-bottom: 25px; padding: 20px;background: #050017;overflow: auto;">
             <table class="table table-bordered">
              <thead>
                <tr>
                  <th colspan="2" style="width:50%;">Check In 2nd March 2023<br> Checkout 5th March 2023</th>
                  <th colspan="2">Check In 3rd March 2023<br> Checkout 5th March 2023</th>
                </tr>
              </thead>
                 <tbody>
                   <tr>
                     <td>Twin Sharing </td>
                      <td>Single </td>
                     <td>Twin Sharing</td>
                     <td>Single</td>
                   </tr>
                   <tr>
                     <td>10,500/- +   Registration </td>
                      <td>16,500/- +  Registration </td>
                     <td>7000/- +   Registration</td>
                     <td>11,000/- +   Registration</td>
                   </tr>
                 </tbody>
               </table>
          </div>
 
 
 
 
          <h2 class="topheadding">Registration fee for Accompanying Person<!-- Spouse and Children above 5 years --></h2>
          <div class="row" style="margin-top: 0px;margin-bottom: 25px; padding: 20px;background: #050017;overflow: auto;">
        <!--     <h2 class="greenheadre">Registration Fee : ASAMICON 2023</h2> -->
             <table class="table table-bordered">
              <thead>
                <tr>
                  <th colspan="2" style="width: 12%;"></th>
                  <th colspan="2">Early Bird 30 September  2022  </th>
                  <th colspan="2">30 November 2022  </th>
                  <th colspan="2">On Spot Registration</th>
                </tr>
              </thead>
                 <tbody>
                   <tr>
                      <td colspan="2" style="width: 12%;"></td>
                     <td>Conference </td>
                     <td>Conference and workshop</td>
                     <td>Conference</td>
                     <td>Conference and workshop</td>
                     <td>Conference </td>
                     <td>Conference and workshop</td>
                   </tr>
                    <tr>
                      <td colspan="2" style="width: 12%;">Indian National</td>
                     <td>Rs.8,000</td>
                     <td>Rs.10,000</td>
                     <td>Rs.11,000</td>
                     <td>Rs.13,000</td>
                     <td>Rs.12,000 </td>
                     <td>Rs.14,000</td>
                   </tr>
                    <tr>
                      <td colspan="2" style="width: 12%;">Foregin National</td>
                     <td>$ 140</td>
                     <td>$ 170</td>
                     <td>$ 150</td>
                     <td>$ 180</td>
                     <td>$ 165 </td>
                     <td>$ 200</td>
                   </tr>
                    
                 
                 </tbody>
               </table>
          </div>

    {{-- <p><h4 style="color:red;">NOTE:-</h4><h4 class="topheadding" style="margin-top:0 !important">For accompanying person room booking will be on twin sharing basis<!-- Spouse and Children above 5 years --></h4></p>  --}}
          <h5><span style="color:red;">NOTE :- </span><span style="margin-top:0 !important; color:red !important ">For accompanying person Room booking will be on twin sharing basis</span></h5>
 
       </div>
     </section>

@endsection
