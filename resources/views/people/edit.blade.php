
@extends('layouts.app')

@section('content')
<div class='container-fluid'>
    <div class="row  d-flex justify-content-center">
        <div class="col-md-8 col-sm-12">
            <form action="{{url('/people/'.$person->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div>
                    <h1 class='d-flex justify-content-center'> Trace-Info </h1>
                    <h1 class='d-flex justify-content-center'> Update your profile </h1>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>First Name</label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                            name="first_name" id="inputFirstName" @if(old('first_name')) value="{{ old('first_name') }}"
                            @elseif(isset($person->first_name)) value="{{ $person->first_name }}" @endif>



                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label>Last Name</label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                            name="last_name" id="inputLastName" @if(old('last_name')) value="{{ old('last_name') }}"
                            @elseif(isset($person->last_name)) value="{{ $person->last_name }}" @endif>


                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="inputEmail4" @if(old('email')) value="{{ old('email') }}" @elseif(isset($person->email))
                        value="{{ $person->email }}" @endif>


                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control @error('address_line_1') is-invalid @enderror"
                            id="inputAddress" name="address_line_1" placeholder="23, 1st floor"
                            @if(old('address_line_1')) value="{{ old('address_line_1') }}"
                            @elseif(isset($person->address_line_1)) value="{{ $person->address_line_1 }}" @endif>

                        @error('address_line_1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputAddress">Street</label>
                        <input type="text" class="form-control @error('address_line_2') is-invalid @enderror"
                            id="inputAddress2" name="address_line_2" placeholder="Kajalshah" @if(old('address_line_2'))
                            value="{{ old('address_line_2') }}" @elseif(isset($person->address_line_2)) value="{{
                        $person->address_line_2 }}" @endif>

                        @error('address_line_2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control  @error('city') is-invalid @enderror" name="city"
                            placeholder="Sylhet" id="inputCity" @if(old('city')) value="{{ old('city') }}"
                            @elseif(isset($person->city)) value="{{ $person->city }}" @endif>

                        @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="inputPhone">Phone Number</label>
                        <input type="text" class="form-control  @error('phone') is-invalid @enderror" name="phone"
                            id="inputPhone" @if(old('phone')) value="{{ old('phone') }}" @elseif(isset($person->phone))
                        value="{{ $person->phone }}" @endif>

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection