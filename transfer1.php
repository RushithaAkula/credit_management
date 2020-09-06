<?php
			include("database.php");
	
                 $frmuid = $_REQUEST["frmuid"];
				$touid = $_REQUEST["touid"];    
				$amnt= $_REQUEST["amnt"];

				
		

$query="select *from adduser where User_id='$frmuid'";
$result = mysqli_query($conn,$query) or  die('Could not look up user information; ' . mysqli_error($conn));
if(mysqli_num_rows($result)){
		
		while($r=mysqli_fetch_array($result))
			{
		 $frmamnt=$r["Credit"];
			$frmtotamnt=$frmamnt-$amnt;
			$q3 = "update adduser set Credit='$frmtotamnt' where User_id='$frmuid'";
			mysqli_query($conn, $q3);
						
			}
}
		

$query2="select *from adduser where User_id='$touid'";
$result2 = mysqli_query($conn,$query2) or  die('Could not look up user information; ' . mysqli_error($conn));
if(mysqli_num_rows($result2)){
		
		while($r2=mysqli_fetch_array($result2))
			{
		 $toamnt=$r2["Credit"];
			$tototamnt=$toamnt+$amnt;
			$q4 = "update adduser set Credit='$tototamnt' where User_id='$touid'";
			mysqli_query($conn, $q4);
						
			}
}


				$q2 = "insert into transfers values('$frmuid','$touid','$amnt');";
	
				if (mysqli_query($conn, $q2)) {
				header("Location:transfer.php?msg=done");
				ob_end_flush();
				}

				else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
