<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					 
						 @include('eshop.kategori')
						
					 
				</div>
				<?php
				$data=DB::table('stok') 
                  				                                  
                  				->select('stok.*')
                  				->where('stok.id','=',$idstok)                  			 
                  				->first();   

                  				//dd($data);
                  				    ?>
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{asset($data->foto)}}" alt="" width="269" height="248"/>
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="images/product-details/similar1.jpg" alt="" width="85" height="84" ></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt="" width="85" height="84"></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt="" width="85" height="84"></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt="" width="85" height="84"></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt="" width="85" height="84"></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt="" width="85" height="84"></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt="" width="85" height="84"></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt="" width="85" height="84"></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt="" width="85" height="84"></a>
										</div>
										
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
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{$data->nama}}</h2>
								<p>ID: {{$data->kode}}</p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span>Rp. {{ number_format($data->hrgjual, 0) }}</span>
									<label>Tersedia:</label>
									<input type="text" value="3" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
								<p><b>Ketersediaan:</b> In Stock</p>
								<p><b>Kondisi:</b> Baru</p>
								<p><b>Merek:</b> </p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					 <div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								 <?php
								 $nok=0;
								 $kate=DB::table('kate')                            
	                             ->select('kate.*')                             
	                             ->orderby('kate.id')
	                    		 ->get();
	                    		 $i=0;
	                    		 $jml= count($kate);
	                    		 //dd($jml);
	                    		 for ($i=0; $i <$jml ; $i++) { 
	                    		 	$s[$i]=$kate[$i];	
	                    		 }
	                    		  //dd($s[$i]);
	                    		  $nama='busur';
	                    		  $nama2='arrow';
	                    		 ?>
	                    		 
	                    		 @foreach($kate as $key)

								<li><a href="#{{$nama}}" data-toggle="tab">Tag</a></li>
								<li><a href="#{{$nama2}}" data-toggle="tab">Reviews (5)</a></li>
								@endforeach()
							</ul>
						</div>
						<div class="tab-content">
							 
							
							<div class="tab-pane fade" id="busur" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade active in" id="arrow" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					 @include('eshop.rekom')
					
				</div>
			</div>
		</div>
	</section>