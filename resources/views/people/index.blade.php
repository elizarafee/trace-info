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
                <form action="{{url('people/'.$person->id.'/edit')}}" method="GET">
                    <button type="btn submit" class="btn btn-warning shadow-lg">Edit Profile</button>
                </form>
            </div>

            <div class=" form-group col-md-2 d-flex justify-content-center">

                <button type="button" name="delete" class='btn btn-danger shadow-lg' data-toggle="modal"
                        data-target="#delete-{{$person->id}}-people">Delete profile</button>

                <form action="{{ url('/people/'. $person->id) }}" , method="POST">
                    @csrf
                    @method('DELETE')
                    
                    <!-- Modal -->
                    <div class="modal fade" id="delete-{{$person->id}}-people" tabindex="-1" role="dialog" aria-labelledby="delete-ModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="delete-ModalLabel">Delete</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure to delete this profile?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

            @endforeach
            <div class="col-md-12 col-sm-12 mt-4">
                <div class='d-flex justify-content-center'>
                    <form action="people/create" method="GET">
                        <button type="submit" class='btn btn-secondary justify-content-end shadow-lg'>Add
                            People</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection