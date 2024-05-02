<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Session;
use Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use Carbon\Carbon;
use Image;
class UserController extends Controller{
    public function welcome(){
        Cache::flush();
        return view('index');
    }

    public function registration_details(){
        return view('registration_details');
    }


 public function privacy(){
      
       return view('privacypolicy');
    }
    public function registration_form(){
          $date=date("M");
        $data['country'] = DB::table('country')->orderBy('name','ASC')->get();
        if($date<='Sep')
          {
            $data['category'] = DB::table('tb_category')->where('status','1')->where('types_status','1')->get();
            $data['category2'] = DB::table('tb_category')->where('status','2')->where('types_status','1')->get();
          }elseif($date<='Nov')
          {
            $data['category'] = DB::table('tb_category')->where('status','1')->where('types_status','2')->get();
            $data['category2'] = DB::table('tb_category')->where('status','2')->where('types_status','2')->get();
          }else{
            $data['category'] = DB::table('tb_category')->where('status','1')->where('types_status','3')->get();
            $data['category2'] = DB::table('tb_category')->where('status','2')->where('types_status','3')->get();
        }
        $data['month'] = DB::table('tb_month')->orderBy('id','ASC')->get();
        $data['types'] = DB::table('tb_types')->orderBy('id','ASC')->get();
       
        return view('registration_form',compact('data'));
    }
     public function category_find(Request $request)
    {
       
        $ids =$request->c;   
        // return $ids;
        $data['category'] = DB::table('tb_types')->select("*")
        ->where("categryid", "=",$ids)
        ->get();
        echo '<option value="">--Select--</option>';
        foreach ($data['category']  as $scata)
        {
        echo '<option value='.$scata->id.'>'.$scata->types.'</option>';
    } 
    } 

    public function typesmonth(Request $request)
    {

        $ids =$request->c;     
        $data['types'] = DB::table('tb_types')->select("*")
        ->where("categryid", "=",$ids)
        ->get();
        echo '<option value="">Select Types</option>';
        foreach ($data['types']  as $scata)
        {
        echo '<option value='.$scata->id.'>'.$scata->types.'</option>';
    } 
    } 
    public function typesmonth_price(Request $request)
    {

        $ids =$request->c;     
        $data['price'] = DB::table('tb_prices')->select("*")
        ->where("typsid", "=",$ids)
        ->get();
      
        foreach ($data['price']  as $scata)
        {
        echo '<option value='.$scata->price.'>'.$scata->price.'</option>';
    } 
    }
    public function typesmonth2(Request $request)
    {

        $ids =$request->c;     
        $data['residential_package'] = DB::table('residential_package')->select("*")
        ->where("month_types", "=",$ids)
        ->get();
        echo '<option value="">Select</option>';
        foreach ($data['residential_package']  as $scata)
        {
        echo '<option value='.$scata->id.'>'.$scata->package_types.'</option>';
    } 
    }
    public function residential_price(Request $request)
    {

        $ids =$request->c;     
        $data['package_price'] = DB::table('package_price')->select("*")
        ->where("typesid", "=",$ids)
        ->get();
      
        foreach ($data['package_price']  as $scata)
        {
        echo '<option value='.$scata->types_price.'>'.$scata->types_price.'</option>';
    } 
    }
    public function category_find2(Request $request)
    {
       
        $ids =$request->c;     
        $data['category2'] = DB::table('tb_month')->select("*")
        ->where("catgid", "=",$ids)
        ->get();
        echo '<option value="">Select Month</option>';
        foreach ($data['category2']  as $scata)
        {
        echo '<option value='.$scata->id.'>'.$scata->month.'</option>';
    } 
    }
    public function UserRegister(Request $request){
        try {
            $user_data = $request->all();
            $validate_rules = [
                "name" => "required | regex:/^[\pL\s\-]+$/u",
                "email" => "required | email | unique:users,email",
                "contact" => "required |  regex:/[0-9]/ | max:15 |unique:users",
                "whatsapp_number" => "required |  regex:/[0-9]/ | max:15 | unique:users,whatsapp_number",
                "address" => "required",
                "state" => "required |regex:/^[\pL\s\-]+$/u",
                "country" => "required ",
                 "company_person" => "required",
                "asami_type" => "required",
               // "post_graduation" => "required",
                //"residential_type" => "nullable",
                //"accommodation_type" => "required",
               //'accompanying_person' => 'nullable',
               // 'amount' => 'required | regex:/[0-9]/|not_in:0',
            ];
    // print_r($_POST); die();
            $validator = Validator::make($user_data,$validate_rules);
       
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
                unset($user_data['_token']);
                $user_data['updated_at'] = Carbon::now();

                $check = DB::table('users_temp')->select('id','name')->where('contact',$user_data['contact'])->first();
              //dump($check);
              //print_r($_POST); die();
              //dd($check);
                if(empty($check)){
                    $user_data['created_at'] = Carbon::now();
                    $user_id = DB::table('users_temp')->insertGetId($user_data);
                }else{
                    $user_id = $check->id;
                    $update = DB::table('users_temp')->where('id',$check->id)->update($user_data);
                }
                return view('registration_formstep2',compact('user_id'));

        }catch (Exception $e) {
            return redirect()->back()->with(["error" => $e->getMessage() . " Line No. " . $e->getLine() . " File:-" . $e->getFile()])->withInput();
        }
    }

