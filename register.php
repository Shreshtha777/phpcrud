<?php 
 $name=$_POST['name'];
 $contact=$_POST['contact']; 
 
 $host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'registartion';  
    
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
    die('Could not connect: '.mysqli_connect_error());  
  }  
  echo 'Connected successfully<br/>';  

    
$sql = "INSERT INTO registrationform(name,contact) VALUES ('$name','$contact')";  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully"; 
 header("Location: index.php");
die(); 
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  

?>
            