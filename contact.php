<?php
if(isset($_POST["submit"])) {
	$name=$_POST["name"];
	$subject=$_POST["subject"]
	$emailFrom=$_POST["mail"];
	$message=$_POST["message"];

    $recipient="beltran.santiago1@gmail.com";
	$headers ="From: ".$emailFrom;
	$txt = "You have received an email from ".$name.".\n\n"

	mail($recipient, $subject, $txt, $headers);

	header(Location: index.html?mailsent);
}
?>

