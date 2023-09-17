 
<?php 
//echo "string :$tambah";
/* 
$nobel =$nobel ;
$tglbel =$tglbel ;
$idsup =$idsup ;
$idstok =$idstok ;
$ket =$ket ;
$jml =$jml ;
///$total =$total ;
$idter =$idter ;
$harga =$harga ;
*/
 

//$pemasokid = set_value('kelasid', $data->kelasid); 
?> 

@extends('jual.formmaster', ['data' => '$data2'])
@section('content') 
 
											
												<div class="row">									 
														<div class="widget-box transparent">
															<div class="widget-header widget-header-large">
																<h3 class="widget-title grey lighter">
																	<i class="ace-icon fa fa-leaf green"></i>
																	Filter Laporan Penjualan Penjualan
																</h3>

																<div class="widget-toolbar no-border invoice-info">
																	<div style="margin-bottom:20px">
														             <form method="get" enctype="multipart/form-data" action="<?=URL::to('jual')  ?>">
																		<button class="btn btn-xs btn-success pull-right">
																		<span class="bigger-110">Keluar</span>
																		<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
																		</button>
																	</form>
																		
														            </div>
																</div>

																 


																<div class="widget-toolbar no-border invoice-info">
																	<div style="margin-bottom:20px">
														             
																		
																	<a class="red" href="{{ route('cefak',['download'=>'pdf','nobel'=>'$nobel']) }}">
									              <i class="ace-icon fa fa-external-link"></i>
									            </a>
																		 
														            </div>
																</div>

																 


															</div>	
														<form method="post" enctype="multipart/form-data" action="<?=URL::to('savejual')  ?>">
														<input type="hidden" name="_token" value="{!! csrf_token() !!}">
															<div class="widget-body" >
																<div class="widget-main padding-24" >

																	<div class="row" style="background-color:lavenderblush;">
																		 
																		<div class="col-sm-6">
																			 <div class="row">
																			    <div class="col-sm-6" style="background-color:lavenderblush;"> <b>Nama Pelanggan</b><br/>
				                        													<input id="cp" style="width :250px" type="text" id="idsup" name="idsup" placeholder="Nama Pelanggan"  value="<?php   ?>"></input>
																					<li class="divider"></li></div>

																			    <div class="col-sm-6" style="background-color:lavenderblush;"> 
																			    <input class="easyui-datebox" label="Tanggal :" id="tglbel" name="tglbel" value="<?  ?>" labelPosition="top" data-options="formatter:myformatter,parser:myparser" style="width:100%;"></div>
																			  </div>


																			 
																		</div><!-- /.col -->
																	</div><!-- /.row -->
																	</form>
																	<br/>

																	 

																 
																	 
																</div>
															</div>

														</div>
												</div>

									<div class="col-xs-6 col-sm-9 pricing-box">
										<div class="widget-box widget-color-orange">
											<div class="widget-header">
												<h5 class="widget-title bigger lighter">Starter Package</h5>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<ul class="list-unstyled spaced2">
														<div class="col-sm-4" style="background-color:white;"> 
																			    <input class="easyui-datebox" label="Tanggal :" id="tglbel" name="tglbel" value="<?  ?>" labelPosition="top" data-options="formatter:myformatter,parser:myparser" style="width:100%;"></div>
																			  
																			  <div class="col-sm-4" style="background-color:white;"> 
																			    <input class="easyui-datebox" label="Tanggal :" id="tglbel" name="tglbel" value="<?  ?>" labelPosition="top" data-options="formatter:myformatter,parser:myparser" style="width:100%;"></div>
																			  </div> 
													</ul>

													<hr />
													<div class="price">
														 
														 
													</div>
												</div>

												<div>
													<a href="#" class="btn btn-block btn-warning">
														<i class="ace-icon fa fa-shopping-cart bigger-110"></i>
														<span>Buy</span>
													</a>
												</div>
											</div>
										</div>
									</div>

								 
								 

@stop
