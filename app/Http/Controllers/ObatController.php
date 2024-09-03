<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $books = Obat::all();
        return response()->json($books);
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {

        $book = Obat::create($request->all());
        return response()->json($book, 200);
    }

    // Display the specified resource
    public function show($id)
    {
        $books = Obat::find($id);
        return response()->json($books);
    }

    // Update the specified resource in storage
    public function update(Request $request, $id)
    {
        $book = Obat::find($id);
        if (is_null($book)) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $book->update($request->all());
        return response()->json($book);
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        $book = Obat::find($id);
        $book->delete();
        return response()->json();
    }
}
