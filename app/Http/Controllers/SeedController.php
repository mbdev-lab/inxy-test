<?php

namespace App\Http\Controllers;

use App\Table;
use Illuminate\Http\Request;

class SeedController extends Controller
{
    public function load()
    {
        $fileJson = file_get_contents('https://my.inxy.com/json/servers_catalog.json');
        $sourceData = json_decode($fileJson, true);
        $preparreData = [];

        Table::truncate();
        foreach ($sourceData['data'] as $item) {
            $str = $item['provider'] . $item['brand'] . $item['location'] . $item['cpu'] . $item['drive'];
            $base64 = base64_encode($str);
            $preparreData[$base64] = array_merge($item, ['base_64' => $base64]);
        }
        Table::insert($preparreData);

        return redirect('/crud')->with('success', 'Data from json was load!');
    }
}
