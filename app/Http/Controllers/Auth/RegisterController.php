<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
     * Where to redirect users after registration.
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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'date_of_birth' => ['required', 'string'],
            'blood_group' => ['required', 'string'],
            'address' => ['required', 'string'],
            'facebook' => ['required', 'string'],
            'batch' => ['required', 'string'],
            'admission_year' => ['required', 'string'],
            'section' => ['required', 'string'],
            'ssc_result' => ['required', 'string'],
            'co_curricular_activities' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'date_of_birth' => $data['date_of_birth'],
            'blood_group' => $data['blood_group'],
            'address' => $data['address'],
            'facebook' => $data['facebook'],
            'batch' => $data['batch'],
            'admission_year' => $data['admission_year'],
            'section' => $data['section'],
            'ssc_result' => $data['ssc_result'],
            'co_curricular_activities' => $data['co_curricular_activities'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
