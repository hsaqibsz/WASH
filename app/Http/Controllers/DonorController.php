<?php

namespace App\Http\Controllers;

use App\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donors = Donor::all();

        return view('donor.index', compact('donors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donor.addNew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donor = new Donor;

        $donor->name = $request->name;
        $donor->save();

        return redirect(route('donor.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show(Donor $donor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donor = Donor::where('id', $id)->first();

        return view('donor.edit', compact('donor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $donor = Donor::where('id', $id)->first();
        $donor->name = $request->name;
        $donor->save();

        return redirect(route('donor.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donor = Donor::where('id', $id)->first();
        $donor->delete();
        return redirect()->back();
    }
}
