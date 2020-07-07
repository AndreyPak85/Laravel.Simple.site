@extends('layouts.app')

@section('title-block')
    update page
@endsection

@section('content')
    <h2>Update</h2>

<form action="{{route('contact-update-submit', $data->id)}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Input name</label>
        <input type="text" name="name" id="name" placeholder="Input Name" class="form-control" value="{{$data->name}}">
        </div>

        <div class="form-group">
            <label for="email">Input email</label>
            <input type="text" name="email" id="email" placeholder="Input email" class="form-control" value="{{$data->email}}">
        </div>

        <div class="form-group">
            <label for="subject">Input subject</label>
            <input type="text" name="subject" id="subject" placeholder="Input subject" class="form-control" value="{{$data->subject}}">
        </div>

        <div class="form-group">
            <label for="message">Input message</label>
        <textarea name="message" id="message"class="form-control" placeholder="Input message" >{{$data->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>

@endsection