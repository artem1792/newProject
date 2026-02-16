<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // public int $a = 1;
    // public int $b = 2;

    // public function show1() {
    //     $a = $this->a;
    //     $b = $this->b;
    //     $products = ['шкаф', 'стул', 'стол', 'кресло', 'диван'];
    //     return view('second', compact('a', 'b', 'products'));
    // }

    public function showIndex() {
        return view('home');
    }

    public array $array = [
        ['id' => 1, 'title' => 'Кейл', 'price' => 1800, 'path' => 'kayle.png'],
        ['id' => 2, 'title' => "Ка'Зикс", 'price' => 4800, 'path' => 'khazix.png'],
        ['id' => 3, 'title' => 'Ари', 'price' => 3150, 'path' => 'ahri.png'],
        ['id' => 4, 'title' => 'Джинкс', 'price' => 3150, 'path' => 'jinx.png'],
        ['id' => 5, 'title' => 'Нами', 'price' => 3150, 'path' => 'nami.png'],
        ['id' => 6, 'title' => 'Кейл', 'price' => 700, 'path' => 'kayle.png'],
        ['id' => 7, 'title' => "Ка'Зикс", 'price' => 800, 'path' => 'khazix.png'],
        ['id' => 8, 'title' => 'Ари', 'price' => 2150, 'path' => 'ahri.png']
    ];
    
    public function showArray() {
        $array = $this->array;
        
        return view('array', compact('array'));
    }

    public function shuffleArray() {
        $array = $this->array;
        shuffle($array);

        return view('array', compact('array'));
    }

    public function sortArray() {
        $array = $this->array;
        usort($array, function($a, $b) {
            return $a['price'] <=> $b['price'];
        });

        return view('array', compact('array'));
    }

    public function filterArray() {
        $array = array_filter($this->array, function($item) {
            return $item['price'] > 1000;
        });

        return view('array', compact('array'));
    }
}