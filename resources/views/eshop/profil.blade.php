 <div id="contact-page" class="container">
    	<div class="bg">
	    	 
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Informasi Pelanggan</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
	    				<form method="post" class="contact-form row" enctype="multipart/form-data" action="<?=URL::to('simpanprofil')  ?>">
		                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
		                 <input type="hidden" name="idcus" value="{{$idcus}}">
						    	 
				            <div class="form-group col-md-6">Nama Pelanggan
				                <input type="text" name="nama" value="{{$userr->nama}}" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">Nama Jalan/Komplek
				                <input type="text" name="alamat" value="{{$userr->alamat}}" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-6">Kelurahan/Desa
				                <input type="text" name="kel" value="{{$userr->kel}}" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-6">Kecamatan
				                <input type="text" name="kec" value="{{$userr->kec}}" class="form-control" required="required">
				            </div>
				            <div class="form-group col-md-6">Kota/Kabupaten
				                <input type="text" name="kota" value="{{$userr->kota}}" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-6">Kode Pos
				                <input type="text" name="kodepos" value="{{$userr->kodepos}}" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-6">Propinsi
				                <input type="text" name="prop" value="{{$userr->prop}}" class="form-control" required="required" placeholder="Email">
				            </div>
				               <div class="form-group col-md-6">Telp/HP
				                <input type="text" name="telp" value="{{$userr->telp}}" class="form-control" required="required" placeholder="Email">
				            </div>
				               <div class="form-group col-md-6">Email
				                <input type="text" name="email" value="{{$userr->email}}" class="form-control" required="required" placeholder="Email">
				            </div>
				                          
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Simpan">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Informasi Penjual</h2>
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
	