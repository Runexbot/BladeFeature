@extends('layouts.main')

@section('title', 'Result')

@section('container')


<div class="d-flex justify-content-center align-items-center" style="height: 75vh">
    <div class="card text-center" style="width: 40rem">
        <div class="card-header">
        Your Grade Scale Result
        </div>
        <div class="card-body">
            @if($grd > 85)
                <h1>Your Grade Is Excellent</h1>

            @elseif($grd <= 85 && $grd >= 50)
                <h1>Your Grade Is Not Bad</h1>

            @else
                <h1>Your Grade Is So Bad</h1>
            @endif
        <a href="/" class="btn btn-primary">Go Back Home</a>
        </div>
        <div class="card-footer text-muted">
            @if($grd > 85)
                Good Job Maintain Your Performance

            @elseif($grd <= 85 && $grd >= 50)
                Nicely Done Keep Learning

            @else
                Study More You Can Do It!
            @endif
        </div>
    </div>
</div>


{{-- @if($grd > 85)
    <h1>Your grade is excellent</h1>

@elseif($grd <= 85 && $grd >= 50)
    <h1>Your grade is not bad</h1>

@else
    <h1>Your grade is so bad</h1>
@endif

<a href="/">Go Back Home</a> --}}

@endsection
