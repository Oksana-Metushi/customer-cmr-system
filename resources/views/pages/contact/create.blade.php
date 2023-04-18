@extends('layouts.app')

@section('content')
<div class="py-4">
    <a href="{{ url('contact') }}" class="text-xl font-semibold text-black text-center">Back</a>
</div>
<div class="text-4xl font-semibold text-black text-center pb-6">Add Contact</div>
<main class="bg-white rounded-lg shadow-2xl w-full p-6">
    <form action="{{url('store-contact')}}" method="POST">
        @csrf
        <div class="mb-6 pt-3 rounded overflow-hidden">
            <label class="block text-purple-400 text-md font-semibold mb-2 ml-3">Customer Name</label>
            <select name="customer"
                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3"
                placeholder="First Name" class="border-2">
                @foreach($customer as $customercon)
                <option value="{{ $customercon->id }}">{{ $customercon->name }}</option>
                @endforeach
                <select>
        </div>

        <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
            <div>
                <div class="mb-6 pt-3 rounded ">
                    <label class="block text-purple-400 text-md font-semibold mb-2 ml-3" for="email">First Name</label>
                    <input type="text" name="fName"
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3"
                        placeholder="Full name" class="border-2" autocomplete="off">
                </div>
                <div class="mb-6 pt-3 rounded ">
                    <label class="block text-purple-400 text-md font-semibold mb-2 ml-3" for="email">Last Name</label>
                    <input type="text" name="lName"
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3"
                        placeholder="Adress" class="border-2" autocomplete="off">
                </div>
            </div>
            <div>
                <div class="mb-6 pt-3 rounded ">
                    <label class="block text-purple-400 text-md font-semibold mb-2 ml-3" for="email">Telephone</label>
                    <input type="tel" name="telephone"
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3"
                        placeholder="Telephone" class="border-2" autocomplete="off">
                </div>
                <div class="mb-6 pt-3 rounded ">
                    <label class="block text-purple-400 text-md font-semibold mb-2 ml-3" for="email">Email</label>
                    <input type="email" name="email"
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3"
                        placeholder="Email" class="border-2" autocomplete="off">
                </div>
            </div>
        </div>
        <button type="submit" name="submit"
            class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 mx-auto p-4">Add
            contact</button>
    </form>
</main>



@endsection