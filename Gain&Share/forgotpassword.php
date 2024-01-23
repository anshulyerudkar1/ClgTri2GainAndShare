<?php
require 'dbcon2.php';
require 'phpmailer/PHPMailerAutoload.php';
$mail= new PHPMailer;
$mail->isSMTP();
$mail->Host= 'smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='quickshopwebs@gmail.com';
$mail->Password='Carbon@1234';
 
if(isset($_POST['update']))
  {

echo "<script>alert('success');</script>"; 
$email=$_POST['email'];
  $sql ="SELECT email FROM usermstr WHERE email=:email";
$query= $conn -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$sqll="select password from usermstr where email=:email";
$queryy = $conn->prepare($sqll);

$queryy-> bindParam(':email', $email, PDO::PARAM_STR);
$queryy-> execute();
$resultss = $queryy -> fetchAll(PDO::FETCH_OBJ);
if($queryy -> rowCount() > 0)
{
foreach($resultss as $resultt)
{
$op=$resultt->password;
$to=$_POST['email'];
$mail->setFrom($to);
$mail->addAddress($to);
$mail->Subject='form sumission';
$mail->Body="your password is:".$op;

echo "<script>alert($op);</script>"; 

if(!$mail->send())

echo "<script>alert('failed');</script>"; 
else

echo "<script>alert('success');</script>"; 

}}
else {
echo "<script>alert('Email id  is invalid');</script>"; 
}
}
else {
echo "<script>alert('Email id is invalid');</script>"; 
}

}
header('Location:home.php');
?>




  <script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
