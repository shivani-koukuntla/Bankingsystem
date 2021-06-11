<!DOCTYPE html>
<html>
<body>
<head> 
   
   <link rel="stylesheet" href="mystylepay.css">
</head>

<?php
$conn=mysqli_connect("localhost","root","","bankingsystem"); 
$query = "SELECT  Name from customertable";
?>
<form method="post" action="y.php">
<select  name ="option" style='width:230px;height:28px;'>
    <option>select</option>
<?php
if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Name"];
        echo "<option>$field1name<br></option>";
    }
    
} 
mysqli_close($conn);
?>
</select>
<input type="submit" value="Transfer money"/>
</form>


<form action="homepage2.html">
    <input type="submit" value="back">
</form>
</body>
</html>
