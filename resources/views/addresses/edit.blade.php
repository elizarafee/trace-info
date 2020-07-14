@extends('layouts.app')

@section('content')
<div class='container-fluid'>
    <div class="row  d-flex justify-content-center">
        <div class="col-md-8 col-sm-12">
            <form action="{{ url('/addresses'.$address->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Street : </label>
                        <input type="text" class="form-control" name="address_line_1" id="inputEmail4" placeholder=""
                            @if(old('address_line_1')) value="{{ old('address_line_1') }}"
                            @elseif(isset($person->address_line_1)) value="{{ $person->address_line_1 }}" @endif>
                    </div>
                    <div class="form-group col-md-12">
                        <label>State : </label>
                        <input type="text" class="form-control" name="address_line_2" id="inputAddress" placeholder=""
                            @if(old('address_line_2')) value="{{ old('address_line_2') }}"
                            @elseif(isset($person->address_line_2)) value="{{ $person->address_line_2 }}" @endif>
                    </div>
                    <div class="form-group col-md-12">
                        <label>City : </label>
                        <input type="text" class="form-control" name="city" id="inputAddress2" placeholder=""
                            @if(old('city')) value="{{ old('city') }}" @elseif(isset($person->city)) value="{{
                        $person->city }}" @endif>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Country : </label>
                        <input type="text" class="form-control" name="country" id="inputCity" placeholder=""
                            @if(old('country')) value="{{ old('country') }}" @elseif(isset($person->country)) value="{{
                        $person->country }}" @endif>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Postcode : </label>
                        <input type="text" class="form-control" name="postcode" id="inputCity" placeholder=""
                            @if(old('postcode')) value="{{ old('postcode') }}" @elseif(isset($person->postcode))
                        value="{{ $person->postcode }}" @endif>
                    </div>
                </div>
                <button type="submit">Edit</button>
            </form>
        </div>
    </div>
</div>

@endsection