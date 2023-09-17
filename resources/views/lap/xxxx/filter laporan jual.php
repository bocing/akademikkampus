

 <form method="post" enctype="multipart/form-data" action="{{ route('celaprkpjual',['download'=>'pdf']) }}">
 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
								<table width="100%"  border="0">
  <tr>
    <td width="30%" height="219">&nbsp;</td>
    <td width="70%">
    	
									<div class="col-xs-6 col-sm-6 pricing-box">
										<div class="widget-box widget-color-orange">
											<div class="widget-header">
												<h5 class="widget-title bigger lighter">Filter Rekapitulasi Penjualan</h5>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<ul class="list-unstyled spaced2">
														<div class="col-sm-6" style="background-color:white;"> 
																			    <input class="easyui-datebox" label="Tanggal :" id="tgl1" name="tgl1"  labelPosition="top" data-options="formatter:myformatter,parser:myparser" style="width:100%;"></div>
																			  
																			  <div class="col-sm-6" style="background-color:white;"> 
																			    <input class="easyui-datebox" label="Tanggal :" id="tgl2" name="tgl2"   labelPosition="top" data-options="formatter:myformatter,parser:myparser" style="width:100%;"></div>
																			  </div> 
													</ul>

													<hr />
													<div class="price">
														 
														 
													</div>
												</div>

												<div>
												 

													<button href="" class="btn btn-block btn-warning">
														<i class="ace-icon fa fa-print"></i>
														<span>Proses</span>
													</a>
												</div>
											</div>
										</div>
									</div>	

    </td>
    <td width="0%">&nbsp;</td>
  </tr>
</table>			
												 
</form>
 