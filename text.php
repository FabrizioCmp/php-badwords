<?php

$text = $_POST["testo"];
$word = $_POST["parola"];

$censoredText = str_replace($word, "&#129324&#129324&#129324",$text);

?>

<!--******* HTML *******-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="css/text.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <h3>Testo originale</h3>
        <div><b>Lunghezza testo: </b><?php echo strlen($text)?> caratteri </div>
        <div><b>Testo: </b></div>
        <p><?php echo $text ?></p>
        <h3>Testo censurato</h3>
        <div><b>Lunghezza testo: </b><?php echo strlen($censoredText)?> caratteri </div>
        <div><b>Testo: </b></div>
        <p><?php echo $censoredText ?></p>
    </div>
    
</body>
</html>


