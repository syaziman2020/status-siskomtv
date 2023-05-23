<?php

namespace App\Http\Controllers;

use App\Models\DataPegawai;
use App\Models\RuangDosen;

class HomeController extends Controller
{

    public function index()
    {
        $id = 1;
        $itemRuang = RuangDosen::findOrFail($id);
        $items = DataPegawai::all();
        $carouselFirstItems = $items->take(3);
        $carouselRemainingItems = $items->slice(3);


        return view('pages.app', [
            'items' => $items,
            'itemRuang' => $itemRuang,
            'firstItems' => $carouselFirstItems,
            'remainingItems' => $carouselRemainingItems,
        ]);
    }
}
