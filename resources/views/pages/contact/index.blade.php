@extends('layouts.app')

@section('content')
<div class="pt-10 mx-auto flex justify-between mb-6">
    <div class="text-4xl font-bold text-white text-center">Contacts</div>
    <div>
        @if(session('status'))
        {{ session('status')}}
        @endif
        <a href="{{url('add-contact')}}"><button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Add new
            </button></a>
    </div>
</div>
<div class="overflow-x-auto rounded-lg border bg-white border-gray-200 shadow-md mx-auto p-2">
    <table class="w-full border-collapse  text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Id</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Customer</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">First Name</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Last Name</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Telephone</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Email</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Edit</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Delete</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            @foreach ($contact as $contactdata)
            <tr class="hover:bg-gray-50">
                <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                    <div class="text-sm">
                        <div class="text-gray-400">{{ $contactdata->id }}</div>
                    </div>
                </th>
                <td class="px-6 py-4">{{ $contactdata->customer->name }}</td>
                <td class="px-6 py-4">{{ $contactdata->fName }}</td>
                <td class="px-6 py-4">{{ $contactdata->lName }}</td>
                <td class="px-6 py-4">{{ $contactdata->telephone }}</td>
                <td class="px-6 py-4">{{ $contactdata->email }}</td>
                <td class="px-6 py-4"><a href="{{ url('edit-contact/'.$contactdata->id) }}">Edit</a></td>
                <td class="px-6 py-4"><a href="{{ url('delete-contact/'.$contactdata->id) }}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection