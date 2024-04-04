<?php 
// var_dump($_POST);
// var_dump($_POST['sentence']);
// var_dump($_POST['word']);

$sentenceToCensor = trim($_POST['sentence']);
$wordToFind = trim($_POST['word']);

var_dump($sentenceToCensor, $wordToFind);
// echo 'Original sentence: ' . $sentenceToCensor;
// echo '<br>';
// echo ' Original sentence length: ' . strlen($sentenceToCensor);
// echo '<br>';

// var_dump(str_replace($wordToFind, '***', $sentenceToCensor));
$censordSentence = str_replace($wordToFind, '***', $sentenceToCensor);
// echo 'Censord sentence: ' . $censordSentence;
// echo '<br>';
// echo ' Censord sentence length: ' . strlen($censordSentence);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censorator Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h2>Original sentence 
        <span class="badge bg-primary "> <?= strlen($sentenceToCensor) ?> </span>
    </h2>
    <p><?= $sentenceToCensor ?></p>

    <hr> 

    <h2>Censord sentence
        <span class="badge bg-primary "> <?= strlen($censordSentence) ?> </span>
    </h2>
    <p><?= $censordSentence ?></p>
</div>

    
</body>
</html>