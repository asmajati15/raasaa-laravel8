<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Type;
use App\Models\Availability;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/menu', [
            'menu' => Menu::with('types', 'availabilities')->orderBy('nama', 'asc')->get(),
            'special' => Menu::with('types', 'availabilities')->orderBy('nama', 'asc')->get(),
            'type' => Type::get(),
            'availability' => Availability::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create_menu', [
            'type' => Type::get(),
            'availability' => Availability::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'types_id' => 'required',
            'availabilities_id' => 'required',
            'nama' => 'required|max:255',
            'slug' => 'required|unique:menus',
            'deskripsi' => 'required',
            'gambar' => 'required|image|file|max:2048',
            'harga' => 'required',
            'stok' => 'nullable|integer',
            'hari' => 'nullable|max:255',
            'mulai' => 'nullable|max:255',
            'sampai' => 'nullable|max:255'
        ]);

        $validatedData['gambar'] = $request->file('gambar')->store('menu-images');

        Menu::create($validatedData);

        return redirect('web-raasaa-admin/menu')->with('success', 'Menu berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        return view('admin/detail', [
            'menu' => $menu
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('admin/edit_menu', [
            'menu' => $menu,
            'type' => Type::get(),
            'availability' => Availability::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $rules = [
            'types_id' => 'required',
            'availabilities_id' => 'required',
            'nama' => 'required|max:255',
            'harga' => 'required|max:255',
            'deskripsi' => 'required',
            'gambar' => 'image|file|max:2048',
            'stok' => 'nullable|integer',
            'hari' => 'nullable|max:255',
            'mulai' => 'nullable|max:255',
            'sampai' => 'nullable|max:255'
        ];

        if ($request->slug != $menu->slug) {
            $rules['slug'] = 'required|unique:menus';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('menu-images');
        }

        Menu::where('id', $menu->id)
            ->update($validatedData);

        return redirect('web-raasaa-admin/menu')->with('success', 'Menu berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        if ($menu->gambar) {
            Storage::delete($menu->gambar);
        }

        Menu::destroy($menu->id);
        return redirect('web-raasaa-admin/menu')->with('deleted', 'Menu berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Menu::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
