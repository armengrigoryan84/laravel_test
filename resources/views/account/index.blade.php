@extends('layouts.main')
@section('content')
<h1>Helo {{auth()->user()->name}}<h1>

    <h1>Classes <a href="{{url('classes/create')}}" class="btn btn-info" role="button">Create Class</a></h1>

    @include('alerts.message')
    {!! Form::open(array('url' => 'account/file', 'method' => 'POST','files'=>true)) !!}
        <div class="form-group">
            <input type="file" name="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    {!! Form::close() !!}
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Original Name</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($files as $file)
                <tr>
                    <td>{{$file->id}}</td>
                    <td>{{$file->name}}</td>
                    <td>{{$file->original_name}}</td>
                    <td><img width='200px' src='uploads/{{$file->name}}'></td>
                </tr>
            @endforeach
        </tbody>
    </table>
        
@stop