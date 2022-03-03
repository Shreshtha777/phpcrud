<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>

    form{
        border: 2px solid black;
        height: 300px ;
        width: 300px;
        background-color: blueviolet;
        color: azure;
        text-align: center;
        padding: 15px;
       margin-left: 360px;

    }
    input[type="text"]{
        margin: 15px;
    }
    input[type="submit"]{
        margin: 15px;
    }
</style>
</head>
<body>
    <!-- ----php code connection -------- -->
   <?php 
 $host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'registartion';  
    
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
    die('Could not connect: '.mysqli_connect_error());  
  }  
  ?>
  <!-------------->
    <form action="edit.php" method="POST" >
      <?php 
        $id=$_GET['id'];
        $sql = "SELECT * FROM registrationform where id='$id'";  
$retval=mysqli_query($conn, $sql);  
if(mysqli_num_rows($retval) > 0){  
  while($row = mysqli_fetch_assoc($retval)){  
    $name=$row['name'];
    $contact=$row['contact'];
      
  } //end of while  
 }else{  
 echo "0 results";  
 }  
      ?>
        <h1>Update</h1>
        ID <input type="text" value="<?php echo $id;?>" name="id"><br>
        Name<input type="text" value="<?php echo $name;?>" name='name'><br>
        PhoneNo.<input type="text" value="<?php echo $contact;?>" name='contact'>
        <br>
        <input type="submit" value="Update">
</form>


</body>
</html>