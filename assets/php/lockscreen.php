<?php


// You can access the values posted by jQuery.ajax
// through the global variable $_POST, like this:
$pass = isset($_POST['pass']) ? $_POST['pass'] : null;
$response = false;

function CheckInput($pass){
 
	if($pass == "SPV" || $pass == "TEACHERS"){
		$result = true;
	} else {
		$result = false;
	}

	return array('status' => $result);
}

	echo json_encode(CheckInput($pass));

?>