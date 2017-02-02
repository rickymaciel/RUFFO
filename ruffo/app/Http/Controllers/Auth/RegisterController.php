<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

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
            'nombre' => 'required|max:100',
            'apellido' => 'required|max:100',
            'documento' => 'required|max:100|unique:users',
            'direccion' => 'max:255',
            'imagen' => 'max:255',
            'telefono' => 'required|max:100',
            'nrofuncionario' => 'required|integer|max:1000|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'oficina_id' => 'required|integer|max:100',
            'rol_id' => 'required|integer|max:100',
            'password' => 'required|min:4|confirmed',
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
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'direccion' => $data['direccion'],
            'documento' => $data['documento'],
            'imagen' => $data['imagen'],
            'telefono' => $data['telefono'],
            'nrofuncionario' => $data['nrofuncionario'],
            'email' => $data['email'],
            'oficina_id' => $data['oficina_id'],
            'rol_id' => $data['rol_id'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
