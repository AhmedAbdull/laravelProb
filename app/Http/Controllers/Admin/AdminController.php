<?php

namespace App\Http\Controllers\Admin;
 use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    
    public function index(Request $request){
        return view('admin.admin_login');
        $email = $request->input('email');
    	$user=DB::table('users')->where('email','=',$email)->where('isAdmin','=','1')->get();
    	
    	if($user->isEmpty()){
    		echo "ERROR YOU ARE HACKER!";
    	}else{
    	 return	redirect('shop/admin/dashboard');
    	}
    }
    public function store(Request $request){
    	
    }
     public function dashboard()
    {
        return view('admin.dashboard');
    }

     public function settings()
    {
        return view('admin.settings');
    }
    public function chkPassword(Request $request){
    	$data = $request->all();
        //echo "<pre>"; print_r($data); die;
        $current_password = $data['current_pwd'];
         $user = Auth::user()->email;
        $check_password = User::where(['email'=> $user ])->first();
            if (Hash::check($current_password, $check_password->password)) {
                //echo '{"valid":true}';die;
                echo "true"; die;
            } else {
                //echo '{"valid":false}';die;
                echo "false"; die;
            }
            return var_dump($check_password);
    }

    public function updatePassword(Request $request)
    {
    	if($request->isMethod('post')){
    		$data = $request->all();
    		//var_dump($data);
    		$authUser = Auth::user()->email;
    		$check_password = User::where(['email'=> $authUser])->first();
    		$current_password = $data['current_pwd'];
    		if(Hash::check($current_password,$check_password->password)){
    			$password = bcrypt($data['new_pwd']);
    			User::where('email',$authUser)->update(['password'=>$password]);
    			return redirect('/shop/admin/settings');
    		}else{
    			echo "false";die;
    		}
    	}
    }
   
    public function logout(){	
    	Session::flush();
    	return	redirect('/');
    }
}