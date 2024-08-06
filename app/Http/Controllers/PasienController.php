<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Pasien;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PasienController extends Controller
{
    public function index(Request $request) {

        {
            $books = Pasien::all();
            return response()->json($books);
        }

    }

    public function create(){
        
    }

    public function store(Request $request)
{
    $book = Pasien::create($request->all());
    return response()->json($book, 201);
}

    public function show($id)
    {
        $books = Pasien::find($id);
        return response()->json($books);
    }

    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    
    {
        $book = Pasien::find($id);
        if (is_null($book)) {
            return response()->json(404);
        }

        $book->update($request->all());
        return response()->json($book);
    }
    public function destroy($id)
    {
        $book = Pasien::find($id);
        $book->delete();
        return response()->json();
        // return redirect()->route('pasien.index');
    }
}
