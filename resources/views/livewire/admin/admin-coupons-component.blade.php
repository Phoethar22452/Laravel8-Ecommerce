<div>
	<style>
		nav svg{
			height:20px;
		}
		nav .hidden{
			display: block!important;
		}
	</style>
   	<div class="container" style="padding:30px 0">
   		<div class="row">
   			<div class="col-md-12">
   				<div class="panel panel-default">
   					<div class="panel-heading">
   						<div class="row" style="box-sizing: border-box!important;">
                        <div class="col-md-6" style="padding-top:8px!important;">
                           All Coupons
                        </div>
                         <div class="col-md-6">
                           <a href="{{route('admin.addcoupon')}}" class="btn btn-success pull-right">Add New Coupon</a>
                        </div>
                     </div>
   					</div>
   					<div class="panel-body">
                     @if(Session::has('message'))
                     <div class="alert alert-success" role="alert">  
                        {{Session::get('message')}}
                     </div>
                     @endif
   						<table class="table table-striped">
   							<thead>
   								<tr>
   									<th>Id</th>
   									<th>Code</th>
   									<th>Type</th>
   									<th>Value</th>
                              <th>Cart Value</th>
                              <th>Expire Date</th>
                              <th>Action</th>
   								</tr>
   								<tbody>
   									@foreach($coupons as $coupon)
                                    <tr>
                                    	<td>{{$coupon->id}}</td>
                                    	<td>{{$coupon->code}}</td>
                                    	<td>{{$coupon->type}}</td>
                                       @if($coupon->type == 'fixed')
                                          <td>${{$coupon->value}}</td>
                                       @else
                                          <td>{{$coupon->value}} %</td>
                                       @endif
                                       
                                       <td>${{$coupon->cart_value}}</td>
                                       <td>{{$coupon->expire_date}}</td>
                                       <td>
                                          <a href="{{route('admin.editcoupon',['coupon_id'=>$coupon->id])}}"><i  class="fa fa-edit fa-2x"></i></a>&nbsp;
                                          <a href="#" wire:click.prevent="deleteCoupon({{$coupon->id}})" style="margin-right:10px;" onclick="confirm('Are You sure,You want to delete this coupon?')||event.stopImmediatePropagation()"><i  class="fa fa-trash fa-2x text-danger"></i></a>
                                       </td>
                                    </tr>
   									@endforeach
   								</tbody>
   							</thead>
   						</table>
   						
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
</div>
