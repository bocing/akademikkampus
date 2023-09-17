<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use DB;
class HakAksesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,  $rolename)
    {
        //  var_dump($namaRole);
        if(auth()->check() && !auth()->user()->punyaRule($rolename))
        {         
         //   $result =DB::select('select distinct
           //     m.nama, 
             //   d.prodname ,
            //    d.path
            //from marchant as m left outer join mard as d  on m.id = d.idmar group by m.id');
            // return view('welcome')->with('row',$result);   


            if($rolename=='Admin')
                return view ('master.index');
            if ($rolename=='User')             
                return view ('user.index');
            ///elseif ($namaRole=='Member')
             //   return view ('member.index'); 
        }

       return $next($request);
       
    }
}



