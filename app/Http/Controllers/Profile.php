<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Crypt;
use App\Http\Requests;
use DB;
use Mail;
class Profile extends Controller
{
    protected $email;
    protected $phone;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'email' => 'required | unique:users1,user_email| Email',
            'phone' => 'required | unique:users1,user_phone',
            'password1' => 'required |Between:5,10 ',
            'password2' => 'required |Same:password1| Between:5,10'
        ]);
        $input = $request->all();
        $inserted=DB::table('users1')->insertGetId(['user_email' => $input['email'], 'user_phone' => $input['phone'] ,'user_password'=>md5($input['password1'])]
        );
        if($inserted):
            session(['phone' => $input['phone']]);
            session(['id' => $inserted]);
        return redirect('profile/products');
        endif;


        //
    }
    public function show(Request $request)
    {
        $sessions = $request->session()->all();
        $user_id = \Session::get('id');
        if(isset($user_id)):
            $products = DB::table('products')->where([['users_user_id', '=', $user_id]])->get();
            return view('profile.products',compact('sessions','products'));
        else:
            \Session::flash('apploginmessage', 'Invalid mobile !');
            return redirect('profile/login');
        endif;
        //
    }
    public function profile(Request $request)
    {
        $user_id = \Session::get('id');
        if(!$user_id):
            return redirect('profile/login');
        endif;
        $results = DB::table('users1')->where([['user_id', '=', $user_id]])->first();
        return view('profile.profile',['user_data'=>$results]);
        //
    }
    public function update(Request $request)
    {
        $user_id = \Session::get('id');
        if(!$user_id):
            return redirect('profile/login');
        endif;

        $this->validate($request, [
            'phone' => 'required',
            'email' => 'required',


        ]);

            $input = $request->all();
            DB::table('users1')
                ->where('user_id', $user_id)
                ->update(['user_phone' => $input['phone'],'user_email' => $input['email'],'user_name' => $input['name']]);
            if(isset($input['password1'])) :
                DB::table('users1')
                    ->where('user_id', $user_id)
                    ->update(['user_password' => md5($input['password1'])]);
                endif;
            $request->session()->put('phone', $input['phone']);
            return redirect('profile/products');

    }
    public function login(Request $request)
    {
        $data = $request->session()->all();
        if($data):
        redirect();
        endif;
        $this->validate($request, [
            'mobile' => 'required',
            'password' => 'required',
        ]);
        $input = $request->all();
        $results = DB::table('users1')->where([
            ['user_phone', '=', $input['mobile']],
            ['user_password', '=', md5($input['password'])]
        ])->orWhere('user_email', $input['mobile'])->get();
        if($results):
            $request->session()->put('phone', $input['mobile']);
            $request->session()->put('id', $results[0]->user_id);
            return redirect('profile/products');

        else:
            \Session::flash('loginmessage', 'Invalid email or mobile !');

            return redirect('profile/login');
        endif;
        //
    }
    public function activate(Request $request)
    {
        $this->validate($request, [
            'code' => 'required'
        ]);
        $input = $request->all();
        $results = DB::table('notification')->where([
            ['notificationInfo', '=', $input['code']]
        ])->get();

        if($results):
            $this->phone=$results[0]->userNumber;
            return redirect('update-password-mobile')->with('mobile',$this->phone);
        else:
            \Session::flash('loginmessage', 'Invalid Code !');
            return redirect('profile/activation');
        endif;

    }
    public function applogin(Request $request)
    {
        $this->validate($request, [
            'mobile' => 'required'

        ]);
        $input = $request->all();
        $results = DB::table('users1')->where([
            ['user_phone', '=', $input['mobile']]
        ])->get();
        if($results):
            $request->session()->put('phone', $input['mobile']);
            $request->session()->put('id', $results[0]->user_id);
            return redirect('profile/products');
        endif;




        //
    }
    public function resetemail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required'

        ]);

        $input = $request->all();
        $results = DB::table('users1')->where([
            ['user_email', '=', $input['email']]
        ])->get();

        if($results):
            $this->email=$results[0]->user_email;
            $token=str_random(50);
            DB::table('passwords_reset')->insert(
                ['email' => $input['email'], 'token' => $token]
            );
           Mail::send('profile.emailtemplate', ['token' => $token], function ($m) use ($input) {
                $m->from('info@mzadqater.com', 'Reset Password');
                $m->to($this->email, $this->email)->subject('Password Reset!');
           });
        return redirect('profile/success');
        else:
            \Session::flash('resetmessage', 'Email not existed !');
            return redirect('profile/forget');
        endif;


        //
    }
    public function resetmobile(Request $request)
    {
        $input = $request->all();
        $results = DB::table('users1')->where([
            ['user_phone', '=', $input['mobile']]
        ])->get();

        if($results):
            $this->phone=$results[0]->user_phone;
            $token=mt_rand(10000,999999);
            DB::table('notification')->insert(
                ['userNumber' => $this->phone, 'notificationInfo' => $token]
            );

            return redirect('profile/activation');
        else:
            \Session::flash('resetmessage2', 'Phone not existed !');
            return redirect('profile/forget');
        endif;
}
    public function updatepassword(Request $request )
    {
        $token=$request->input('token');
        $this->validate($request, [
            'password1' => 'required',
            'password2' => 'required'

        ]);

        $input = $request->all();
        $results_token = DB::table('passwords_reset')->where([
            ['token', '=', $token]
        ])->get();

        if($results_token):
            $this->email=$results_token[0]->email;
            DB::table('users1')
                ->where('user_email', $this->email)
                ->update(['user_password' => md5($input['password1'])]);
            $results = DB::table('users1')->where([
                ['user_email', '=', $this->email]
            ])->get();

            $request->session()->put('phone', $results[0]->user_phone);
            $request->session()->put('id', $results[0]->user_id);
            return redirect('profile/products');
        else:
            return redirect('profile/forget');
        endif;
    }
    public function updatepasswordmobile(Request $request )
    {
        $token=$request->input('mobile');
        $this->validate($request, [
            'password1' => 'required',
            'password2' => 'required'

        ]);

        $input = $request->all();
        $results_token = DB::table('users1')->where([
            ['user_phone', '=', $token]
        ])->get();

        if($results_token):
            $this->email=$results_token[0]->user_email;
            DB::table('users1')
                ->where('user_email', $this->email)
                ->update(['user_password' => md5($input['password1'])]);
            $results = DB::table('users1')->where([
                ['user_email', '=', $this->email]
            ])->get();

            $request->session()->put('phone', $results[0]->user_phone);
            $request->session()->put('id', $results[0]->user_id);
            return redirect('profile/products');
        else:
            return redirect('profile/update-password-mobile');
        endif;
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('profile/login');
        //
    }
    public function add(Request $request)
    {

        $this->validate($request, [
            'name_ar' => 'required',
            'name_en' => 'required ',
            'category' => 'required',
            'price' => 'required'
        ]);
        $input = $request->all();
        $inserted=DB::table('products')->insertGetId(['user_email' => $input['email'], 'user_phone' => $input['phone'] ,'user_password'=>md5($input['password1'])]
        );
        if($inserted):
            session(['phone' => $input['phone']]);
            session(['id' => $inserted]);
            return redirect('profile/products');
        endif;


        //
    }
}
