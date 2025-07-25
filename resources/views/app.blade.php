@extends('layout')

@section('content')
    <h2 class="text-xl font-semibold">Upload Your Product CSV</h2>
    <p>Orders: {{ \App\Models\Order::all()->count() }}</p>
    <form method="POST" action="/" enctype="multipart/form-data" class="flex flex-col gap-y-4 mt-4">
        @csrf
        <input type="file" name="file" class="bg-gray-50 px-2 py-1 rounded-md border border-gray-100 cursor-pointer"/>
        <button type="submit" class="text-lg px-4 py-2 border border-gray-100 rounded-xl cursor-pointer bg-blue-50 hover:bg-blue-100">Submit</button>
        @error('file')
            <span class="text-red-700 text-sm">{{ $message }}</span>
        @enderror
    </form>
@endSection
