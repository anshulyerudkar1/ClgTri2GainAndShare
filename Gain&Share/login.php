<?php
session_start();
 include('dbcon.php');  
 
 $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection 
        
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);
      
        $sql = "select * from usermstr where name = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){
             $_SESSION['name']=$username;
             $_SESSION['uid']=$row['uid'];
            // echo "<h1><center>  </center></h1>"; 
             echo "<script>
             window.location.href='uhome.php';
             alert('Login successful');
        </script>";
         
        }  
        else{  
            // echo "<h1> Login failed. Invalid username or password.</h1>";  
             echo "<script>
             window.location.href='home.php';
             alert(' Login failed. Invalid username or password.');
        </script>";
        }     

?>
