<?php

namespace App;


use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
use App\IndeedEngine;
use App\WuzzufEngine;
use App\BatdotEngine;
use App\TanqepEngine;

class SearchEngines extends AbstractEngine {
    public function search(string $keyword) {
        $output = $this->getFromCache($keyword);
        if ($output) {
            return $output;
        }

        $wuzzuf = new WuzzufEngine();
        $wuzzuf->search($keyword);

        $indeed = new IndeedEngine();
        $indeed->search($keyword);

        $batdot = new BatdotEngine();
        $batdot->search($keyword);

        $tanqeb = new TanqepEngine();
        $tanqeb->search($keyword);

        return $this->getFromCache($keyword);
    }

    public function getFromCache($keyword) {
        return cache()->get($this->Key($keyword));
    }
}