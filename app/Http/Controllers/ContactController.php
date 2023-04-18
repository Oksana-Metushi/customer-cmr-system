<?php

namespace App\Http\Controllers;
use App\Models\Contacts;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact = Contacts::all();
        return view('pages.contact.index', compact('contact'));
    }

    public function create(){
        $customer = Customer::get();
        return view('pages.contact.create', compact('customer'));
    }

    public function store(Request $request){
        $contact = new Contacts;
        $contact->fName = $request->input('fName');
        $contact->lName = $request->input('lName');
        $contact->telephone = $request->input('telephone');
        $contact->email = $request->input('email');
        $contact->customer_id = $request->input('customer');
  
        $contact->save();
  
        return redirect('contact')->with('status', 'Contact added succesfully!');
    }

    public function edit($id){
        $customer = Customer::get();
        $contact = Contacts::find($id);
        return view('pages.contact.edit', compact('contact', 'customer'));
    }
    
    public function update(Request $request, $id){
        $contact = Contacts::find($id);
        $contact->fName = $request->input('fName');
        $contact->lName = $request->input('lName');
        $contact->telephone = $request->input('telephone');
        $contact->email = $request->input('email');
        $contact->customer_id = $request->input('customer');
  
        $contact->update();
  
        return redirect('contact')->with('status', 'Contact updated succesfully!');
    }

    public function delete($id){
        $contact = Contacts::find($id);
        $contact->delete();
        return redirect('contact')->with('status', 'Contact data deleted');
    }
}
