<?php
include("db_con.php");

if(isset($_POST["signUp"])){
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die("Ugyldig email");
	mysqli_query($con, "INSERT INTO nyhedsbrev (email) VALUES ('{$email}')");
	if(mysqli_affected_rows($con) > 0){
        echo '<script>alert("Du er nu tilmeldt!");</script>';
	} else {
        echo '<script>alert("Din email er allerede tilmeldt!");</script>';
	}
} elseif(isset($_POST["signDown"])){
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die("Ugyldig email");
	mysqli_query($con, "DELETE FROM nyhedsbrev WHERE email='{$email}'");
	if(mysqli_affected_rows($con) > 0){
        echo '<script>alert("Du er nu afmeldt!");</script>';
	} else {
        echo '<script>alert("Din email er ikke tilmeldt!");</script>';
	}
}
?>

<!DOCTYPE html>
<html lang="da">
    
<head>
    <title>MY DAILY SPACE</title>
    <!-- Æ, ø og å -->
    <meta charset="utf-8">
    
    <!-- Så den også virker på smartphones -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="style-base.css">
   
    <link rel="stylesheet" type="text/css" href="style-medium.css" media="screen and (min-width: 650px)">

    <link rel="stylesheet" type="text/css" href="style-large.css" media="screen and (min-width: 900px)">
    
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Didot">
    
    <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css">
    
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Bodoni">
    
    <!-- Burgermenu script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- SEO META TAGS -->
   <meta name="description" content="MY DAILY SPACE er et nyheds- og livsstilsmedie. Det er dit univers for kvinder, og her er alle de seneste nyheder samlet på et sted.">
   <meta name="keywords" content="my daily space, kvinder, kvindeunivers, livsstilsmedie, nyheder">
   
</head>
<body>
    
    <!-- logo -->
	<a href="forside.php"><img src="billeder/logo.svg" class="logo" alt="logo"></a>
    <hr>
    
     <!-- burgermenu - computer tilstand -->
    <nav class="desktop">        
        <a href="forside.php" class="desktop desktopaktiv">Forside</a>
        <a href="nyheder.html"  class="desktop">Nyheder</a>
        <a href="ditliv.html"  class="desktop">Dit liv</a>

        <!-- dropdown menu -->
        <div class="dropdown">
            <button class="dropbtn">Sund &#38; smuk <i class="fas fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="skonhed.html">Skønhed</a>
                    <a href="mode.html">Mode</a>
                    <a href="sundhed.html">Sundhed</a>
                    <a href="opskrifter.html">Opskrifter</a>
                </div>
        </div>
        
        <a href="okonomi.html" class="desktop">Økonomi</a>
        
        <!-- dropdown menu -->
        <div class="dropdown">
            <button class="dropbtn">Livsstil <i class="fas fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="rejser.html">Rejser</a>
                    <a href="kultur.html">Kultur</a>
                    <a href="bolig.html">Bolig</a>
                    <a href="underholdning.html">Underholdning</a>
                </div>
        </div>
        
       
        <a href="kontakt.php" class="desktop">Kontakt</a>
        <a href="#" class="soeglink"><i class="fa fa-search"></i></a>
        <p class="soeg"><i class="fa fa-search"></i>_________</p>


    </nav>
    
    <!-- burgermenu / mobil tilstand -->
    <nav class="mobile">
        <button></button>
			<div>
				<a href="forside.php" class="undermenu mobilaktiv">Forside</a>
                <a href="nyheder.html" class="undermenu">Nyheder</a>
                <a href="ditliv.html" class="undermenu">Dit liv</a>
                <a href="mobilmenu1.html" class="undermenu">Sund &#38; smuk</a>
                <a href="okonomi.html" class="undermenu">Økonomi</a>
                <a href="mobilmenu2.html" class="undermenu">Livsstil</a>
				<a href="kontakt.php" class="undermenu">Kontakt</a>
               <p>søg________</p>
			</div>
		</nav>

    
     <div class="w3-content w3-section" style="max-width:80%; margin: 1% 10% 2% 10%;">
  <a href="mode-artikel3.html"><img class="mySlides" src="billeder/forside-slide1.jpg" style="width:100%" alt="mydailyspace"></a>
  <a href="opskrift-artikel2.html"><img class="mySlides" src="billeder/forside-slide2.jpg" style="width:100%" alt="mydailyspace"></a>
