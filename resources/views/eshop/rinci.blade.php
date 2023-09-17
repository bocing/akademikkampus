<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					 
						 @include('eshop.kategori')
						
					 
				</div>
				<?php
				$data=DB::table('stok') 
                  				->leftjoin('kondisi', 'kondisi.id', '=', 'stok.kondisiid')                                             
                  				->select('stok.*','kondisi.nama as namakondisi')
                  				->where('stok.id','=',$idstok)                  			 
                  				->first();   

                  				//dd($data);
                  				    ?>
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{asset($data->foto)}}" alt="" width="269" height="248"/>
								 
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
								    	<?php
										$nou=0;
										  $datax=DB::table('stok') 
			                  				->leftjoin('vlaris', 'vlaris.idstok', '=', 'stok.id')                                      
			                  				->select('stok.*','vlaris.tot as tot')
			                  				//->where('stok.jenid','=',3)
			                  				->orderby('vlaris.tot', 'desc')                                            
			                  				->limit(9)
			                  				->get();   

			                  				//dd($data);
			                  				foreach ($datax as $key => $s) {                  				
				                  			    $nou++;
				                  				if ($nou == 1) { ;
				                  				?>
												<div class="item active">											
												<?php } 
												if ($nou == 4 | $nou == 7) { ;
				                  				?>
												<div class="item">											
												<?php } ?>

										  			<a href="{{ url('rincistok/'.$s->id) }}"><img src="{{asset($s->foto)}}" height="84" width="84" alt="" ></a>
										  
										<?php	
										if ($nou == 3 ) { 
		                  				?>
										</div>
										    <?php }  
										if ($nou == 6 | $nou == 9) { 
		                  				?>
										</div>
										    <?php }  ?>	 
										
										<?php  } ?>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
<?php 
 $saldos=DB::table('vsaldo7')                                                                                                          
                  ->select('vsaldo7.saldo as saldo')                   
                  ->where('vsaldo7.idstok','=',$idstok)
                  ->first();
                  if ($saldos!=null){
                  $sal=$saldos->saldo;
             	   }else{$sal=0;}
                  ?>

						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="{{ URL::asset('images/new.jpg')}}" class="newarrival" alt="" />
								<h2>{{$data->nama}}</h2>
								<p>ID: {{$data->kode}}</p>
								<img src="{{ URL::asset('images/rating.png')}}" alt="" />
								<span>
									<span>Rp. {{ number_format($data->hrgjual, 0) }}</span>
									<label>Tersedia:</label>
									<input type="text" value="{{$sal}}" />
									<div><a href="{{ url('addchart/'.$data->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></div>
								</span>
								<?php if ($sal > 0 ) { $ter="Tersedia"; }else{$ter="Stok Habis";} 
									?>
								<p><b>Ketersediaan :</b> {{$ter}}</p>
								<p><b>Kondisi :</b> {{$data->namakondisi}}</p>
								<p><b>Merek :</b>{{$data->merek}} </p>
								<p><b>Dapat dipakai pada :</b>{{$data->bisa}} </p>

								<p>Produk Dapat Dibeli Langsung di Marketplace dibawah ini </p>
								<br/>
								<a href="https://www.bukalapak.com/p/motor-471/aksesoris-motor/headlamp-stoplamp-440/dsykls-jual-headlight-assy-lampu-depan-reflektor-bohlam-supra-x-125-fi-33100k41n01" target="_blank"><img src="{{ URL::asset('images/bl.png')}}" width="50px" height="50px" alt="" /></a>
								<a href="https://www.bukalapak.com/p/motor-471/aksesoris-motor/headlamp-stoplamp-440/dsykls-jual-headlight-assy-lampu-depan-reflektor-bohlam-supra-x-125-fi-33100k41n01" target="_blank"><img src="{{ URL::asset('images/tp.jpg')}}" width="50px" height="50px" alt="" /></a>
								<a href="https://www.bukalapak.com/p/motor-471/aksesoris-motor/headlamp-stoplamp-440/dsykls-jual-headlight-assy-lampu-depan-reflektor-bohlam-supra-x-125-fi-33100k41n01" target="_blank"><img src="{{ URL::asset('images/sp.png')}}" width="50px" height="50px" alt="" /></a>
								<a href="https://www.bukalapak.com/p/motor-471/aksesoris-motor/headlamp-stoplamp-440/dsykls-jual-headlight-assy-lampu-depan-reflektor-bohlam-supra-x-125-fi-33100k41n01" target="_blank"><img src="{{ URL::asset('images/lz.png')}}" width="50px" height="50px" alt="" /></a>
								 
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
				 
					 @include('eshop.rekom')
					
				</div>
			</div>
		</div>
	</section>