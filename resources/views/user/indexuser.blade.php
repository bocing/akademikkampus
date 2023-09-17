 @extends('master.index', ['data' => $data2])
@section('content') 
 

		 <form method="GET" action="{{ action('SearchController@cariuser') }}">
		    <input type="text" name="name"><i class="fa fa-search"></i>
		   Cari Nama 
		</form>

<td><a role="button" class="btn btn-primary btn-md pull-right" href="{{ action('AdminController@formuser') }}"><i class ="glyphicon glyphicon-screenshot"></i>
		   Tambah 
		</a></td>

</form>
<p style="color: red"><?php echo Session::get('message'); ?></p>
			<table class="table table-bordered table-hover"  width="100%" border="1">
				      <thead>
				         <th align="center">Email</th>	
				         <th align ="center">Nama</th>
				         <th align="center">Role</th>	

				         <th align="center">Action</th>
				         </thead>
				         <tbody>

				                        @foreach($data as $abc)
				                        <tr>
				                        	<td>{{$abc->email}}</td>
					                        <td>{{$abc->nama}}</td>
					                        <td>{{$abc->rolename}}</td>					                        
					                        
					                        
				                        	<td>
				                        	<a href="<?php echo 'edituser/'.$abc->id ?>" class="label label-sm label-success"><i class =" glyphicon glyphicon-save"></i>Edit</a>

											<a href="<?php echo 'deleteuser/'.$abc->id ?>" onclick="return confirm('Are you sure?')" class="label label-sm label-warning"><i class =" glyphicon glyphicon-remove"></i>Hapus</a>
									  		 
				                        	 
				                        	
				                        	</td>
				                        </tr>	
				                        @endforeach()
				                        {!! $data->render() !!}
				                       
				                        </tbody>
			</table>
		                
		                	
 
            	
@stop	



