@extends('layouts.main')

@section('title', 'Result')

@section('container')

@if($grd > 85)
    <h1>Your grade is excellent</h1>

@elseif($grd <= 85 && $grd >= 50)
    <h1>Your grade is not bad</h1>

@else
    <h1>Your grade is so bad</h1>
@endif

<a href="/">Go Back Home</a>

@endsection
