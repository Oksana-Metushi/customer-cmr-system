@extends('layouts.app')

@section('content')

<div class="pt-10 mx-auto flex flex-inline justify-between mb-6 px-4 items-center">
    <div class="md:text-3xl text-xl text-purple-600 font-semibold text-center mt-6">Customers</div>
    <div>
        @if(session('status'))
        {{ session('status')}}
        @endif
        <a href="{{url('add-customer')}}"><button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Add new
            </button></a>
    </div>
</div>
@include('layouts.inc.customers-tb')
<div class="mx-auto mt-4">{{$customer->links()}}</div>


@endsection