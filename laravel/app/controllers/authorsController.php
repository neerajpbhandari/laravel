<?php
class AuthorsController extends BaseController{
	public $restful = true;
	public $layout = 'layouts.default';
	public function get_index(){
		$view = View::make('authors.index',array('name'=>'Neeraj Bhandari'))
		->with('age','24');
		$view->location = 'Mumbai';
		$view['speciality'] = 'PHP';
		$this->layout->title = 'Authors And Books';
		$this->layout->content = $view;
	}
}