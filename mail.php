
<?php


$to = "siddharth.bhardwaj2051999@gmail.com";
$subject = "Form Tutorial";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$message = $_POST['message'];
 
$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message";
 
echo "Data has been submitted to $to!";
mail($to, $subject, $body);

 
?>
