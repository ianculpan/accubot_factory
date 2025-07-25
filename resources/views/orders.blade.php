@extends('layout')

@section('content')
    <table class="table-auto w-full">
        <thead>
            <th class="text-left">ID</th>
            <th class="text-left">Customer Name</th>
            <th class="text-left">Created At</th>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr class="even:bg-gray-200 odd:bg-gray-600 odd:text-gray-200">
                    <td>
                        {{$order->id}}
                    </td>
                    <td>
                        {{$order->customer_name}}
                    </td>
                    <td>
                        {{$order->created_at}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endSection
