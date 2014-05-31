@extends('templates.layouts.default')

@section('content')
  <section id="main-body" class="row">
    <div class="parent-page-title col-lg-12">
      <h1>မှတ်ပုံတင်ရန်</h1>
    </div>
    <div class="main-content col-lg-9">
    @if($errors->has())
      @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
          {{ $error }}
        </div>
      @endforeach
    @endif
    @include('users.forms.register-form')
    </div>
    <div class="main-sidebar col-lg-3">
      <ul class="sub-page">
        <li><a href="login.html">ဝင်ရန်</a></li>
        <li><a href="register.html">မှတ်ပုံတင်ရန်</a></li>
      </ul>
    </div>
  </section>
@stop