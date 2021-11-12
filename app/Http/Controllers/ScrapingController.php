<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;


class ScrapingController extends Controller
{   
    
    public function index()
    {
        $browser = new HttpBrowser(HttpClient::create());
        $crawler = $browser->request('GET', 'https://g1.globo.com/sp/santos-regiao/porto-mar/');
        $dados = $crawler->filter('.bastian-feed-item')->each(function($node) {
            return $node->html();
        });
        foreach ($dados as $key) {
            $filtro = new Crawler($key);
            $news['title'] = $filtro->filter('.feed-post-link')->text();
            $news['description'] = $filtro->filter('.feed-post-body-resumo')->text();
            $news['link'] = $filtro->filter('.feed-post-link')->attr('href');
            $news['image'] = $filtro->filter('.bstn-fd-picture-image')->attr('src');
            //$news['hat'] = $filtro->filter('.feed-post-header-chapeu')->text();
            $news['timer'] = $filtro->filter('.feed-post-datetime')->text();
            $formatado = json_encode($news);
            print_r($formatado);
        }
    }
}
