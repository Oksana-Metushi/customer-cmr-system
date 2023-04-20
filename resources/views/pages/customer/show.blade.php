@extends('layouts.app')

@section('content')
<div class="py-4">
    <a href="{{ url('customer') }}" class="inline-block text-gray-600 text-xl font-semibold no-underline hover:text-purple-600 hover:text-underline py-2 px-4">Back</a>
</div>
@include('layouts.inc.contacts-tb')

@endsection