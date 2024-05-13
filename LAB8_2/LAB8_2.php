<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Esercizio 8.2</title>
        <meta charset="utf-8">
        <meta name="author" content="Paolo Aimar">
    </head>
    <body>
        <?php
            if($_REQUEST["numero1"] != "" && isset($_REQUEST["numero1"]) && $_REQUEST["numero2"] != "" && isset($_REQUEST["numero2"]) && $_REQUEST["btn"] != "" && isset($_REQUEST["btn"])){
                $numero1 = trim($_REQUEST["numero1"]); 
                //utilizzando la funzione trim controllo che non ci siano degli spazi ai lati della stringa
                $numero2 =trim($_REQUEST["numero2"]);
                $operando = trim($_REQUEST["btn"]);
                //sarebbe anche corretto fare un ulteriore controllo della stringa attraverso una regexp, in questo caso non viene fatto ma 
                //lo si dovrebbe fare...
                switch($operando){
                    case "somma":
                        $risultato = $numero1 + $numero2;
                        echo "<p>$risultato = $numero1 + $numero2</p>";
                        break;
                    case "differenza":
                        $risultato = $numero1 - $numero2;
                        echo "<p>$risultato = $numero1 - $numero2</p>";
                        break;
                    case "prodotto":
                        $risultato = $numero1 * $numero2;
                        echo "<p>$risultato = $numero1 * $numero2</p>";
                        break;
                    case "divisione":
                        $risultato = $numero1 / $numero2;
                        echo "<p>$risultato = $numero1 / $numero2</p>";
                        break;
                    default:
                        echo  "hai selezionato un bottone sbagliato";
                        break;
                }
            }else{
                echo "<p>ERRORE!!!!</p>";
            }
        ?>
    </body>
</html>