@extends('layouts.app')

@section('content')

<div class="py-4">
    <a href="{{ url('contact') }}" class="inline-block text-gray-600 text-xl font-semibold no-underline hover:text-purple-600 hover:text-underline py-2 px-4">Back</a>
</div>
<div class="md:text-3xl text-xl text-purple-600 font-semibold text-center mb-10">Edit Contact</div>

<main class="bg-white rounded-lg shadow-2xl w-full p-6">
    <form action="{{url('update-contact/'.$contact->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-6 pt-3 rounded overflow-hidden">
            <label class="block text-purple-400 text-md font-semibold mb-2 ml-3">Customer Name</label>
            <select name="customer" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" placeholder="First Name" class="border-2">
                @foreach($customer as $customercon)
                <option value="{{ $customercon->id }}" {{$contact->customer_id == $customercon->id ? 'selected':''}}>{{ $customercon->name }}</option>
                @endforeach
                <select>
        </div>
        <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
            <div>
                <div class="mb-6 pt-3 rounded ">
                    <label class="block text-purple-400 text-md font-semibold mb-2 ml-3" for="email">First Name</label>
                    <input type="text" name="fName" value="{{$contact->fName}}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" placeholder="Full name" class="border-2" autocomplete="off">
                </div>
                <div class="mb-6 pt-3 rounded ">
                    <label class="block text-purple-400 text-md font-semibold mb-2 ml-3" for="email">Adress</label>
                    <input type="text" name="lName" value="{{$contact->lName}}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" placeholder="Adress" class="border-2" autocomplete="off">
                </div>
            </div>
            <div>
                <div class="mb-6 pt-3 rounded ">
                    <label class="block text-purple-400 text-md font-semibold mb-2 ml-3" for="email">Telephone</label>
                    <input type="tel" name="telephone" value="{{$contact->telephone}}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" placeholder="Telephone" class="border-2" autocomplete="off">
                </div>
                <div class="mb-6 pt-3 rounded ">
                    <label class="block text-purple-400 text-md font-semibold mb-2 ml-3" for="email">Email</label>
                    <input type="email" name="email" value="{{$contact->email}}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" placeholder="Email" class="border-2" autocomplete="off">
                </div>
            </div>
        </div>
        <button type="submit" name="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 mx-auto p-4">Update
            contact</button>
    </form>
</main>

@endsection