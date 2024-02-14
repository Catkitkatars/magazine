<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop\Models\Item;

class Catalog extends Controller
{
    public function show(){
        $obj1 = new Item(
            1,
            'Cola',
            'Coca-Cola',
            55
        );

        $obj2 = new Item(
            2,
            'Sprite',
            'Lemon-Lime',
            53
        );

        $objects = [$obj1->DTO(), $obj2->DTO()];

        return view('home', ['objects' => $objects]);
    }
}
