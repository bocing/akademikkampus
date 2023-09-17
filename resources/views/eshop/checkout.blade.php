	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Step1</h2>
			</div>
			 
			 
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Informasi Penjual</p>
							<form>
								<input type="text" value="{{$toko->nama}}" disabled="true">
								<input type="text" value="{{$toko->alamat}}" disabled="true">
								<input type="text" value="{{$toko->kel}}" disabled="true">
								<input type="text" value="{{$toko->kec}}" disabled="true">
								<input type="text" value="{{$toko->kota}}" disabled="true">
								<input type="text" value="{{$toko->kodepos}}" disabled="true">
								<input type="text" value="{{$toko->prop}}" disabled="true">
								<input type="text" value="{{$toko->telp}}" disabled="true">
								<input type="text" value="{{$toko->email}}" disabled="true">
							 
							</form>
							
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form>
									<input type="text" value="Nama" disabled="true">									
									<input type="text" value="Jalan/Komplek " disabled="true">
									<input type="text" value="Kelurahan/Desa" disabled="true">
									<input type="text" value="Kecamatan" disabled="true">
									<input type="text" value="Kab/Kota" disabled="true">
									<input type="text" value="Kode Pos" disabled="true">
									<input type="text" value="Propinsi" disabled="true">
									<input type="text" value="Telp/HP" disabled="true">
									<input type="text" value="email" disabled="true">
								</form>
							</div>
							<div class="form-two">
								<form>
								<input type="text" value="{{$userr->nama}}" disabled="true">
								<input type="text" value="{{$userr->alamat}}" disabled="true">
								<input type="text" value="{{$userr->kel}}" disabled="true">
								<input type="text" value="{{$userr->kec}}" disabled="true">
								<input type="text" value="{{$userr->kota}}" disabled="true">
								<input type="text" value="{{$userr->kodepos}}" disabled="true">
								<input type="text" value="{{$userr->prop}}" disabled="true">
								<input type="text" value="{{$userr->telp}}" disabled="true">
								<input type="text" value="{{$userr->email}}" disabled="true">								 
								<a class="btn btn-primary" href="{{url('/profil')}}">Update Profil</a>			
								<a class="btn btn-primary" href="">Continue</a>
								</form>
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="order-message">
							<p>Catatan Pesan</p>
							<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
							 
						</div>	
					</div>	

					
				</div>

			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
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
							<td class="cart_total" align="right">
								<p class="cart_total_price">{{ number_format($st, 0) }}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete"  href="{{url('/delchart/'.$abc->idstok)}}" 
								{{ URL::asset('/delchart/'.$abc->idstok) }}" onclick="return confirm('Anda Yakin Menghapus?')"  class="red" 

								><i class="fa fa-times"></i></a>
							</td>
						</tr>
					  @endforeach() 	
					 
						<tr>
							<td colspan="3">&nbsp;</td>
							<td colspan="3">
								<table class="table table-condensed total-result">
									<tr>
										<td><h4>Total Pesanan Sebelum Ongkir</h4></td>
										<td align="right"><h4>Rp. {{ number_format($tot, 0) }}</h4></td>
									</tr>
									 
								  
								</table>
							</td>
						</tr>

						 
					</tbody>
				</table>
			</div>
			 <div class="payment-options">
					<span>
						<label><input type="checkbox">Bank Transfer</label>
					</span>
			
			</div>

		</div>
	</section> <!--/#cart_items-->
