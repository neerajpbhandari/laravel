<?php
class AuthorsController extends Controller{
	public $restful = true;

	public function getIndex(){
		$view = View::make('authors.index',array('name'=>'Neeraj Bhandari'))
		->with('age','24');
		$view->location = 'Mumbai';
		$view['speciality'] = 'PHP';
		$view->title = 'Authors And Books';
		return $view;
	}
}