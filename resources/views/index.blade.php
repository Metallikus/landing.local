@extends('layouts.layout')

@section('navbar')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('sidebar')
    @parent
    <div class="sidebar-module">
      <h2>Архивы2</h2>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" href="#">Январь 2018</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Апрель 2017</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Сентябрь 2016</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Август 2015</a>
        </li>
      </ul>
    </div>
@endsection


@section('content')
    @include('content')
@endsection