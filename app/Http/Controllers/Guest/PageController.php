<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function newpage()
    {
        return view('new-page');
    }

    public function trains()
    {
        $trains = Train::paginate();

        return view('trains', compact('trains'));
    }
}
