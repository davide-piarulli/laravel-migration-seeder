<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Train;

class PageController extends Controller
{
    public function trains()
    {
        $trains = Train::all();

        return view('timetable', compact('trains'));
    }
}
