<!DOCTYPE html>
<html lang="en">
  
  @include('lele.meta')

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


            <div class="row">
              <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
               
                <div class="row">
                  <div class="col-xs-12">
                     
                     <td><a role="button" class="btn btn-info btn-sm pull-right" href="{{ action('AdminController@formjual') }}"><i class="ace-icon fa fa-search-plus bigger-130"></i>
                   Tambah 
                </a></td>

                    <div class="clearfix">
                      <div class="pull-right tableTools-container"></div>
                      
                        <div class="pull-left ">
                       <form>
                          <input class="easyui-datebox" label="Tanggal :" id="tglbel" name="tglbel" value="" labelPosition="top" data-options="formatter:myformatter,parser:myparser" style="width:100%;"></div>
                       </form>   


                      </div>


                      </div>
                    </div>
                     

                    <!-- div.table-responsive -->

                    <!-- div.dataTables_borderWrap -->
                    
                     @include('jual.isitabelmaster')   



                  </div>
                </div>

               @include('lele.modal')  

                <!-- PAGE CONTENT ENDS -->
              </div><!-- /.col -->
            </div><!-- /.row -->


          </div><!-- /.page-content -->
        </div>
      </div><!-- /.main-content -->
     

      <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
      </a>
    

    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
   
     @include('lap.jscript')

  </body>
</html>
