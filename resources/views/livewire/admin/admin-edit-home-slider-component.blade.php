<div>
    <div class="container" style="padding:30px 0;"> 
    	<div class="row">
    		<div class="col-md-12">
    			<div class="panel panel-default">
    				<div class="panel-heading">
    					<div class="row">
    						<div class="col-md-6" style="padding-top:8px!important;">
                           		Edit Slider
                        	</div>
                        	<div class="col-md-6">
                           		<a href="{{route('admin.homeslider')}}" class="btn btn-success pull-right">All Sliders</a>
                        	</div>
    					</div>
    				</div>
    				<div class="panel-body">
    					@if(Session::has('message'))
    						<div class="alert alert-success" role="alert">	
    							{{Session::get('message')}}
    						</div>
    					@endif
    					<form action="" class="form-horizontal" wire:submit.prevent="updateSlide" method="POST" enctype="multipart/form-data">
    						<div class="form-group">
    							<label for="" class="col-md-4 control-label">Title</label>
    							<div class="col-md-4">
    								<input type="text" placeholder="Title" class="form-control input-md" wire:model="title" >
    							</div>
    						</div>
    						<div class="form-group">
    							<label for="" class="col-md-4 control-label">Sub Title</label>
    							<div class="col-md-4">
    								<input type="text" placeholder="Sub Title" class="form-control input-md" wire:model="subtitle" >
    							</div>
    						</div>
    						<div class="form-group">
    							<label for="" class="col-md-4 control-label">Price</label>
    							<div class="col-md-4">
    								<input type="text" placeholder="Price" class="form-control input-md" wire:model="price" >
    							</div>
    						</div>
    						<div class="form-group">
    							<label for="" class="col-md-4 control-label">Link</label>
    							<div class="col-md-4">
    								<input type="text" placeholder="Link" class="form-control input-md" wire:model="link" >
    							</div>
    						</div>
    						<div class="form-group">
    							<label for="" class="col-md-4 control-label">Image</label>
    							<div class="col-md-4">
    								<input type="file" placeholder="Image" class="form-control input-file" wire:model="newimage" >
    								@if($newimage)
   									<img src="{{$newimage->temporaryUrl()}}" alt="" width="120px" height="120px">
   									@else
   									<img src="{{asset('assets/images/sliders/'.$image)}}" alt="" width="120px" height="120px">
   									@endif
    							</div>
    						</div>
    						<div class="form-group">
    							<label for="" class="col-md-4 control-label">Status</label>
    							<div class="col-md-4">
    								<select name="" id="" wire:model="status" class="form-control">
    									<option value="0">Inactive</option>
    									<option value="1">Active</option>
    								</select>
    							</div>
    						</div>
    						<div class="form-group">
    							<label for="" class="col-md-4 control-label"></label>
    							<div class="col-md-4">
    								<button type="submit" class="btn btn-primary">Update</button>
    							</div>
    						</div>
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
