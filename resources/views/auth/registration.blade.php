@extends('layouts.main')
@section('content')
    <h1>Registration</h1>
    @include('alerts.message')
    {!! Form::open(array('url' => 'auth/registration', 'method' => 'POST')) !!}
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName"  placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Enter email">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPasswordConf">Password confirmation</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPasswordConf" placeholder="Password Confirmation">
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    {!! Form::close() !!}
@stop