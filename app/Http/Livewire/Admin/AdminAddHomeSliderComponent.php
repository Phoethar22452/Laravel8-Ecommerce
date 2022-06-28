<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\WithFileUploads;
class AdminAddHomeSliderComponent extends Component
{
	use WithFileUploads;
	public $title;
	public $subtitle;
	public $image;
	public $link;
	public $price;
	public $status;
	public function mount()
	{
		$this->status = 0;
	}
	public function addSlide()
	{
		$slider = new HomeSlider();
		$slider->title = $this->title;
		$slider->subtitle = $this->subtitle;
		$slider->link = $this->link;
		$slider->price = $this->price;
		$slider->status = $this->status;

		#image
		$imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
		$slider->image = $imageName;
		$this->image->storeAs('sliders',$imageName);

		$slider->save();
		session()->flash('message','Slider has been created successfully');
	}
    public function render()
    {
        return view('livewire.admin.admin-add-home-slider-component')->layout('layouts.base');
    }
}
