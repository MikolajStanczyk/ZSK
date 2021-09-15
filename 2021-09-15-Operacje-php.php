<?php
echo PHP_VERSION; 

echo 2**10;

$x=100;
$y=10;

echo $x<=>$y; #-1 zmienna po lewej mniejsza 0 równa 1 zmienna po prawej większa

#równe
$x=1;
$y=1.0;

if($x===$y){#Sprawdza też typ danych
    echo "Identyczne"; 

}if($x==$y){#Sprawdza czy są równe
    echo "Równe";
}else{
    echo "Nie równe";
}

echo gettype($x);

# Postinkrementacja $x++
# Preinkrementacja ++$x
# Postdekrementacja $x--
# Predekrementacja --$x
echo "<br>";
$x=1;
echo $x; #1
$x=$x++;
echo $x; #1
$x=++$x;
echo $x; #2
$y=++$x;
echo $x; #3
echo $y; #3
$y=$x++;
echo $x; #4
echo "$y<br>"; #3