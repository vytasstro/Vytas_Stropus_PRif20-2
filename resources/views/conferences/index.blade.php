@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div style="background-color: green; color: lime;">{{ session('status') }}</div>
    @endif
    <h2>List of conferences</h2>
    <a href="{{ route('conferences.create') }}"><button type="button">Create conference</button></a>
    @each('conferences.partials.list', $conferences, 'conference')
@endsection