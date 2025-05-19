<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class AuthorController extends Controller
{
    //
     public function index() {
        $authors = Author::all();

        return response()->json([
            "success" => true,
            "message" => "List of authors",
            "data" => $authors
        ], 200);
    }
}
