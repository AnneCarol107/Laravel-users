@extends('layouts.main')

@section('title', 'edit')

@section('content')

<div id="form-create-container" class="col-md-6 offset-md-3">


  <form action="{{ route('users-update',['id'=>$users->id]) }}" method="POST">
    <fieldset>
      <legend>Editar: </legend>
    @csrf
 
  @method('PUT')
  
  <div class="form-group">
    <label for="title">Nome:</label>
    <input type="text" name=" name" placeholder="Nome completo " value="{{ $users->name }}">
  
  </div>

  <div class="form-group">
    <label for="title">Email:</label>
    <input type="email" name="email" placeholder="email obrigatorio "value="{{ $users->email }}">
  </div>
    
  <div class="form-group">
    <label for="title">Senha:</label>
    <input type="password" name="password" placeholder="8 a 16 caracteres"value="{{ $users->password}}">
  </div>

  <input type="submit" class="btn btn-primary" value="Salvar">

  </form>
</div>
@endsection