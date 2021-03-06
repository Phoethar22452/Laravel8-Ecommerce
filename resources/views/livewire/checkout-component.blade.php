
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>CkeckOut</span></li>
				</ul>
			</div>
			<style type="text/css">
				.wrap-address-billing .row-in-form input[type=password]{
					font-size: 13px;
				    line-height: 19px;
				    display: inline-block; 
				    height: 43px;
				    padding: 2px 20px;
				    max-width: 300px;
				    width: 100%;
				    border: 1px solid #e6e6e6;
				}
			</style>
			<div class=" main-content-area">
				<form action="" wire:submit.prevent="placeOrder">
					<div class="row">
						<div class="col-md-12">
							<div class="wrap-address-billing">
								<h3 class="box-title">Billing Address</h3>
								{{-- <form action="#" method="get" name="frm-billing"> --}}
								<div class="billing-address">
									<p class="row-in-form">
										<label for="firstname">first name<span>*</span></label>
										<input  type="text" name="firstname" value="" placeholder="Your name" wire:model="firstname">
										@error('firstname') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="lastname">last name<span>*</span></label>
										<input type="text" name="lastname" value="" placeholder="Your last name" wire:model="lastname">
										@error('lastname') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="email">Email Addreess:</label>
										<input  type="email" name="email" value="" placeholder="Type your email" wire:model="email">
										@error('email') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="mobile">Phone number<span>*</span></label>
										<input  type="number" name="mobile" value="" placeholder="10 digits format" wire:model="mobile">
										@error('mobile') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="line1">Line 1:<span>*</span></label>
										<input type="text" name="line1" value="" placeholder="Line 1" wire:model="line1">
										@error('line1') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="line2">Line 2:<span>*</span></label>
										<input type="text" name="line2" value="" placeholder="Line 2" wire:model="line2">
										@error('line2') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="country">Country<span>*</span></label>
										<input  type="text" name="country" value="" placeholder="Your Country" wire:model="country">
										@error('country') <span class="text-danger">{{$message}}</span> @enderror
									</p>

									<p class="row-in-form">
										<label for="province">Province<span>*</span></label>
										<input  type="text" name="province" value="" placeholder="Province" wire:model="province">
										@error('province') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="city">City</label>
										<input  type="text" name="city" value="" placeholder="City" wire:model="city">
										@error('city') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="zipcode">Postcode / ZIP:</label>
										<input  type="number" name="zipcode" value="" placeholder="Your postal code" wire:model="zipcode">
										@error('zipcode') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form fill-wife">
										
										<label class="checkbox-field">
											<input name="different-add"  value="forever" type="checkbox" wire:model="ship_to_different">
											<span>Ship to a different address?</span>
										</label>
									</p>
								{{-- </form> --}}
								</div>
							</div>
						</div>
						@if($ship_to_different)
							<div class="col-md-12">
								<div class="wrap-address-billing">
									<h3 class="box-title">Billing Address</h3>
									{{-- <form action="#" method="get" name="frm-billing"> --}}
									<div class="billing-address">
										<p class="row-in-form">
											<label for="s_firstname">first name<span>*</span></label>
											<input  type="text" name="s_firstname" value="" placeholder="Your name" wire:model="s_firstname">
											@error('s_firstname') <span class="text-danger">{{$message}}</span> @enderror
										</p>
										<p class="row-in-form">
											<label for="s_lastname">last name<span>*</span></label>
											<input type="text" name="s_lastname" value="" placeholder="Your last name" wire:model="s_lastname">
											@error('s_lastname') <span class="text-danger">{{$message}}</span> @enderror
										</p>
										<p class="row-in-form">
											<label for="s_email">Email Addreess:</label>
											<input  type="email" name="s_email" value="" placeholder="Type your email" wire:model="s_email">
											@error('s_email') <span class="text-danger">{{$message}}</span> @enderror
										</p>
										<p class="row-in-form">
											<label for="s_mobile">Phone number<span>*</span></label>
											<input  type="number" name="s_mobile" value="" placeholder="10 digits format" wire:model="s_mobile">
											@error('s_mobile') <span class="text-danger">{{$message}}</span> @enderror
										</p>
										<p class="row-in-form">
											<label for="s_line1">Line 1:<span>*</span></label>
											<input type="text" name="s_line1" value="" placeholder="Line 1" wire:model="s_line1">
											@error('s_line1') <span class="text-danger">{{$message}}</span> @enderror
										</p>
										<p class="row-in-form">
											<label for="s_line2">Line 2:<span>*</span></label>
											<input type="text" name="s_line2" value="" placeholder="Line 2" wire:model="s_line2">
											@error('s_line2') <span class="text-danger">{{$message}}</span> @enderror
										</p>
										<p class="row-in-form">
											<label for="s_country">Country<span>*</span></label>
											<input  type="text" name="s_country" value="" placeholder="Your Country" wire:model="s_country">
											@error('s_country') <span class="text-danger">{{$message}}</span> @enderror
										</p>

										<p class="row-in-form">
											<label for="s_province">Province<span>*</span></label>
											<input  type="text" name="s_province" value="" placeholder="Province" wire:model="s_province">
											@error('s_province') <span class="text-danger">{{$message}}</span> @enderror
										</p>
										<p class="row-in-form">
											<label for="s_city">City</label>
											<input  type="text" name="s_city" value="" placeholder="City" wire:model="s_city">
											@error('s_city') <span class="text-danger">{{$message}}</span> @enderror
										</p>
										<p class="row-in-form">
											<label for="s_zipcode">Postcode / ZIP:</label>
											<input  type="number" name="s_zipcode" value="" placeholder="Your postal code" wire:model="s_zipcode">
											@error('s_zipcode') <span class="text-danger">{{$message}}</span> @enderror
										</p>
										<p class="row-in-form fill-wife">
											
											<label class="checkbox-field">
												<input name="different-add"  value="forever" type="checkbox">
												<span>Ship to a different address?</span>
											</label>
										</p>
								{{-- </form> --}}
									</div>
								</div>
							</div>
						@endif
					</div>
					
					<div class="summary summary-checkout">

						<div class="summary-item payment-method">
							@if($paymentmode == "card")
							<h4 class="title-box">Payment Method</h4>
							<div class="wrap-address-billing">
								@if(Session::has('stripe_error'))
									<div class="alert alert-danger" role="alert">
										{{Session::get('stripe_error')}}
									</div>
								@endif
								<p class="row-in-form fill-wife">
									<label for="card-no">Card No<span>*</span></label>
										<input type="text" name="card-no" value="" placeholder="Card No" wire:model="card_no">
										@error('card_no') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form fill-wife">
									<label for="exp-month">Expiry Month<span>*</span></label>
										<input type="text" name="exp-month" value="" placeholder="MM" wire:model="exp_month">
										@error('exp_month') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form fill-wife">
									<label for="exp-year">Expiry Year<span>*</span></label>
										<input type="text" name="exp-year" value="" placeholder="YYYY" wire:model="exp_year">
										@error('exp_year') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form fill-wife">
									<label for="cvc">CVC<span>*</span></label>
										<input type="password" name="cvc" value="" placeholder="CVC" wire:model="cvc">
										@error('cvc') <span class="text-danger">{{$message}}</span> @enderror
								</p>
							</div>
							@endif
							<div class="choose-payment-methods">
								<label class="payment-method">
									<input name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model="paymentmode">
									<span>Cash On Delivery</span>
									<span class="payment-desc">Order Now Pay On Delivery</span>
								</label>
								<label class="payment-method">
									<input name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model="paymentmode">
									<span>Debit / Credit Card</span>
									<span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
								</label>
								<label class="payment-method">
									<input name="payment-method" id="payment-method-paypal" value="paypal" type="radio" wire:model="paymentmode">
									<span>Paypal</span>
									<span class="payment-desc">You can pay with your credit</span>
									<span class="payment-desc">card if you don't have a paypal account</span>
								</label>
								@error('paymentmode') <span class="text-danger">{{$message}}</span> @enderror
							</div>
							@if(session()->has('checkout'))
							<p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">${{session()->get('checkout')['total']}}</span></p>
							@endif
							{{-- <a href="thankyou.html" class="btn btn-medium">Place order now</a> --}}
							<button type="submit" class="btn btn-primary">Place order now</button>
						</div>
						<div class="summary-item shipping-method">
							<h4 class="title-box f-title">Shipping method</h4>
							<p class="summary-info"><span class="title">Flat Rate</span></p>
							<p class="summary-info"><span class="title">Fixed $</span></p>
							
						</div>
					</div>
				</form>
				

			</div><!--end main content area-->
		</div><!--end container-->

	</main>
