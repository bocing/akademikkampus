 
@extends('master.index', ['data' => '$data2'])
@section('content') 
 
<html>
<head>
    <title>Form Marchant</title>
</head>
<p style="color: red">{{$errors->first('nama')}} </p>
<p style="color: red">{{$errors->first('email')}} </p>
<body>

    <form method="post" enctype="multipart/form-data" action="<?=URL::to('updateuser')  ?>">
        
    <table width="100%" height="80%"  border="0">
    <tr>
    <td width="44%">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <input type="hidden" name="rolesid" value="1">
        <input type="hidden" name="id" value="<?=$abc->id?>">
        Nama
        <input type="text" name="nama"  class="form-control" value="<?=$abc->nama?>"><br/>
         Email
        <input type="email" name="email"  class="form-control" value="<?=$abc->email?>"><br/>
        Password
        <input type="Password" name="password"  class="form-control" value="" >Isi Password Kalau Ingin Mereset<br/>       
    
        
    </td>
    <td width="2%">
    </td>
    <td width="44%">

        -
        
    </td>
  </tr>
</table>
      <!--  File Upload <input type="file" name="file[]" multiple=""> </br> -->
        <input type="submit" name="Simpan" class="btn- btn-primary">
        </form>

</body>
</html>
@stop() 