<?php 

    $paragraph = 'Il mio primo file di PHP, si inizia la fase Oscura! ';
    $aiuto = "scrivi nell'URL ?testo= + una tua parola che verrà censurata dalla scritta sotto";
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
</head>
<body>
    
    <p style="color:red;"> 
        <?php echo $aiuto ?>
    </p>


    <h5>Testo senza censura ( <?php echo strlen($paragraph) ?> ) caratteri</h5>
    <h2>
        <?php echo $paragraph; ?> 
    </h2>

    <br>
    <h5>Testo con censura ( <?php echo strlen($censuredParagraph) ?> ) caratteri </h5>
    <h2>
        <?php echo $censuredParagraph ?>
    </h2>

    

</body>
</html>