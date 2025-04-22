<?php 
namespace App\Services;

use GuzzleHttp\Client; 
use GuzzleHttp\Exception\RequestException; 

class PremierLeagueApiService 
{ 
    protected $client; 
    protected $apiKey;

    public function __construct() 
    { 
        $this->client = new Client(); 
        $this->apiKey = env('RAPIDAPI_KEY'); // Ambil API key dari .env
    } 
 
    // Fungsi untuk mendapatkan semua tim 
    public function getAllTeams() 
    { 
        try { 
            $response = $this->client->request('GET', 'hts://premier-league18.p.rapidapi.com/players/topAssisters ', [ 
                'headers' => [ 
                    'x-rapidapi-key' => $this->apiKey,
                    'x-rapidapi-host' => 'premier-league18.p.rapidapi.com' // ❗ Kadang ini wajib
                ], 
                'verify' => false // Nonaktifkan verifikasi SSL (hindari di production)
            ]); 

            $data = json_decode($response->getBody()->getContents(), true); 
            return $data; 
        } catch (RequestException $e) { 
            return [
                'error' => true,
                'message' => $e->getMessage()
            ]; 
        } 
    } 
}
