<?php 

    $paragraph = 'Il mio primo file di PHP, si inizia la fase Oscura! ';
    $aiuto = "scrivi nell'URL ?testo= + una parola che verrà censurata dalla scritta sotto";
    $text = $_GET['testo'];
    // var_dump($text);
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
            background-color: #1c2469;
        }

        h2 {
            color: white;
        }

        h5 {
            color: white;
        }

        p {
            color: #948881;
            font-weight: 600;
            text-decoration: underline;
        }

        .aiuto,
        .container {
            width: 90%;
            margin: 0 auto;
        }

        .aiuto {
            text-align: center;
            padding: 1rem 0;
        }
        
        .container {
            padding-top: 2rem;
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
        <h5>Testo senza censura ( <?php echo strlen($paragraph) ?> ) caratteri</h5>
        <h2>
            <?php echo $paragraph; ?> 
        </h2>
        </div>
        <div class="container">
        <br>
        <h5>Testo con censura ( <?php echo strlen($censuredParagraph) ?> ) caratteri </h5>
        <h2>
            <?php echo $censuredParagraph ?>
        </h2>
    </div>
    

</body>
</html>