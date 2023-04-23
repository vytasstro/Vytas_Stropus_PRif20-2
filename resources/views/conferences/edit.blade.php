@extends('layouts.app')

@section('title', 'Conference Edit Form')
    
@section('content')
    <form action="{{ route('conferences.update', ['id' => $conference->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('conferences.partials.form');
        <div><input type="submit" value="Update"></div>
    </form>
@endsection