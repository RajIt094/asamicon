@extends('layouts.admin.web')

@section('style')

  <style>
      
@media screen and (min-width: 320px) and (max-width: 600px){
.greenheadre {text-align: center!important;;}
}

.greensectinon {    padding: 20px 0px;
}
  </style>

@endsection


@section('content')


<section class=" greensectinon">

        

    <div class="container mrtobadd" style="position: relative;">
     <a href="{{url('registration_details')}}" class="back" style="font-size: 19px;"><i class="fas fa-arrow-left"></i></a>
       <div class="row">
          <h1 class="greenheadre" style="position: relative;top: -26px;">Registration Form</h1>
       </div>
    </div>
 </section>

 <section class="about-section section bg-tertiary bgthemgrey position-relative overflow-hidden">
    <div class="container">
    <div class="row">
    <label style="background-color: darkseagreen;">Basic Details</label>
                <div class="contact-form">

                        <form action="{{url('user_register')}}" method="POST" id="addFarm" autocomplete="off">
                            @csrf
                          <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Full Name <span style="color: red">*</span></label>
                                        <input type="text" class="form-control shadow-none @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label class="error" for="name" style="color:red;font-size:11px;">
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="email" class="form-label ">Email <span style="color: red">*</span></label>
                                        <input type="email" class="form-control shadow-none @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required >
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label class="error" for="email" style="color:red;font-size:11px;">
                                </div>
                          
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="contact" class="form-label">Contact <span style="color: red">*</span></label>
                                        <input type="text" class="form-control shadow-none @error('contact') is-invalid @enderror" id="contact" name="contact" required value="{{ old('contact') }}" maxlength="15">
                                        @error('contact')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label class="error" for="contact" style="color:red;font-size:11px;">
                                </div>
                                </div>

                        <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group mt-3">
                                        <label for="whatsapp_number" class="form-label">WhatsApp Number <span style="color: red">*</span></label>
                                        <input type="text" class="form-control shadow-none @error('whatsapp_number') is-invalid @enderror" id="whatsapp_number" required name="whatsapp_number" value="{{ old('whatsapp_number') }}" maxlength="15">
                                        @error('whatsapp_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label class="error" for="whatsapp_number" style="color:red;font-size:11px;">
                                </div>
                       
                            <div class="col-lg-4">
                                <div class="form-group mt-3">
                                    <label for="address" class="form-label">Address for Correspondence <span style="color: red">*</span></label>
                                    <input type="text" class="form-control shadow-none @error('address') is-invalid @enderror" id="address" name="address" required value="{{ old('address') }}">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label class="error" for="address" style="color:red;font-size:11px;">
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group mt-3">
                                    <label for="country" class="form-label">Country <span style="color: red">*</span></label>
                                    <select required class="w3-select @error('country') is-invalid @enderror" name="country" id="country" value="{{ old('country') }}" onchange='countryChange(this);'>
                                        <option value="" disabled selected>Choose your option</option>
                                        @foreach ($data['country'] as $value)
                                            <option value="{{$value->name}}">{{$value->name}} </option>
                                        @endforeach
                                        <!-- <option value="1">India</option>
                                        <option value="2"> Gambia</option>
                                        <option value="3"> Ireland</option>
                                        <option value="3"> Italy</option> -->
                                    </select>
                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                               <label class="error" for="country" style="color:red;font-size:11px;">
                            </div>

                        </div>


                           <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group mt-3">
                                    <label for="state" class="form-label">State <span style="color: red">*</span></label>
                                    <input type="text" required class="form-control shadow-none @error('state') is-invalid @enderror" id="state" name="state" value="{{ old('state') }}">
                                    @error('state')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label class="error" for="state" style="color:red;font-size:11px;">
                            </div>
                             

                           <!-- <div class="col-lg-4">
                                <div class="form-group mt-3">
                                  <label for="date" class="form-label">Date <span style="color: red">*</span></label>

                                    <select class="w3-select @error('date') is-invalid @enderror" name="date" id="date" value="{{ old('date') }}">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="2 March 2023">2 March 2023</option>
                                    <option value="3 March 2023">3 March 2023</option>
                                    <option value="4 March 2023">4 March 2023</option>
                                  </select>
                                  @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                   </div>
                                   <label class="error" for="date" style="color:red;font-size:11px;">
                                </div>-->
                       

                            <div class="col-lg-6" >
                                <div class="form-group mt-3">
                                    <label for="asami_type" class="form-label">Asami India Member <span style="color: red">*</span></label>
                                    <select required class="w3-select @error('asami_type') is-invalid @enderror" onchange="calcVals()" name="asami_type" id="asami_type">
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="00">Yes</option>
                                        <option value="0"> No</option>
                                    </select>
                                    @error('asami_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label class="error" for="asami_type" style="color:red;font-size:11px;">
                            </div>
                           
                          
                            </div>

 <br>
<div class="row">
               <label style="background-color: darkseagreen;">Non Residential Registration Fee</label>
                        
                            <div class="col-lg-4">
                                <div class="form-group">
                                  <label for="category_id" class="form-label">Category <span style="color: red">*</span></label>
                                  <select class="w3-select @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                                    <option value="" disabled selected>Choose your option</option>
                                    @foreach ($data['category'] as $categy)
                                            <option value="{{$categy->id}}">{{$categy->CategoryName}} </option>
                                        @endforeach
                                  </select>

                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                   </div>
                                   <label class="error" for="category_id" style="color:red;font-size:11px;">
                                </div>

                                <div class="col-lg-6"hidden>
                                    <div class="form-group">
                                       <label for="month_type" class="form-label">Month type <span style="color: red">*</span></label>
                                        <select class="w3-select  @error('month_type') is-invalid @enderror" name="month_type" id="month_type">
                                        <?php echo  $date=date("M"); 
                                    if($date=='Aug'){ ?>
                                 
                                         <option value="Early Bird 30 August 2022">Early Bird 30 August 2022 </option>
                                       <?php }elseif($date=='Nov'){ ?>
                                         <option value="30 November 2022">30 November 2022 </option>
                                         <?php }else{ ?>
                                         
                                         <option value="On Spot Registration">On Spot Registration</option>
                                        <?php }?>
                                         <!--  @foreach ($data['month'] as $mont)
                                            <option value="{{$mont->id}}">{{$mont->month}} </option>
                                        @endforeach-->
                                       </select>
                                      @error('month_type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label class="error" for="month_type" style="color:red;font-size:11px;">
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                       <label for="types1" class="form-label">Types <span style="color: red">*</span></label>
                                        <select required onchange="calcVals()" class="w3-select  @error('types1') is-invalid @enderror" name="types1" id="types1">
                                         <option value="" disabled selected>Choose your option</option>
                                       <!--  @foreach ($data['types'] as $types)
                                            <option value="{{$types->id}}">{{$types->types}} </option>
                                        @endforeach-->
                                       </select>
                                       @error('types1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label class="error" for="types1" style="color:red;font-size:11px;">
                                </div>
                         

                                <div class="col-lg-4 ">
                                    <label  class="form-label" for="amount1" style="padding-top: 7px;"> Amount <span style="color: red">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div id="ruppesId" class="input-group-text ruppesId" style="padding: 15px;background: #71B85F;">₹</div>
                                        </div>
                                        <select required type="text"  class="form-control shadow-none @error('amount') is-invalid @enderror" id="amount1" name="amount_fast">
                                             <option value="0">0</option>
                                        </select>
                                        @error('amount1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label class="error" for="amount1" style="color:red;font-size:11px;">
                                </div>


                            </div>
                            
<br>
  <div class="row nos">  
   <label style="background-color: darkseagreen;">Residential Package</label>
                            <div class="row">
                            
                               <div class="col-lg-4">
                                <div class="form-group">
                                  <label for="monthtypes" style="padding-top: 8px;" class="form-label">Month Types <span style="color: red">*</span></label>
                                  <select class="w3-select @error('monthtypes') is-invalid @enderror" name="monthtypes" id="monthtypes" >
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="2">2 March 2023</option>
                                    <option value="3">3 March 2023</option>
                                    <option value="4">4 March 2023</option>
                                  </select>

                                @error('monthtypes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                   </div>
                                   <label class="error" for="monthtypes" style="color:red;font-size:11px;">
                                </div>

                                 
                                <div class="col-lg-4">
                                    <div class="form-group mt-3">
                                       <label for="residential_type" class="form-label">Residential type <span style="color: red">*</span></label>
                                        <select onchange="calcVals()" class="w3-select  @error('residential_type') is-invalid @enderror blanked" name="residential_type" id="residential_type">
                                         <option value="" disabled selected>Choose your option</option>
                                        <!-- <option value="2 March 2023">Twin Sharing</option>
                                    <option value="3 March 2023">Single</option>-->
                                         <!--  @foreach ($data['month'] as $mont)
                                            <option value="{{$mont->id}}">{{$mont->month}} </option>
                                        @endforeach-->
                                       </select>
                                      @error('residential_type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label class="error" for="residential_type" style="color:red;font-size:11px;">&nbsp;&nbsp;</lable>
                                </div>
                            
                       

                                <div class="col-lg-4 mt-3">
                                    <label  class="form-label" for="residential_price"> Amount <span style="color: red">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div id="ruppesId" class="input-group-text" style="padding: 15px;background: #71B85F;">₹</div>
                                        </div>
                                        <select  class="form-control shadow-none @error('residential_price') is-invalid @enderror blanked" id="residential_price" name="residential_price">
                                             <option value="0">0</option>
                                            <select>
                                     @error('residential_price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label class="error" for="residential_price" style="color:red;font-size:11px;"></lable>
                                </div>


                            </div>   
                           </div>
                          
                     
                          
                     <div class="col-lg-6" >
                                <div class="form-group mt-3">
                                    <label for="company_person" class="form-label">Accompanying Person<span style="color: red">*</span></label>
                                    <select onchange="calcVals()" class="w3-select @error('company_person') is-invalid @enderror" name="company_person" id="company_person">
                                      <option value="0"> No</option>
                                        <option value="00">Yes</option>
                                    
                                    </select>
                                    @error('company_person')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label class="error" for="company_person" style="color:red;font-size:11px;">
                            </div>
                           
                           
<div class="row"  id="comp" style="display:none"> <br>
               <label style="background-color: darkseagreen;">Registration fee for Accompanying Person</label>
      <div class="row">  
      
                            <div class="col-lg-4">
                                <div class="form-group mt-3">
                                  <label for="category_type2" class="form-label">Category Types <span style="color: red">*</span></label>
                                  <select  class="w3-select @error('category_type2') is-invalid @enderror" name="category_type2" id="category_type2">
                                    <option value="">Choose your option</option>
                                    @foreach ($data['category2'] as $categy)
                                            <option value="{{$categy->id}}">{{$categy->CategoryName}} </option>
                                        @endforeach
                                  </select>

                                @error('category_type2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                   </div>
                                   <label class="error" for="category_type2" style="color:red;font-size:11px;">
                                </div>

                                 
                                <div class="col-lg-4" hidden>
                                    <div class="form-group mt-3">
                                       <label for="month_types2" class="form-label">Month Type <span style="color: red">*</span></label>
                                        <select  class="w3-select  @error('month_types2') is-invalid @enderror blank" name="month_types2" id="month_types2" onchange='toggleDropdown(this);'>
                                         <option value="" disabled selected>Choose your option</option>
                                         <?php echo  $date=date("M-Y"); 
                                    if($date=='Aug-2022'){ ?>
                                 
                                         <option value="Early Bird 30 August 2022">Early Bird 30 August 2022 </option>
                                       <?php }elseif($date=='Nov-2022'){ ?>
                                         <option value="30 November 2022">30 November 2022 </option>
                                         <?php }else{ ?>
                                         
                                         <option value="On Spot Registration">On Spot Registration</option>
                                        <?php }?>
                                       </select>
                                     <!--  @error('accommodation_type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror-->
                                    </div>
                                    <label class="error" for="month_types2" style="color:red;font-size:11px;">
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mt-3">
                                       <label for="conftypes2" class="form-label">Types <span style="color: red">*</span></label>
                                        <select  onchange="calcVals()" class="w3-select  @error('conftypes2') is-invalid @enderror blank" name="conftypes2" id="conftypes2">
                                         <option value="" disabled selected>Choose your option</option>
                                        <!-- @foreach ($data['types'] as $types)
                                            <option value="{{$types->id}}">{{$types->types}} </option>
                                        @endforeach-->
                                       </select>
                                     <!--  @error('accommodation_type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror-->
                                    </div>
                                    <label class="error" for="" style="color:red;font-size:11px;">
                                </div>
                           
                       

                                <div class="col-lg-4 mt-3">
                                    <label  class="form-label" for="amount3"> Amount <span style="color: red">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div id="ruppesId" class="input-group-text ruppesId" style="padding: 15px;background: #71B85F;">₹</div>
                                        </div>
                                        <select required type="text" maxlength="7" class="form-control shadow-none @error('amount') is-invalid @enderror blank" id="amount3" name="amount3">
                                             <option value="0">0</option>
                                        </select>
                                        @error('amount')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label class="error" for="amount" style="color:red;font-size:11px;">
                                </div>
                             

                            </div>
                            </div>
                           
                               <div class="col-lg-6 mt-3">
                                    <label  class="form-label" for="amount">Final Amount <span style="color: red">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div id="ruppesId" class="input-group-text ruppesId" style="padding: 15px;background: #71B85F;">₹</div>
                                        </div>
                                        <input  type="text" maxlength="7" class="form-control shadow-none @error('amount') is-invalid @enderror" id="amount4" name="amount" placeholder="00.0">
                                        @error('amount')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label class="error" for="" style="color:red;font-size:11px;">
                                </div>
              
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4">
                                    <div class="form-group mt-3">
                                        <button class="btn btn-primary w-100" type="submit">
                                            Next
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-4"></div>
                            </div>

                        </div>


                        </form>
                     </div>

           </div>
         </div>
    </section>


    @section('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
        integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
        $('#company_person').on('change', function() {
       //alert('hello');
            if ( $(this).val() === '00' ) {
                $('#comp').css('display', 'block');
            }else{
                $('.blank').html('<option value="0">-------Select--------</option>');
            $('#comp').css('display', 'none');
            }
        });
        
         $("#addFarm").validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    contact: {
                        required: true,
                        digits:true,
                    },
                    whatsapp_number: {
                        required: true,
                        digits:true,
                    },
                    address: {
                        required: true,
                    },
                    state: {
                        required: true,
                    },
                    country: {
                        required: true,
                    },
                   /* date: {
                        required: true,
                    },*/
                    asami_type: {
                        required: true,
                    },
                    category_id: {
                        required: true,
                    },
                    month_type: {
                        required: true,
                    },
                    types1: {
                        required: true,
                    },
                    amount1: {
                        required: true,
                    },
                   /* monthtypes: {
                        required: true,
                    },
                    month_type: {
                        required: true,
                    },*/
                   /* amount: {
                        required: true,
                        digits:true,
                        minlength: function(){
                            var country = $('select[name="country"]').val();
                            if(country == "India"){
                                return 4;
                            }else{
                                return 3;
                            }
                        }
                    },*/
                  /*  residential_type: {
                        required: function(){
                            var type = $('select[name="residential_type"]').val();
                            if(type == "Yes"){
                                return true;
                            }else{
                                return false;
                            }
                        }
                    },
                    residential_price: {
                        required: function(){
                            var type = $('select[name="residential_price"]').val();
                            if(type == "Yes"){
                                return true;
                            }else{
                                return false;
                            }
                        }
                    },*/

                },
                // Specify validation error messages
                messages: {
                    name: {
                        required: "This field is required.",
                    },
                    email: {
                        required: "This field is required.",
                    },
                    contact: {
                        required: "This field is required.",
                        digits:'Please enter only number',
                    },
                    whatsapp_number: {
                        required: "This field is required.",
                        digits:'Please enter only number',
                    },
                    address: {
                        required: "This field is required.",
                    },
                    state: {
                        required: "This field is required.",
                    },
                    country: {
                        required: "This field is required.",
                    },
                   /* date: {
                        required: "This field is required.",
                    },*/
                    asami_type: {
                        required: "This field is required.",
                    },
                    category_id: {
                        required: "This field is required.",
                    },
                    month_type: {
                        required: "This field is required.",
                    },
                    types1: {
                        required: "This field is required.",
                    },
                    amount1: {
                        required: "This field is required.",
                        digits:'Please enter only number',
                        minlength:'Please enter valid amount.',
                    },
                   /* monthtypes: {
                        required: "This field is required.",
                    },
                    month_type: {
                        required: "This field is required.",
                    },*/
                    residential_type: {
                        required: "This field is required.",
                    },
                    residential_price: {
                        required: "This field is required.",
                    },
                },

            });
        $('#asami_type').on('change', function() {
            $('.nos').css('display', 'none');
            if ( $(this).val() === '00' ) {
                $('.nos').css('display', 'block');
            }
            else{
                $('.blanked').html('<option value="0">-------Select--------</option>');
            $('.nos').css('display', 'none');
            }
        });


         function toggleDropdown(selObj) {
                const ac1 = document.getElementById("acc_type");
                const ac2 = document.getElementById("acc_type1");
                ac1.style.display = "none";
                ac2.style.display = "none";
                ac1.style.display = selObj.value ===  "Yes" ? "block" : "none";
                ac2.style.display = selObj.value ===  "Yes" ? "block" : "none";

            }

                var ac1 = document.getElementById("coutntry");
                ac1.style.display = "none";
                ac1.style.display = $('#accommodation_type').val() ===  "Yes" ? "block" : "none";

            function countryChange(selObj){
                console.log('coutntry',selObj.value);
               // }
                selObj.value ==  "India" ? $('.ruppesId').text('₹') :  $('.ruppesId').text('$');
            }

            $('form input[type=text]').focus(function(){
                 $(this).siblings(".invalid-feedback").hide();
            });

            $('form input[type=email]').focus(function(){
                 $(this).siblings(".invalid-feedback").hide();
            });

            $('form select').focus(function(){
                 $(this).siblings(".invalid-feedback").hide();
            });

            
           

        </script>
      
        <script>

$("#category_id").change(function(){

 var category_id=$("#category_id").val();
 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var url = "http://localhost/asamicon/category_find";

console.log('url',url);
 //alert(url);
     $.ajax({
url:url,
//alert(url);
   type:"get",
  data:{
c:category_id

  },
    success:function(data){
$('#types1').html(data);
  }
});

});
/*
$("#month_type").change(function(){

    var month_type=$("#month_type").val();
    var url = "{{url('typesmonth')}}";
    $.ajax({
    url:url,
    type:"get",
    data:{
    c:month_type
    },
    success:function(data){
    $('#types1').html(data);
  }
});

});*/

$("#types1").change(function(){

    var types1=$("#types1").val();
    var url = "http://localhost/asamicon/typesmonth_price";
    $.ajax({
    url:url,
    type:"get",
    data:{
    c:types1
    },
    success:function(data){
    $('#amount1').html(data);
}
});

});
/*---------*/
$("#monthtypes").change(function(){

    var monthtypes=$("#monthtypes").val();
    var url = "http://localhost/asamicon/typesmonth2";
    $.ajax({
    url:url,
    type:"get",
    data:{
    c:monthtypes
    },
    success:function(data){
    $('#residential_type').html(data);
    }
});

});

$("#residential_type").change(function(){

var residential_type=$("#residential_type").val();
var url = "http://localhost/asamicon/residential_price";
$.ajax({
url:url,
type:"get",
data:{
c:residential_type
},
success:function(data){
$('#residential_price').html(data);
}
});

});


$("#category_type2").change(function(){

var category_type2=$("#category_type2").val();
var url = "http://localhost/asamicon/category_find";
$.ajax({
url:url,
type:"get",
data:{
c:category_type2
},
success:function(data){
$('#conftypes2').html(data);
}
});

});
/*
$("#month_types2").change(function(){

var month_types2=$("#month_types2").val();
var url = "{{url('typesmonth')}}";
$.ajax({
url:url,
type:"get",
data:{
c:month_types2
},
success:function(data){
$('#conftypes2').html(data);
}
});

});*/
$("#conftypes2").change(function(){

var conftypes2=$("#conftypes2").val();
var url = "http://localhost/asamicon/typesmonth_price";
$.ajax({
url:url,
type:"get",
data:{
c:conftypes2
},
success:function(data){
$('#amount3').html(data);

}
});

});

function calcVals() {
     setTimeout(function() {
  var e = document.getElementById("amount1");

  var f = document.getElementById("residential_price");
  var g = document.getElementById("amount3");
  var h = document.getElementById("company_person");
  var i = document.getElementById("asami_type");
  var selFrst = e.options[e.selectedIndex].value;
  var selScnd = f.options[f.selectedIndex].value;
  var selThid = g.options[g.selectedIndex].value;
   var selThidh = h.options[h.selectedIndex].value;
     var selThidi = i.options[i.selectedIndex].value;
  var totalCal =(+selFrst) + (+selScnd) + (+selThid)+ (+selThidh)+ (+selThidi);
  document.getElementById("amount4").value = totalCal;
     }, 1000); 
}




   /* $('#amount1, #amount2, #amount3').on('input', function () {
    var amount1 = parseInt($('#amount1').val());
    var amount2 = parseFloat($('#amount2').val());
    var amount3 = parseFloat($('#amount3').val());
    $('#amount4').val((amount1 + amount2 + amount3 ? amount1 + amount2 + amount3: 0).toFixed(2));
});*/
 

 </script>
          @endsection
@endsection

