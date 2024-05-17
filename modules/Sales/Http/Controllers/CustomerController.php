<?php

namespace Modules\Sales\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Sales\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $customers = Customer::all();

        return view('sales::customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('sales::customer.create');
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
            'nit' => 'required',
        ]);

        $newCustomer = new Customer();
        $newCustomer->name = $request->name;
        $newCustomer->address = $request->address;
        $newCustomer->nit = $request->nit;
        $newCustomer->created_by = auth()->user()->id;
        $newCustomer->save();

        return redirect()->route('sales.customer.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('sales::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);

        return view('sales::customer.edit', compact('customer'));
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
            'nit' => 'required',
        ]);

        $newCustomer = Customer::find($id);
        $newCustomer->name = $request->name;
        $newCustomer->address = $request->address;
        $newCustomer->nit = $request->nit;
        $newCustomer->created_by = auth()->user()->id;
        $newCustomer->save();

        return redirect()->route('sales.customer.index');
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
