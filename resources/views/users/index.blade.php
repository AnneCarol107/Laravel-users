@extends('layouts.main')
@section('title', 'Listagem do usuário')
@section('content')


    <div class="row">
        <div class="col-sm-10">
            <h2>Lista : </h2>     
        </div>
        <div class="col-sm-2">
            <a href="{{ route('users-create') }}" class="btn btn-success">Criar </a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome:</th>
                <th scope="col">Email:</th>
                <th scope="col">Senha:</th>
                <th scope="col">....</th>
               
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <th>{{ $user->id  }}</th>
                <th>{{ $user->name }}</th>
                <th>{{ $user->email }}</th>
           
                <th>{{ $user->password }}</th>

                <th class="d-flex">

                <a href="{{ route('comments-index',['id'=>$user->id]) }}" class="btn btn-success me-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                </a>
              
                    <a href="{{ route('users-edit',['id'=>$user->id]) }}" class="btn btn-info me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 
                            2.456-2-2L4.939 9.21a.5.5  0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 
                            .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 
                            15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 
                            0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </a>

                    <form action="{{ route('users-delete',['id'=>$user->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                             fill="currentColor" class="bi bi-trash " viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 
                                .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 
                                0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 
                                4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0
                                1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>

                        </button>
                    </form>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
