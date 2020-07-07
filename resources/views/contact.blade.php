@extends('layouts.app')

@section('title-block')
    Contact page
@endsection

@section('content')
    <h2>Contact page</h2>
    
    {{-- @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $iteme)
                    <li>
                        {{$item}}
                    </li>    
                @endforeach
            </ul>
        </div>
    @endif --}}


<form action="{{route('contact-form')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Input name</label>
            <input type="text" name="name" id="name" placeholder="Input Name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Input email</label>
            <input type="text" name="email" id="email" placeholder="Input email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Input subject</label>
            <input type="text" name="subject" id="subject" placeholder="Input subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Input message</label>
            <textarea name="message" id="message"class="form-control" placeholder="Input message"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Send</button>
    </form>

@endsection