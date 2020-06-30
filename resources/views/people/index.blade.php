@extends('layouts.app')

@section('content')
<div class='container-fluid'>
    <div class="row  d-flex justify-content-center">
        <div class="col-md-8 col-sm-12">
            <h1 class='d-flex justify-content-center'> Trace-Info </h1>
            <h1 class='d-flex justify-content-center'> Registered People </h1>
            <form action="people/create" method="GET">
                @foreach($data as $person)
                <li>
                    <a href="{{url('/people/'.$person->id)}}" > {{ $person->id }} : {{ $person->first_name }} {{ $person->last_name }}</a>
                </li>
                @endforeach
                <div class='d-flex justify-content-center'>
                    <button type="submit" class='row text-danger'>Add People</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection