<?php
if(isset($_POST["submit"])) {
	$name= $_POST["name"];
    $emailFrom= $_POST["email"];
	$subject= $_POST["subject"];
	$message= $_POST["message"];

    $recipient= "Oruga.95@hotmail.com";
	$headers ="From: "$emailFrom;
	$txt = "You have received an email from ".$name.".\n\n".$message;

	mail($recipient, $subject, $txt, $headers);
	header("Location: Index.html?mailsend");
}
?>
