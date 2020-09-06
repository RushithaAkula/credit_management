<
?php
			include("database.php");
	
                 $email = $_REQUEST["email"];
				$msg = $_REQUEST["msg"];    
				

				$q2 = "insert into contactus values('$email','$msg');";
	
				if (mysql_query($conn, $q2)) {
				header("Location:contact.php?msg=done");
				ob_end_flush();
				}

				else {
    echo "Error: " . $sql . "<br>" . mysql_error($conn);
}
			

?>
