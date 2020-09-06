 <?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/ex.css" type="text/css" />
<style type="text/css">

form.demoForm {
    margin: 2em 0 3em;
}

form.demoForm select {
    vertical-align: top;
    margin-right: 1em;
}

select#choices {
    min-width: 140px;
}

</style>
</head>
  <?php 
						error_reporting(0);
						     $msg=$_GET['msg2'];
							 if($msg=='duplicate')
							echo "<script type='text/javascript'>alert('User Id already available');</script>";

							 $msg2=$_GET['msg'];
							 if($msg2=='done')
							echo "<script type='text/javascript'>alert('User Added Successfully..!');</script>";

							 
						?> 
<?php 

include("database.php");
		$uid = $_REQUEST["uid"]; 
$query="select *from adduser where User_id='$uid'";
$result = mysqli_query($conn,$query) or  die('Could not look up user information; ' . mysqli_error($conn));
if(mysqli_num_rows($result)){
		
		while($r=mysqli_fetch_array($result))
			{
			?> 


<body>
<div id="site_content">
      <div id="content">
    
<center><font size="+2">User Details</font>



<table>

<tr>
	<td><font size="3">User Id:</font>
	<?php echo $r["User_id"]?></td>
</tr>

<tr>
	<td><font size="3">Name:</h3>
	<?php echo $r["Name"]?></td>
</tr>

<tr>
	<td><font size="3">Available Credits:</h3>
	<?php echo $r["Credit"]?></td>
</tr>

<br>
<form action="transfer.php" method="post" >
<tr></tr><tr></tr>
<tr><td><input type="submit" value="Transfer Credits"></td></tr>

<form>

</table>



  </div>
    </div>	
		
			<?php
}
}
?>
<?php include("footer.php");?>