@extends('layouts.head')


@section('main-content')
    <div class="container-lg">

        <div class="h3 mt-3">
            Categories page
        </div>
        <div class="row row-cols-5 gy-3 my-3">
            @foreach ($categories as $category)
                <div class="col">
                    <a href="/posts?categoryId={{ $category->id }}"
                        class="d-block border border-1 h5 text-center p-3 text-decoration-none">
                        {{ $category->name }}
                    </a>
                </div>
            @endforeach
        </div>
        
    </div>
@endsection
        <!-- <table class="table table-striped table-hover my-3">
        <thead>
            <tr>
                <th>ID</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Posts Count</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ ($category->created_at)->format('d M Y H:i') }}</td>
                        <td>{{ ($category->updated_at)->format('d M Y H:i') }}</td>
                        <td>{{ $category->posts_count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table> -->
