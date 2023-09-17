  

 
  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h4>{{$judulutama}}</h4>
              </div>
              
              
            </div>

			<table width="100%"  border="0">
			  <tr>
			    <td width="30%" height="219">&nbsp;</td>
			    <td width="70%">
            
		       <form method="post" enctype="multipart/form-data" action="{{ route('celapkas',['download'=>'pdf']) }}">
 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
		            <div class="row">
		              <div class="col-md-6 col-xs-12">
		                <div class="x_panel">
		                  <div class="x_title">
		                    <h2>Filter Laporan</h2>
		                    <ul class="nav navbar-right panel_toolbox">
		                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
		                      </li>
		                       
		                      <li><a class="close-link"><i class="fa fa-close"></i></a>
		                      </li>
		                    </ul>
		                    <div class="clearfix"></div>
		                  </div>



		                  <div class="x_content">
		           
		                     
		                        <div class="col-sm-6" style="background-color:white;"> 
								    <input class="easyui-datebox" label="Tanggal :" id="tgl1" name="tgl1"   labelPosition="top" data-options="formatter:myformatter,parser:myparser" style="width:100%;"></div>
								  
								  <div class="col-sm-6" style="background-color:white;"> 
								    <input class="easyui-datebox" label="Tanggal :" id="tgl2" name="tgl2"  labelPosition="top" data-options="formatter:myformatter,parser:myparser" style="width:100%;"></div>
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
	             
	            </form>

            	 </td>
    <td width="0%">&nbsp;</td>
  </tr>
</table>	
           </div>
          </div>
        </div>
        <!-- /page content -->







 