<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UserOrderDetailsComponent extends Component
{
	public $order_id;
	public function mount($order_id)
	{
		$this->order_id = $order_id;
	}
	public function cancelOrder($order_id)
	{
		$order = Order::findOrfail($order_id);
		$order->status = 'canceled';
		$order->canceled_date=DB::raw('CURRENT_DATE');
		$order->save();
		session()->flash('order_message','Order has been canceled!');
	}
    public function render()
    {
    	$order = Order::where('user_id',Auth::user()->id)->where('id',$this->order_id)->firstOrFail();
        return view('livewire.user.user-order-details-component',['order'=>$order])->layout('layouts.base');
    }
}
