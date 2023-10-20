<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
//    public function index()
//    {
//        //
//    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('artworks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'artist_name' => 'required',
            'description' =>'required',
            'art_type' =>'required',
            'media_link' =>'required',
            'cover_image' =>'required',]);
        Artwork::create($request->all());
        return redirect()->route('home')->with('success', 'Artwork created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artwork $artwork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $artwork = Artwork::find($id);
        return view('artworks.edit', compact('artwork'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $artwork=Artwork::find($id);
        $request->validate([
            'artist_name' => 'required',
            'description' =>'required',
            'art_type' =>'required',
            'media_link' =>'required',
            'cover_image' =>'required',
        ]);
        $artwork->update($request->all());
        return redirect()->route('home')->with('success', 'Artwork updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        //
        try {
            $artwork =Artwork::where('id', $id)->first();
            if ($artwork) {
                Artwork::destroy($id);
                return redirect(route('home'))->with(['success' => "Xoa thanh cong"], 200);
            } else {

                return redirect(route('home'))->with(['error' => "Xoa that bai"], 400);
            }
        } catch (\Exception $e) {
            return redirect(route('home'))->with(['error' => $e->getMessage()], 400);
        }
    }
}
