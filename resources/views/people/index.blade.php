@extends('layouts.app')

@section('content')
<div class='container-fluid d-flex justify-content-center'>
    <div>
        <form action="people/create" method="GET">
        <h1 class='row' style="color:darkslategrey;">Welcome to Trace-Info</h1>
        <div class='d-flex justify-content-center'>
        <button type="submit" class='row text-danger'>Add People</button>
        </div>
        </form>
    </div>
</div>
@endsection