@extends('layouts.layout')

@section('navbar')
@parent
@endsection

@section('header')
@parent
@endsection

@section('sidebar')
@parent
@endsection

@section('content')
<div class="col-md-9 row">
    <form action="{{route('contact')}}" method="post">
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="name">Имя</label>
            <input value="{{old('name')}}" type="text" class="form-control"
                   id="name" name="name" aria-describedby="nameHelp"
                   placeholder="Введите Имя">
            <small id="nameHelp" class="form-text text-muted">
                Имя ваше важно нам.
            </small>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input value="{{old('email')}}" type="email" class="form-control"
                   id="email" name="email" aria-describedby="emailHelp"
                   placeholder="Введите email">
            <small id="emailHelp" class="form-text text-muted">
                Мы собираем адреса электронной почты для спамлистов.
            </small>
        </div>
        <div class="form-group">
            <label for="site">Сайт</label>
            <input value="{{old('site')}}"  type="text" class="form-control"
                   id="site" name="site" aria-describedby="siteHelp"
                   placeholder="Введите Сайт">
            <small id="siteHelp" class="form-text text-muted">
                Адрес вашего сайта.
            </small>
        </div>
        <div class="form-group">
            <label for="name">Текст</label>
            <textarea class="form-control" id="text" name="text"
                      aria-describedby="textHelp" placeholder="Введите Текст"
                      rows="3">{{old('text')}}</textarea>
            <small id="textHelp" class="form-text text-muted">
                Что вы хотите нам сказать?
            </small>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>
@endsection