<?php



//comment by matty
//echo "test";

//another comment 
// comments, comments

//new branch test

namespace T;

class some_class{

	public $some_var;

	public function __construct(){
		$this->some_var = 'test_value';
	}

	public function _echo($message = null){
		if(!$message) $message = $this->some_var;
		echo $message."\r\n";
	}


}


class another_class extends some_class{
	
	

}

$obj = new another_class();
$obj->_echo('test');
$obj->_echo();

// is it a new branch or what??
// guess that yes ..
// some more changes
// ?
//friday?
//monday ? :D
//!
//?
//!


?>
