<?php 
 
 $host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'registartion';  
    
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
    die('Could not connect: '.mysqli_connect_error());  
  }  
$id=$_GET['id'];  
$sql = "delete from registrationform where id=$id";  
if(mysqli_query($conn, $sql)){  
 
 header("Location: index.php");
die();  
}else{  
echo "Could not deleted record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);
?>