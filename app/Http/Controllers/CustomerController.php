<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Contacts;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customer = Customer::paginate(2);
        return view('pages.customer.index', compact('customer'));
    }

    public function create(){
        return view('pages.customer.create');
    }

    public function store(Request $request){
        $customer = new Customer;
        //dd( $customer->name)
        $customer->name = $request->input('name');
        $customer->address = $request->input('address');
        $customer->postal_code = $request->input('postal_code');
        $customer->place = $request->input('place');
        $customer->telephone = $request->input('telephone');
        $customer->email = $request->input('email');
        $customer->save();


        return redirect('customer')->with('status', 'Customer added succesfully!');
    }

    public function edit($id){
        $customer = Customer::find($id);
        return view('pages.customer.edit', compact('customer'));
    }

    public function update(Request $request, $id){
        $customer = Customer::find($id);
        $customer->name = $request->input('name');
        $customer->address = $request->input('address');
        $customer->postal_code = $request->input('postal_code');
        $customer->place = $request->input('place');
        $customer->telephone = $request->input('telephone');
        $customer->email = $request->input('email');
        $customer->update();

        return redirect('customer')->with('status', 'Customer data updated');
    }

    public function delete($id){
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('customer')->with('status', 'Customer data deleted');
    }

    public function show($id){
        $customers = Customer::where('id', $id)->first();
        if($customers){
             $contact = Contacts::where('customer_id', $customers->id)->get();
             return view('pages.customer.show', compact('customers', 'contact'));

        }
        else{
            return view('pages.customer.index'); 
        }
       
     }

     public function search(){
        $search_input = $_GET['search'];
        $customers = Customer::where('name', 'LIKE', '%'.$search_input.'%')->get();

        return view('pages.customer.search', compact('customers'));
     }
}
