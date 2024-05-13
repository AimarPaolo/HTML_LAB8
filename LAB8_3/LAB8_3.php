<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Esercizio 8.3</title>
        <meta charset="utf-8">
        <meta name="author" content="Paolo Aimar">
    </head>
    <body>
        <h1>METEO!!!!</h1>
        <?php
            if(isset($_REQUEST["temperatura"]) && $_REQUEST["temperatura"] != ""){
                $temperatura = trim($_REQUEST["temperatura"]);
                $regexp_temperatura = '/^(\+|-)[\d]{1,3}\.[\d]$/';
                if(!preg_match($regexp_temperatura, $temperatura))
                    echo "<p class=\"err\">Errore - La temperatura che è stata inserita non è corretta!!</p>\n";
                else{
                    if($temperatura < 0)
                        echo "<p>Oggi è una giornata molto fredda</p>";
                    else if(0<$temperatura && $temperatura<=10)
                        echo "<p>Oggi è una giornata fredda</p>";
                    else if(10<$temperatura && $temperatura<=18)
                        echo "<p>Oggi è una giornata tiepida</p>";
                    else if(18<$temperatura && $temperatura<=25)
                        echo "<p>Oggi è una giornata calda</p>";
                    else if($temperatura>25)
                        echo "<p>Oggi è una giornata molto calda</p>";
                }
            }else{
                echo "<p>il server non ha ricevuto nesssuna temperatura tra i dati in ingresso...</p>";
            }
        ?>
    </body>
</html>