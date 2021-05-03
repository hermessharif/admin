<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:insurance-list|insurance-create|insurance-edit|insurance-delete', ['only' => ['index','show']]);
        $this->middleware('permission:insurance-create', ['only' => ['create','store']]);
        $this->middleware('permission:insurance-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:insurance-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insurances = Insurance::latest()->paginate(5);
        return view('insurances.index',compact('insurances'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insurances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        Insurance::create($request->all());

        return redirect()->route('insurances.index')
            ->with('success','Insurance created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function show(Insurance $insurance)
    {
        return view('insurances.show',compact('insurance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Insurance  Insurance
     * @return \Illuminate\Http\Response
     */
    public function edit(Insurance $insurance)
    {
        return view('insurances.edit',compact('insurance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insurance $insurance)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $insurance->update($request->all());

        return redirect()->route('insurances.index')
            ->with('success','Insurance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insurance $insurance)
    {
        $insurance->delete();

        return redirect()->route('insurances.index')
            ->with('success','Insurance deleted successfully');
    }
}
