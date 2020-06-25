@extends('layouts.app')

@section('content')
<div class='container-fluid d-flex justify-content-center'>
    <div>
        <form action="people/create" method="GET">
       <h1 class='row' style="color:darkslategrey;">INDEX</h1>
       <button type="submit" class='row text-danger'>click</button>
        </form>
    </div>
</div>
@endsection