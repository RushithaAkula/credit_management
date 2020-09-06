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
							echo "<script type='text/javascript'>alert('Transfered Successfully..!');</script>";

							 
						?> 
<body>
<div id="site_content">
      <div id="content">
    
<center><font size="+2">Transfer Credits</font>

<form action="transfer1.php" method="post" >

<table>

<tr>
	<td><font size="3">Transfer from UserId:</font></td>
	<td><input type="number" name="frmuid" required></td>
</tr>

<tr>
	<td><font size="3">Transfer to UserId</h3></td>
	<td><input type="number" name="touid"  required></td>
</tr>

<tr>
	<td><font size="3">Amount to be transfered:</h3></td>
	<td><input type="number" name="amnt" required></td>
</tr>


<tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit"></td></tr>



</table>


</form>
  </div>
    </div>	
<?php include("footer.php");?>