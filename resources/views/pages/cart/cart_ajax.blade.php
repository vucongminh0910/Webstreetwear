@extends('layout')
@section('content')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<h2 class="title text-center" style="color: #126E22;">Giỏ hàng</h2>
			</div>
			     <?php 
                            $messages=Session::get('messages');
                            if($messages){
                                echo '<span class="text-alert">'.$messages.'</span>';
                                Session::put('messages',NULL);
                            }
                             ?>	
			<div class="table-responsive cart_info">
				<form action="{{url('/update-cart')}}" method="POST">
					{{csrf_field()}}
				<table class="table table-condensed">
					<thead>
						<tr class="menu" style="background: #126E22;">
							<td class="image" style="color:white;">Hình ảnh </td>
							<td class="description" style="color:white;">Tên sản phẩm </td>
							<td class="price" style="color:white;">Giá</td>
							<td class="quantity" style="color:white;">Số lượng</td>
							<td class="total" style="color:white;">Thành tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@if(Session::get('cart')==true)
				@php
					$total = 0;
					@endphp
					@foreach(Session::get('cart') as $key =>$cart)
					@php
					$subtotal = $cart['product_qty'] * $cart['product_gia']; 
					$total+=$subtotal;
					@endphp
						<tr>
							<td class="cart_product">
								<img src="{{asset('public/uploads/product/'.$cart['product_hinhanh'])}}" width="50px" alt="{{$cart['product_name']}}"></a>
							</td>
							<td class="cart_description">
								<h4><a href=""></a></h4>
								<p>{{$cart['product_name']}}</p>
							</td>
							<td class="cart_price">
								<p>{{number_format($cart['product_gia']).' '.'VND'}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
								
						
									<input class="cart_quantity" type="number" min="1" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['product_qty']}}" >
									
									
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
								{{number_format($subtotal).' '.'VND'}}
								</p>
							</td>
							<td class="cart_delete">
							<a class="cart_quantity_delete" href="{{url('/delete-product-cart/'.$cart['session_id'])}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
						<tr>
					
										<td>
											<input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default check_out">
										</td>
									
									<td>
										 <?php 
		                    $customers_id=Session::get('customers_id');
		                    if($customers_id!=NULL){
		                 ?>
			               <a class="btn btn-default check_out" href="{{URL::to('/checkout')}}">Thanh toán</a>
		       			     <?php }else{ ?>
		                 <a class="btn btn-default check_out" href="{{URL::to('/login-checkout')}}">Thanh toán</a>
		                 <?php } ?>
									</td>
									
							<td>
								<div class="total_area">
									<ul>
										<li>Tổng đơn hàng <span> {{number_format($total).' '.'VND'}}</span></li>										
									</ul>
								</div>
							</td>
					
						</tr>
						@else
						<tr>
							<td colspan="5"><center>
									@php
										echo 'Chưa có sản phẩm trong giỏ hàng';
									@endphp
									</center>
							</td>
						</tr>
						@endif
					</tbody>
					
								</form>
				</table>
			</div>
		</div>
	</section>
							    <?php 
                                    $customers_id=Session::get('customers_id');
                                    if($customers_id!=NULL){
                                    
                                    ?>
                                   <a class="btn btn-default check_out" href="{{URL::to('/checkout')}}">Thanh toán</a>
                           
                                 
                                    
                                <?php }else{ ?>
                                  <a class="btn btn-default check_out" href="{{URL::to('/login-checkout')}}">Thanh toán</a>
                                <?php } ?>
                    
							
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection