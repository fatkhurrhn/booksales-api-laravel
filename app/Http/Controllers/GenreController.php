<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function show(string $id) {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'sucsess' => false,
                'message' => 'data yang lu cari gaada bro'
            ], 404);
        }

        return response()->json([
            'siuccess' => true,
            'message' => 'get dddetail resource',
            'data' => $genre
        ]);
    }

    public function destroy(string $id){
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'sucsess' => false,
                'message' => 'resource not found'
            ], 404);
        }

        if ($genre->cover_photo) {
            //Delete from storage
            Storage::disk('public')->delete('genre/' .$genre->cover_photo);
        }

        $genre->delete();

        return response()->json([
            'siuccess' => true,
            'message' => 'data berhasil di hapus',
        ]);
    }
}
