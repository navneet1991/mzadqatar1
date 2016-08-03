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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'email' => 'required | unique:users1,user_email| Email',
            'phone' => 'required | unique:users1,user_phone',
            'password1' => 'required | Between:5,10 ',
            'password2' => 'required |Same:password1 |  Between:5,10'
        ]);
        $input = $request->all();
        $inserted=DB::table('users1')->insertGetId(['user_email' => $input['email'], 'user_phone' => $input['phone'] ,'user_password'=>md5($input['password1'])]
        );
        if($inserted):
            session(['phone' => $input['phone']]);
            session(['id' => $inserted]);
        return redirect('/userproducts');
        endif;


        //
    }

    public function show(Request $request)
    {
        $data = $request->session()->all();
        if(isset($data['phone'])):
        return view('userproducts',['sessions'=>$data]);
        else:
        return redirect('/login');
        endif;
        //
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
            return redirect('/userproducts');

        else:
        return redirect('/login');
        endif;



        //
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
            return redirect('/userproducts');
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
           Mail::send('emailtemplate', ['token' => $token], function ($m) use ($input) {
                $m->from('info@mzadqater.com', 'Reset Password');
                $m->to($this->email, $this->email)->subject('Password Reset!');
           });
            return redirect('/success');
        else:
        return redirect('/reset-password');
        endif;


        //
    }

    public function resetmobile(Request $request)
    {
        $this->validate($request, [
            'mobile' => 'required'

        ]);
        return redirect('/success');
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
            return redirect('/userproducts');
        else:
            return redirect('/update-password');
        endif;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
        //
    }
}
