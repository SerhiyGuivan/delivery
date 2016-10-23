<?php

namespace App\Http\Controllers;

use App\Billing;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;

class OrdersCtrl extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('store');
    }

    public function index(Request $request)
    {

        $query = Order::with('billing')
            ->orderBy('created_at', 'DESC');

        if($request->paginateBy)
        {
            return $query->paginate($request->paginateBy);
        }

        return $query->get();
    }

    public function store(Request $request)
    {
        $order = new Order($request->all());

        $billing = Billing::where('name', 'default')->firstOrfail();

        $order->status = 'Open';

        if($billing)
        {
            $order->billing()->associate($billing);

            $order->amount = $billing->default;

            $order->amount = $request->is_express ? $order->amount + $billing->express : $order->amount;

            $order->amount = $request->is_heavy ? $order->amount + $billing->heavy : $order->amount;
        }

        $order->save();
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $order->update($request->all());
    }
    public function destroy($id)
    {
        $order = Order::findOrFail($id);

        $order->delete();
    }
}
