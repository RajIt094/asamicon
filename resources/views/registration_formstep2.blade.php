@extends('layouts.admin.web')

@section('style')

  <style>
     @media screen and (min-width: 320px) and (max-width: 600px){
      .dnone{display:none!important;}
.greensectinon {
    padding: 28px 0px;
}
.btn-primary {
    top: -46px;
}
.greenheadre{text-align: center;}
}
  </style>

@endsection


@section('content')

      <section class=" greensectinon">
         <div class="container mrtobadd" style="position: relative;">
            <div class="row">
               <h1 class="greenheadre">ABSTRACT</h1>
            </div>
            <form method="POST" action="{{url('skip')}}">
               @csrf
               <input type="hidden" id="user_id" name="user_id" value="{{$user_id ?? ''}}">
               <button class="btn btn-primary " type="submit" style="float: right;">SKIP</button>
            </form>
         </div>
      </section>
      <section class="about-section section bg-tertiary bgthemgrey position-relative overflow-hidden">
         <div class="container">
         <form action="{{url('msg_submit')}}" method="POST" id="addFarm" autocomplete="off">
            <div class="row">
               <div class="contact-form">
                  <div class="row">
                     <div class="col-lg-3">
                        <div class="form-check">
                           <input class="form-check-input paper_type" type="checkbox" value="Free Paper" id="coupon_question" name="paper_type[]">
                           <label class="form-check-label" for="coupon_question">
                           Free Paper
                           </label>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="form-check">
                           <input class="form-check-input paper_type" type="checkbox" value="Gold Medal Paper" id="coupon_question2"  name="paper_type[]">
                           <label class="form-check-label" for="coupon_question2">
                           Gold Medal Paper
                           </label>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="form-check">
                           <input class="form-check-input paper_type" type="checkbox" value="Poster Paper" id="coupon_question3" name="paper_type[]">
                           <label class="form-check-label" for="coupon_question3">
                           Poster Paper
                           </label>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="form-check">
                           <input class="form-check-input paper_type" type="checkbox" value="P.G Paper" id="coupon_question4" name="paper_type[]">
                           <label class="form-check-label" for="coupon_question4">
                           P.G Paper
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="contact-form answer">
                     @csrf
                   <div class="row">
                     <div class="col-lg-12">
                        <div class="form-group">
                           <input type="hidden" id="user_id" name="user_id" value="{{$user_id ?? ''}}">
                           <label for="message" class="form-label">ABSTRACT</label>
                           <textarea class="form-control shadow-none" id="message" rows="3" name="message"></textarea>
                        </div>
                        <label class="error" for="message" style="color:red;font-size:11px;">
                        </div>
                        </div>
                        <div class="mt-4">
                           <button class="btn btn-primary w-100" type="submit">Submit</button>
                     </div>
                     <!-- <a class="btn btn-primary w-100" href="{{url('bank_detail')}}">Submit</a> -->
               </div>
               </form>
            </div>
         </div>
      </section>

      @section('script')
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
        integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
            $("input:checkbox").click(function() {
            var bol = $("input:checkbox:checked").length ;
            if(bol <= 0){
               $("input:checkbox").not(":checked").attr("disabled",false);
               $('.answer').hide();
            }else{
               if(bol  >= 2){
                  $("input:checkbox").not(":checked").attr("disabled",true);
               }else{
                  $("input:checkbox").not(":checked").attr("disabled",false);
               }
               $('.answer').show();
            }
            // $("input:checkbox").not(":checked").attr("disabled",bol);
               

            });

        </script>
        <script type="text/javascript">
            
        </script>
      @endsection
    @endsection

