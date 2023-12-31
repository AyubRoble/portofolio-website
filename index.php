<?php 
// Include visitor log script 
include_once 'log.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayub Roble</title>
    <link rel="Stylesheet" href="style.css">
    <script src="portfolio.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div style="height: 100vh;" id="section-1">
        <h1 class="titel" >Portfolio website van</h1>
        <br>
        <h1>Ayub Roble </h1>
        <div>
          <header class="header">

            <nav class="navbar">
                <a href="#section-1"> Hoofdpagina</a>
                <a href="#section-2"> OverMij</a>
                <a href="#section-3"> Stage</a>
                <a href="#section-4"> Diploma's</a>
                <a href="#section-5"> Contact</a>
            </nav>
          </header>
        </div>
        <a id="scroll-btn" class="scroll-btn"    href="#section-2"><div class="arrow"></div></a>
        <a id="scroll-btn-2"class="scroll-btn-2" href="#section-3"><div class="arrow2"></div></a>
        <a id="scroll-btn-3"class="scroll-btn-3" href="#section-4"><div class="arrow3"></div></a>
        <a id="scroll-btn-4"class="scroll-btn-4" href="#section-5"><div class="arrow4"></div></a>
    </div>
    <div class = "slider">
        <div class = "slides">
            <!--radio button start-->
            <input type="radio" name = "radio-btn" id="radio-1">
            <input type="radio" name = "radio-btn" id="radio-2">
            <input type="radio" name = "radio-btn" id="radio-3">
            <input type="radio" name = "radio-btn" id="radio-4">
            <!--radion button end-->
            <!--slide image start-->
            <div class="slide first">
                <img src="selfie.jpg" alt="bus">
            </div>
            <div class="slide">
                <img src="diploma.jpg" alt="rubix cube">
            </div>
            <div class="slide">
                <img src="3.jpg" alt="huis">
            </div>
            <div class="slide">
                <img src="4.jpg" alt="wiel">
            </div>
            <!--slide image end-->
            <!-- automatic navigation start-->
            <div class="navigation-auto">
                <div class="auto-btn-1"></div>
                <div class="auto-btn-2"></div>
                <div class="auto-btn-3"></div>
                <div class="auto-btn-4"></div>
            </div>
            <!-- automatich navigation end-->
            <!-- manual navigation start-->
            <div class = "navigation-manual"> 
                <label for ="radio-1" class="manual-btn"></label>
                <label for ="radio-2" class="manual-btn"></label>
                <label for ="radio-3" class="manual-btn"></label>
                <label for ="radio-4" class="manual-btn"></label>
            </div>
            <!--manual navigation end-->
    </div>
    </div>
    <!-- einde sliders-->
    <section id="section-2"  style="height: 100vh;">
        <br>
        <h2 >Over Mij</h2>
        <p id="OverMij">Mijn naam is Ayub Roble ik ben 20 jaar oud, en ik ben student aan de Hogeschool Utrecht.<br>
            Hier volg ik de opleiding Open-ICT.
            <br>    
             Hiervoor heb ik MBO3+4 ICT Beheer gestudeerd op het Koning Willem 1 College.
        </p>
    </section>
    <div>
    <section id="section-3" style="height: 100vh;">
    <br>
    <h3> Stage</h3>
    <div class="flex-stage">
        <div class="flex-collum">
    <p> De Mandemakers</p>
    <p class="flex-collum-1">In mijn 4 jaar MBO heb ik op verschillende plekken stage gelopen.
        Mijn Eerste Stage was bij DeMandeMakers in Waalwijk.Mijn taken hier waren:</p>
    <ul>
        <li>Gebruikers helpen met Diverse IT vragen</li>
        <li>Servers en switches beheren en onderhouden</li>
        <li>Werkplekken klaar maken en onderhouden </li>
    </ul> 
</div>
    </p>
    <div class="flex-collum">
    <p> OMO Scholengroep de langstraat</p>
    <p>Hier heb ik geholpen met de docenten en studenten met diverse IT problemen zoals</p>
    <ul>
        <li>Software problemen oplossen van studenten en docenten laptops</li>
        <li>Digibord problemen oplossen</li>
        <li>Studten en docenten helpen met algemene IT vragen</li>
        <li>Applicaties beheren</li>
    </ul>
</div>
    </p>
    <br>
    <div class="flex-collum">
    <p> Holmatro</p>
    <p> Ik heb 4 maanden stage gelopen en 1 maand tijdelijk gewerkt bij Holmatro Raamsdonksveer.
        <br>
        Mijn taken hier waren:</p>
        <ul>
            <li>Ondersteunen met switches vervangen</li>
            <li>Ondersteunen met servers vervangen </li>
            <li>Collega's ondersteunen met software en hardware vragen</li>
            <li>Het opzetten van hardware voor diverse projecten</li>
        </ul>
    </div>
</div>
</section>
</div>
<Section id="section-4" style="height: 100vh;">
    <br>
    <h4> Diploma's</h4>
    <br>
    <p id="DiplomaText">Ik heb 3 diploma's gehaald tot nu toe, dit zijn:</p>
    <p></p>
</Section>
<Section id="section-5" style="height: 100vh;">
    <br>
    <h5> Contact</h5>
    <br>
    <p>Je kunt mij contacteren op:</p>
    <a class="buttons" href="mailto:robleajub@gmail.com"><img src="email.png" style="width: 10%; height: auto;">
       
    </a>
    <a class="buttons" href="https://www.linkedin.com/in/ayub-roble-b9a2b3226/" target="_blank" rel="noopener noreferrer"><img src="linkedin.png" style="width: 10%; height: auto;">
      
    </a>
    <form action="insert.php" method="post">
             
             <p>
                            <label for="firstName">First Name:</label>
                            <input type="text" name="first_name" id="firstName">
                         </p>
              
                          
             <p>
                            <label for="lastName">Last Name:</label>
                            <input type="text" name="last_name" id="lastName">
                         </p>
              
                          
             <p>
                            <label for="emailAddress">Email Address:</label>
                            <input type="text" name="email" id="emailAddress">
                         </p>
              
                         <input type="submit" value="Submit">
</form> 
</Section>
</body>
</html>