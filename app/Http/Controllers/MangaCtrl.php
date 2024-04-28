<?php

namespace App\Http\Controllers;

use App\Models\MangaList;

class MangaCtrl extends Controller
{
    public function series()
    {
        $series = MangaList::getMangaList();
        return view('home', ['series' => $series]);
    }

    public function create()
    {
        return view('create');
    }
}