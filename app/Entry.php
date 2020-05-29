<?php

namespace App;
//use App\User;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //  entry -user
    //  Entry N  - 1 User
    public function user()
    {
    	//return $this->belongsTo(User::class); 
    	//return $this->belongsTo('User'); 
    	/* public function users(){*/

    return $this->belongsTo(User::class,'user_id','id');
    //     return $this->belongsTo('App\User');
    }

}
