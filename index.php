<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$sentence = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac lacus magna. Integer porttitor arcu vitae ipsum volutpat, consectetur pretium massa mattis. Mauris hendrerit dolor vel est convallis fringilla. Sed eget interdum quam. Cras elementum finibus purus eu consectetur. Praesent scelerisque libero ut varius luctus. Fusce volutpat metus sed iaculis fringilla. Nam a sem id est ornare malesuada. Sed dictum arcu at lectus varius pellentesque.';
$userWord = $_GET['frase'];
$newSentence = str_replace($userWord, "***", $sentence);
?>
    <h1>Ciao sono Eleonora</h1>
    <h2>
        <?php echo $sentence; ?>
    </h2>
    <p>Lunghezza paragrafo:
        <?php echo strlen($sentence);?>
    </p>
    <h2>
        La nuova frase è <?php echo $userWord; ?>
    </h2>

    <h2>
        Sostituzione paragrafo precedente: <br>
        <?php echo $newSentence; ?>
    </h2>

    <p>Lunghezza nuovo paragrafo:
        <?php echo strlen($newSentence);?>
    </p>
   
</body>
</html>

