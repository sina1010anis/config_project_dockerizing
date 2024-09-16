<?php

namespace App\Http\Controllers;

use Illuminate\Cache\Repository;
use Illuminate\Container\Attributes\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Concurrency;

class LaravelVersion_11_23 extends Controller
{
    public function Concurrency (#[Cache("redis")] Repository $cache) : void
    {

        $time = time();

        echo "Start ". time() -$time."s"."<br>";

        Concurrency::defer([

            function () {
                sleep(5);
            },

            function () {
                sleep(5);
            },

        ]);

        echo "<br>"."End ". time() - $time."s";


    }
}
