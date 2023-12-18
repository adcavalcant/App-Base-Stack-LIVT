<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $breweries = Brewery::has('beers', '>', 0)->withCount('beers')->paginate(10);

        return Inertia::render('Dashboard', ['breweries' => $breweries]);
    }
}
