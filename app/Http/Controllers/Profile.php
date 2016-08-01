<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Crypt;
use App\Http\Requests;
use DB;
class Profile extends Controller
{
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
            'email' => 'required',
            'phone' => 'required',
            'password1' => 'required',
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

        if(isset($data['phone']))
         return view('userproducts',['sessions'=>$data]);
        else

        return redirect('/login');
        //
    }

    public function edit($id)
    {
        //
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'mobile' => 'required',
            'password' => 'required',
        ]);
        $input = $request->all();
        $results = DB::table('users1')->where([
            ['user_phone', '=', $input['mobile']],
            ['user_password', '=', md5($input['password'])],
        ])->get();
        if($results):
            $request->session()->put('phone', $input['mobile']);
            $request->session()->put('id', $results[0]->user_id);
            return redirect('/userproducts');
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
        return redirect('/success');

//        $input = $request->all();
//        $results = DB::table('users1')->where([
//            ['user_email', '=', $input['email']]
//        ])->get();
//        if($results):
//            $secret= Crypt::encrypt($input['email']);
//            $decrypted = Crypt::decrypt($secret);
//            return redirect('/success');
//        endif;



        //
    }
    public function resetmobile(Request $request)
    {
        $this->validate($request, [
            'mobile' => 'required'

        ]);
        return redirect('/success');
//        $input = $request->all();
//        $results = DB::table('users1')->where([
//            ['user_phone', '=', $input['mobile']]
//        ])->get();
//        if($results):
//            $request->session()->put('phone', $input['mobile']);
//            $request->session()->put('id', $results[0]->user_id);
//            return redirect('/userproducts');
//        endif;



        //
    }
    public function updatepassword($token )
    {
        return view('update-password');
        //
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
