<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\LengAwarePaginator;
use Illuminate\Validation\Validator;
use App\Http\Controllers\Confirm;
use DB;
use Auth;
use App\Item;
 
use PDF;
use File;


class ItemController extends \BaseController
{


    public function __construct(){
      $this->middleware('auth');
     // $this->middleware('rule:Admin');

   }
  public function index(){
    return View::make('items.index',[
      'items'=>Item::all()
      ]
      )
  }


}
