<html>
<body>
<?php
$name = $_GET["name"];
$email = $_GET["email"];
$number = $_GET["number"];
$state = $_GET["state"];
echo "Name: $name <br>
Email: $email <br>";
if (!empty($number)){
	echo "Phone Number: $number <br>";
}
if (!empty($state)){
	echo "State: $state <br>";
}
?>
</body>
</html>