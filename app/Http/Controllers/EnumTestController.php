<?php

namespace App\Http\Controllers;

use App\Enums\Gender;
use BenSampo\Enum\Enum;
use Illuminate\Http\Request;

class EnumTestController extends Controller
{
    public function index()
    {
        echo "enumのテスト<br>";
        echo Gender::male."<br>";
        echo Gender::female."<br>";
        echo Gender::other."<br>";
        echo Gender::getDescription(1)."<br>";
        echo Gender::getDescription(2)."<br>";
        echo Gender::getDescription(9);

        dd(Gender::getKeys(), Gender::getValues(), Gender::getRandomKey(), Gender::getRandomValue(), Gender::toArray());
    }
}
