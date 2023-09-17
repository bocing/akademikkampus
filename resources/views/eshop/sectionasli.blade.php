

<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					@include('eshop.kategori')
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Detail Produk</h2>
						
							 <div class="posts endless-pagination" data-next-page="{{$posts->nextPageUrl()}}"> 										 								 					 
						 		@foreach ($posts as $key2=>$post ) 
										 
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{asset($post->foto)}}" alt="" width="260" height="240" />
													<h2>Rp. {{ number_format($post->hrgjual, 0) }}</h2>
													<p>{{$post->nama}}</p>
													<a href="{{ url('masukkeranjang/'.$post->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												<div class="product-overlay">
													<div class="overlay-content">
													<a href="{{ url('rincistok/'.$post->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Rincian</a>
														<h3>Rp. {{ number_format($post->hrgjual, 0) }}</h3>
														<p>{{$post->nama}}</p>
														<a href="{{ url('addchart/'.$post->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													</div>
												</div>
												<img src="{{asset('images/new.png')}}" class="new" alt="" />
										</div>
										<div class="choose">
											<ul class="nav nav-pills nav-justified">
												<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
												<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
											</ul>
										</div>
									</div>
								</div>
								@endforeach()
 							</div>	
							
							<div class="loading" style="text-align:center">
								<img src="images/200.gif">
							</div>
					</div><!--features_items-->
				 

				 
					<!--/category-tab
					======================================================
					--> 
					
					

				 
			   </div>			
				
			</div>

		</div>
		 
	</section>
