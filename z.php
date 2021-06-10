<!DOCTYPE html>
<html>

   <head> 
   
    <link rel="stylesheet" href="mystyle.css">
   </head>
   
<body>
<?php
session_start();
$var1=$_SESSION['fromcustomer'];
$var2=$_POST['1'];
$var3=$_POST['2'];
$var4=date("Y:m:d h:i");
$conn=mysqli_connect("localhost","root","","bankingsystem");
$query = "SELECT  Name,currentbalance from customertable";

if ($result = $conn->query($query)) {
  while ($row = $result->fetch_assoc()) {
      $field1name = $row["Name"];
      $field2name=$row["currentbalance"];
      if($field1name ==$var1){
        if($var3<=$field2name){
          $query1="INSERT INTO transfertable (Date , fromcustomer , tocustomer , Amount) VALUES ('$var4','$var1','$var2','$var3')";
          if (mysqli_query($conn, $query1)) {
            echo "<br>";
          } else {
            echo "Error: " . $query1 . "<br>" . mysqli_error($conn);
          }

          $var5=$field2name-$var3;
          $sql = "UPDATE customertable 
                      SET lasttrans =  '$var4'
                      WHERE name = '$var1'";
                      if (mysqli_query($conn, $sql)) {
                        echo "<br>";
                      } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }

                      $sql1="UPDATE customertable 
                     SET currentbalance =  '$var5'
                          WHERE name = '$var1'";
                        if (mysqli_query($conn, $sql1)) {
                          echo "<br>";
                        } else {
                          echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
                        }

            if($result = $conn->query($query)) {
                while ($row = $result->fetch_assoc()) {
                  $fieldname1 = $row["Name"];
                  $fieldname2=$row["currentbalance"];
                    if($fieldname1 ==$var2){
                        $var6=$fieldname2+$var3;
                        $sql2="UPDATE customertable 
                     SET currentbalance =  '$var6'
                          WHERE name = '$var2'";
                          if (mysqli_query($conn, $sql2)) {
                            echo "Transaction Sucessful";
                          } else {
                            echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
                          }
  
                              }}}


        }
        else{
          echo "Amount is insufficient Transaction cannot happen.'<br>'";
        }
  }
      
  }
}


  

 mysqli_close($conn);
?>
<form action="homepage2.html">
  <input type="submit" value="back">
</form>
</body>
</html>