@extends('layouts.head')

@section('main-content')
    <div class="container-lg">
        <div class="h3 mt-5">All Restaurants</div>
        <table class="table table-striped table-hover my-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Phone_num</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($awtorlar as $awtor)
                    <tr>
                        <th scope="row">{{ $awtor->id }}</th>
                        <td> {{ $awtor->name }}</td>
                        <td>{{ $awtor->address }}</td>
                        <td>{{ $awtor->rating }}</td>
                        <td>{{ $awtor->phone_num }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection