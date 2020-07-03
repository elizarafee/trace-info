@extends('layouts.app')

@section('content')
<div class='container-fluid'>
    <div class="row  d-flex justify-content-center">
        <div class="col-md-4 col-sm-12">
            <h3 class='d-flex justify-content-center font-weight-bold'> Trace-Info </h3>
            <h2 class='d-flex justify-content-center'> Congratulations! {{ $person->first_name}} {{ $person->last_name
                }} </h2>
            <h4 class='d-flex justify-content-center'> Profile Updated </h4>
            <div class='p-4'>
                <form class='form-row d-flex justify-content-center'>
                    <div class='col-md-12 col-sm-12'>
                        <ul class="list-group mt-2">
                            <li class="list-group-item">Name : {{ $person->first_name }} {{ $person->last_name }}</li>
                            <li class="list-group-item">Address : {{ $person->address_line_1 }} {{
                                $person->address_line_2
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
            </div>
        </div>
    </div>
</div>
@endsection