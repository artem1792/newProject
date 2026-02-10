<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public int $a = 1;
    public int $b = 2;

    public function show1() {
        $a = $this->a;
        $b = $this->b;
        $products = ['шкаф', 'стул', 'стол', 'кресло', 'диван'];
        return view('second', compact('a', 'b', 'products'));
    }

    public function showIndex() {
        return view('home');
    }

    public function showArray() {
        $array = [
            ['id' => 1, 'title' => 'Кейл', 'price' => 4800, 'path' => 'kayle.png'],
            ['id' => 2, 'title' => "Ка'Зикс", 'price' => 4800, 'path' => 'khazix.png'],
            ['id' => 3, 'title' => 'Ари', 'price' => 3150, 'path' => 'ahri.png'],
            ['id' => 4, 'title' => 'Джинкс', 'price' => 3150, 'path' => 'jinx.png'],
            ['id' => 5, 'title' => 'Нами', 'price' => 3150, 'path' => 'nami.png'],
        ];

        return view('array', compact('array'));
    }
}
