<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Początek strony</h3>
     <?php
        include('./dolaczanie.php'); #Pokazuje warning gdy nie ma tego pliku
        require('./dolaczanie.php'); #Przestaje wykonywać kod kiedy nie ma tego pliku
        include_once('./dolaczanie.php'); #Nie pozwala na dołączenie drugi raz
        require_once('./dolaczanie.php'); #Nie pozwala na wymaganie drugi raz
     ?>
    <h3>Koniec strony</h3>
</body>
</html>