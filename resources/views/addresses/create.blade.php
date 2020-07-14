@extends('layouts.app')

@section('content')

<div class='container-fluid'>
    <div class="row  d-flex justify-content-center">
        <div class="col-md-8 col-sm-12">
            <form action="{{ url('/addresses/') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Street : </label>
                        <input type="text" class="form-control" name="address_line_1" id="inputEmail4" placeholder="">
                    </div>
                    <div class="form-group col-md-12">
                        <label>State : </label>
                        <input type="text" class="form-control" name="address_line_2" id="inputAddress" placeholder="">
                    </div>
                    <div class="form-group col-md-12">
                        <label>City : </label>
                        <input type="text" class="form-control" name="city" id="inputAddress2" placeholder="">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Country : </label>
                        <input type="text" class="form-control" name="country" id="inputCity" placeholder="">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Postcode : </label>
                        <input type="text" class="form-control" name="postcode" id="inputCity" placeholder="">
                    </div>
                </div>
                <button type="submit">Add Address</button>
            </form>
        </div>
    </div>
</div>

@endsection