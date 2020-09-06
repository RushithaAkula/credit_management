<?php
			include("database.php");
	
                 $name = $_REQUEST["name"];
				$uid = $_REQUEST["uid"];    
				$credits = $_REQUEST["credits"];

				$sql1="select *from adduser where User_id='$uid'";

				$result = mysqli_query($conn, $sql1);

		if (mysqli_num_rows($result) > 0) {
				header("Location:adduser.php?msg2=duplicate");
				
			}else{
				$q2 = "insert into adduser values('$uid','$name','$credits');";
	
				if (mysqli_query($conn, $q2)) {
				header("Location:adduser.php?msg=done");
				ob_end_flush();
				}

				else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
			}

?>
