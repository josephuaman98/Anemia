<?php
use Illuminate\Support\Str; 
?>
@extends('layouts.panel')

@section('content')

      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Editar paciente</h3>
            </div>
            <div class="col text-right">
              <a href="{{ url('/pacientes') }}" class="btn btn-sm btn-success"> <i class="fas fa-chevron-left"></i>Regresar </a>
            </div>
          </div>
        </div>
        
        <div class="card-body">

            @if ($errors->any())
               @foreach($errors->all() as $error)
               <div class="alert alert-danger" role="alert">
                  <i class="fas fa-exclamation-triangle""></i>
                  <strong>Por favor !!</strong> {{ $error }}    <!-- MENSAJE DE ERROR-->
               </div>
               @endforeach
            @endif


            <form action="{{ url('/pacientes/'.$patient->id) }}" method="POST">
               @csrf
               @method('PUT')
               <div class="form-group">
                  <label for="name">Nombre del paciente</label>
                  <input type="text" name="name" class="form-control" value="{{ old('name', $patient->name) }}" required>  <!-- cuando sale el error para que nos datos no se borren-->
               </div>

               <div class="form-group">
                  <label for="email">Correo Electrónico</label>
                  <input type="text" name="email" class="form-control" value="{{ old('email',$patient->email) }}">
               </div>

               <div class="form-group">
                  <label for="cedula">Cedula</label>
                  <input type="text" name="cedula" class="form-control" value="{{ old('cedula',$patient->cedula) }}">
               </div>

               <div class="form-group">
                  <label for="address">Dirección</label>
                  <input type="text" name="address" class="form-control" value="{{ old('address',$patient->address) }}">
               </div>

               <div class="form-group">
                  <label for="phone">Telefono / Movil</label>
                  <input type="text" name="phone" class="form-control" value="{{ old('phone',$patient->phone) }}">
               </div>

               <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="text" name="password" class="form-control">
                  <small class="text-warning">Solo llene el campo si desea cambiar la contraseña</small>
               </div>
               

               <button type="submit" class="btn btn-sm btn-primary">Guarda cambios</button>
            </form>
        </div>

      </div>
    
@endsection
