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
$sentence = 'Non conosco il linguaggio PHP';
?>
    <h1>Ciao sono Eleonora</h1>
    <h2>
        <?php echo $sentence; ?>
    </h2>
    <p>Lunghezza stringa:
        <?php echo strlen($sentence);?>
    </p>
   
</body>
</html>

