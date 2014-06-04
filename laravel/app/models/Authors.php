<?php

class Authors extends Eloquent{
    protected $table = 'test';
    
    public $timestamps = false;
    
    public static $rules = array(
        'fname' => 'required',
        'lname' => 'required'
    );
    
    public static $messages = array(
        'fname.required' => 'A First Name is required',
        'lname.required' => 'A Last Name is required'
    );
}