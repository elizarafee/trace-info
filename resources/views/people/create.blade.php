@extends('layouts.app')

@section('content')
<div class='container-fluid'>
    <div class="row  d-flex justify-content-center">
        <div class="col-md-8 col-sm-12">
            <div>
                <h3 class='d-flex justify-content-center font-weight-bold'> Trace-Info </h3>
                <h2 class='d-flex justify-content-center'> Create your profile </h2>
            </div>
            <form action="/trace-info/public/people" class='p-4' method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>First Name</label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                            name="first_name" id="inputFirstName">

                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label>Last Name</label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                            name="last_name" id="inputLastName">

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
                            id="inputEmail4">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
<!-- 
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control @error('address_line_1') is-invalid @enderror"
                            id="inputAddress" name="address_line_1" placeholder="23, 1st floor">

                        @error('address_line_1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputAddress">Street</label>
                        <input type="text" class="form-control @error('address_line_2') is-invalid @enderror"
                            id="inputAddress2" name="address_line_2" placeholder="Kajalshah">

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
                            placeholder="Sylhet" id="inputCity">

                        @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div> -->

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="inputPhone">Phone Number</label>
                        <input type="text" class="form-control  @error('phone') is-invalid @enderror" name="phone"
                            id="inputPhone">

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class='d-flex justify-content-center'>
                    <button type="submit" class="btn btn-primary shadow-lg">Add People</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection