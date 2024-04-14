<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $allOrders = Order::orderBy('created_at', 'desc')->get();
            $user = auth()->user();
            $userOrders = Order::where('user_id', $user->id)
                ->orderBy('created_at', 'desc')
                ->get();
            return view('pages.settings', compact('allOrders', 'userOrders'));
        } else {
            return redirect()->route('login');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_type' => 'required|string',
            'comments' => 'nullable|string',
            'budget' => 'required|numeric',
        ]);

        $order = new Order();
        $order->product_type = $request->product_type;
        $order->comments = $request->comments;
        $order->budget = $request->budget;
        $order->user_id = auth()->id();
        $order->save();

        return $this->index()->with('success', 'goody');
    }
}
