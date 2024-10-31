<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Symfony\Component\Console\Input\Input;

class FinalProject extends Controller
{
    public function index():view
    {
        $name = session()->get('name');

        $user_type=session()->get('user_type');
        if (isset($name))
       {
        return view('index')->with(['clientname'=>$name]);
       }
       else
       {
        return view('/index');
       }
    }
    public function book():View
    {
        return view('/book');
    }
    public function book_action(Request $request)
    {
        $name=$request->input('name');
        $email=$request->input('email');
        // $password=md5($request->input('password'));
        $phone=$request->input('phone');
        $reg=$request->input('unique');
        if($request->file('passport'))
        $file=$request->file('passport');
        $filename=time()."_".$file->getClientOriginalName();
        $folder="./upload";
        $file->move($folder,$filename);
        $id_no=$request->input('id_no');
        if($request->file('identity'))
        $file1=$request->file('identity');
        $filename1=time()."_".$file1->getClientOriginalName();
        $folder1="./upload";
        $file1->move($folder1,$filename1);
        $tours=$request->input('tours');

        $data1=[
            'name'=>$name,
            'email'=>$email,
            'user'=>'CLIENT',
            // 'password'=>$password,
            'phone'=>$phone,
            'p_image'=>$folder."/".$filename,
            'id_no'=>$id_no,
            'i_image'=>$folder1."/".$filename1,
            'registration_code'=>$reg,
            'tours'=>$tours,
            'auth'=>'Pending'
        ];
       DB::table('booking_final')->insert($data1);
       return redirect('/myaccount');
        // return view('login')->with(['user_info'=>$data1]);
        // return redirect('login');
    }

  public function register():View
  {
    return view('register');
  }
  public function reg_sub(Request $request)
  { 
        $request->validate
    (
        [
                'name'       =>'required',
                'email'      =>'required|regex:/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/',
                'password'   =>'required|between:4,16',
                'phone'      =>'required|regex:/^[0-9]{10}$/'
        ]
        
    );
         $name=$request->input("name");
        $email=$request->input("email");
        $password=md5($request->input("password"));
        $phone=$request->input("phone");
        $data=[
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'phone'=>$phone,
            'user'=>"CLIENT",
            'auth'=>0

        ];
        DB::table('registration_final')->insert($data);
        return redirect('login');
    //     if (isset($name))
    //    {
    //     return view('index')->with(['clientname'=>$name]);
    //    }
    //    else
    //    {
    //     return view('index');
    //    }
  }
    
    
    public function login():View
    {
        return view ('/login');
    }
    public function login_data(Request $request)
    {
        $username= $request->input('uname');
        $password= md5($request->input('password'));
        $data= DB::table('registration_final')->where("email","=",$username)->orWhere("phone","=",$username)->get();
        if(empty($data[0]))
        {
            return redirect('/login')->with('message','user not found');
        }
        else
        {
            if($data[0]->auth!=0)
        {
            return redirect('/login')->with('message','You are blocked by admin');
        }
        else
        { 
            $password_db= $data[0]->password;
            
            if( $password_db== $password)
            {   
                $db_user=$data[0]->user;
                if($db_user=="CLIENT")
                {
                    $name=$data[0]->name;
                    $email=$data[0]->email;
                    $user_id=$data[0]->user_id;
                    $user_type=$data[0]->user;
                    $phone=$data[0]->phone;
                    $request->session()->put('name',$name);
                    $request->session()->put('email',$email);
                    $request->session()->put('user_id',$user_id);
                    $request->session()->put('phone',$phone);
                    $request->session()->put('user_type',$user_type);

                    return redirect('/index');
                }
                elseif ($db_user == "ADMIN") 
                {
                    $name = $data[0]->name;
                    $email = $data[0]->email;
                    $user = $data[0]->user;
                    $request->session()->put('name', $name);
                    $request->session()->put('email', $email);
                    // $request->session()->put('user_id',$user_id);
                    $request->session()->put('user', $user);
                    return redirect('/myadmin');
                }
                else
                {
                    
                    return redirect('/index');
                }
                
            }
        
            else
            {
                return redirect('/login')->with('message','password does not matched');
            }
        }
    }
    } 
    public function myaccount():view
    {
        // return view('myaccount')->with(['allInfo'=>$allUser])
        $user_id=session()->get('user_id');
        $allUser=DB::table('registration_final')->where('user_id','=',$user_id)->get();
        $email=$allUser[0]->email;
        $booking=DB::table('booking_final')->where('email','=',$email)->get();
        if(empty($booking))
        {
            return view('myaccount')->with(['allInfo'=>$allUser]);
        }
        else
        {
            return view('myaccount')->with(['allInfo'=>$allUser])->with(['bookingInfo'=>$booking]);
        }
        // $email_id=session()->get('email');
        
        //dd($booking[0]);
       
        // return view('myaccount');
    }

