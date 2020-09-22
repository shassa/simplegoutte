<?php

namespace App;

use Goutte\Client;
use Illuminate\Support\Arr;
use Symfony\Component\HttpClient\HttpClient;

class WuzzufEngine extends AbstractEngine {
    public function search(string $keyword) {

        $client = new Client(HttpClient::create(['timeout' => 60]));

        $crawler = $client->request('GET', 'https://wuzzuf.net/search/jobs?q=' . $keyword);
        $description = $crawler->filter('.right-side .result-wrp .job-details')
            ->each(function ($node) {
                return $node->text();
            });

        $company = $crawler->filter('.right-side .result-wrp .company-name')
            ->each(function ($node) {
                return $node->text();
            });
        $location = $crawler->filter('.right-side .result-wrp .location')
            ->each(function ($node) {
                return $node->text();
            });

        $url = $crawler->filter('.right-side .result-wrp .job-title')
            ->each(function ($node) {
                return $node->text();
            });
        $image = $crawler->filter('.right-side .result-wrp .company-logo a img ')
            ->each(function ($node) {
                return $node->attr('src');
            });
        $date = $crawler->filter('.right-side .result-wrp .date-desktop')
            ->each(function ($node) {
                return $node->text();
            });

        $more = $crawler->filter('.right-side .result-wrp .job-title a')
            ->each(function ($node) {
                $l = $node->attr('href');
                return $l;
            });

        $output = Arr::wrap(\cache()->get($this->key($keyword)) ?: []);
        $i = 0;
        while ($i < 5) {
            if (!Arr::get($url, $i)) {
                break;
            }
            $output[] = [
                'title' => Arr::get($url, $i),
                'image' => Arr::get($image, $i),
                'location' => Arr::get($location, $i),
                'description' => Arr::get($description, $i),
                'date' => Arr::get($date, $i),
                'company' => Arr::get($company, $i),
                'url' => Arr::get($more, $i),
            ];
            $i++;
        }

        \cache()->put($this->key($keyword), $output, $this->expireAt());
    }
}
