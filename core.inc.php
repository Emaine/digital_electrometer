<?php
ob_Start();
session_Start();//starts session


//checks if the session is user id and if its not empty
function loggedin(){
	if(isset($_SESSION['USer_Id']) && !empty($_SESSION['User_Id'])){
		return true;
	}
	else{
	return false;
	}
		
}

?>