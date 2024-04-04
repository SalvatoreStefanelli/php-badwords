 <?php
$name = 'Salvatore';
$lastname = 'Stefanelli';
$movie = 'Back to the future';

var_dump($name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $name; ?> <?php echo $lastname; ?> <?php echo $movie; ?></h1>

    <?php if(!empty($_GET) && in_array('name', $_GET)) : ?>
        <p>
            Ciao
            <?php echo $_GET['name'] . ' ' . $_GET['lastname'] ?>    
        </p>
    <?php endif ?>


    <form action="" method="get">
        <label for="name">Your name</label>
        <input type="text" name="name" id="name" required>
        <label for="lastname">Your lastname</label>
        <input type="text" name="lastname" id="lastname" required>

        <button type="submit">Send</button>
    </form>
</body>
</html>

<?php 
$movies = ['Matrix', 'Ritorno al futuro', 'Avengers'];
// echo $movies;
$movie = [
    "name" => "Hypnotic",
    "length" => 120
];

// var_dump($movies);
// var_dump($movie)

foreach ($movies as $movie) {
    var_dump($movie);
}

// 'Questa è una stringa $message';
// var_dump('Questa è una stringa');

// var_dump(str_contains('This is a string!', 'PHP'));

// var_dump(10+1)
?>

<?php 
var_dump($_GET);
var_dump(empty($_GET));
?>





