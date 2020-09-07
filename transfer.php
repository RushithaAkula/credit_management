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


  include("database.php");
						error_reporting(0);
						     
							 $msg2=$_GET['msg'];
							 if($msg2=='done')
							echo "<script type='text/javascript'>alert('Transfered Successfully..!');</script>";

							$msg2=$_GET['msg2'];
							 if($msg2=='same_id')
							echo "<script type='text/javascript'>alert('Sender and Receiver Ids should not be same');</script>";

							$msg3=$_GET['msg3'];
							 if($msg3=='no')
							echo "<script type='text/javascript'>alert('Sender A/C has Insufficient balance.');</script>";



							 
						?> 
<body>
<div id="site_content">
      <div id="content">
    
<center><font size="+2">Transfer Credits</font>

<form action="transfer1.php" method="post" >

<table>

<tr>
	<td><font size="3">Transfer from UserId:</font></td>
	<td>
	<select name="frmuid" style="width:200px;" class="form-control" >
			 <?PHP
			 
			 $sql_sel="SELECT User_id FROM adduser";
				$res_sel=mysqli_query($conn,$sql_sel);
			  while($row_sel=mysqli_fetch_array($res_sel))
				{	
				?> 
			<option value="<?php echo $row_sel['User_id']?>"><?php  echo $row_sel['User_id']?>
				
				 <?PHP  

				}?>
				
			  </select>
	
	</td>
</tr>

<tr>
	<td><font size="3">Transfer to UserId</h3></td>
	<td>
	<select name="touid" style="width:200px;" class="form-control" >
			 <?PHP
			 
			 $sql_sel="SELECT User_id FROM adduser";
				$res_sel=mysqli_query($conn,$sql_sel);
			  while($row_sel=mysqli_fetch_array($res_sel))
				{	
				?> 
			<option value="<?php echo $row_sel['User_id']?>"><?php  echo $row_sel['User_id']?>
				
				 <?PHP  

				}?>
				
			  </select>
	
	
	</td>
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
