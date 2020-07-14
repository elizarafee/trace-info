@extends('layouts.app')

@section('content')
<div class='container-fluid'>
    <div class="row  d-flex justify-content-center">
        <div class="col-md-8 col-sm-12">
            <form action="{{ url('/addresses/create') }}" method="GET">
                <div class="form-row">
                    @foreach($address as $a)
                    <div class="form-group col-md-6">
                        <h6 class='p-3'><a href="{{url('/people/'.$person->id)}}"> {{ $a->id }} - {{
                                $a->city }} {{ $a->country }}</a>
                        </h6>
                    </div>
                    @endforeach
                </div>
                <div class='row  d-flex justify-content-center'>
                <button type="submit">New Address</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection