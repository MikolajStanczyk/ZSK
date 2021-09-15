<?php

//typy danych

//całkowita

$calkowita=10;
echo $calkowita;

//system binarny

$binarny=0b1011;
echo $binarny;

//system ósemkowy

$oct=010;
echo $oct;

//system szesnastkowy

$hex=0x10;
echo $hex;

//zmiennoprzecinkowe

$x=10.5;
echo $x;

//logiczne

$prawda=true; //wyswietla 1
$falsz=false; //nie wyswietla nic
echo $falsz;

//składnia heredoc

echo <<< ETYKIETA;
    <br>Iks to: $x<br>
    Poznań<br>
ETYKIETA;

$tekst = <<< ETYKIETA;
    <br>Iks to: $x<br>
    Poznań<br>
ETYKIETA;

echo $tekst;

//składnia nowdoc

echo <<< 'ETYKIETA';
    <br>Iks to: $x<br> //nie wyświetla zmiennych itd
    Poznań<br>
ETYKIETA;

# nl2br() uznaje entery czy coś