<?php

namespace Modules\Hospitaler\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Hospitaler\Models\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $patients = Patient::all();

        return view('hospitaler::patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('hospitaler::patient.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'code' => 'required',
        ]);

        $newPatient = new Patient();
        $newPatient->name = $request->name;
        $newPatient->address = $request->address;
        $newPatient->phone = $request->phone;
        $newPatient->code = $request->code;
        $newPatient->created_by = auth()->user()->id;
        $newPatient->save();

        return redirect()->route('hospitaler.patient.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('hospitaler::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);

        return view('hospitaler::patient.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'code' => 'required',
        ]);

        $newPatient = Patient::find($id);
        $newPatient->name = $request->name;
        $newPatient->address = $request->address;
        $newPatient->phone = $request->phone;
        $newPatient->code = $request->code;
        $newPatient->updated_by = auth()->user()->id;
        $newPatient->update();

        return redirect()->route('hospitaler.patient.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
