<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\WithFileUploads;
class AdminEditHomeSliderComponent extends Component
{
	use WithFileUploads;
	public $title;
	public $subtitle;
	public $image;
	public $link;
	public $price;
	public $status;
	public $slider_id;
	public $newimage;
	public function mount($slide_id)
	{
		$slider = HomeSlider::findOrFail($slide_id);
		$this->title = $slider->title;
		$this->subtitle = $slider->subtitle;
		$this->link = $slider->link;
		$this->price = $slider->price;
		$this->status = $slider->status;
		$this->image = $slider->image;
		$this->slider_id = $slider->id;
	}
	public function updateSlide()
	{
		$slider = HomeSlider::findOrfail($this->slider_id);
		$slider->title = $this->title;
		$slider->subtitle = $this->subtitle;
		$slider->link = $this->link;
		$slider->price = $this->price;
		$slider->status = $this->status;
		if($this->newimage){
			$imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
			$slider->image = $imageName;
			$this->newimage->storeAs('sliders',$imageName);

		}
		//$slider->image = $this->image;
		$slider->save();
		session()->flash('message','Slider has been updated Successfully');
		
	}
    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider-component')->layout('layouts.base');
    }
}
