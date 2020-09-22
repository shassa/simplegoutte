<?php

namespace App;

use Carbon\Carbon;
use Goutte\Client;
use Illuminate\Support\Arr;
use Symfony\Component\HttpClient\HttpClient;

abstract class AbstractEngine {

    protected function key($keyword) {
        return "search: {$keyword} 0:5";
    }

    protected function expireAt() {
        return Carbon::now()->addHour();
    }
}
