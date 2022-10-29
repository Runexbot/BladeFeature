@extends('layouts.main')

@section('title', 'Home')

@section('container')
<h5>Grade Scale HomePage</h5>

<form action="/result" method="POST">
    @csrf
    <p>Insert your grade point and click submit button</p>
    <input type="number" name="grd" id="grd">
    <button type="submit">Submit</button>

</form>
@endsection
