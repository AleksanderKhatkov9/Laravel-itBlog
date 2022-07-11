<?php
@extends('layout')
@section('title')Главная страница @endsection
@section('main_content')


<h1 style="color: antiquewhite">Формула для входа на сайт</h1>
    <form method="post" action="">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                   placeholder="Email address">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success">Вход</button>
            <button type="button" class="btn btn-primary" id="registration">Регестрация</button>
        </div>
    </form>

@endsection
