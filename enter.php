<?php

 require_once 'connection.php';

 if(isset($_POST['sigh'])){
     $fname =$_POST['fname']
     $lname =$_POST['lname']
     $uname =$_POST['uname']
     $pno =$_POST['pno']
     $email =$_POST['email']
     $password =$_POST['pass']
 $stmt = "INSERT INTO test(F_NAME,L_NAME,P_NO,EMAIL,UNAME,PWORD) values('$fname','$lname',
 '$uname','$pno','$email','$password');";
 mysqli_query($connect, $stmt);
 header("Location: ../login.php");
 exit();

  }
?>