<!DOCTYPE html>
<html lang="en">
  
  @include('lele.meta')

  <body class="no-skin">
    
    @include('lele.nabvar')   



    <div class="main-container ace-save-state" id="main-container">
      <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
      </script>


      @include('lele.menuuser')
   
      <div class="main-content">
        <div class="main-content-inner">
 

          <div class="page-content">
           
            @include('lele.settingdanwarna')

            @include('lele.isi')


          </div><!-- /.page-content -->
        </div>
      </div><!-- /.main-content -->
     

      <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
      </a>
    

    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
   
     @include('lele.jscriptmenu')

  </body>
</html>
