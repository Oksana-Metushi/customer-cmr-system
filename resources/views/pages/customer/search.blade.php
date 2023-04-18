@extends('layouts.app')

@section('content')
<div class="py-4">
    <a href="{{ url('customer') }}" class="inline-block text-gray-600 text-xl font-semibold no-underline hover:text-purple-600 hover:text-underline py-2 px-4">Back</a>
</div>
<div class="md:text-3xl text-xl text-purple-600 font-semibold text-center mb-10">Customer</div>
<div class="overflow-x-auto rounded-lg border bg-white border-gray-200 shadow-md mx-auto p-2">
    <table class="w-full border-collapse  text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Id</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Address</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Postalcode</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Place</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Telephone</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Email</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Contacts</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Edit</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Delete</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            @foreach ($customers as $customerdata)
            <tr class="hover:bg-gray-50">
                <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                    <div class="text-sm">
                        <div class="text-gray-400">{{ $customerdata->id }}</div>
                    </div>
                </th>
                <td class="px-6 py-4">{{ $customerdata->name }}</td>
                <td class="px-6 py-4">{{ $customerdata->address }}</td>
                <td class="px-6 py-4">{{ $customerdata->postal_code }}</td>
                <td class="px-6 py-4">{{ $customerdata->place }}</td>
                <td class="px-6 py-4">{{ $customerdata->telephone }}</td>
                <td class="px-6 py-4">{{ $customerdata->email }}</td>
                <td class="px-6 py-4"><a href="{{ url('show-contacts/'.$customerdata->id) }}">Contacts</a></td>
                <td class="px-6 py-4"><a href="{{ url('edit-customer/'.$customerdata->id) }}">Edit</a></td>
                <td class="px-6 py-4"><a href="{{ url('delete-customer/'.$customerdata->id) }}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection