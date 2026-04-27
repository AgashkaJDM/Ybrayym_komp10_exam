@extends('layouts.head')

@section('main-content')
    <div class="container-lg">

        <div class="h3 mt-3">
            Posts page
        </div>

        <form action="/posts" method="GET">
            <div class="row align-items-end my-4">
                <div class="col-4">
                    <label for="category" class="form-label">Category:</label>
                    <select id="category" class="form-select" name="categoryId">
                        <option value="" selected>All</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $f_category_id == $category->id ? 'selected' : ''}}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-4 ">
                    <button type="submit" class="d-inline btn btn-primary">Search</button>
                    <a href="/posts" class="d-inline btn btn-secondary ms-2">Reset</a>
                </div>
            </div>
        </form>

        <div class="row row-cols-3 g-3">
            @forelse ($posts as $post)
                <div class="col">
                    <div class="border border-1 p-3 rounded-2 h-100 d-flex flex-column">
                        <div class="position-relative">
                            <a href="/posts/show/{{ $post->id }}">
                                <img src="{{ asset('img/tomt.webp') }}" class="w-50" alt="">
                            </a>

                            <div class="position-absolute top-0 end-0">
                                <span class="btn btn-warning">{{ $post->category->name }}</span>
                            </div>
                        </div>
                        <div class="h4">
                            {{ $post['image'] }}
                        </div>
                        <div class="h5 mb-auto">
                            <a href="/posts/show/{{ $post->id }}" class="text-decoration-none text-dark">
                                {{ $post->id }} {{ $post->name }}
                            </a>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="fw-semibold">
                                {{ $post->price }} TMT
                            </div>
                            <div>
                                <i class="bi bi-heart text-danger ms-3"></i>
                                {{ $post->like_count }}
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="display-4 text-center my-5 w-100">
                    Post not found :(
                </div>
            @endforelse
        </div>

        <div class="my-4">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection