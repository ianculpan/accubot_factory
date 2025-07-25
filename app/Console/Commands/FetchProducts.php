<?php

namespace App\Console\Commands;

use App\Models\Product;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class FetchProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $client = new Client();

        $response = $client->get('https://nt5gkznl19.execute-api.eu-west-1.amazonaws.com/prod/products');

        $data = $response->getBody()->getContents();

        $data = json_decode($data, true);
        foreach($data['value'] as $product) {
            Product::create($product);
        }
    }

}
