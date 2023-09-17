<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function postRegister(){
            $user = new User();         
            $user->email=Input::get ('nohp');
            $user->name=Input::get ('nama');
            $user->password=bcrypt(Input::get('password'));                      
            $user->rolesid=3;
            $user->save();
        //  dd($user);
           // var_dump($user);
 
           
     $result =DB::select('select *  from slide');
        $privs =DB::select('select *  from marp');
        $deals =DB::select('select mard.*, marchant.logo, marchant.nama from mard left outer join marchant on (marchant.id=mard.idmar)');        
        //$deals =DB::table('mard');
        return view('welcome')
        ->with('privs',$privs)
        ->with('deals',$deals)      
        ->with('slides',$result);
}


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nohp' => 'required|max:12',
            'nama' => 'required|max:60|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'nohp' => $data['nohp'],
            'nama' => $data['nama'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
