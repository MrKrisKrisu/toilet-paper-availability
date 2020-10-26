<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class HomeController extends Controller
{

    public function renderSitemap()
    {
        $sitemap = SitemapGenerator::create('https://klopapier-verfuegbarkeit.de')
                                   ->getSitemap();

        foreach (Store::all() as $store) {
            $sitemap->add(Url::create('/store/' . $store->id)
                             ->setLastModificationDate(Carbon::yesterday())
                             ->setChangeFrequency(Url::CHANGE_FREQUENCY_HOURLY)
                             ->setPriority(0.5));
        }

        return response($sitemap->render(), 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
