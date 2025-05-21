<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function Pest\Laravel\json;
use function PHPUnit\Framework\isEmpty;

class AuthorController extends Controller
{
    //
    public function index()
    {
        $authors = Author::all();

        if ($authors > isEmpty()) {
            return response()->json([
                "succsess" => true,
                "message" => "resource data nofound"
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "List of authors",
            "data" => $authors
        ]);
    }

    public function store(Request $request)
    {
        // validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bio' => 'nullable|string',
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
        $image->store('authors', 'public');

        //tambah data
        $author = Author::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // response
        return response()->json([
            'siccess' => true,
            'message' => 'data berhasil ditambah bro',
            'data' => $author
        ], 201);
    }
}
