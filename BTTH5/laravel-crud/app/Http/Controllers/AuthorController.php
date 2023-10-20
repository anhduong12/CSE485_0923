<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',]);
        Author::create($request->all());
        return redirect()->route('home')->with('success', 'Author created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
        return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $author = Author::find($id);
        return view('authors.edit', compact('author'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $author=Author::find($id);
        $request->validate([
            'name' => 'required',
        ]);
        $author->update($request->all());
        return redirect()->route('home')->with('success', 'Author updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
//        $author->delete();
////header(“Location:authors.index?success=...”
//        return redirect()->route('home')->with('success', 'Author deleted successfully');
//        //

        try {
            $author =Author::where('id', $id)->first();
            if ($author) {
                Author::destroy($id);
                return redirect(route('home'))->with(['success' => "Xoa thanh cong"], 200);
            } else {
//                dd(" Khong tim thay author");

                return redirect(route('home'))->with(['error' => "Xoa that bai"], 400);
            }
        } catch (\Exception $e) {
            return redirect(route('home'))->with(['error' => $e->getMessage()], 400);
        }
    }
}
