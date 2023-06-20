<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusinessRequest;
use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $businesses = Business::all();
        return view('business.index', compact('businesses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('business.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BusinessRequest $request)
    {
        $business = Business::create($request->validated());

        /* $business->business_name = $request->input('business_name');            
        $business->contact_email = $request->input('contact_email');
        $business->save(); */
        return redirect(route('business.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Business $business)
    {
        return view('business.detail', compact('business'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Business $business)
    {
        return view('business.edit', compact('business'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BusinessRequest $request, Business $business)
    {
        $business->update($request->validated());

        /* $business->business_name = $request->input('business_name');            
        $business->contact_email = $request->input('contact_email');
        $business->save(); */
        return redirect(route('business.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Business $business)
    {
        $business->delete();
        return redirect(route('business.index'));
    }
}
