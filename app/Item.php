<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Item extends Eloquent
{
    public $fillable = ['id','title','discription'];
}


