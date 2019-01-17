<?php
if(isset($_POST["submit"])) {
	$name=$_POST["name"];
	$subject=$_POST["subject"]
	$emailFrom=$_POST["mail"];
	$message=$_POST["message"];

    $recipient="Oruga.95@hotmail.com";
	$headers ="From: ".$emailFrom;
	$txt = "You have received an email from ".$name.".\n\n"

	mail($recipient, $subject, $txt, $headers);

	header(Location: index.php?mailsent);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Santiago Beltran Eportfolio</title>
        <link rel="stylesheet" href="styleSheets/main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>


    <body class="container-fluid bg-light">
        <div class="container-fullwidth">
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header col-3">
                        <a class="navbar-brand text-white" href="#">Santiago Beltran</a>
                    </div>
                    <ul class="row col-sm-3 col-md-8 col-lg-4">
                        <li class="col"><a href="#AboutMe" style="text-decoration: none">About Me</a></li>
                        <li class="col"><a href="#Projects" style="text-decoration: none">Projects</a></li>
                        <li class="col"><a href="#Contact" style="text-decoration: none">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1>Hello world</h1>
                    </div>
                </div>
            </div>
        </div>


        <!-- Make changes to divs later to add more divercity to each section -->
        <div class="container">
            <div id="AboutMe">
                <h2>Hello I am Santiago Beltran and I am an aspiring Software Devolper</h2>
                <br />
                <div class="container-fluid row">
                    <div class="rounded col-xs-12 col-sm-6 col-md-4 col-lg-3" id="portrait">
                    </div>
                    <div class="container-fluid col-lg-9 col-md-6 col-sm-4">
                        <p>
                            Before we go any further I would like to talk a bit about myself so you can get to know me a little better.
                            It all started back when I was a Sophmore at Reynolds High School. That is when I took my first progaming class and found out that
                            this is what I wanted to for the rest of my life. Granted that class only taught basic html and css but it got me wanted to learn more! In my Junior year I was accepted to go to CAL(The Center For Advanced Laarning) where I spent half of my day participating in there Informational Technology program. While there I learned more HTML and CSS along with Python, SQL, and Networking. I also particapated in a couple cyber security competitions which where called picoCTF, and Cyber Patriot.
                        </p>
                    </div>
                </div>

                <p>Once I graduated High School I took some time away from school to work and save up a little bit of money. After about a year of working I decided to attend ITT Tech where I continued to learn Informational Technology. I went there for 2 terms before the school filled for bankruptcy and closed down. Traumatized from that experience, I then searched for alternitative ways to continue my education. That is when I found The Tech Academy which offered me everything that I wanted in a traditional school but in a shorter time period and a lot more affordable. On top of everything I have learned previously, The Tech Academy taught me JavaScript, C# and .NET. I have now completed there course and I am ready to start my career!</p>

                <h2>Some Other fun facts about me</h2>
                <p>On my spare time I like to spend time whith my family. I married my High School sweat heart Johanna. We have been married since 2016 and been together since 2014. We have a daughter named Xochitl and a dog named Apollo. We enjoy going on adventures and trying new things.</p>
                <p>Other hobies include dancing and video games</p>
            </div>

            <div id="Projects">
                <h1>Projects</h1>
                <div class="container-fluid row">
                    <div class="rounded col-3" id="loginDemo">
                        <a>Login Demo</a>
                    </div>
                </div>
            </div>

            <div id="Contact">
                <h1>Contact</h1>
                <div class="container" id="formHolder">
                    <form method="post" action="index.php">
                        <label for="fname">Full name</label>
                        <input type="text" name="name" placeholder="Full name" />

                        <label for="email">Email address</label>
                        <input type="text" name="email" placeholder="example@email.com" />

                        <label for="subject">Subject</label>
                        <input type="text" name="subject" placeholder="Subject" />

                        <label for="message">Massage</label>
                        <textarea name="message" style="height:200px"></textarea>

                        <input type="submit" value="Submit"/>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>