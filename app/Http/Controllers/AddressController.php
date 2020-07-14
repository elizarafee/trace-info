<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;

use Illuminate\Support\Facades\DB;
use App\Address;
use App\People;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all; 


class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            // 'addresses.id as id',
            'people.id as people_id',
            'addresses.first_name as first_name',
            'addresses.last_name as last_name',
            'people.email as email',
            'people.phone as email',
            'addresses.address_line_1',
            'addresses.address_line_2',
            'addresses.city',
            'addresses.country',
            'addresses.postcode',
       );

        $address = Address::join('people', 'people.id', 'addresses.people_id')
        ->select($data);
        
        return view('addresses.index', ['address' => $address]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAddressRequest $request)
    {
        $people = People::first();

         $data = array(
            'people_id' => $people->id,
            'address_line_1' => $request->get('address_line_1'),
            'address_line_2' => $request->get('address_line_2'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'postcode' => $request->get('postcode'),
            // 'lng' => $request->get('lng'),
            // 'lat' => $request->get('lat'),
        );
        $address = Address::create($data);

        if ($address) {
            return redirect('/addresses/'.$address->id)->with('success', 'Address successfully Added.');
        }

        return redirect()->back()->with('error', 'Failed to add address. Please try again.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  $address = Address::find($id);
        
         $data = array(
            // 'addresses_id as id',
            'people.id as people_id',
            'addresses.first_name as first_name',
            'addresses.last_name as last_name',
            'people.email as email',
            'people.phone as email',
            'addresses.address_line_1',
            'addresses.address_line_2',
            'addresses.city',
            'addresses.country',
            'addresses.postcode',
       );

        $address = Address::join('people', 'people.id', 'addresses.people_id')
        ->select($data);

        return view('addresses.show', [ 'address' => $address ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $address = Address::find($id);
        return view('addresses.edit', [ 'address' => $address ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAddressRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
