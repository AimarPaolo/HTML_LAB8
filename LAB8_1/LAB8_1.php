<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Esercizio 8.1</title>
        <meta charset="utf-8">
        <meta name="author" content="Paolo Aimar">
    </head>
    <body>
        <h1>Stampa delle date in PHP e in JS</h1>
        <p>Benvenuto!</p>
        <?php
           $ora = date("H:i:s");
           $data = date("Y-m-d");
           echo "<p>Qui sul server sono le $ora del $data\n<p>";
        ?>
        <script type="text/javascript">
            let d=new Date();
            let ora = d.toLocaleTimeString();
            let giorno = d.toLocaleDateString();
            //toLocateString ti stampa la data completa 
            document.write("La data di quando il cliente nel documento ha richiesto il servizio è nel giorno: "+giorno+" nell'ora: "+ora);
        </script>
    </body>
</html>