@extends('layouts.app')

@section('content')
<div class='container-fluid'>
<div class='form-row d-flex justify-content-center'>
    <form action="/trace-info/public/people" method="POST">
    @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>First Name</label>
                <input type="text" class="form-control" name="first_name" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
                <label>Last Name</label>
                <input type="text" class="form-control" name="last_name" id="inputEmail4">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail4">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="23, 1st floor">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Street</label>
            <input type="text" class="form-control" id="inputAddress2" name="street"
                placeholder="Kajalshah">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" name="city" placeholder="Sylhet" id="inputCity">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Phone Number</label>
                <input type="text" class="form-control" name="phone" id="inputCity">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add People</button>
    </form>
    </div>
</div>
@endsection