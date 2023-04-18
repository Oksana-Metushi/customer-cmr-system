@extends('layouts.app')

@section('content')

<div class="w-fit mt-16  mx-auto">
    <div class="w-full rounded-lg shadow-2xl bg-white opacity-70">

        <div class="p-4 md:p-12 text-center lg:text-center">
            <h1 class="md:text-3xl text-xl text-violet-400 font-semibold capitalize">Welcome {{ Auth::user()->name }} !</h1>
            <div class="flex flex-col pt-12 pb-8 ">
                <a href="{{ url('customer') }}"><button
                        class="mx-auto text-xl hover:underline bg-white text-gray-800 font-semibold rounded-full my-4 lg:mt-0 py-6 px-10 shadow-2xl shadow-violet-500 opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Coustomers
                    </button></a>
                <a href="{{ url('contact') }}"><button
                        class="mx-auto text-xl hover:underline bg-white text-gray-800 font-semibold rounded-full my-4 lg:mt-0 py-6 px-10 shadow-2xl shadow-violet-500 opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Contacts
                    </button></a>
            </div>
        </div>
    </div>
</div>
@endsection