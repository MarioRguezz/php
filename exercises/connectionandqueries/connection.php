<?PHP
/*
Connection with mySql
*/

include("object.php");
session_start();
function  conect($host = "", $user = "", $psw = "", $db = ""){
	$con = mysqli_connect($host,$user,$psw, $db) or die ("Error in MySQL");
    mysqli_set_charset($con,'utf8');
	if (!$con){
	}
	return $con;
}

function disconnectBD($con){
	mysqli_close($con);
}

// insert
$queryinsert = "INSERT INTO table (param1, param2) VALUES ('', '');";
if(mysqli_query($con,$queryinsert)){
	// actions
}

//update
$queryupdate = "UPDATE table SET attribute = '' WHERE condition ;";
	if(mysqli_query($con,$queryupdate)){
    // actions
  }

	// select
  $queryselect = "SELECT * FROM table where  condition ";
  $queryselectexecute  = mysqli_query($con,$queryselect);
  $rows = mysqli_fetch_array($queryselectexecute);
  $user = new Object($rowLogin[0]);
  $userObject = serialize($user);




?>
