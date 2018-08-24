<?php

//comment by matty
echo "test";

//another comment 
// comments, comments

//new branch test

class some_class{

	public function echo($message){
		echo $message;
	}

}


class another_class extends some_class{

}

$obj = new another_class();
$obj->echo('test');

// is it a new branch or what??
// guess that yes ..
// some more changes
// ?
?>
