<!DOCTYPE html>
<html>
<head>
<style>
table,th,tr,td{
border:1px  Solid Blue;
}
</style>

 <link rel="stylesheet" href="mystylepay.css">
</head>
<body>
<br><br>
<table align="right" border="1px" style="width:1000px; line-height :40px;">
<tr>
<th colspan="4" align ="center">Transfer records</th>
</tr>
<t>
<th>Date</th>
<th>From customer</th>
<th>To customer</th>
<th>Amount transfered</th>
</t>
<?php
$conn=mysqli_connect("localhost","root","","bankingsystem");
if($conn->connect_error)
{
die("connection failed;". $conn-> connect_error);
}
$sql="SELECT Date,fromcustomer,tocustomer,Amount from transfertable";
$result=$conn->query($sql);
if($result = $conn->query($sql)){

while($row = $result->fetch_assoc())
{
   echo "<tr><td>". $row["Date"] ."</td><td>". $row["fromcustomer"] . "</td><td>". $row["tocustomer"] . "</td><td>". $row["Amount"] . "</td></tr>"
;}
}
echo "</table>";

$conn-> close();
?>
</table>
</body>
</html>