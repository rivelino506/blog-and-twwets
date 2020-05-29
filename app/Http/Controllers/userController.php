<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;
use App\User;
use App\Entry;





use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

//use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    //

    public function show(User $user)
    {
     //$entries = Entry::where(user_id,$user->id)->get(); 

    	 $entries = Entry::where('user_id', auth()->id())->get();
   /*  $entries = DB::table('entries')
                    ->where('user_id', $user->id)
                    ->get();*/
     return view('users.show', ['user' => $user], ['entries' => $entries]);
     //return view('welcome', ['user' => $user]);
    }
}
