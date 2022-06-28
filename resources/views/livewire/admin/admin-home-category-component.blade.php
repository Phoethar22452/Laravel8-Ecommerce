<div>
    <div class="container" style="padding:30px 0;"> 
    	<div class="row">
    		<div class="col-md-12">
    			<div class="panel panel-default">
    				<div class="panel-heading">
    					<div class="row">
    						<div class="col-md-6" style="padding-top:8px!important;">
                           		Manage Home Categories
                        	</div>
                        	<div class="col-md-6">
                           		{{-- <a href="{{route('admin.homeslider')}}" class="btn btn-success pull-right">All Sliders</a> --}}
                        	</div>
    					</div>
    				</div>
    				<div class="panel-body">
    					@if(Session::has('message'))
    						<div class="alert alert-success" role="alert">	
    							{{Session::get('message')}}
    						</div>
    					@endif
    					<form action="" class="form-horizontal" wire:submit.prevent="updateHomeCategory" method="POST" enctype="multipart/form-data">
    						<div class="form-group">
    							<label for="" class="col-md-4 control-label">Choose Categories</label>
    							<div class="col-md-4" wire:ignore>
    								<select name="categories[]" id="" class="sel_categories form-control" multiple="multiple" wire:model="selected_categories">
    									@foreach($categories as $category)
    									<option value="{{$category->id}}">{{$category->name}}</option>
    									@endforeach
    								</select>
    							</div>
    						</div>    						
    						<div class="form-group">
    							<label for="" class="col-md-4 control-label">No Of Products</label>
    							<div class="col-md-4">
    								<input type="text" placeholder="No Of Products" class="form-control input-md" wire:model="numberofproducts">
    							</div>
    						</div>
    						<div class="form-group">
    							<label for="" class="col-md-4 control-label"></label>
    							<div class="col-md-4">
    								<button type="submit" class="btn btn-primary">Submit</button>
    							</div>
    						</div>
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
@push('scripts')
	<script>
		$(document).ready(function(){
			$('.sel_categories').select2();
			$('.sel_categories').on('change',function(){
				var data = $('.sel_categories').select2('val');
				@this.set('selected_categories',data);
			});
		});
	</script>
@endpush