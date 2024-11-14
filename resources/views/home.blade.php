@extends('layouts.app')

@section('content')
<div class="h-100">
    <div class="card w-75 m-auto bg-white p-3">
        <table class="table table-striped m-0 border">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td><button type="button" class="btn btn-warning btn-sm d-flex align-items-center" style="padding-left: 4px; padding-right: 4px;"><span class="material-symbols-outlined">edit</span></button></td>
                        <td><button type="button" class="btn btn-danger btn-sm d-flex align-items-center" style="padding-left: 4px; padding-right: 4px;"><span class="material-symbols-outlined">delete</span></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
</div>
@endsection
