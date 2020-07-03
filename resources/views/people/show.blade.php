@extends('layouts.app')

@section('content')
<div class='container-fluid'>
    <div class="row  d-flex justify-content-center">
        <div class="col-md-4 col-sm-12">
            <h3 class='d-flex justify-content-center font-weight-bold'> Trace-Info </h3>
            <h2 class='d-flex justify-content-center'> Welcome! {{ $person->first_name}} {{ $person->last_name }} </h2>

            <form class='form-row d-flex justify-content-center' action="{{url('people/'.$person->id.'/edit')}}"
                method="GET">
                <div class='col-md-12 col-sm-12'>
                    <ul class="list-group mt-2">
                        <li class="list-group-item">Name : {{ $person->first_name }} {{ $person->last_name }}</li>
                        <li class="list-group-item">Address : {{ $person->address_line_1 }} {{ $person->address_line_2
                            }} {{ $person->city }}</li>
                        <li class="list-group-item">Email : {{ $person->email }} </li>
                        <li class="list-group-item">Phone : {{ $person->phone }}</li>
                    </ul>
                </div>
            </form>
            <div class='d-flex justify-content-center mt-2'>
                @include('people.modals.edit')
            </div>
            <div class='d-flex justify-content-center mt-1'>
                @include('people.modals.delete')
            </div>
            <div class='d-flex justify-content-center mt-3'>
                <div class='col-md-8 d-flex text-center'>
                <h6 class='text-muted'>If you want to see all of the registered people <a href="{{ url('/people') }}">Click here</a></h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection