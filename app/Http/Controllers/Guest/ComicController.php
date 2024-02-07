<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

        $request->validate([
            'title' => ['required', 'min:4', 'max:40'],
            'description' => ['required', 'min:4', 'max:200'],
            'thumb' => ['required'],
            'price' => ['required'],
            'series' => ['required', 'min:10', 'max:20'],
            'sale_date' => ['required'],
            'type' => ['required'],
        ], [
            'title.required' => 'Devi inserire un titolo per il fumetto!'
        ]);

        // $actualComic = new Comic();
        // $actualComic->title = $data['title'];
        // $actualComic->description = $data['description'];
        // $actualComic->thumb = $data['thumb'];
        // $actualComic->price = $data['price'];
        // $actualComic->series = $data['series'];
        // $actualComic->sale_date = $data['sale_date'];
        // $actualComic->type = $data['type'];
        // $actualComic->save();
        $actualComic = Comic::create($data);

        return redirect()->route('pages.show', $actualComic->id);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('pages.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => ['required', 'min:4', 'max:80', Rule::unique('comics')->ignore($comic->id)],
            'description' => ['required', 'min:4', 'max:2000'],
            'thumb' => ['required'],
            'price' => ['required'],
            'series' => ['required', 'min:3', 'max:100'],
            'sale_date' => ['required'],
            'type' => ['required'],
        ], [
            'title.required' => 'Devi inserire un titolo per il fumetto!'
        ]);
        $data = $request->all();
        $comic->update($data);

        return redirect()->route('pages.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
