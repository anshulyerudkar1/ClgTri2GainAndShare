
<?php

session_start();
include 'dbcon.php';

	$username = $_POST['t1'];  
    $password = $_POST['t2'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
        $emailsearch = "select * from admin where name='$username' ;";
        $chk = mysqli_query($con, $emailsearch);
        $usercount = mysqli_num_rows($chk); 
        if ($usercount)
        {
                $sql = "select *from admin where name = '$username' and password = '$password'";  
                $_SESSION['name']=$username;
                $result = mysqli_query($con, $sql);  
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);  
                  
                if($count == 1){  
                   
                     echo "<script>
                     window.location.href='sidepanel.php';
                     alert(' Admin Login successful');
                </script>";
                 
                }  
                else{  
                         
                     echo "<script>
                     window.location.href='signin.php';
                     alert('Admin Login failed. Invalid password.');
                </script>";
                }     
        }
        else
        {
            echo "<script>
                     window.location.href='signin.php';
                     alert('Admin not found.Uauthorized access!!');
                </script>";
        }
        

?>

?> 
