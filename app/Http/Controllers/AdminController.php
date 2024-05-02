<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Session;
use Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use Carbon\Carbon;
use Image;

class AdminController extends Controller{
    public function Admin(){
        if(session()->has('email')){
            $user = User::get();
            $s_no = 0;
            return view('Admin',compact('s_no','user'));
        }
        return redirect('admin_index');
    }
 public function privacy_policy(Request $request){
       echo "Raj";
       // return view('privacypolicy');
    }
    public function UserDetails($user_id){
        if(session()->has('email')){
            $user = User::where('id',$user_id)->first();
            $dataa['category'] = DB::table('tb_category')->orderBy('id','ASC')->get();
               //  dd($dataa['category']); 
        $dataa['month'] = DB::table('tb_month')->orderBy('id','ASC')->get();
        $dataa['types'] = DB::table('tb_types')->orderBy('id','ASC')->get();
        $dataa['category2'] = DB::table('tb_category')->where('status','2')->get();
            return view('Admin_view',compact('user','dataa'));
        }
        return redirect('admin_index');
    }

    public function adminIndex(){
        if(session()->has('email')){
            $user = User::get();
            $s_no = 0;
                  $data['category'] = DB::table('tb_category')->orderBy('id','ASC')->get();
                 /// print_r($data['category']);
        $data['month'] = DB::table('tb_month')->orderBy('id','ASC')->get();
        $data['types'] = DB::table('tb_types')->orderBy('id','ASC')->get();
        $data['category2'] = DB::table('tb_category')->where('status','2')->get();
            return view('Admin',compact('s_no','user','data'));
        }else{
            return view('admin_login');
        }
    }

    public function loginPost(Request $request){
        $user_data = $request->all();
        $validate_rules = [
            "email" => "required|email|exists:admin",
            "password" => "required"
        ];
        $validator = Validator::make($user_data, $validate_rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $password = md5($user_data['password']);
            // return $password;
            $check_password = DB::table('admin')->select('email','id')->where('email',$user_data['email'])->where('password',$password)->first();
            if(empty($check_password)){
                return redirect()->back()->withInput($request->only('password'))->withErrors([
                    'password' => 'Please enter valid password.',
                ]);
            }
            $request->session()->put('email',$user_data['email']);
            return redirect('dashboard')->with('success','Login Successfully');
        }
    }

    public function logout(Request $request){
        $request->session()->forget('email');
        Session::flush();
        return redirect('admin_index')->with('success','Logout Successfully ');
    }

    public function checkMail(){
        /*$email = "kristy@mailinator.com";

        //  require_once "/var/www/html/PHPMail/vendor/autoload.php";
        // $mail = new PHPMailer(true);

        //Enable SMTP debugging.
        $mail = new PHPMailer(); 
        $mail->SMTPDebug = 1;
        //Set PHPMailer to use SMTP.
        $mail->isSMTP();
        //Set SMTP host name
        $mail->Host = "smtp.gmail.com";
        //Set this to true if SMTP host requires authentication to send email
        $mail->SMTPAuth = true;
        //Provide username and password
        $mail->Username = "asamicon2023@gmail.com";
        $mail->Password = "ASAMI**23";
        //If SMTP requires TLS encryption then set it
        $mail->SMTPSecure = "TLS";
        //Set TCP port to connect to
        $mail->Port = 587;
        $mail->From = "asamicon2023@gmail.com";
        $mail->FromName = "Asamicon2023";
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Sucess';
        $mail->Body = "success";
        $mail->send();

        */

    



        $to = "vipin@ozonesoftsolutions.com";
        $subject = "My subject";
        $txt = "Hello world!";
        $headers = "From: info@asamicon2023.in" . "\r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        if(mail($to,$subject,$txt,$headers)){
            echo "email sent";
        }
    }
}