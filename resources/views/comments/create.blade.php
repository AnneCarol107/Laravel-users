@extends('layouts.main')
@section('title', 'Novo Usuario')
@section('content')


<div id="form-create-container" class="col-md-6 offset-md-3">

    <form action="{{ route('users-store') }}" method="POST">
       
    <fieldset>
      <legend>Preencha''''''''''''''''''' o formulario:</legend>
    @csrf

    @if($errors->any())
      <ul class="errors">
        @foreach ($errors->all() as $error )
        <li class="error">{{ $error }}</li>
        @endforeach 
      </ul>
    @endif

    <div class="form-group">
      <label for="title">Nome:</label>
      <input type="text" name=" name" placeholder="Nome completo" value="{{ old('name') }}">
    
    </div>

    <div class="form-group">
      <label for="title">Email:</label>
      <input type="email" name="email" placeholder="email obrigatorio" value="{{ old('email') }}">
    </div>
      
    <div class="form-group">
      <label for="title">Senha:</label>
      <input type="password" name="password" placeholder="8 a 1226 caracteres">
    </div>

    <input type="submit" class="btn btn-primary" value="Salvar">
  
    </fieldset>
        
    </form>
  
  </div>

@endsection