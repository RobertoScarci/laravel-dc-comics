<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comic = Comic::all();
        return view('pages.index', compact('comics'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('pages.show', compact('comics'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $actualComic = new Comic();
        $actualComic->title = $data['title'];
        $actualComic->description = $data['description'];
        $actualComic->thumb = $data['thumb'];
        $actualComic->price = $data['price'];
        $actualComic->series = $data['series'];
        $actualComic->sale_date = $data['sale_date'];
        $actualComic->type = $data['type'];
        $actualComic->save();
        // $actualComic = Comic::create($data);

        return redirect()->route('pages.show', $actualComic->id);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
