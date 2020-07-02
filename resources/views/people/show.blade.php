@extends('layouts.app')

@section('content')
<div class='container-fluid'>
    <div class="row  d-flex justify-content-center">
        <div class="col-md-4 col-sm-12">
            <h1 class='d-flex justify-content-center'> Trace-Info </h1>
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
                <div class='mt-1'>
                    <button type="btn submit">Edit Profile</button>
                </div>
            </form>
            <div class='d-flex justify-content-center'>
                <form action="{{ action('PeopleController@destroy', $person['id']) }}" , method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" value="DELETE">
                    <button type="submit" name="delete" class='btn btn-danger'>Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection