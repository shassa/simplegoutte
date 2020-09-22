<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Goutte\Client;
use Illuminate\Support\Arr;
use Symfony\Component\HttpClient\HttpClient;
use App\datasearch;

class IndeedEngine extends AbstractEngine {
    public function search(string $keyword) {

        $client = new Client(HttpClient::create(['timeout' => 60]));

        $crawler = $client->request('GET', 'https://eg.indeed.com/jobs?q=' . $keyword . '&l=&ts=1594402175140&rq=1&rsIdx=1');
        $description = $crawler->filter('body.janus table#resultsBody #pageContent #resultsCol .result table.jobCardShelfContainer+div.summary')
            ->each(function ($node) {
                return $node->text();
            });

        $company = $crawler->filter('body.janus #resultsBody #pageContent #resultsCol .result .sjcl .company')
            ->each(function ($node) {
                return $node->text();
            });
        $location = $crawler->filter('body.janus #resultsBody #pageContent #resultsCol .result .sjcl .location')
            ->each(function ($node) {
                return $node->text();
            });

        $url = $crawler->filter(':root body.janus #resultsBody #pageContent #resultsCol .row .sjcl .ratingsDisplay .ratingNumber, :root body.janus #resultsBody #pageContent #resultsCol .row a.jobtitle ')
            ->each(function ($node) {
                return $node->text();
            });

        $date = $crawler->filter('body.janus #resultsBody #pageContent #resultsCol .result .result-link-bar-container .result-link-bar .date ')
            ->each(function ($node) {
                return $node->text();
            });
        $more = $crawler->filter(':root body.janus #resultsBody #pageContent #resultsCol .row .sjcl .ratingsDisplay .ratingNumber, :root body.janus #resultsBody #pageContent #resultsCol .row a.jobtitle ')
            ->each(function ($node) {
                $l = 'https://eg.indeed.com' . $node->attr('href');
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
                'image' => NULL,
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
