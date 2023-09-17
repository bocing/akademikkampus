<?php 
    namespace App;
    use Illuminate\Database\Eloquent\Model;
    class Cobalayout extends Model
    {
         public $timestamps = true;
         public $fillable = ['id','nama'];
         public $ly=DB::table('layoutmenu')                
                ->select('layoutmenu.*')
                ->first();
    }
 

?>