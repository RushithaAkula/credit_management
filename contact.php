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
						    
							 $msg2=$_GET['msg'];
							 if($msg2=='done')
							echo "<script type='text/javascript'>alert('Contact Added Successfully..!');</script>";

							 
						?> 
<body>
<div id="site_content">
      <div id="content">
    
<center><font size="+2">Contact Us</font>

<form action="contactus.php" method="post" >

<table>

<tr>
	<td><font size="3">Email:</font></td>
	<td><input type="email" name="email" required></td>
</tr>

<tr>
	<td><font size="3">Your Message:</h3></td>
	<td><textarea name="msg"  cols="23" required></textarea></td>
</tr>



<tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit"></td></tr>



</table>


</form>
  </div>
    </div>	
<?php include("footer.php");?>