<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Home extends Component
{
    public $value = 1;
    public $from = "USD";
    public $to = 'XAF';
    public $result;
    public $currencies = [];
    public function mount()
    {
        // get currencies
        $response = Http::withHeaders([
            'X-API-Key' => env('API_KEY', 'forex'),
        ])->acceptJson()->get(env('API_ENDPOINT', 'http://api.restuniverse.com') . '/currencies');
        $this->currencies = json_decode($response->body(), true);
        $this->convert();
    }

    public function convert()
    {
        $response = Http::withHeaders([
            'X-API-Key' => env('API_KEY', 'forex'),
        ])->acceptJson()->get(env('API_ENDPOINT', 'http://api.restuniverse.com') . '/currencies/convert?from=' . $this->from . '&to=' . $this->to . '&amount=' . $this->value . '&format=true');
        $this->result = json_decode($response->body())->result;
    }
    public function render()
    {
        return view('livewire.home');
    }
}
