<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function show(string $id) {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'sucsess' => false,
                'message' => 'data yang lu cari gaada bro'
            ], 404);
        }

        return response()->json([
            'siuccess' => true,
            'message' => 'get dddetail resource',
            'data' => $author
        ]);
    }

    public function destroy(string $id){
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'sucsess' => false,
                'message' => 'resource not found'
            ], 404);
        }

        if ($author->cover_photo) {
            //Delete from storage
            Storage::disk('public')->delete('author/' .$author->cover_photo);
        }

        $author->delete();

        return response()->json([
            'siuccess' => true,
            'message' => 'data berhasil di hapus',
        ]);
    }
}
