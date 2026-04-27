@extends('layouts.head')

@section('main-content')
    <div class="container-lg">

        <div class="row justify-content-center my-4">
            <div class="col-7">
                <div class="border border-1">
                    <div>
                        <img src="{{ asset('img/tomt.webp') }}" class="w-50" alt="">
                    </div>

                    <div class="h3 mt-2">
                        {{ $post->id }}
                        {{ $post->name }}
                    </div>

                    <div class="d-flex ">
                        <div class="fw-semibold">
                                {{ $post->price }} TMT
                            </div>
                        <div>

                            <i class="bi bi-heart text-danger ms-3"></i>
                            {{ $post->like_count }}
                        </div>
                    </div>

                    <div class="my-4 h3">
                        Category: {{ $post->category->name }}
                    </div>
                    <div class="my-4 h3">
                        Restaurant: {{ $post->author->name }} 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection