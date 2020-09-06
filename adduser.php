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
<body>
<div id="site_content">
      <div id="content">
    
<center><font size="+2">Add User</font>

<form action="adduser1.php" method="post" >

<table>

<tr>
	<td><font size="3">User Id:</font></td>
	<td><input type="text" name="uid" required></td>
</tr>

<tr>
	<td><font size="3">Name:</h3></td>
	<td><input type="text" name="name" pattern="[A-Za-z]+" required></td>
</tr>

<tr>
	<td><font size="3">Credit:</h3></td>
	<td><input type="number" name="credits" required></td>
</tr>


<tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Add"></td></tr>



</table>


</form>
  </div>
    </div>	
<?php include("footer.php");?>