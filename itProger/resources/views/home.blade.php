@extends('layouts.app')
@extends('layout')


<style>

    #title {
        margin-top: 10px;
        text-align: center;
    }

</style>



@section('content')
    <main>
        {{--    <section class="py-5 text-center container">--}}
        {{--        <div class="row py-lg-5">--}}
        {{--            <div class="col-lg-6 col-md-8 mx-auto">--}}
        {{--                <h1 class="fw-light">Album example</h1>--}}
        {{--                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>--}}
        {{--                <p>--}}
        {{--                    <a href="#" class="btn btn-primary my-2">Main call to action</a>--}}
        {{--                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>--}}
        {{--                </p>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </section>--}}

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{asset('storage/images/blog.jpg') }}" alt="blog"
                                 class="bd-placeholder-img card-img-top" width="100%" height="400">

                            <div class="card-body">
                                @foreach($post as $element)
{{--                                    <p class="card-text">{{ $element->id}}</p>--}}
                                    <div class="row-3" id="title">
                                        <a href="/article?id={{ $element->id}}"><h3 id="title">{{ $element->title}}</h3></a>
                                    </div>
{{--                                    <p>{{ $element->file}}</p>--}}
                                    <div class="row-3" id="">
                                        <img class="image-flud" src="{{asset('storage/images/'.$element->file) }}"
                                             alt="blog-img" width="1000px">
                                    </div>
                                    <div class="row-3" id="description">
                                        <p style="tab-size: 20px">{{ $element->description}}</p>
                                    </div>

                                    <hr>
                                    <div class="row-3" id="date">
                                        <p>Дата публикации: <b>{{ $element->date}} </b></p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group" id="button">
                                            <a href="/article?id={{ $element->id}}" class="btn btn-outline-success"
                                               style="font-weight: bold">Читать далее &#x27a2;</a>
                                        </div>

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


{{--@extends('footer')--}}

