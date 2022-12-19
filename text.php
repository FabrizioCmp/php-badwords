<?php

$text = $_POST["testo"];
$word = $_POST["parola"];

$censoredText = str_replace($word, "&#129324&#129324&#129324",$text);

echo $censoredText;