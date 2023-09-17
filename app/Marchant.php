<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Marchant extends Model
{
    protected $fillable=[
  'id' ,
  'idk',
  'nama',
  'alamat',
  'contact',
  'email',
  'password',
  'fb' ,
  'twiter',
  'pinbb' ,
  'ketentuan',
  'telp',
  'dm',
  'dv'
 ];
 
    public $timestamps=false;
}
