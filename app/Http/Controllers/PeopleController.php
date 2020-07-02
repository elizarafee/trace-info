<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePeopleRequest;

use Illuminate\Support\Facades\DB;
use App\People;

use function GuzzleHttp\Promise\all; 

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = People::all();
        return view('people.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('people.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePeopleRequest $request)
    {
        // print_r($request->input());
        $data = array(
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'address_line_1' => $request->get('address_line_1'),
            'address_line_2' => $request->get('address_line_2'),
            'city' => $request->get('city'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
        );

        $person = People::create($data);

        if ($person) {
            return redirect('/people/'.$person->id)->with('success', 'Profile successfully created.');
        }

        return redirect()->back()->with('error', 'Failed to create profile. Please try again.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = People::find($id);
        return view('people.show', ['person' => $person]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = People::find($id);
        return view('people.edit', ['person' => $person]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $person_id)
    {
        $data = array(
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'address_line_1' => $request->get('address_line_1'),
                'address_line_2' => $request->get('address_line_2'),
                'city' => $request->get('city'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
            );
        $update = People::where('id', $person_id)->update($data);
        $person = People::find($person_id);

        if ($update) {
            return view('people.update', ['person'=>$person])->with('success', 'Profile successfully updated.');
        }

        return redirect()->back()->with('error', 'Failed to update profile. Please try again.');
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
