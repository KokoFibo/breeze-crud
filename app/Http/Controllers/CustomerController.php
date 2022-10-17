<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CustomerController extends Controller
{

    public function index()
    {


        return Inertia::render('customer/Index', [
            'customers' => Customer::paginate(5)
        ]);
    }


    public function create()
    {
        return Inertia::render('customer/Create');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'nama' => ['required'],
            'email' => ['required', 'email']
        ]);

        Customer::create([

            'nama' => $request->nama,
            'email' => $request->email

        ]);
        return redirect()->route('customer');
    }





    public function edit($id)


    {

        $customer = Customer::find($id);

        return Inertia::render('customer/Edit', compact('customer'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => ['required'],
            'email' => ['required', 'email']
        ]);
        $customer = Customer::find($id);
        $customer->nama = $request->nama;
        $customer->email = $request->email;
        $customer->save();

        return redirect()->route('customer');
    }


    public function destroy($id)
    {

        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customer');
    }
}
