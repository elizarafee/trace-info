@extends('layouts.app')

@section('content')
<div class='container-fluid'>
    <div class="row  d-flex justify-content-center">
        <div class="col-md-8 col-sm-12">
            <form action="{{ url('/addresses/'.$address->id.'/edit') }}" method="GET">
                <div class='col-md-12 col-sm-12'>
                    <ul class="list-group mt-2">
                        <li class="list-group-item">Name : {{ $address->first_name }} {{ $address->last_name }}</li>
                        <!-- <li class="list-group-item">Address : {{ $person->address_line_1 }} {{ $person->address_line_2
                            }} {{ $person->city }}</li> -->
                        <li class="list-group-item">Email : {{ $address->email }} </li>
                        <li class="list-group-item">Phone : {{ $address->phone }}</li>
                    </ul>
                </div>
                <button type="submit">Edit Profile</button>
                <form action="{{ url('/addresses/') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete Profile</button>
                </form>
            </form>
        </div>
    </div>
</div>

@endsection