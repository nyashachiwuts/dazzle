<!DOCTYPE html>
<html>

<head>

		<title>Dazzle Beauty Palace | Contact Us</title>

	<!-- Meta Zone -->
	<meta charset="utf-8">
	<meta name="description" content="Dazzle Beauty Palace, hair, nails, spa." />
	<meta name="keywords" content="Dazzle Beauty Palace, hair, nails, spa">
	<meta name="robots" content="index, follow, all" />
	<meta name="author" content="N. Carmichael Chiwutsi">
	<meta name="publisher" content="N. Carmichael Chiwutsi">
	<meta name="geo.placename" content="Durban">
	<meta name="geo.region" content="South Africa">
	<meta name="google" content="notranslate" />

	<!-- Viewport -->
	<meta name="viewport" content="initial-scale=1, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="apple-mobile-web-app-title" content="Dazzle Beauty Palace">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

	<!-- CSS Stylesheets -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

	<!-- Javascript -->
	<script type="text/javascript" src="js/main.js"></script>

</head>
<body id="page">

	<header>
		<div id="wrap">
		  	<a href="index.html" title="Home"><img class="logo" src="img/logo.png" alt="Logo"/></a>
		    <nav id="nav">
		      <ul>
		        <li><a href="index.html" title="Home">Home</a></li>
		        <li><a href="menu.html" title="Menu">Menu</a></li>
		        <li><a href="gallery.html" title="Gallery">Gallery</a></li>
		        <li><a class="selected" href="contact.html" title="Contact">Contact</a></li>
		        <li><a href="https://www.instagram.com/dazzle_beauty_palace/" title="Instagram" target="_blank"/><img class="instagram-header-icon" src="img/instagram-header-icon.png" alt="Instagram Icon"></a></li>
		      </ul>
		    </nav>
		</div>
	</header>

	<div class="contact">
        <div class="overlay" onClick="style.pointerEvents='none'"></div>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3465.118456321277!2d31.06438591470917!3d-29.716327782002814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ef70591c70b09c5%3A0xa0c1b004c3e8ba40!2sOutlet+Park!5e0!3m2!1sen!2sza!4v1455620506326" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<div class="main">

			<?php 
				$action=$_REQUEST['action']; 
				if ($action=="")
				{ 
			?> 

			<form  action="" method="POST" enctype="multipart/form-data"> 

			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus Nulla consequat massa quis enim.</p>

			<p>Lorem ipsum dolor sit amet <a href="tel:0629165924" title="Direct call">(0031)6-29165924</a> adipiscing elit. Aenean commodo ligula eget dolor. Aenean magnis dis parturient massa. Cum sociis natoque <a href="mailto:info@jordanmike.nl" title="Direct mail">info@jordanmike.nl</a> penatibus et magnis dis parturient montes, nascetur ridiculus mus Nulla consequat massa quis enim.</p>

			    <input type="hidden" name="action" value="submit"> 
			    <input name="name" type="text" value="" size="30" placeholder="First- and lastname"/><br> 
			    <input name="email" type="text" value="" size="30" placeholder="E-mail"/><br> 
			    <input name="phone" type="text" value="" size="30" placeholder="Phone"/><br> 
			    <input name="subject" type="text" value="" size="30" placeholder="Subject"/><br> 
			    <textarea name="message" rows="7" cols="30" placeholder="Message"></textarea><br> 
			    <input type="submit" value="Send"/> 
		    </form> 

			<?php 
				    }  
				else 
				    { 
				    $name=$_REQUEST['name'];
				    $email=$_REQUEST['email'];
				    $phone=$_REQUEST['phone'];
				    $subject=$_REQUEST['subject'];
				    $message=$_REQUEST['message']; 
				    if (($name=="")||($email=="")||($phone=="")||($message=="")) 
				        { 
				        echo "<p>Your message has been sent. We will respond to you shortly, thank you.</p>"; 
				        } 
				    else{         
				        $from="From: $name<$email>\r\nReturn-path: $email";  
				        $subject="$subject"; 
				        mail("info@dazzlepalace.co.za", $subject, 
				"$message 

				From: 	$name

				Phonenumber: 	$phone

				E-mail:		$email", $from);
				        echo "<p>This message was sent through the website.</p>"; 
				        } 
				    }   
			?>

		</div>
	</div>

	<footer>
		<p>&copy; 2016 Dazzle Beauty Palace</p>
	</footer>

</body>
</html>