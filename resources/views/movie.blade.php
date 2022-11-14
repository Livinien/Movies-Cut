
@extends('layout')

@section('content')

<h2>
    {{$movie['title']}}
</h2>
<p>
    {{$movie['story']}}
</p>

@endsection