@extends('layouts.app')

@section('content')
<div class='container-fluid'>
    <div class="row  d-flex justify-content-center">
        <div class="col-md-8 col-sm-12">
        <form action="/trace-info/public/people" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="first_name" id="inputFirstName">
                </div>
                <div class="form-group col-md-6">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="inputLastName">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" name="email" id="inputEmail4">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="address_line_1"
                        placeholder="23, 1st floor">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress2">Street</label>
                    <input type="text" class="form-control" id="inputStreet" name="address_line_2" placeholder="Kajalshah">
                </div>
            </div>
            <div class="row">
            <div class="form-group col-md-12">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" name="city" placeholder="Sylhet" id="inputCity">
            </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="inputPhone">Phone Number</label>
                    <input type="text" class="form-control" name="phone" id="inputPhone">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add People</button>
        </form>
        </div>
    </div>
</div>
@endsection