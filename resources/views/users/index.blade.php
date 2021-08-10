@extends('layouts.main')

@section('content')
    <!-- Page Heading -->
    <div class="mb-4 d-sm-flex align-items-center justify-content-between">
        <h1 class="mb-0 text-gray-800 h3">Users</h1>
    </div>
    <div class="row">
        <div class="mx-auto card">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif
            <div class="card-header">
                <a href="{{route('users.create')}}" class="float-right">Create</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user )
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
