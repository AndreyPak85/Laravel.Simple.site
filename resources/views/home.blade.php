@extends('layouts.app')

@section('title-block')
    Main page
@endsection

@section('content')
    <h2>Main page</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis delectus assumenda natus magnam rerum non dignissimos ut iusto repellendus quod, omnis explicabo. Voluptatibus nulla illo minus ipsam quisquam ducimus sed?</p>
@endsection

@section('aside')
    @parent
    <p>Dopolnitelnye text</p>
@endsection