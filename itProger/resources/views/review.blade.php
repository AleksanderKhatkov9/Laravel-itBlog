@extends('layout')
@section('title')Главная страница @endsection
@section('main_content')

    <h1 style="text-align: center">Форма добавления отзыва</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" placeholder="Ведите email" class="form-control"><br>
        <input type="text" name="subject" id=subject" placeholder="Ведите отзыв" class="form-control"><br>
        <textarea name="message" placeholder="Ведите сообщение" class="form-control"></textarea><br>
        <button type="submit" name="submit" class="btn btn-success">Отправить</button>
    </form>

    <h1>Все отзовы</h1>
    @foreach($reviews as $el)
        <div class="alert alert-warning">
            <h3>{{$el->subject}}</h3>
            <b>{{$el->email}}</b>
            <p>{{$el->message}}</p>
        </div>
    @endforeach

@endsection
