@extends('layout')

@section('content')
    <table class="table-auto w-full">
        <thead>
            <th class="text-left">SKU</th>
            <th class="text-left">Name</th>
            <th class="text-left">Category</th>
            <th class="text-left">Weight</th>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr class="even:bg-gray-200 odd:bg-gray-600 odd:text-gray-200">
                    <td>
                        {{$product->sku}}
                    </td>
                    <td>
                        {{$product->product_name}}
                    </td>
                    <td>
                        {{$product->category}}
                    </td>
                    <td>
                        {{$product->weight}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endSection
