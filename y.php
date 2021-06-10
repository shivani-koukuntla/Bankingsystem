<?php
session_start();
?>
<!DOCTYPE html>
<html>

   <head> 
   
    <link rel="stylesheet" href="mystyle.css">
   </head>
   
<body>
<form action="z.php" method="post">
<label>Amount to tranfer</label>
<input type="number" name='2'  ><br><br>
<select   name='1' style='width:230px;height:28px;'>
    <option>select</option>
<?php
$conn=mysqli_connect("localhost","root","","bankingsystem");
$query = "SELECT  Name from customertable";
$_SESSION['fromcustomer']= $_POST['option'];
$random =$_POST['option'];
if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Name"];
        if($field1name !=$random){
        echo "<option>$field1name<br></option>";
    }
        
    }
}
mysqli_close($conn);
?>

</select><br><br>
<input type="submit" value="submit">
</form>
<form action="x.php">
    <input type="submit" value="back">
</form>

</body>
</html> 






