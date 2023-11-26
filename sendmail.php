<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$message = $_POST['message'];
if (empty($nama) && (empty($email)&&(empty($message)) {
  header('location: ./');
} else {
$message = "
nama : ".$nama."
Email : ".$email."
message : ".$message."
";

$emailmu = "alpanperdiansah3@gmail.com"; // Email tujuanmu disini
$subject = "Tumbal From [ ".$email." ]";
$headers = 'From: XNULL <noreply@xnull.ml>' . "\r\n";
mail($emailmu, $subject, $message, $headers);
header('location: sukses.html');
}
?>