<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Models\Filter;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function index(Type $type)
    {
        return view('admin/kategori', [
            'specials' => Type::with('filters')->latest()->get(),
            'types' => Type::with('filters')->latest()->get(),
            'filter' => Filter::get(),
            'filters' => Filter::get(),
            // 'type' => $type,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin/create_type', [
        //     'filter' => Filter::get()
        // ]);
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
            'nama' => 'required|max:255',
            'slug' => 'required',
            'filters_id' => 'required'
        ]);

        Type::create($validatedData);

        return redirect('web-raasaa-admin/type')->with('success', 'Kategori menu berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        // return $type;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        // dd($type);
        return view('admin/edit_type', [
            'type' => $type,
            'filter' => Filter::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        $rules = [
            'nama' => 'required|max:255',
            'filters_id' => 'required'
        ];

        if ($request->slug != $type->slug) {
            $rules['slug'] = 'required|unique:types';
        }

        $validatedData = $request->validate($rules);

        Type::where('id', $type->id)
            ->update($validatedData);

        return redirect('web-raasaa-admin/type')->with('success', 'Kategori menu berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        Type::destroy($type->id);
        return redirect('web-raasaa-admin/type')->with('deleted', 'Kategori menu berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Type::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
