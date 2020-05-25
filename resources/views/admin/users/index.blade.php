@extends('layouts.app')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{route('admin.users.edit', $user->id)}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
