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
    <form action="register.php" method="POST" >
      
        <h1>Registration</h1>
        Name<input type="text" name='name'><br>
        PhoneNo.<input type="text" name='contact'>
        <br>
        <input type="submit">
</form>

<table border=1>
    <tr >
        <th>id</th>
        <th>name</th>
        <th>contact</th>
        <th>delete</th>
        <th>ubdate</th>
    </tr>
    <?php $sql = 'SELECT * FROM registrationform';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  ?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['contact'];?></td>
        <td><a href="delete.php?id=<?php echo $row['id'];?>">delete</a></td>
        <td> <a href="ubdate.php?id=<?php echo $row['id'];?>">ubdate</a></td>
    </tr>
    <?php  } //end of while  
}else{  
echo "0 results";  
}  
mysqli_close($conn);   ?>


   
</table>
</body>
</html>