<?php

	 include 'config.php';
    $result='';
     if(isset($_POST['username']) && isset($_POST['password']))
     {


	   	  $username = $_POST['username'];
          $password = $_POST['password'];
		  

          $sql = 'SELECT * FROM login WHERE  username = :username AND password = :password';
          $stmt = $conn->prepare($sql);
          $stmt->bindParam(':username', $username, PDO::PARAM_STR);
          $stmt->bindParam(':password', $password, PDO::PARAM_STR);
          $stmt->execute();
          if($stmt->rowCount())
          {
			 $result="true";	
          }  
          elseif(!$stmt->rowCount())
          {
			  	$result="false";
          }

   		  echo $result;
  	}
	
?>