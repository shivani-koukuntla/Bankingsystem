<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bankingsystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE customertable (
Name VARCHAR(30) NOT NULL,
Accountno int(30) NOT NULL,
aadharid int(50) NOT NULL,
Email text,
Phoneno int(30) NOT NULL,
Lasttrans date,
currentbalance int(100),

)";
$sql = "INSERT INTO customertable (Name,Accountno,aadharid,Email,Phoneno,Lasttrans,currentbalance)
VALUES 
('Vijay','1823456788' ,'1209345567', 'vijay@gmail.com', '949373094' ,'2021-06-09', '100000'),
('Rajesh','1823456789' ,'1209345213','rajesh@gmail.com','939418902' ,'2021-06-09', '200000'),
('Ramesh','1823456790' ,'1209345312', 'ramesh@gmail.com', '939003829' ,'2021-06-08', '103500'),
('Sarayu','1823456791' ,'1209345982', 'sarayu@gmail.com', '988521815' ,'2021-06-07', '103400'),
('Ria','1823456792' ,'1209345140', 'lakshmi@gmail.com', '949373090' ,'2021-06-02', '80000'),
('Mia','1823456793' ,'1209345765', 'mia@gmail.com', '949373094' ,'2021-06-01', '430000'),
('Sanjana','1823456794' ,'1209345432', 'sanjana@gmail.com', '949373091' ,'2021-05-31', '90000'),
('Arjun','1823456795' ,'1209345365', 'arjun@gmail.com', '949373097' ,'2021-05-31', '2340000'),
('Dhruva','1823456796' ,'1209345874', 'dhruva@gmail.com', '949373096' ,'2021-05-31', '93000'),
('Sita','1823456797' ,'1209345672', 'sita@gmail.com', '949373090' ,'2021-05-31', '120000')";
if (mysqli_query($conn, $sql)) {
  echo "<br>";
} 
else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>