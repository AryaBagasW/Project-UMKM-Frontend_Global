<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ApiController extends Controller
{
    protected $client;
    protected $apiUrlUmkm;

    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->apiUrlUmkm = env('FLASK_API_URL_UMKM', 'http://127.0.0.1:5000/umkm');
    }

    public function getUmkm()
    {
        try {
            \Log::info('Attempting to fetch data from API: ' . $this->apiUrlUmkm);
            $response = $this->client->request('GET', $this->apiUrlUmkm);

            \Log::info('API response status: ' . $response->getStatusCode());

            $data = json_decode($response->getBody()->getContents(), true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception('Error parsing JSON response: ' . json_last_error_msg());
            }

            \Log::info('Data from API:', $data);

            return view('pages.managemen-umkm', ['umkm' => $data]);
        } catch (RequestException $e) {
            \Log::error('RequestException: ' . $e->getMessage());
            $errorMessage = $e->getMessage();
            return view('pages.managemen-umkm', ['umkm' => [], 'error' => $errorMessage]);
        } catch (\Exception $e) {
            \Log::error('Exception: ' . $e->getMessage());
            $errorMessage = $e->getMessage();
            return view('pages.managemen-umkm', ['umkm' => [], 'error' => $errorMessage]);
        }
    }

    public function editUmkm($id)  
{  
    try {  
        $response = $this->client->request('GET', "{$this->apiUrlUmkm}/{$id}");  
        $data = json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);  
        return view('pages.edits.edit-umkm', ['umkm' => $data]);  
    } catch (Exception $e) {  
        Log::error('Error retrieving UMKM data: '. $e->getMessage());  
        return response()->view('errors.404', [], 404);  
    }  
} 

    public function updateUmkm(Request $request, $id)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'npwp' => 'required',
            'operational_hours' => 'required',
        ]);

        try {
            $response = $this->client->request('PUT', "{$this->apiUrlUmkm}/{$id}", [
                'json' => $request->all()
            ]);

            $data = json_decode($response->getBody()->getContents(), true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception('Error parsing JSON response: ' . json_last_error_msg());
            }

            return redirect()->route('getUmkm')->with('success', 'UMKM updated successfully');
        } catch (RequestException $e) {
            \Log::error('RequestException: ' . $e->getMessage());
            return redirect()->route('editUmkm', ['id' => $id])->withErrors(['error' => $e->getMessage()]);
        } catch (\Exception $e) {
            \Log::error('Exception: ' . $e->getMessage());
            return redirect()->route('editUmkm', ['id' => $id])->withErrors(['error' => $e->getMessage()]);
        }
    }
}
