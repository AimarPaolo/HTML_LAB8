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
                $pattern = '/\s+|[[:punct:]]+/'; // Il pattern utilizzato per separare la stringa sugli spazi e segni di punteggiatura
                //il più indica una sequenza di diversi spazi
                $result = preg_split($pattern, $testo, -1, PREG_SPLIT_NO_EMPTY);
                /*preg_split( string $pattern , string $subject [, int $limit ] [, int $flags ] )
               restituisce un array di sottostringhe, generate separando la stringa di input secondo uno specifico pattern.
               Parametri:
               $pattern : pattern sul quale effettuare lo split 
               $subject: la stringa di input 
               $limit : se specificato, indica il numero massimo di elementi da ritornare. In questo caso è settato a NULL.
               $flags : può essere la combinazione di uno o più dei seguenti flag:
               PREG_SPLIT_NO_EMPTY, ritorna solo sottostringhe non vuote 
               PREG_SPLIT_DELIM_CAPTURE, anche i "separatori" saranno elementi dell'array. (Ad esempio il punto o la virgola)
               PREG_SPLIT_OFFSET_CAPTURE, restituisce l'offset, ossia l'indice della stringa di partenza in cui viene trovato il match col pattern
             */
                if(count($result) == 0){
                    echo "<p class=\"err\">Nessuna parola inserita </p>";
                }else{
                    echo "<p>Numero di parole inserite: ".count($result)."</p>";
                echo "<p>Elenco delle parole inserite:</p>";
                echo "<ul>";
                foreach($result as $parola)
                  echo "<li>$parola</li>";
                echo "</ul>";
                    }
                }else{
                echo "<p>I valori non sono stati ricevuti dal server o non sono stati inseriti dal cliente</p>";
            }
        ?>
    </body>
</html>