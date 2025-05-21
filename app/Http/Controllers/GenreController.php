<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function Pest\Laravel\json;
use function PHPUnit\Framework\isEmpty;


class GenreController extends Controller
{
    public function index() {
        $genres = Genre::all();

        if ($genres>isEmpty()) {
            return response()->json([
                "succsess" => true,
                "message" => "resource data nofound"
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "List of genres",
            "data" => $genres
        ]);
    }

    public function store(Request $request)
    {
        // validator
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
            'description' => 'nullable|string',
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
        $image->store('genres', 'public');

        //tambah data
        $genre = Genre::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // response
        return response()->json([
            'siccess' => true,
            'message' => 'data berhasil ditambah bro',
            'data' => $genre
        ], 201);
    }
}
