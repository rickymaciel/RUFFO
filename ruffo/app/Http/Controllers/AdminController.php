<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $request)
    {
        return Validator::make($request, [
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     */
    public function store(Request $request)
    {
        $this->validate($request, [
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
        $user = User::create([
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'direccion' => $request['direccion'],
            'documento' => $request['documento'],
            'imagen' => $request['imagen'],
            'telefono' => $request['telefono'],
            'nrofuncionario' => $request['nrofuncionario'],
            'email' => $request['email'],
            'oficina_id' => $request['oficina_id'],
            'rol_id' => $request['rol_id'],
            'password' => bcrypt($request['password']),
        ]);

        // Session::flash('message', 'El usuario fue creado con exito!');
        return redirect()->route('admin.index')->with('success','El usuario fue creado con exito!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::findOrFail($id);
        return view('admin.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        if(is_null($user)){
            return Redirect::route('admin');
        }
        return View('admin.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage. $2y$10$1HJKlUMSAaz/8YXecJFd1.zNwg/mov/NkNYmTa32zqSWWHpocQt3K
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required|max:100',
            'apellido' => 'required|max:100',
            'documento' => 'required|max:100',
            'direccion' => 'max:255',
            'telefono' => 'required|max:100',
            'nrofuncionario' => 'required|integer|max:1000',
            'email' => 'required|email|max:255',
            'oficina_id' => 'required|integer|max:100',
            'rol_id' => 'required|integer|max:100',
        ]);
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('admin.index')->with('success','El usuario fue modificado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.index')->with('success','El usuario fue eliminado con exito!');
    }
}
