<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('select',function(){
//    $users = DB::select('select * from authors where id=?',array('2'));
//    $users = DB::table('test')->get();
//    $users = DB::table('test')->where('id','=','2')->get();
//    $users = DB::table('test')->where('id','=','2')->orWhere('fname','Neeraj')->get();
//    $users = DB::table('test')->where('id','=','2')->orWhere('fname','Neeraj')->orderBy('lname','desc')->get();
//    $users = DB::table('test')->select('fname')->where('id','=','2')->orWhere('fname','Neeraj')->orderBy('lname','desc')->get();
    
    $users = Authors::all();
    
    return View::make('authors.list')->with('users',$users);
});

Route::post('insert',function(){
    $input = Input::all();
//  DB::insert('insert into test(fname,lname) values(?,?)',array($input['fname'],$input['lname']));
    
    $v = Validator::make($input,Authors::$rules,Authors::$messages);
    
    if($v->passes())
    {
        $users = new Authors;
        $users->fname = $input['fname'];
        $users->lname = $input['lname'];
        $users->save();
        
//        DB::table('test')->insert(array(
//        'fname'=>$input['fname'],
//        'lname'=>$input['lname']
//        ));
        
        return Redirect::to('select');
    }
    else{
        return Redirect::to('form')->withInput()->withErrors($v)->with('message');
    }
    
    
});

Route::get('form',function(){
    return View::make('authors.form');
});

Route::controller('authors', 'AuthorsController'); 
Route::resource('welcome','WelcomeController');