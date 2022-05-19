<?php
    // variabile con il testo di aiuto
    $aiuto = "scrivi nell'URL ?testo= + una parola che verrà censurata dalla scritta sotto";
    // apro una variabile con un testo a mia scelta
    $paragraph = 'Il mio primo file di PHP, si inizia la fase Oscura! ';

    // variabile con il testo che inserisce tramite l'URL l'utente 
    $text = $_GET['testo'];
    // var_dump($text);

    // variabile con il testo a mia scelta dove faccio il replace della parola scelta dall'utente
    $censuredParagraph = str_replace($text, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            width: 100vw;
            height: 100vh;
            background-image: url('https://esports.thegamesmachine.it/wp-content/uploads/2017/05/Il-Lato-Oscuro-dei-videogames.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        h2 {
            color: white;
        }

        h5 {
            color: white;
        }

        p {
            display: inline;
            color: #948881;
            font-weight: 600;
            border-bottom: 1px solid red;
        }

        .aiuto,
        .container {
            width: 90%;
            margin: 0 auto;
        }

        .aiuto {
            padding: 1rem 0;
        }
        
        .container {
            padding-top: 2rem;
            background-color: #00000052;

        }

    
    </style>
</head>
<body>
    <div class="aiuto">
        <p> 
            <?php echo $aiuto ?>
        </p>
    </div>

    <div class="container">
        <h5>
            Testo senza censura ( <?php echo strlen($paragraph) ?> ) caratteri
        </h5>
        <h2>
            <?php echo $paragraph; ?> 
        </h2>
    </div>

    <div class="container">
        <h5>
            Testo con censura ( <?php echo strlen($censuredParagraph) ?> ) caratteri 
        </h5>
        <h2>
            <?php echo $censuredParagraph ?>
        </h2>
    </div>
    

</body>
</html>