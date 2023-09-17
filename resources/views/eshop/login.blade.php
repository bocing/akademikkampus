<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<?php  if($pesan=='') {?>
						<h2>Form Masuk</h2> <?php }else{ ?>
								<h2>{{$pesan}}</h2> 
							<?php } ?>
						<form  method="POST" role="form" action="{{ url(action('LoginController@postLogin')) }}">
							{!! csrf_field() !!}
							
							<input type="text" name="email" placeholder="No HP" />
							<input type="password" name ="password" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Masuk</button>
						</form>
					</div><!--/login form-->
				</div>
				 
			</div>
		</div>
</section><!--/form-->