 <?php include("header.php");?>
<head><script language="javascript" type="text/javascript">

function popitup(url) {
	newwindow=window.open(url,'name','height=350,width=400');
	if (window.focus) {newwindow.focus()}
	return false;
}
</script>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<div id="site_content">
      <div id="content">
	
				<center><h3><strong>User Information</strong></h3></center>
					



<br>



      <table>
		  <tr>
			<th>User ID</th>
			<th >Name</th>
				<th >Credits</th>
			</tr>
		

<?php 

error_reporting(0);



include("database.php");

$query="select *from adduser";
$result = mysqli_query($conn,$query) or  die('Could not look up user information; ' . mysqli_error($conn));

if(mysqli_num_rows($result)){
		
		while($r=mysqli_fetch_array($result))
			{
			?>  <tr class="cross">

			<td class="ring-in t-data">
				<?php echo $r["User_id"]?>
			<td class="t-data">	
			<?php echo $r["Name"]?>
			<td class="ring-in t-data">
				<?php echo $r["Credit"]?>
			
			<?php
}
}
?>
	</table>
<br><br><br><br><br><br>


<center><font size="+2">View one user at a time</font>
<br><br>
<form action="userdetails.php" method="post" >

<font size="3">Select User Id:</font>
	<select name="uid" class="form-control" >
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
			 
	<br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="View">
</form>
  </div>
    </div>	
		 <?php include("footer.php");?>