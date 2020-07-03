@extends('layouts.app')

@section('content')
<div class='container-fluid'>
    <h3 class='d-flex justify-content-center font-weight-bold'> Trace-Info </h3>
    <h2 class='d-flex justify-content-center'> Registered People </h2>

    <div class="row  d-flex justify-content-center mt-8">

        <div class="form-row col-md-6 col-sm-12 p-5">

            @foreach($data as $person)

            <div class="form-group col-md-6">
                <h6 class='p-3'><a href="{{url('/people/'.$person->id)}}"> {{ $person->id }} - {{ $person->first_name }}
                        {{
                        $person->last_name }}</a></h6>
            </div>

            <div class="form-group col-md-2 d-flex justify-content-center">
                <form action="{{url('/people/'.$person->id)}}" method="GET">
                    <button type="btn submit" class="btn btn-info shadow-lg">View Profile</button>
                </form>
            </div>

            <div class="form-group col-md-2 d-flex justify-content-center">
                    @include('people.modals.edit')
            </div>

            <div class=" form-group col-md-2 d-flex justify-content-center">
                    @include('people.modals.delete')
            </div>

            @endforeach
            <div class="col-md-12 col-sm-12 mt-4 d-flex justify-content-center">
                   @include('people.modals.add')
            </div>
        </div>
    </div>
</div>


@endsection