@extends('layouts.main')
@section('content')


<ul>


        <li>{{ $user->name }}</li> 
        <li>{{ $user->email }}</li>
        <li>{{ $user->password }} </li>
        | 
    
  
</ul>

@endsection