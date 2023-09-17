 <div id="contact-page" class="container">
    	<div class="bg">
	    	 
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Informasi User/Karyawan</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
	    				<form method="post" class="contact-form row" enctype="multipart/form-data" action="<?=URL::to('simpanprofileee')  ?>">
		                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
		                 <input type="hidden" name="idcus" value="{{$idcus}}">
						    	 
				            <div class="form-group col-md-6">Nama
				                <input type="text" name="nama" value="{{$userr->nama}}" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">Email/Login
				                <input type="text" name="email" value="{{$userr->email}}" class="form-control" required="required" placeholder="Email" readonly="true">
				            </div>
				            <div class="form-group col-md-6">Password
				                <input type="password" name="pass"  class="form-control"  >
				            </div>

				            <div class="form-group col-md-6">Alamat
				                <input type="text" name="alamat" value="{{$userr->alamat}}" class="form-control" required="required" >
				            </div>

				               <div class="form-group col-md-6">Telp/HP
				                <input type="text" name="telp" value="{{$userr->telp}}" class="form-control" required="required">
				            </div>
				             <div class="form-group col-md-6">Upload Foto
                               
                                  <input type="file" name="file[]" multiple=""> </br>
                              </div>

				                          
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Simpan">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Informasi Sekolah</h2>
	    				<address>
	    					<p>{{$toko->nama}}</p>
							<p>{{$toko->alamat}}</p>
							<p>{{$toko->kel}}</p>
							<p>{{$toko->kec}}</p>
							<p>{{$toko->kota}}</p>
							<p>{{$toko->kodepos}}</p>
							<p>{{$toko->prop}}</p>							
							<p>{{$toko->telp}}</p>						
							<p>{{$toko->email}}</p>
							<p>{{$toko->web}}</p>
							 
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="{{$toko->fb}}" target="_blank"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href=""><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	