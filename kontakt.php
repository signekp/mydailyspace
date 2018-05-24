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
    
    <!-- Burgermenu script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- SEO META TAGS -->
   <meta name="description" content="MY DAILY SPACE er et nyheds- og livsstilsmedie. Det er dit univers for kvinder, og her er alle de seneste nyheder samlet på et sted.">
   <meta name="keywords" content="my daily space, kvinder, kvindeunivers, livsstilsmedie, nyheder">
   
</head>
<body>
    <?php
    if(isset($_GET["sendt"])){
        echo '<script>alert("Din besked er nu sendt!");</script>';
    }
    ?>
     
   
    <!-- logo -->
	<a href="forside.php"><img src="billeder/logo.svg" class="logo" alt="logo"></a>
    <hr>
    
     <!-- burgermenu - computer tilstand -->
    <nav class="desktop">        
        <a href="forside.php" class="desktop">Forside</a>
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
       
        <a href="kontakt.php" class="desktop desktopaktiv">Kontakt</a>
        <a href="#" class="soeglink"><i class="fa fa-search"></i></a>
        <p class="soeg"><i class="fa fa-search"></i>_________</p>

    </nav>
    <!-- burgermenu / mobil tilstand -->
    <nav class="mobile">
        <button></button>
			<div>
				<a href="forside.php" class="undermenu">Forside</a>
                <a href="nyheder.html" class="undermenu">Nyheder</a>
                <a href="ditliv.html" class="undermenu">Dit liv</a>
                <a href="mobilmenu1.html" class="undermenu">Sund &#38; smuk</a>
                <a href="okonomi.html" class="undermenu">Økonomi</a>
                <a href="mobilmenu2.html" class="undermenu">Kultur &#38; samfund</a>
				<a href="kontakt.php" class="undermenu mobilaktiv">Kontakt</a>
               <p><input type="text" placeholder="Søg her"></p>
                
			</div>
		</nav>
    <hr>
    <!-- Brødkrummesti -->
    
    <div class="krummesti"><p>Forside <i class="fas fa-arrow-right"></i> Kontakt </p></div>
    
    
    
    <h1 class="artikel-overskrift">Om os</h1>
    
    <p class="kontakt-tekst">MY DAILY SPACE er et digitalt nyheds og -livsstilsmedie, der giver dig de aktuelle nyheder krydret med masser af lækkert livsstilsindhold i et samlet univers.<br><br>

        Hos os er alt samlet på et sted. Her kan du nemlig få både nyheder fra ind- og udland samt lækre opskrifter, mode- og boligtips, personlige fortællinger, kultur og meget mere.<br><br>

        Vi er et bannerannoncefrit medie, hvilket betyder, at du ikke forstyrres af pop-up reklamer, blinkende annoncer og andre tekniske annonceformater.<br><br>

        Velkommen til!</p>
    
    <iframe src="https://www.youtube.com/embed/FTfFqfF8LPo" class="video-omos"> </iframe>
    
    
    <h1 class="artikel-overskrift">Kontakt os</h1>

<div class="kontaktform">
	<form action="kontaktform.php" method="post" name="form" class="form-box">
		
		<label for="name">Navn</label><br>
		<input type="text" name="name" placeholder="Dit navn"  class="tekst" required><br><br>
		
		<label for="email">Email</label><br>
		<input type="email" name="email" placeholder="Din email" class="tekst" required><br><br>
		
		<label for="message">Din besked</label><br>
		<textarea name="msg" placeholder="Din besked" required></textarea><br>
		
		<input type="submit" name="submit" value="Send email" class="knap">
		
	</form>
	
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