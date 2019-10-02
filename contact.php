<?php

if (isset($POST["submit"])){


  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailform = $_POST['mail'];
  $message = $_POST['message'];
  
  $mailTo ="gameaddictx.info@gmail.com";
   
  $headers ="From: ".$mailform;

  $txt ="You have received an e-mail from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $headers);

  header("Location: index.php?mailsend")


}