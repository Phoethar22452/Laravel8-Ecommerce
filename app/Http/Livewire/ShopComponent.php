<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Cart;
use App\Models\Category;
class ShopComponent extends Component
{
	use WithPagination;
	public $sorting;
	public $pageSize;

    public $min_price;
    public $max_price;
	public function mount()
	{
		$this->sorting = "default";
		$this->pageSize = 12;

        $this->min_price = 1;
        $this->max_price = 1000;
	}
	public function store($product_id,$product_name,$product_price)
	{
		Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');

		session()->flash('success_message','Item Added In Cart');
		return redirect()->route('product.cart');
	}
    public function addToWishlist($product_id,$product_name,$product_price)
    {
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component','refreshComponent');
    }
    public function removeFromWishlist($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem)
        {
            if($witem->id === $product_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component','refreshComponent');
            }
        }
    }
    public function render()
    {
    	if($this->sorting == 'date')
    	{
    		$products = Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->orderby('created_at','Desc')->paginate($this->pageSize);

    	}
    	else if($this->sorting == 'price')
    	{
    		$products = Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->orderby('regular_price','ASC')->paginate($this->pageSize);
    	}
    	else if($this->sorting == 'price-desc')
    	{
    		$products = Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->orderby('regular_price','Desc')->paginate($this->pageSize);
    	}
    	else {
    		$products = Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->paginate($this->pageSize);
    	}
    	$categories = Category::all();
        return view('livewire.shop-component',['products'=>$products,'categories'=>$categories])->layout('layouts.base');
    }
}
