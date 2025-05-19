<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();

        return response()->json([
            "success" => true,
            "message" => "List of books",
            "data" => $books
        ], 200);
    }
}
