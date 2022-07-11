@extends('layouts.app')
@extends('layout')

@section('content')
    <main>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">

                            {{--                            <img src="{{asset('storage/images/blog.jpg') }}" alt="blog"--}}
                            {{--                                 class="bd-placeholder-img card-img-top" width="100%" height="400">--}}

                            <div class="card-body">
                                @foreach($post as $element)
                                    <div class="row-3" id="title">
                                        <h3>{{ $element->title}}</h3>
                                    </div>
                                    <div class="row-3" id="">
                                        <img class="image-flud" src="{{asset('storage/images/'.$element->file) }}"
                                             alt="blog-img" width="1000px">
                                    </div>
                                    <div class="row-3" id="description">
                                        <p style="tab-size: 20px">{{ $element->description}}</p>
                                    </div>
                                    <p>{{ $element->content}}</p>
                                    <hr>
                                    <div class="row-3" id="date">
                                        <p>Дата публикации: <b>{{ $element->date}} </b></p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Изменить
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Удалить
                                            </button>
                                        </div>

                                        {{--                                        <div class="btn-group" id="button">--}}
                                        {{--                                            <a href="/" class="btn btn-outline-success" style="font-weight: bold">Читать--}}
                                        {{--                                                далее &#x27a2;</a>--}}
                                        {{--                                        </div>--}}
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--        <footer class="bg-dark text-center text-white">--}}
        {{--            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">--}}
        {{--                © 2022 Copyright:https:--}}
        {{--                <a class="text-white" href="https://itproger.com/">itproger.com</a>--}}
        {{--            </div>--}}
        {{--        </footer>--}}

        @include('footer')
    </main>

@endsection
