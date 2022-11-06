@extends('layouts.main')

@section('title', 'Home')

@section('container')

<div class="d-flex justify-content-center align-items-center" style="height: 85vh">
    <div class="card bg-light" style="width: 25rem;">
        <div class="card-body">
            <h4>Grade Scale HomePage</h4>
            <p>Insert your grade point and click submit button</p>
            <form class="d-flex gap-2 align-items-center " action="/result" method="POST">
                @csrf

                <input type="number" name="grd" id="grd">
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
