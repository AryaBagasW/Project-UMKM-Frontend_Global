<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ProdukController extends Controller
{
    protected $client;
    protected $apiUrl;

    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->apiUrl = env('FLASK_API_URL_PRODUK', 'http://127.0.0.1:5000/produk/');
    }

    public function getProduk()
    {
        try {
            \Log::info('Attempting to fetch data from API: '. $this->apiUrl);
            $response = $this->client->request('GET', $this->apiUrl);

            \Log::info('API response status: '. $response->getStatusCode());

            $data = json_decode($response->getBody()->getContents(), true);

            if (json_last_error()!== JSON_ERROR_NONE) {
                throw new \Exception('Error parsing JSON response: '. json_last_error_msg());
            }

            \Log::info('Data from API:', $data);

            return view('pages.managemen-produk', ['produk' => $data]);
        } catch (RequestException $e) {
            \Log::error('RequestException: '. $e->getMessage());
            $errorMessage = $e->getMessage();
            return view('pages.managemen-produk', ['produk' => [], 'error' => $errorMessage]);
        } catch (\Exception $e) {
            \Log::error('Exception: '. $e->getMessage());
            $errorMessage = $e->getMessage();
            return view('pages.managemen-produk', ['produk' => [], 'error' => $errorMessage]);
        }
    }
}
