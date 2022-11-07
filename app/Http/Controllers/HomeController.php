<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Type;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('users/home', [
            // "menu" => Menu::latest()->get()
            "menu" => Menu::with('availabilities', 'filters', 'types')->orderBy('nama', 'asc')->get(),
            "menu1" => Menu::with('availabilities', 'filters', 'types')->orderBy('nama', 'asc')->get(),
            "menu2" => Menu::with('availabilities', 'filters', 'types')->orderBy('nama', 'asc')->get(),
            // "highlights" => Menu::with('filters', 'types')->orderBy('nama', 'asc')->get(),
            // "slides" => Slide::latest()->get(),
            // "headings" => Type::with('filters')->get(),
            // "categories" => Type::latest()->get(),
            // "firsts" => Type::with('filters')->get(),
            // "seconds" => Type::with('filters')->get(),
            // "headings" => Type::with('filters')->get(),
            // "foods" => Type::latest()->get(),
            // "drinks" => Type::latest()->get(),
            // "specials" => Type::latest()->get()
        ]);
    }

    public function detail(Menu $det)
    {
        return view('users/detail', [
            "menu" => $det
        ]);
    }

    public function about()
    {
        return view('users/about');
    }
}
