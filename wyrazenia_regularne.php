<?php
// $wzorzec = '/być/';
// $tekst = "byćalbo nie być";
// if (preg_match($wzorzec, $tekst))
//     echo "znaleziono wzorzec: ";
// else 
//     echo "nie znaleziono wzorca";
// echo "znaleziono: " . preg_match_all($wzorzec, $tekst);


// szukamy jednej cyfry
// $wzorzec = '/\d/';
// $tekst = "mam 4 zeszyty";
// if (preg_match($wzorzec, $tekst))
// echo "znaleziono cyfre";
// else
//     echo "nie znaleziono cyfry";



//szukamy liczby 5 cyfrowej
// $wzorzec = '/\d{5}/';
// $tekst = "telefon 465473857";
// if (preg_match($wzorzec, $tekst))
// echo "znaleziono liczbę";
// else
//     echo "nie znaleziono liczby";



//wyszukiwanie pliku z rozszerzeniem .gif
// $wzorzec = '/\S*\.gif/i'; //i - oznacza ignorowanie wielkości liter
// $tekst = "W pliku obrazek .gif jest ikona";
// if (preg_match($wzorzec, $tekst))
// echo "znaleziono obrazek";
// else
//     echo "nie znaleziono obrazka";


//wyszukiwanie kodu pocztowego
// $wzorzec = '/\d{2}-\d{3}/';
// $tekst = "poczta 34-200 Sucha Beskidzka";
// if (preg_match($wzorzec, $tekst, $matches))
// echo "znaleziono kod pocztowy " .$matches[0];
// else
//     echo "nie znaleziono kodu pocztowego";



$wzorzec = 
'/([0123]?\d)+[-\.\/]+([01]?\d)+[-\.\/]+(\d{4})/';
$tekst = "Sucha Beskidzka, dn 04.10.2023";
if (preg_match($wzorzec, $tekst))
echo "znaleziono datę ";
else
    echo "nie znaleziono daty";

?>