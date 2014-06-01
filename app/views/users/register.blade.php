@extends('templates.layouts.default')

@section('content')
  <section id="main-body" class="row">
    <div class="parent-page-title col-lg-12">
      <h1>မှတ်ပုံတင်ရန်</h1>
    </div>
    <div class="main-content col-lg-9">
    @include('users.forms.register-form')
    </div>
    <div class="main-sidebar col-lg-3">
      <ul class="sub-page">
        <li><a href="{{ action('UserController@getLogin') }}">ဝင်ရန်</a></li>
        <li><a href="{{ action('UserController@getRegister') }}" class="active">မှတ်ပုံတင်ရန်</a></li>
      </ul>
    </div>
  </section>
@stop