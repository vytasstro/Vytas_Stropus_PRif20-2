@extends('layouts.app')

@section('content')
    <h1>{{ $conference['title'] }}</h1>
    <p>{{ $conference['content'] }}</p>
    <p>{{ $conference['date'] }}</p>
    <p>{{ $conference['address'] }}</p>
@endsection