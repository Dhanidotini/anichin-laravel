<?php

namespace App\Http\Controllers;

use App\Enums\StatusSeries;
use App\Models\Series;
use App\Models\Country;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isNull;

class HomeController extends Controller
{
    public function index()
    {
        // $items = Country::where('name', 'China')->first()->series;
        $items = Series::where('is_published', true)
            ->with(['author', 'studios', 'genres', 'media'])
            ->orderBy('published_at', 'desc')
            ->paginate(4);
        return view("home", compact('items'));
    }
}
