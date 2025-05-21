<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function Pest\Laravel\json;
use function PHPUnit\Framework\isEmpty;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        if ($books > isEmpty()) {
            return response()->json([
                "succsess" => true,
                "message" => "resource data nofound"
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "get all resources",
            "data" => $books
        ]);
    }

    public function store(Request $request)
    {
        // validator
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
            'description' => 'nullable|string',
            'price' => 'required|integer|min:0',
            'stock' => 'nullable|integer|min:0',
            'cover_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'genre_id' => 'required|exists:genres,id',
            'author_id' => 'required|exists:authors,id',
        ]);

        // ceik validasi eror
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // upload foto
        $image = $request->file('cover_photo');
        $image->store('books', 'public');

        //tambah data
        $book = Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'cover_photo' => $image->hashName(),
            'genre_id' => $request->genre_id,
            'author_id' => $request->author_id,
        ]);

        // response
        return response()->json([
            'siccess' => true,
            'message' => 'data berhasil ditambah bro',
            'data' => $book
        ], 201);
    }
}
