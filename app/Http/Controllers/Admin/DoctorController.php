<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index()
    {
        //$doctors = User::all();
        $doctors = User::doctors()->paginate(10);
        return view('doctors.index',compact('doctors'));
    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
    public function create()
    {
        return view('doctors.create');
    }

   // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',  // required = requiere llenar ese campo / email = verifica que tenga un @ y un dominio el correo.
            'cedula' => 'required|digits:10', // se tiene que introducir 10 digitos.
            'address' => 'nullable|min:6',  // No es obligatorio llenar, pero si ingresa un texto debe de ser mas de 6 letras
            'phone' => 'required',
        ];

        $messages = [
            'name.required' => 'El nombre del médico es obligatorio',
            'name.min' => 'El nombre del médico debe de tener más de 3 caracteres',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'Ingresa una dirección de correo electrónico válido',
            'cedula.required' => 'La cédula es obligatorio',
            'cedula.digits' => 'La cédula debe de tener 10 digitos',
            'address.min' => 'La direccion debe tener al menos 6 caracteres',
            'phone.required' => 'El número de teléfono es obligatorio',
        ];

        $this->validate($request, $rules , $messages);

        User::create(
            $request->only('name','email','cedula','address','phone')
            + [
                'role' => 'doctor',
                'password' => bcrypt($request->input('password'))
            ]
        );
        $notification = 'El médico se ha registrado correctamente.';
        return redirect('/medicos')->with(compact('notification'));
    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
    public function show($id)
    {
        //
    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
    public function edit($id)
    {
        $doctor = User::doctors()->findOrFail($id);
        return view('doctors.edit', compact('doctor'));

    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',  // required = requiere llenar ese campo / email = verifica que tenga un @ y un dominio el correo.
            'cedula' => 'required|digits:10', // se tiene que introducir 10 digitos.
            'address' => 'nullable|min:6',  // No es obligatorio llenar, pero si ingresa un texto debe de ser mas de 6 letras
            'phone' => 'required',
        ];

        $messages = [
            'name.required' => 'El nombre del médico es obligatorio',
            'name.min' => 'El nombre del médico debe de tener más de 3 caracteres',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'Ingresa una dirección de correo electrónico válido',
            'cedula.required' => 'La cédula es obligatorio',
            'cedula.digits' => 'La cédula debe de tener 10 digitos',
            'address.min' => 'La direccion debe tener al menos 6 caracteres',
            'phone.required' => 'El número de teléfono es obligatorio',
        ];

        $this->validate($request, $rules, $messages);
        $user = User::doctors()->findOrFail($id);

        $data = $request->only('name','email','cedula','address','phone');
        $password = $request->input('password');

        if($password)
            $data['password'] = bcrypt($password);
        
        $user->fill($data);
        $user->save();

        $notification = 'La informacion del medico se actualizo correctamente.';
        return redirect('/medicos')->with(compact('notification'));

    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
    public function destroy($id)
    {
        $user = User::doctors()->findOrFail($id);
        $doctorName = $user->name;
        $user->delete();

        $notification = 'El medico '.$doctorName.'se elimino correctamente';
        return redirect('/medicos')->with(compact('notification'));
    }
}
