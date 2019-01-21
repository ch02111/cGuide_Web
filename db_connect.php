<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    	$host = "localhost";
    	$user = "jjeun";
    	$pass = "love2929";
    	$name = "jjeun";
    	$connect = mysqli_connect($host,$user,$pass,$name);
    	//$c = $mysqli_select_db($name,$connect);

    	if(!$connect){
    		echo "error";
    	}else{
    		//echo "데이터베이스 연결 성공";
    	}

    ?>
  </body>
</html>
