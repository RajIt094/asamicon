@extends('layouts.admin.web')

@section('style')

  <style>
     @media screen and (min-width: 320px) and (max-width: 600px){
.greensectinon {
    padding: 28px 0px;
}

.greenheadre{text-align: center;}
}
   .razorpay-payment-button{ background: #51B56D !important;
   color: #fff;}
  </style>

@endsection


@section('content')

<section class=" greensectinon">
   <div class="container mrtobadd" style="position: relative;">
      <div class="row">
         <h1 class="greenheadre">Payment Mode</h1>
      </div>
   </div>
</section>
<section class="about-section section bg-tertiary bgthemgrey position-relative overflow-hidden">
   <div class="container">
      <div class="row" style="">
              
               <div class="col-lg-6" style="margin: 0 auto;">
                  <h2 class="toptext">Online Pay</h2>
                  <!---<div class="contact-form hightadd">
                     <h5>Account No.  :- 922020037294938 </h5>
                     <h5>Account Name  :- ASAMICON 2023 </h5>
                     <h5>Branch  :- Axis Bank Anand Bazar Branch </h5>
                     <h5>IFSC Code  :- UTIB0002975 </h5>
                  </div>-->
               <!--  <p style="color: #000;padding: 12px 0;">Please send pay receipt on this given Whatsapp number </p> -->
              </div>

               {{-- <div class="col-lg-6">
                     <h2 class="toptext">Online  Pay</h2>
                   <div class="contact-form  hightadd">
                    <a href="#"><img src="images/razorpay.png"></a>
                    </div>
                   <!--  <p style="color: #000;padding: 12px 0;">Please send pay receipt on this given Whatsapp number </p> -->
              </div> --}}

            </div>
			
			  <div class="row">
                    <div class="col-md-6 offset-3 col-md-offset-6">
                        @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> {{ $message }}
                            </div>
                        @endif
                        <div class="card card-default">
                            <!--<div class="card-header">
                                 Razorpay Payment Gateway 
                            </div>-->
							<?php //print_r($data['user']);
							$name=$data['user']->name;
							$email=$data['user']->email;

							$amount=$data['user']->amount;
							//$rs=number_format($amount);
							?>
                            <div class="card-body text-center">
							<form action="{{ Route('payment') }}" method="POST">
							 @csrf
							   <input type="hidden" id="user_id" name="user_id" value="{{$user_id ?? ''}}" >
							  <span style="margin-left: -460px;"> Name: </span>
							 <input type="text" class="form-control" required id="name" name="name" value="<?php echo $name ?>">
							 <span style="margin-left: -460px;"> Email Id :</span>
							 <input type="text" class="form-control" required id="email" name="email" value="<?php echo $email ?>">
							 <span style="margin-left: -460px;"> OrderId : </span>
							 <input type="text" class="form-control" required readonly id="orderid" name="orderid" value="txt<?php echo(rand(100000000,999999999)); ?>">
							 <span style="margin-left: -460px;">Amount: </span>
							<input type="text" class="form-control" required readonly id="amount" name="amount" value="<?php echo $amount ?>">
							<br>
<script src="https://checkout.razorpay.com/v1/checkout.js"

    data-key="rzp_test_WSAbXSPoJM3HVC" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $amount*100; ?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-order_id=""  // Replace with the order_id generated by you in the backend.
    data-buttontext="Pay Now"
    data-name="Asamicon"
    data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
    data-image="https://asamicon2023.in/images/logo.png"
    data-prefill.name="<?php $name; ?>"
    data-prefill.email="<?php echo $email; ?>"
    data-theme.color="blue"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>
					
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
   </section>
     <!-- <section class="about-section section  bg-tertiary bgthemgrey position-relative overflow-hidden" style="padding-top: 30px;    padding-bottom: 33px;">
         <div class="container">
            <div class="row">
               <div class="col-lg-6" style="margin: 0 auto;">
                  <div class="contact-form" style=" padding: 12px; background: #fff;">
                     <form action="{{url('upload_reciept')}}" method="POST" id="addFarm" enctype= "multipart/form-data">
                        @csrf
                        <div class="row">
                           <div class="form-group mt-3">
                                 <input type="hidden" id="user_id" name="user_id" value="{{$user_id ?? ''}}" >
                                 <h5>Upload Receipt</h5>
                                 <input type="file" class="form-control shadow-none @error('receipt') is-invalid @enderror" id="receipt" name="receipt">
                           </div>
                           <label class="error" for="receipt" style="color:red;font-size:11px;">
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
      </section>-->
           

      @section('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
        integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         
		  <script>
                  $("#addFarm").validate({
                     rules: {
                        receipt: {
                              required: true,
                        },
                        },
                     // Specify validation error messages
                     messages: {
                        receipt: {
                              required: "This field is required.",
                        },

                     },

      });

</script>
@endsection
@endsection