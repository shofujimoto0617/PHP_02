@extends('layouts.app')

@section('body')
    <h1>
        ようこそ <strong>Bookers</strong> へ！
    </h1>
    <p>
        <strong>Bookers</strong>では、さまざまな書籍に関するあなたの意見や
    </p>
    <p>印象を共有し交換することができます</p>
    <p>
        <a href="{{ action('App\Http\Controllers\BookController@index') }}">start</a>
    </p>
@endsection
