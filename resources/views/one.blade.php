@extends('layouts.app')

@section('title-block')
    {{$data->subject}}
@endsection

@section('content')
    <h2>Messages</h2>
    
    
        <div class="alert alert-info">
            <h3>{{$data->subject}}</h3>
            <p>{{$data->message}}</p>
            <p>{{$data->name}} - {{$data->email}}</p>
            <p><small>{{$data->created_at}}</small></p>
            <a href="{{ route('update-message', $data->id) }}"><button class="btn btn-warning">Update</button></a>
            <a href="{{ route('delete-message', $data->id) }}"><button class="btn btn-warning">Delete</button></a>

        </div>
    

@endsection

