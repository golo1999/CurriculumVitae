<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling_skills.css">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> Aptitudini </title>
</head>
<body onresize="modificareInaltimeElement()">
    <div class="sectiuneMeniu">
        <ul>
            <li> <a href="home.php"> Acasă </a> </li>
            <li> <a href="skills.php" onclick="return false;"> Aptitudini </a> </li>
            <li> <a href="contact.php"> Contact </a> </li>
        </ul>
    </div>
    <div class="ecranPrincipal">
        <h1> Limbaje cu care am lucrat </h1>
        <div class="containerAptitudini">
            <div class="coloana coloanaNumeAptitudine">
                <div class="randNumeAptitudine" id="randHTML">
                    <h3> HTML5 </h3>
                </div>
                <div class="randNumeAptitudine" id="randCSS">
                    <h3> CSS3 </h3>
                </div>
                <div class="randNumeAptitudine" id="randJS">
                    <h3> JavaScript </h3>
                </div>
                <div class="randNumeAptitudine" id="randjQuery">
                    <h3> jQuery </h3>
                </div>
                <div class="randNumeAptitudine" id="randNodeJS">
                    <h3> Node.js </h3>
                </div>
                <div class="randNumeAptitudine" id="randJava">
                    <h3> Java </h3>
                </div>
                <div class="randNumeAptitudine" id="randPHP">
                    <h3> PHP </h3>
                </div>
                <div class="randNumeAptitudine" id="randSQL">
                    <h3> SQL </h3>
                </div>
                <div class="randNumeAptitudine" id="randC">
                    <h3> C </h3>
                </div>
                <div class="randNumeAptitudine" id="randCPP">
                    <h3> C++ </h3>  
                </div>
            </div>
            <div class="coloana coloanaProcentajAptitudine">
                <div class="randProcentajAptitudine" id="randHTMLProcentaj">
                    <div class="procent html"></div>
                    <div class="procentLowOpacity html"> 70% </div>
                </div>
                <div class="randProcentajAptitudine" id="randCSSProcentaj">
                    <div class="procent css"></div>
                    <div class="procentLowOpacity css"> 60% </div>    
                </div>
                <div class="randProcentajAptitudine" id="randJSProcentaj">
                    <div class="procent js"></div>
                    <div class="procentLowOpacity js"> 50% </div>  
                </div>
                <div class="randProcentajAptitudine" id="randjQueryProcentaj">
                    <div class="procent jquery"></div>
                    <div class="procentLowOpacity jquery"> 70% </div>    
                </div>
                <div class="randProcentajAptitudine" id="randNodeJSProcentaj">
                    <div class="procent nodejs"></div>
                    <div class="procentLowOpacity nodejs"> 50% </div>    
                </div>
                <div class="randProcentajAptitudine" id="randJavaProcentaj">
                    <div class="procent java"></div>
                    <div class="procentLowOpacity java"> 70% </div> 
                </div>
                <div class="randProcentajAptitudine" id="randPHPProcentaj">
                    <div class="procent php"></div>
                    <div class="procentLowOpacity php"> 50% </div>  
                </div>
                <div class="randProcentajAptitudine" id="randSQLProcentaj">
                    <div class="procent sql"></div>
                    <div class="procentLowOpacity sql"> 70% </div>     
                </div>
                <div class="randProcentajAptitudine" id="randCProcentaj">
                    <div class="procent c"></div>
                    <div class="procentLowOpacity c"> 60% </div>   
                </div>
                <div class="randProcentajAptitudine" id="randCPPProcentaj">
                    <div class="procent cpp"></div>
                    <div class="procentLowOpacity cpp"> 70% </div>    
                </div>
            </div>


        </div>
    </div>
    <script src="js_skills.js"></script>
</body>
</html>