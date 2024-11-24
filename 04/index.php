<?php

error_reporting(-1);

$title = 'Less 4';
//$winnie_the_pooh = "Hello I'm Winnie! \"Строка в кавычках\"";
//$winnie_the_puh = 'Hello I\'m Winnie!';

$fruit = 'orange';
$winnie_the_pooh = "Hello Iam Winnie! I have 2 {$fruit}s";
//$winnie_the_pooh = 'Hello Iam Winnie! I have 1 $fruit';

$var = 'test 1';
//$Var = 'test 2';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
</head>
<body>

<?php $title = 'Урок 4' ?>
<h1><?php echo $title ?></h1>
<p> <?php echo $winnie_the_pooh ?></p>
<!--<p> --><?php //echo $winnie_the_puh ?><!--</p>-->
<?php
var_dump($var, $Var);
?>


</body>
</html>


