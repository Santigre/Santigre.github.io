<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
    <body>

        <?php


            $name= $_POST["name"];
            $emailFrom= $_POST["email"];
            $subject= $_POST["subject"];
            $message= $_POST["message"];

            $recipient= "adminmain@santiagoportfolio.com";
            $headers ="From: ".$emailFrom;
            $txt = "You have received an email from ".$name.".\n\n".$message;

            mail($recipient, $subject, $txt, $headers);
            header("Location: index.html?mailsend");

        ?> 
    </body>
</html>