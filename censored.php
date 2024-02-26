<?php 
$censura = $_POST['censura'];
$paragraph = $_POST['paragraph'];
$paragraph_censored =str_replace($censura, '***', $paragraph);

var_dump ( $paragraph, $censura,$paragraph_censored );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>
il paragrafo è:
<?php echo $paragraph?>
</p>

<p>
La sua lunghezza è: <?php echo strlen($paragraph)?>
</p>
<p>
il paragrafo dopo la censura è: <?php echo strlen( $paragraph_censored )?></p>

<p>
La sua lunghezza è: <?php echo strlen($paragraph_censored);?>
</p>  
</body>
</html>