    public function skip( Request $request){
        $user_id = $request->user_id;
        return view('bank_details',compact('user_id'));
    }

    public function SubmitMsg(Request $request){
        $msg_data = $request->all();
		$data['user'] = DB::table('users_temp')->where('id',$msg_data['user_id'])->first();

        $insert_arr['message'] = $msg_data['message']; 
        $paper_type = implode(',',$msg_data['paper_type']);
        $insert_arr['paper_type'] = $paper_type;
        $update = DB::table('users_temp')->where('id',$msg_data['user_id'])->update($insert_arr);
        $user_id = $msg_data['user_id'];
        return view('bank_details',compact('user_id','data'));
    }

    public function upload_reciept(Request $request){
      //  error_reporting(0);
        $user_data = $request->all();
        if($request->file('receipt')){
            $file= $request->file('receipt');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/payment_reciept'), $filename);
            $insert_arr['payment_reciept']= $filename;
            $update = DB::table('users_temp')->where('id',$user_data['user_id'])->update($insert_arr);
            $getData = DB::table('users_temp')->where('id',$user_data['user_id'])->first();

            $email = $getData->email;
            $name = $getData->name;
            $number = $getData->contact;
            $amount = $getData->amount;
           
            $insert_arr['name'] = $getData->name;
            $insert_arr['email'] = $getData->email;
            $insert_arr['contact'] = $getData->contact;
            $insert_arr['whatsapp_number'] = $getData->whatsapp_number;
            $insert_arr['address'] = $getData->address;
            $insert_arr['state'] = $getData->state;
            $insert_arr['country'] = $getData->country;
            $insert_arr['date'] = $getData->date;
            $insert_arr['asami_type'] = $getData->asami_type;
             $insert_arr['company_person'] = $getData->company_person;
            
            $insert_arr['category_id'] = $getData->category_id;
            $insert_arr['month_type'] = $getData->month_type;
            $insert_arr['types1'] = $getData->types1;
            $insert_arr['amount_fast'] = $getData->amount_fast;
            $insert_arr['monthtypes'] = $getData->monthtypes;

            $insert_arr['residential_type'] = $getData->residential_type;
            
            $insert_arr['residential_price'] = $getData->residential_price;
           
            $insert_arr['accommodation_type'] = $getData->accommodation_type;
            $insert_arr['accompanying_person'] = $getData->accompanying_person;
            $insert_arr['post_graduation'] = $getData->post_graduation;
            $insert_arr['paper_type'] = $getData->paper_type;
            $insert_arr['message'] = $getData->message;
             $insert_arr['category_type2'] = $getData->category_type2;
            $insert_arr['month_types2'] = $getData->month_types2;
            $insert_arr['conftypes2'] = $getData->conftypes2;
             $insert_arr['amount3'] = $getData->amount3;
            $insert_arr['amount'] = $getData->amount;
            $insert_arr['payment_reciept'] = $getData->payment_reciept;
            $insert_arr['created_at'] = Carbon::now();
            $insert_arr['updated_at'] = Carbon::now();
            

            $InsetDATA = User::insertGetId($insert_arr);
            if($InsetDATA !=0){
                DB::table('users_temp')->where('id',$user_data['user_id'])->delete();

    
                $data = '<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
                <div style="margin:50px auto;width:70%;padding:20px 0">
                  <img src="https://asamicon2023.in/images/logo.png" alt="" style="width: 200px">
                  <div style="border-bottom:1px solid #eee">
                    <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">Asamicon</a>
                  </div>
                  <p style="font-size:1.1em">Hi '.$name.',</p>
                  <p>Thanks for the registration, please find registration details below: </p>
                  <p>
                      <b>Email: </b> '.$email.'
                  </p>
                  <p>
                      <b>Contact Number</b> '.$number.' 
                  </p>
                  <p>
                     <b>Amount Received</b> '.$amount.' 
                  </p>
                  <p style="font-size:0.9em;">Regards,<br />Team Asamicon</p>
                  <hr style="border:none;border-top:1px solid #eee" />
              
                </div>
              </div>';

                $to =$email;
                $subject = "Thanks for the registration.";
                $txt = $data;
                $headers = "From: info@asamicon2023.in" . "\r\n";
                $headers .= "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                mail($to,$subject,$txt,$headers);


                // $mail = new PHPMailer(); // create a new object
                // $mail->IsSMTP(); // enable SMTP
                // $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
                // $mail->SMTPAuth = true; // authentication enabled
                // $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                // $mail->Host = "asamicon2023.in";
                // $mail->Port = 465; // or 587
                // $mail->IsHTML(true);
                // $mail->Username = "info@asamicon2023.in";
                // $mail->Password = "nmz4uJn7c&3G";
                // $mail->SetFrom("info@asamicon2023.in");
                // $mail->Subject = "Your Registration Successfully";
                // $mail->Body =  "Your Registration Successfully";
                // $mail->AddAddress($email);
                // if (!$mail->Send()){
                //     return redirect('index')->with(["error"=>"Something went wrong!"]);
                // }else{
                //     return redirect('index')->with(["success"=>"Registration Successfully !"]);
                // }
            }
            return redirect('index')->with(["success"=>"Registration Successfully !"]);
        }

    }

}





