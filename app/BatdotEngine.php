<?php

namespace App;


use Goutte\Client;
use Illuminate\Support\Arr;
use Symfony\Component\HttpClient\HttpClient;
use App\datasearch;

class BatdotEngine extends AbstractEngine {
    public function search(string $keyword) {

        $client = new Client(HttpClient::create(['timeout' => 60]));

        $crawler = $client->request('GET', 'https://www.bayt.com/ar/egypt/jobs/' . $keyword . '-jobs/');
        $description = $crawler->filter('#results_inner_card .has-pointer-d p')
            ->each(function ($node) {
                return $node->text();
            });

        $company = $crawler->filter('#results_inner_card .has-pointer-d .p10r')
            ->each(function ($node) {
                return $node->text();
            });

        $url = $crawler->filter('#results_inner_card .has-pointer-d .t-regular')
            ->each(function ($node) {
                return $node->text();
            });

        $more = $crawler->filter('#results_inner_card .has-pointer-d h2 a')
            ->each(function ($node) {
                $l = 'https://www.bayt.com' . $node->attr('href');
                return $l;
            });


        $image = $crawler->filter('#results_inner_card .has-pointer-d .u-right')
            ->each(function ($node) {
                return $node->attr('src');
            });
        $location = $crawler->filter('#results_inner_card .has-pointer-d li')
            ->each(function ($node) {
                return $node->text();
            });
        $date = $crawler->filter('#results_inner_card .has-pointer-d .t-small ')
            ->each(function ($node) {

                return $node->text();
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

