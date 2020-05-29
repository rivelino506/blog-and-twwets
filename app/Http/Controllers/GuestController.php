<?php

namespace App\Http\Controllers;


//

use App\User;
use App\Entry;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

//

//use DB;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;


use Illuminate\Support\ServiceProvider;
//use App\Http\Controllers\DB;

class GuestController extends Controller
{
    //
    public function index()
    {
    	//dd('GuestController');


    	/*
 $alumnos = Alumnos::all();
    

          // return view('alumnos.index',$alumnos);
          return view('alumnos.index',['alumnos' => $alumnos]);
        
    	*/

        //  $users = DB::table('users')->get();

/*foreach ($users as $user)
{
    var_dump($user->name);
}*/


      //  $users = DB::table('users')->paginate(15);

       $entries = Entry::with('user')
        ->OrderByDesc('created_at') 
         ->OrderByDesc('id') 
       ->paginate(10);
       // $entries =DB::table('entries');
       //funciona   $entries =DB::table('entries')->paginate(10);
      //return view('welcome', compact('tasks'));


    	 //['notes' => $notes]
    	//return view('welcome', compact('entries'));
    	//echo "hola";
    	return view('welcome', ['entries' => $entries]);

    }

    public function show(Entry $entry)
    {
    	return view('entries.show', ['entry' => $entry]); 
     
     }
}
