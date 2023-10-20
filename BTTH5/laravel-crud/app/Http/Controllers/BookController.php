<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Book::orderBy('id', 'desc')->get();
        return view('books.index', compact('books'));
//        return view('books.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $authors = Author::all();
        return view('books.create', compact('authors'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'author_id' => 'required',]);
        Book::create($request->all());
        return redirect()->route('book.index')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $authors = Author::all();
        $book = Book::find($id);
        return view('books.edit', compact('book', 'id', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $book = Book::find($id);
        $request->validate([
            'title' => 'required',
            'author_id' => 'required',]);
        $book->update($request->all());
        return redirect()->route('book.index')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try {
            $author = Book::where('id', $id)->first();
            if ($author) {
                Book::destroy($id);
                return redirect(route('book.index'))->with(['success' => "Xoa thanh cong"], 200);
            } else {

                return redirect(route('book.index'))->with(['error' => "Xoa that bai"], 400);
            }
        } catch (\Exception $e) {
            return redirect(route('book.index'))->with(['error' => $e->getMessage()], 400);
        }
    }
}
