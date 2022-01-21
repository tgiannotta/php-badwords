<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo File PHP</title>
</head>
<body>
    
<!--         Creo una variabile con il discorso di Martin Luther King -->

<?php

    $speach='I have a dream that one day on the red hills of Georgia, the sons of former slaves and the sons of former slave owners will be able to sit down together at the table of brotherhood.

    I have a dream that one day even the state of Mississippi, a state sweltering with the heat of injustice, sweltering with the heat of oppression will be transformed into an oasis of freedom and justice.
    
    I have a dream that my four little children will one day live in a nation where they will not be judged by the color of their skin but by the content of their character. I have a dream today.
    
    I have a dream that one day down in Alabama with its vicious racists, with its governor having his lips dripping with the words of interposition and nullification, one day right down in Alabama little Black boys and Black girls will be able to join hands with little white boys and white girls as sisters and brothers. I have a dream today.
    
    I have a dream that one day every valley shall be exalted, every hill and mountain shall be made low, the rough places will be made plain, and the crooked places will be made straight, and the glory of the Lord shall be revealed, and all flesh shall see it together.';

    $speach_lenght= strlen($speach);
 
?>

<!--     Stampo il Testo e la sua lunghezza -->
<h2>IL discorso di Martin Luther King</h2>
<p>
    <?php 
        echo $speach;
    ?>
</p>

<h4>La sua lunghezza è di <?php  echo $speach_lenght?> parole</h4>

<!-- L'utente tramite l'url decide quale parola censurare -->
<?php

    $censura= $_GET['censura'];

    $parola_censurata= '***';

    $rimpiazzo= str_replace($censura, $parola_censurata, $speach);


    echo $rimpiazzo;

?>


</body>
</html>