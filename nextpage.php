<!DOCTYPE html>
<html>
<head>
<style>
table,th,tr,td{
border:1px solid blue ;
}
</style>

 <link rel="stylesheet" href="mystylepay.css">
</head>
<body>
<br><br>
<table align="right" boarder="1px" style="width: 1000px; line-height:40px;">
<tr>
<th colspan="7" align="center">Customer Details</th>
</tr>
<th>Name</th>
<th>Accountno</th>
<th>aadharid</th>
<th>Email</th>
<th>Phone Nmber</th>
<th>Last transaction</th>
<th>current balance</th>
<?php
$conn=mysqli_connect("localhost","root","","bankingsystem");
if($conn->connect_error)
{
die("connection failed;". $conn-> connect_error);
}
$sql="SELECT Name,Accountno,aadharid,Email,Phoneno,Lasttrans,currentbalance from customertable";
$result=$conn->query($sql);
if($result = $conn->query($sql)){

while($row = $result->fetch_assoc())
{
   echo "<tr><td>". $row["Name"] . "</td><td>". $row["Accountno"] . "</td><td>". $row["aadharid"] . "</td>
   <td>". $row["Email"] ."</td><td>". $row["Phoneno"] . "</td><td>". $row["Lasttrans"] . "</td><td>". $row["currentbalance"] . "</td></tr>"
;}
}
echo "</table>";

$conn-> close();
?>
</table>
</body>
</html>