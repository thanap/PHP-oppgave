
<?php

$to = "mypeopl3@gmail.com";
$subject = "Kommer fra Sørlandsstudenten";

$name = $_POST["name"];
$email = $_POST["email"];
$topic = $_POST["topic"];
$message = $_POST["message"];

$body = <<<EMAIL

HEI, jeg heter $name, og min topic er $topic.

$message

Fra $name

Min e-post addressen er $email

EMAIL;

$header = "From: $email";

if($_POST){
	if($name == "" || $email = "" || $message = "")
	{
		$feedback = "Fill out all the fields";
	}
	else
	{
		mail($to, $subsject, $body, $header);
		$feedback = "Takk for meldigen.";
	}
}
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Team Awesome: Kontakt</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<style type="text/css">
		form {
				width: 600px;
				}
		form ul {
				list-style-type: none;
				}
		form ul li {
				margin: 15px 0;
				}
		form label {
				display: block;
				font-size: 15px;
				}
		form input {
				font-size 15px;
				padding:5px;
				border: #ccc 3px solid;
				width:100%
				  }
	</style>

</head>
<body>



	<div id="header">
		<div class="section">
		  <div class="logo">
			  <p><img src="images/logo 2.png" width="324" height="130" alt="logo"></p>
<!--              <iframe style="border:none" src="http://files.podsnack.com/iframe/embed.html?hash=adhp2ujc&t=1378415660" width="340" height="27" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
-->		  </div>
			<p>&nbsp;</p>
		  <ul>
				<li>
					<a href="index1.html">HJEM</a>
				</li>
				<li>
					<a href="om oss.html">OM OSS</a>
				</li>
				<li>
					<a href="event.html">EVENTS</a>
				</li>
				<li>
					<a href="galleri.html">GALLERI</a>
				</li>
				<li class="selected">
					<a href="kontakt.html">KONTAKT</a>
				</li>
		  </ul>
	  </div>


</div>
	<div id="body">

	  <h1>Kontakt oss</h1>
		<center>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nb_NO/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like-box" data-href="https://www.facebook.com/sorlandsstudenten" data-width="380" data-height="600" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
<a class="twitter-timeline" href="https://twitter.com/sorlandsstudent" data-widget-id="382900793063387136">Tweets by @sorlandsstudent</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      	</center>
        
        
        
        <div class="kontaktbody">
            <p id="feedback">&nbsp;</p>
            <p>&nbsp;</p>
            <p><?php echo $feedback; ?></p>
            <form action"?" method="post">
                <ul>
                    <li>
                        <label for="name">Navn:</label>
                        <input type="text" name="name" id="name" />
                    </li>
    
                    <li>
                        <label for="name">Email:</label>
                        <input type="text" name="email" id="email" />
                    </li>
        
                    <li>
                        <label for="topic">Topic:</label>
                        <select id="topic" name="topic">
                            <option value="Feedback">Feedback</option>
                            <option value="Kommentar">Kommentar</option>
                            <option value="Hjelp">Hjelp</option>
                            </select>
                    </li>
    
                    <li>
                        <label for="message">Skriv her:</label>
                        <textarea id="message" name="message" cols="68" rows="9"></textarea>
                    </li>
                    <li><input type="submit" value="Submit"></li>
                </ul>
            </form>
                
                
          <p>&nbsp;</p>
        </div></div>
        <div id="footer">
            <div>
                <div class="connect">
                    <a href="#" id="twitter">twitter</a>
                    <a href="https://www.facebook.com/sorlandsstudenten" id="facebook">facebook</a>
                    <a href="#" id="googleplus">googleplus</a>
                    <a href="#" id="pinterest">pinterest</a>
                </div>
                <p>
                    &copy;  Team Awesome 2013 | All Rights Reserved.
              </p>
            </div>
	</div>
</body>
</html>