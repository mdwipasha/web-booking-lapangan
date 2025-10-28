<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Snap;

class PaymentController extends Controller
{
    // public function createTransaction(Request $request)
    // {
    //     // Set konfigurasi Midtrans
    //     Config::$serverKey = config('midtrans.server_key');
    //     Config::$isProduction = config('midtrans.is_production');
    //     Config::$isSanitized = config('midtrans.is_sanitized');
    //     Config::$is3ds = config('midtrans.is_3ds');

    //     // Data transaksi
    //     $params = [
    //         'transaction_details' => [
    //             'order_id' => 'CAppA'.uniqid(),
    //             'gross_amount' => 1, // contoh: Rp10.000
    //         ],
    //         'customer_details' => [
    //             'first_name' => Auth::user()->name,
    //             'email' => Auth::user()->email,
    //         ],
    //     ];

    //     // Buat Snap token
    //     $snapToken = Snap::getSnapToken($params);

    //     return view('lapangan.detail', compact('snapToken'));
    // }

    public function createSnapToken($id)
    {
        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        // Misalnya data harga ambil dari database, sementara contoh statis
        $params = [
            'transaction_details' => [
                'order_id' => uniqid(),
                'gross_amount' => 50000,
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        return response()->json(['token' => $snapToken]);
    }
}
