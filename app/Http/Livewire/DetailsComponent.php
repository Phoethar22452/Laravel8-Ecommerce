<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Sale;
use Cart;
class DetailsComponent extends Component
{
	public $slug;
    public $qty;
	public function mount($slug)
	{
		$this->slug = $slug;
        $this->qty = 1;
	}
    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,$this->qty,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item Added In Cart');
        return redirect()->route('product.cart');
    }

    public function increaseQuantity()
    {
        $this->qty++;

    }
    public function decreaseQuantity()
    {
        if($this->qty > 1)
        {
            $this->qty--;
        }
    }
    public function render()
    {
    	$product = Product::where('slug',$this->slug)->firstOrFail();
    	$popular_products = Product::inRandomOrder()->limit(4)->get();
    	$related_products = Product::where('category_id',$product->category_id)->inRandomOrder()->limit(4)->get();
        $sale = Sale::findOrFail(1);
        return view('livewire.details-component',['product'=>$product,'popular_products'=>$popular_products,'related_products'=>$related_products,'sale'=>$sale])->layout('layouts.base');
    }
}