<a href="ditliv-artikel1.html"><img class="mySlides" src="billeder/forsideslide-ditliv.png" style="width:100%" alt="mydailyspace"></a>
  
            
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
    
    <!-- Overskrift -->
    <h1 class="overskrift">Nyeste artikler<hr></h1>
        
    <!-- Artikelbilleder -->
     <div class="row"> 
        <div class="column">
            <a href="nyheder-artikel5.html"><img src="billeder/forside-nyheder.jpg" alt="mydailyspace"></a>
            <a href="artikel1-skonhed.html"><img src="billeder/forside-skonhed.jpg" alt="mydailyspace"></a>
            <a href="opskrift-artikel3.html"><img src="billeder/forside-opskrifter.jpg" alt="mydailyspace"></a>
        </div>
    </div> 
    
    <!-- Overskrift -->
    <h1 class="overskrift">De mest læste<hr></h1>
        
    <!-- Artikelbilleder -->
     <div class="row"> 
        <div class="column">
            <a href="ditliv-artikel5.html"><img src="billeder/forside-ditliv-100.jpg" alt="mydailyspace"></a>
            <a href="sundhed-artikel4.html"><img src="billeder/forside-sundhed-100.jpg" alt="mydailyspace"></a>
            <a href="opskrift-artikel2.html"><img src="billeder/forside-opskrift-100.jpg" alt="mydailyspace"></a>
        </div>
    </div> 
    

    
    
    <!-- Reklame div -->
    <div class="reklame-forside">
        <img src="billeder/reklame2.png" alt="mydailyspace">
    </div>
    
    <!-- Instagram overskrift -->
    <h1>Følg <a href="javascript:voied();" onClick="popIt('https://www.instagram.com/mydailyspace/')">@MY DAILY SPACE</a> på Instagram</h1>
    
<!-- Instagram slide -->
<iframe src="https://snapwidget.com/embed/544165" class="snapwidget-widget"  style="border:none; overflow:hidden; width:1500px; height:300px"></iframe>
    
    <!-- Overskrift -->
 <h1 class="overskrift">Kunne du være interesseret i ... <hr></h1>

    <!-- Artikelbilleder -->
     <div class="row"> 
        <div class="column">
            <a href="rejser-artikel4.html"><img src="billeder/forside-rejse-100.jpg" alt="mydailyspace"></a>
            <a href="kultur-artikel3.html"><img src="billeder/forsidebillede-kultur-100.jpg" alt="mydailyspace"></a>
            <a href="artikel6-underholdning.html"><img src="billeder/forsidebillede-underholdning-100.jpg" alt="mydailyspace"></a>
        </div>
    </div> 
    
    
    <!-- Nyhedsbrev overskrift -->
    <h1>Gå ikke glip af noget med MY DAILY SPACEs nyhedsbrev</h1>
    
    <!-- Nyhedsbrev boks -->
    <form action="forside.php" method="post">
        
        <div class="nyhedsbrev-boks">
            <p class="nyheds-tekst">Tilmeld dig MY DAILY SPACE’s nyhedsbrev og få de seneste nyheder indenfor både mode, skønhed, sundhed og mange flere ting. <br><br>

                </p>
            
    <input type="email" id="email" name="email" placeholder="Din e-mail adresse" required class="nyhedsbrev-tekst"/><br />
            
    <input type="submit" id="signUp" name="signUp" value="Tilmeld" class="forside-knap" />
        </div>
        
</form>
        
    
    <!-- Reklame div -->
     <div class="reklame-forside">
        <img src="billeder/reklame2.png" alt="mydailyspace">
    </div>

<!-- Burgermenu -->
<script src="burgermagic.js"></script>
    
<!-- Javascript, får links til at åbne i ny browser -->
<script src="javascript.js"></script>
    
<footer>

    <div class="kontakt"><p>MY DAILY SPACE // Kompagnistræde 14 København K // Kontakt: ta@mydailyspace.dk</p></div>
    
    
<!-- FB, Insta og YT symboler -->
    
    <div class="symboler">
        <a href="javascript:voied();" onClick="popIt('https://www.facebook.com/mydailyspace/')"><i class="fab fa-facebook-f"></i></a>
        <a href="javascript:voied();" onClick="popIt('https://www.instagram.com/mydailyspace/')"><i class="fab fa-instagram"></i></a>
        <a href="javascript:voied();" onClick="popIt('https://www.youtube.com/channel/UCMUKwQ-kR3lzarmwqxM9mSQ')"><i class="fab fa-youtube"></i></a>
        
        
    </div>

</footer>
    
</body>

     
</html>