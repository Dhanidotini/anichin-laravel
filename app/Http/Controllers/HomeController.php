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
        $featured = Series::where('is_published', true)
            ->where('is_featured', true)
            ->with('country', 'genres')
            ->orderBy('published_at', 'desc')
            ->paginate(4);
        $latest = Series::where('is_published', true)
            ->where('status', StatusSeries::Ongoing)
            ->orderBy('published_at', 'desc')
            ->paginate(4);
        $completed = Series::where('is_published', true)
            ->where('status', StatusSeries::Completed)
            ->with('media', 'genres', 'studios')
            ->orderBy('published_at', 'desc')
            ->paginate(4);
        return view("home", compact('featured', 'latest', 'completed'));
    }
}
