					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center"><h1>Produk Terlaris</h1></h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
							<?php
							$nou=0;
							  $data=DB::table('stok') 
                  				->leftjoin('vlaris', 'vlaris.idstok', '=', 'stok.id')                                      
                  				->select('stok.*','vlaris.tot as tot')
                  				//->where('stok.jenid','=',3)
                  				->orderby('vlaris.tot', 'desc')                                            
                  				->limit(9)
                  				->get();   

                  				//dd($data);
                  				foreach ($data as $key => $s) {                  				
		                  			    $nou++;
		                  				if ($nou == 1) { ;
		                  				?>
										<div class="item active">											
										<?php } 
										if ($nou == 4 | $nou == 7) { ;
		                  				?>
										<div class="item">											
										<?php } ?>
											
											<div class="col-sm-4">
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center">
															<a href="{{ url('rincistok/'.$s->id) }}"> <img src="{{asset($s->foto)}}" height="151" width="75" alt="" /></a>
															<h2>Rp. {{ number_format($s->hrgjual, 0) }}</h2>
															<p>{{$s->nama}}/ {{$s->tot}} Items</p>
															<a href="{{ url('addchart/'.$s->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
														</div>
														
													</div>
												</div>
											</div>


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
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->

					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center"><h1>Produk Terbaru</h1></h2>
						
						<div id="recommended-item-carousel2" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
							<?php
							$nou=0;
							  $data=DB::table('stok') 
                  				                                  
                  				->select('stok.*')
                  				//->where('stok.jenid','=',3)
                  				->orderby('stok.id', 'desc')                                            
                  				->limit(9)
                  				->get();   

                  				//dd($data);
                  				foreach ($data as $key => $s) {                  				
		                  			    $nou++;
		                  				if ($nou == 1) { ;
		                  				?>
										<div class="item active">											
										<?php } 
										if ($nou == 4 | $nou == 7) { ;
		                  				?>
										<div class="item">											
										<?php } ?>
											
											<div class="col-sm-4">
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center">
															<a href="{{ url('rincistok/'.$s->id) }}"> <img src="{{asset($s->foto)}}" height="151" width="75" alt="" /></a>
															<h2>Rp. {{ number_format($s->hrgjual, 0) }}</h2>
															<p>{{$s->nama}}</p>
															<a href="{{ url('addchart/'.$s->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
														</div>
														
													</div>
												</div>
											</div>


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
							 <a class="left recommended-item-control" href="#recommended-item-carousel2" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel2" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->