<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AppController extends Controller
{
    public function view()
    {
        return view('app');
    }

    public function viewProducts()
    {
        return view('products', [
            'products' => Product::all()
        ]);
    }

    public function viewOrders()
    {
        return view('orders', [
            'orders' => Order::all()
        ]);
    }

    public function handleSubmission(Request $request)
    {
        $data = $request->validate([
            'file' => 'required|file|mimes:csv'
        ]);


        $csvData = $data['file']->getContent();
        $rows = array_map('str_getcsv', explode("\n", $csvData));

        $header = array_shift($rows);

        $rows = array_filter($rows, fn($row) => count($row) === count($header));

        $orderLines = array_map(function ($row) use ($header) {
            return array_combine($header, $row);
        }, $rows);

        foreach ($orderLines as $line) {
            if (empty($line['order_id']) || empty($line['customer_name'])) {
                continue;
            }
            $order = Order::firstOrCreate(['id' => $line['order_id']], ['customer_name' => $line['customer_name']]);

            $order->lines()->create([
                'sku' => $line['sku'],
                'quantity' => $line['quantity']
            ]);
        }

        return Redirect::back();
    }
}
