@extends('layouts.app')

@section('content')
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
                     <td class="px-6 py-4">{{ $contactdata['customer_id'] }}</td>
                    <td class="px-6 py-4">{{ $contactdata['fName'] }}</td>
                    <td class="px-6 py-4">{{ $contactdata->lName }}</td>
                    <td class="px-6 py-4">{{ $contactdata->telephone }}</td>
                    <td class="px-6 py-4">{{ $contactdata->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

