 


<!DOCTYPE html>
<html lang="en">	

	@include('lele.metaform')

	<body class="no-skin">
		@include('lele.nabvar')   

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			 

			  @include('lele.menu')

			<div class="main-content">
				<div class="main-content-inner">					
         				@include('lele.menuataslap')
						<div class="page-content">
					

                        @include('lele.settingdanwarna')

						
				     		<div class="main-content">
								<div class="main-content-inner">
									 
									<div class="page-content">
										 
										<div class="row">
											<div class="col-xs-12">
												<!-- PAGE CONTENT BEGINS 


										 
											 -->
              								
              									@yield('content')
											 
												<!-- 
											</form>	 
											 -->

												<!-- PAGE CONTENT ENDS -->
											</div><!-- /.col -->
										</div><!-- /.row -->
									</div><!-- /.page-content -->
								</div>
							</div><!-- /.main-content -->



					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			
			@include('lele.footer')
			
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>


		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		  @include('lele.jscriptformjual')

		<input type="hidden" name="hidden_delete" id="hidden_delete" value="{{url('crud/deletejualdetil')}}">
	</body>
</html>
  <script type="text/javascript">
    



    function fun_delete(id)
    {
      var conf = confirm("Are you sure want to delete??");
      if(conf){
        var delete_url = $("#hidden_delete").val();
        $.ajax({
          url: delete_url,
          type:"POST", 
          data: {"id":id,_token: "{{ csrf_token() }}"}, 
          success: function(response){
            alert(response);
            location.reload(); 
          }
        });
      }
      else{
        return false;
      }
    }
  </script>