    // public function myaccount():View
    // {   $user_id1=session()->get('user_id');
    //     if(empty($user_id1))
    //     {
    //         return redirect('/book')->with('message','please book a trip to go ahed');
    //     }
    //     else
    //     {
    //         $user_id=session()->get('user_id');
    //     // $email_id=session()->get('email');
    //     $allUser=DB::table('registration_final')->where('user_id','=',$user_id)->get();
    //     $email=$allUser[0]->email;
    //     $booking=DB::table('booking_final')->where('email','=',$email)->get();
    //     //dd($booking[0]);
    //     return view('myaccount')->with(['allInfo'=>$allUser])->with(['bookingInfo'=>$booking]);
    //     // return view('myaccount');
    //     }
    // }
     public function myadmin()
    {
        $user=session()->get('user');
        // dd($user_id);
        if(empty($user))
        {
        return redirect('/login')->with('message','admin not found');
        }
        else
        {
        $user='CLIENT';
        $allUser=DB::table('registration_final')->where('user','=',$user)->get();
        // $booking=DB::table('book_final1')->get();
        //dd($booking[0]);
        return view('myadmin')->with(['allInfo'=>$allUser]);

        //  return view('myadmin')->with(['allInfo'=>$allUser])->with(['bookingInfo'=>$booking]);
        // return view('myaccount');
        }
    }
    public function display_admin($em):View
    {
        // $email=session()->get('email');
        $email=$em;
        $admin_display=DB::table('booking_final')->where('email','=',$email)->get();
        return view('display_admin')->with(['admin_info'=>$admin_display]);
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->forget('user_id');
        $request->session()->forget('email');

        return redirect('index');
    }
    public function edit_reg($ep):View
    {
        $edit_id=$ep;
        $edit=DB::table('registration_final')->where('user_id','=',$edit_id)->get();
        return view('edit_reg')->with(['edit_info'=>$edit[0]]);
    }
    public function edit_reg_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|regex:/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/',
            'phone' => 'required|regex:/^[0-9]{10}$/'
        ]);
    
        $user_id = $request->input("hid");
        $name = $request->input("name");
        $email = $request->input("email");
        $phone = $request->input("phone");
    
        $update_data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'user' => "CLIENT",
            'auth' => 0
        ];
        DB::table('registration_final')->where('user_id', '=', $user_id)->update($update_data);
    
        return redirect('/myaccount');
    }
    // public function booking_details():View
    // {
    //     $user_id=session()->get('user_id');
    //     $details=DB::table('registration_final')->where('user_id','=',$user_id)->get();
    //     return view('myaccount')->with(['record'=>$details]);
    // }
    public function display_booking($up):View
    {
        $user_id=$up;
        $data2=DB::table('booking_final')->where('user_id','=',$user_id)->get();
        return view('display_booking')->with(['dataInfo'=>$data2]);

    }
    public function edit_booking($ep1):View
    {
        $edit_id=$ep1;
       $edit_user=DB::table('booking_final')->where('user_id','=',$edit_id)->get();
       return view('edit_booking')->with(['user_info'=>$edit_user[0]]);
    }
    public function edit_booking_action(Request $request)
{
    $user_id = $request->input('hid');
    $name = $request->input('name');
    $email = $request->input('email');
    $phone = $request->input('phone');

    $folder = "./upload";

    // Handle passport image upload
    $filename = null;
    if ($request->File('passport')) {
        $file = $request->file('passport');
        $filename = time() . "_" . $file->getClientOriginalName();
        $file->move($folder, $filename);
    }

    // Handle identity image upload
    $filename1 = null;
    if ($request->File('identity')) {
        $file1 = $request->file('identity');
        $filename1 = time() . "_" . $file1->getClientOriginalName();
        $file1->move($folder, $filename1);
    }

    $id_no = $request->input('id_no');
    $tours = $request->input('tours');

    $update_data1 = [
        'name' => $name,
        'email' => $email,
        'user' => 'CLIENT',
        'phone' => $phone,
        'id_no' => $id_no,
        'tours' => $tours
    ];

    // Add passport image path to update data if uploaded
    if ($filename) {
        $update_data1['p_image'] = $folder . "/" . $filename;
    }

    // Add identity image path to update data if uploaded
    if ($filename1) {
        $update_data1['i_image'] = $folder . "/" . $filename1;
    }

    DB::table('booking_final')->where('user_id', '=', $user_id)->update($update_data1);
    return redirect('/myaccount');
}
public function block($blk)
    {
        $userid=$blk;
        DB::table('registration_final')->where('user_id','=',$userid)->update(['auth'=>1]);
        return redirect('/myadmin')->with('message','User has been blocked');
    }
    public function unblock($ublk)
    {
        $userid=$ublk;
        DB::table('registration_final')->where('user_id','=',$userid)->update(['auth'=>0]);
        return redirect('/myadmin')->with('message','User has been unblocked');
    }
    public function confirm($cnf)
    {
        $confirm=$cnf;
        DB::table('booking_final')->where('user_id','=',$confirm)->update(['auth'=>'confirmed']);
        return back()->with('message','User booking has been confirmed');
    }
    public function cancel($cl)
    {
        $confirm=$cl;
        DB::table('booking_final')->where('user_id','=',$confirm)->update(['auth'=>'rejected']);
        return back()->with('message','User booking has been rejected');
    }
    public function changepassword($cp):View
    {
        $userid=$cp;
        $data=DB::table('registration_final')->where('user_id','=',$userid)->get();
        return view('changepassword')->with(['passwordinfo'=>$data[0]]);
    }
    public function newpassword(Request $request)
    {
        $userid=$request->input('uid');
        $oldp=md5($request->input('oldp'));
        $newp=md5($request->input('newp'));
        $confp=md5($request->input('confp'));
        $user=DB::table('registration_final')->where('user_id','=',$userid)->get();
        $password_db=$user[0]->password;
        if($password_db==$oldp)
        {
            if($oldp!=$newp)
            {
                if($newp==$confp)
                {
                    $data=['password'=>$newp];
                    DB::table('registration_final')->where('user_id','=',$userid)->update($data);
                    return redirect('/login')->with('message','Password changed successfully');
                }
                else
                {
                    return back()->with('message','New & confirm password doesnot match');
                }
            }
            else
            {
                return back()->with('message','old password and new password are same');
            }
        }
        else
        {
            return back()->with('message','old password doesnot match');
        }
    }
    public function destination():View
    {
        return view('destination');
    }
    public function packages():View
    {
        $name = session()->get('name');
        if (isset($name))
       {
        return view('/packages')->with(['clientname'=>$name]);
       }
       else
       {
        return view('/packages');
       }

    }
    public function contactus():View
    {
        return view('contactus');

    }
    public function contactus_action(Request $request)
    {
        $name=$request->input('name');
        $email=$request->input('email');
        $message=$request->input('message');
        $data=[
            'name'=>$name,
            'email'=>$email,
            'message'=>$message
        ];
        DB::table('contact_us')->insert($data);
        return redirect('contactus')->with('message','Thanks for Contacting us,we will get back to you soon..');

    }
    public function delete($del)
    {
        $userid=$del;
        DB::table('booking_final')->where('user_id','=',$userid)->delete();
        return redirect('/myaccount')->with('message','Booking has been deleted');
    }
}
