<?php
include('../resources/config.php');
//$con = mysqli_connect("localhost", "root", "oracle", "weforwomen") or die("unable to connect");
if(!empty($_POST["state_id"])) 
{
$query =mysqli_query($con,"SELECT * FROM district WHERE StCode = '" . $_POST["state_id"] . "'");
?>
<option value="">Select District</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["DistCode"]; ?>"><?php echo $row["DistrictName"]; ?></option>
<?php
}
}
?>
