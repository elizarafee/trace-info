@extends('layouts.app')

@section('content')
<div class='container-fluid'>
    <h3 class='d-flex justify-content-center font-weight-bold'> Trace-Info </h3>
        <h2 class='d-flex justify-content-center'> Registered People </h2>

        <div class="row  d-flex justify-content-center mt-8">

            <div class="form-row col-md-6 col-sm-12 p-5">

                @foreach($data as $person)

                <div class="form-group col-md-6">
                    <a href="{{url('/people/'.$person->id)}}"> {{ $person->id }} - {{ $person->first_name }} {{
                        $person->last_name }}</a>
                </div>

                <div class="form-group col-md-3 d-flex justify-content-center">
                    <form action="{{url('people/'.$person->id.'/edit')}}" method="GET">
                        <button type="btn submit" class="btn btn-warning">Edit Profile</button>
                    </form>
                </div>

                <div class=" form-group col-md-3 d-flex justify-content-center">
                    <form action="{{ action('PeopleController@destroy', $person['id']) }}" , method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" value="DELETE">
                        <button type="submit" name="delete" class='btn btn-danger'>Delete profile</button>
                    </form>
                </div>

                @endforeach
                <div class="col-md-12 col-sm-12 mt-4">
                    <div class='d-flex justify-content-center'>
                        <form action="people/create" method="GET">
                            <button type="submit" class='btn btn-secondary justify-content-end'>Add People</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection