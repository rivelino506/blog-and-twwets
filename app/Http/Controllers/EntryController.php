<?php


namespace App\Http\Controllers;

/*
*/
use App\User;
use App\Entry;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class EntryController extends Controller
{

	public function __construct()
	{
		$this->Middleware('auth');
	}
    //
    public function create()
    {
    	return view ('entries.create');
    }

     public function store(Request $request)
    {
    	//dd($request->all());
    	$ValidatedData = $request ->validate([
    		'title'=>'required|min:7|max:255|unique:entries',
    		'content'=>'required|min:25|max:1000',
    	]);
    	$entry = new Entry();
    	$entry->title =   $ValidatedData['title'];
    	$entry->content = $ValidatedData['content'];
         $entry->user_id = auth()->id();
         $entry->save();

        $status = 'Your entry has been published succesfully';
         return back()->with(compact('status'));
    }

    public function edit(Entry $entry)
    {
    	// return view ('entries.edit',compact('entry');
        return view('entries.edit', ['entry' => $entry]);

        /*public function show(Entry $entry)
    {
    	return view('entries.show', ['entry' => $entry]); 
     
     }*/
    }

     public function update(Request $request, Entry $entry)
    {
    	//dd($request->all());
    	$ValidatedData = $request ->validate([
    		'title'=>'required|min:7|max:255|unique:entries,id,'.$entry->id,
    		'content'=>'required|min:25|max:1000',
    	]);
    	
    	$entry->title =   $ValidatedData['title'];
    	$entry->content = $ValidatedData['content'];
         $entry->user_id = auth()->id();
         $entry->save();

        $status = 'Your entry has been updated succesfully';
         return back()->with(compact('status'));
    }


}
