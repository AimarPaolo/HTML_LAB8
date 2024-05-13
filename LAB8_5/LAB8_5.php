<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Esercizio 8.4</title>
        <meta charset="utf-8">
        <meta name="author" content="Paolo Aimar">
    </head>
    <body>
        <h1>Il testo scritto è: </h1>
        <?php
            if(isset($_REQUEST["areaditesto"]) && $_REQUEST["areaditesto"] != ""){
                $testo = trim($_REQUEST["areaditesto"]);
                $pattern = '/\s+|[[:punct:]]+/'; 
                $result = preg_split($pattern, $testo, -1, PREG_SPLIT_NO_EMPTY);
                foreach($result as $parola){
                    if(!isset($vettore[strtolower($parola)])){
                        $vettore[strtolower($parola)] = 1;
                    }else{
                        ++$vettore[strtolower($parola)];
                    }
                    //printf("<p>%s</p>",var_dump($vettore));
                }
                echo "<p>Numero di parole univoche: ".count($vettore)."</p>";
                echo "<ul>";
                foreach($vettore as $key => $parola){
                    //in questo caso creo un foreach che associa la chiave al valore!
                    echo "<li>\"$key\" - numero di occorrenze: $parola</li>";
                }
                echo "</ul>";
                }else{
                echo "<p>I valori non sono stati ricevuti dal server o non sono stati inseriti dal cliente</p>";
            }
        ?>
    </body>
</html>