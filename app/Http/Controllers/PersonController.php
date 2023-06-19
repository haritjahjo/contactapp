<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $people = Person::all();
        return view('person.index', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $businesses = Business::all();
        return view('person.create', compact('businesses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'nullable|email',

        ]);

        $person = new Person();
        $person->firstname = $request->input('firstname');
        $person->lastname = $request->input('lastname');
        $person->email = $request->input('email');
        $person->phone = $request->input('phone');
        $person->business_id = $request->input('business_id');
        $person->save();

        return redirect(route('person.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        $businesses = Business::all();
        return view('person.edit', compact('person', 'businesses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'nullable|email',

        ]);

        
            $person->firstname = $request->input('firstname');
            $person->lastname = $request->input('lastname');
            $person->email = $request->input('email');
            $person->phone = $request->input('phone');
            $person->business_id = $request->input('business_id');
            $person->save();


        return redirect(route('person.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        $person->delete();
        return redirect(route('person.index'));
    }
}
