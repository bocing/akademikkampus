
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{ url('/') }}">Etalase</a></li>
				  <li class="active">Keranjang Belanja</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					 {{ csrf_field() }}
                     <?php $no=1; $tot=0;$st=0;?>
                     @foreach($data as $abc) 
                     	<?php ; 

                     	$st= $abc->hrgjual * $abc->jml;
                     	$tot=$tot+$st;
                     	?>

						<tr>
							<td class="cart_product">
								<a href=""><img src="{{asset($abc->foto)}}" width="70" height="70" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$abc->nama}}</a></h4>
								<p>ID: {{$abc->kode}}</p>
							</td>
							<td class="cart_price">
								<p>{{ number_format($abc->hrgjual, 0) }}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="{{url('/addchart/'.$abc->idstok)}}"> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="{{ number_format($abc->jml, 0) }}" autocomplete="off" size="2">
									<a class="cart_quantity_down" href="{{url('/del1chart/'.$abc->idstok)}}"> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{ number_format($st, 0) }}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete"  href="{{url('/delchart/'.$abc->idstok)}}" 
								{{ URL::asset('/delchart/'.$abc->idstok) }}" onclick="return confirm('Anda Yakin Menghapus?')"  class="red" 

								><i class="fa fa-times"></i></a>
							</td>
						</tr>
					  @endforeach() 	
					 
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			 
			<div class="row">
				 
				<div class="col-sm-12">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>Rp. {{ number_format($tot, 0) }}</span></li>
							 
							<li>Shipping Cost <span>Akan dikonfirmasi Admin</span></li>
							<li>Total <span>Rp. {{ number_format($tot, 0) }}</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="{{url('/checkout')}}">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
