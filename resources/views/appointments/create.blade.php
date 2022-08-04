<?php
use Illuminate\Support\Str; 
?>
@extends('layouts.panel')

@section('content')

      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Registrar nueva cita</h3>
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


            <form action="{{ url('/pacientes') }}" method="POST">
               @csrf
               <div class="form-group">
                  <label for="name">Especialidad</label>
                  <select name="" id="" class="form-control">

                  </select>
               </div>

               <div class="form-group">
                  <label for="email">Medico</label>
                  <select name="" id="" class="form-control">

                  </select>
               </div>

               <div class="form-group">
                  <label for="cedula">Fecha</label>
                  <div class="input-group">
                     <div class="input-group-prepend">
                         <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                     </div>
                     <input class="form-control datepicker" placeholder="Seleccionar fecha" 
                     type="text" value="{{ date('Y-m-d') }}" data-date-format="yyyy-mm-dd"
                     data-date-start-date="{{ date('Y-m-d')}}" data-date-end-date="+30d">>
                 </div>
               </div>

               <div class="form-group">
                  <label for="address">Hora de atencion</label>
                  <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                  
               </div>

               <div class="form-group">
                  <label for="Telefono">Tipo de consulta</label>
                  <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
               </div>
               <button type="submit" class="btn btn-sm btn-primary"> Guardar</button>
            </form>
        </div>

      </div>
    
@endsection


@section('scripts')
<script src="{{ asset('js/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"> </script>   <!-- Esto esta en la carpeta public-->
@endsection