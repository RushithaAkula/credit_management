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
	
				<center><h3><strong>View Transactions</strong></h3></center>
					



<br>



      <table>
		  <tr>
			<th>Recipient's ID</th>
			<th >Recepient's name</th>
			<th>Benficiary's ID</th>
			<th >Benficiary's name</th>
				<th >Credit Transfered</th>
			</tr>
		

<?php 

error_reporting(0);



include("database.php");

$query="select *from transfers";
$result = mysqli_query($conn,$query) or  die('Could not look up user information; ' . mysqli_error($conn));

if(mysqli_num_rows($result)){
		
		while($r=mysqli_fetch_array($result))
			{
			
				
			$frmuid=$r["from_uid"];
			$touid=$r["to_uid"];

			$amnt=$r["amnt"];
				
			
$query2="select *from adduser where User_id='$frmuid'";
$result2=mysqli_query($conn,$query2) or  die('Could not look up user information; ' . mysqli_error($conn));

if(mysqli_num_rows($result2)){
		
		while($r2=mysqli_fetch_array($result2))
			{
			$frmnm=$r2["Name"];
			}
}


$query3="select *from adduser where User_id='$touid'";
$result3=mysqli_query($conn,$query3) or  die('Could not look up user information; ' . mysqli_error($conn));

if(mysqli_num_rows($result3)){
		
		while($r3=mysqli_fetch_array($result3))
			{
			$tonm=$r3["Name"];
			}
}?>

<tr class="cross">

			<td class="ring-in t-data">
				<?php echo $frmuid;?>
			<td class="t-data">	
			<?php echo $frmnm;?>

			<td class="ring-in t-data">
				<?php echo $touid; ?>
			<td class="t-data">	
			<?php echo $tonm;?>

			<td class="ring-in t-data">
				<?php echo $amnt; ?>

<?php			
}
}
?>
	</table>
<br><br><br><br><br><br>



</form>
  </div>
    </div>	
		 <?php include("footer.php");?>