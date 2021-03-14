<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styling_contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <title> Contact </title>
</head>
<body>
    <div class="sectiuneMeniu">
        <ul>
            <li> <a href="home.php"> Acasă </a> </li>
            <li> <a href="skills.php"> Aptitudini </a> </li>
            <li> <a href="" onclick="return false;"> Contact </a> </li>
        </ul>
    </div>
    <div class="chenar">
        <div class="inputContainer">
            <h1> Contactează-mă </h1>
            <form action="mailto: aggologan1999@gmail.com" autocomplete="off">
                <div class="inputSection">
                    <input type="text" name="nume" id="nume" class="borderBottom" placeholder="Nume">
                </div>
                <div class="inputSection">
                    <input type="email" name="email" id="email" class="borderBottom" placeholder="Email">
                </div>
                <div class="inputSection">
                    <input type="text" name="text" id="text" class="borderBottom" placeholder="Mesaj">
                </div>
                <div class="inputSection">
                    <input type="submit" id="submitButton" value="Trimite">
                </div>
            </form>
        </div>
    </div>
</body>
</html>