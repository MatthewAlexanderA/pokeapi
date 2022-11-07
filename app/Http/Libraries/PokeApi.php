<?php

namespace App\Http\Libraries;

use Illuminate\Support\Facades\Http;

class PokeApi
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = env('API_HOST');
    }

    public function index(String $endpoint, Array $data=[])
    {
        return $this->pokemon()->get($endpoint, $data);
    }

    public function detail(String $endpoint, String $id, Array $data=[])
    {
        return $this->pokemon()->get("$endpoint/$id", $data);
    }

    private function pokemon()
    {
        return Http::baseUrl($this->baseUrl);
    }
}
