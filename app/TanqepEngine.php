<?php

namespace App;


use Goutte\Client;
use Illuminate\Support\Arr;
use Symfony\Component\HttpClient\HttpClient;
use App\datasearch;

class TanqepEngine extends AbstractEngine {
    public function search(string $keyword) {

        $client = new Client(HttpClient::create(['timeout' => 60]));

        $crawler = $client->request('GET', 'https://egypt.tanqeeb.com/ar/jobs/search?keywords=' . $keyword);


        $company = $crawler->filter('.justify-content-between .w-100 .mb-4  .text-secondary')
            ->each(function ($node) {
                return "";
            });

        $url = $crawler->filter('.justify-content-between .w-100 .mb-4 .fs-18-lg')
            ->each(function ($node) {
                return $node->text();
            });

        $more = $crawler->filter('.card.card-list>.card-body a')
            ->each(function ($node) {
                $l = 'https://egypt.tanqeeb.com' . $node->attr('href');
                return $l;
            });


        $image = $crawler->filter('.justify-content-between .text-center img')
            ->each(function ($node) {
                return $node->attr('src');
            });
        $date = $crawler->filter('')->each(function ($node) {
            return "";
        });
        $location = $crawler->filter('.justify-content-between .w-100 .mb-4  .text-secondary')
            ->each(function ($node) {
                return $node->text();
            });
        $description = $crawler->filter('.justify-content-between .w-100  .text-primary-2')
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

