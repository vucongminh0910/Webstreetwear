@extends('layout')
@section('content')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<h2 class="title text-center" style="color: #126E22;">Giỏ hàng</h2>
			</div>

			<div class="table-responsive cart_info">
				<form action="" method="POST">
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
			
						<tr>
							<td class="cart_product">
								<img src="" width="50px" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""></a></h4>
								<p></p>
							</td>
							<td class="cart_price">
								<p></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
								
						
									<input class="cart_quantity" type="number" min="1" name="" value="" >
									
									
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">

								</p>
							</td>
							<td class="cart_delete">
							<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
					
						<tr>
					
										<td>
											<input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default check_out">
										</td>
									
									<td>
									
			               <a class="btn btn-default check_out" href="{{URL::to('/checkout')}}">Thanh toán</a>
		       			    
		                 <a class="btn btn-default check_out" href="{{URL::to('/login-checkout')}}">Thanh toán</a>
		                
									</td>
									
							<td>
								<div class="total_area">
									<ul>
										<li>Tổng đơn hàng <span></span></li>										
									</ul>
								</div>
							</td>
					
						</tr>
					
						<tr>
							<td colspan="5"><center>
							
									</center>
							</td>
						</tr>
					
					</tbody>
					
								</form>
				</table>
			</div>
		</div>
	</section>
							
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection