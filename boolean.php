<head>
<title>Boolean</title>
</head>

<body>

<?php 
//1 means TRUE
//0 or NULL means FALSE

$bool1 = TRUE;
$bool2 = FALSE;

?>
Bool1 = <?php echo $bool1?><br>
Bool2 = <?php echo $bool2?><br>

Bool2 is a Boolean?<?php echo is_bool($bool2)?>
</body>