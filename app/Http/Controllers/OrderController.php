<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class OrderController extends Controller
{
    public function index(){
        return view('order.home');
    }

    public function checkout(){
        return view('order.checkout');
    }

    public function pesanan(Request $request, $id){
        $order = Order::find($id);
        return view('order.pesanan', compact(['order']));
    }

    public function store(Request $request){
        $request->request->add([
            'total_price' => $request->quantity * 120000, 
            // 'status' => 'Unpaid'
        ]);
        $order = Order::create($request->all());
        // return redirect('/pesanan');
        // dd($request->all());
        

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->total_price,
            ),
            'customer_details' => array(
                'name' => $request->nama,
                'nomor_telepon' => $request->nomor_telepon,
                
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('order.pesanan', compact(['snapToken', 'order']));
    }

    public function invoice($id){
        $order = Order::find($id);
        return view('order.invoice', compact(['order']));
    }
}
