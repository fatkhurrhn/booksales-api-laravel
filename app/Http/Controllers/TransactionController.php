<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isEmpty;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('user', 'book')->get();

        if ($transactions > isEmpty()) {
            return response()->json([
                "succsess" => true,
                "message" => "resource data nofound"
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "get all resources",
            "data" => $transactions
        ]);
    }

    public function store(Request $request) {
        // validasi
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:book_id',
            'quantity' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'validator error',
                'data' => $validator->errors()
            ], 422);
        }

        // generate number unique
        $uniqueCode = "ORD-" . strtoupper(uniqid());

        //ambil user yg sedang login dan cek login (apakah ada data user?)
        $user = auth('api')->user();

        if (!$user) {
            return response()->json([
                'sucsess' => false,
                'message' => 'unautorized'
            ], 401);
        }

        //mencari data buku dari request
        $book = Book::find($request->book_id);

        //cek stok buku
        if ($book->stock < $request->quantity) {
            return response()->json([
                'sucsess' => false,
                'message' => 'stok barang gacukup'
            ], 400);
        }

        // hitung total harga = price * quantity
        $totalAmount = $book->price * $request->quantity;

        //kurangi stok buku (update)
        $book->stock -= $request->quantity;
        $book->save(); 

        //simpan data transaksi
        $transactions = Transaction::create([
            'order_number' => $uniqueCode,
            'customer_id' => $user->id,
            'book_id' => $request->book_id,
            'total_amount' => $totalAmount
        ]);

        return response()->json([
                'sucsess' => true,
                'message' => 'transaksi berhasil dibuat',
                'data' => $transactions
            ], 201);
    }
}
