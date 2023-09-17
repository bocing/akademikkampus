<div class="left-sidebar">
						<h2>Category</h2>

						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						<?php
							 $kate=DB::table('kate')                            
                             ->select('kate.*')                             
                             ->orderby('kate.id')
                    		 ->get();
                    	 foreach ($kate as $key) {   
                    	 	$induk=$key->nama;
                    	 	$induk2='#'.$induk;
                    	 	//dd($induk2);
						 ?>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="{{$induk2}}">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											{{$key->nama}}
										</a>
									</h4>
								</div>
								<div id="{{$induk}}" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
										<?php
											 $stok=DB::table('stok')                            
				                             ->select('stok.*')                             
				                             ->where('stok.katid', '=', $key->id)  
				                             ->orderby('stok.id')
				                    		 ->get();
				                    	 foreach ($stok as $key2) 
				                    	   {   
										 ?>		
												<li><a href="{{ url('rincistok/'.$key2->id) }}">{{$key2->nama}}
											 </a></li>
											 
										 <?php } ?>	
										</ul>
									</div>
								</div>
							</div>
							<?php } ?>

							 
						</div><!--/category-products-->
									
						 
						<div class="price-range"><!--price-range-->
							<h2>Range Harga</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="2500000" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">Rp 0</b> <b class="pull-right">Rp.2500.000</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="eshop/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>