<?php
//zde se php pise v momente kdy chcete zpracovat kod pri spusteni stranky
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP a Html vkladani promennych</title>
</head>
<body>
    <h1>vkladani promennych php do html</h1>
    <?php
    $jmeno ='max';
    $prijmeni ='vanek'
    ?>
    <h2>vitejte <br>
        <?php
            echo $jmeno.''.$prijmeni;
        ?>
    </h2>
</body>
</html>
<?php
    //zde se pise php kdyz chce zpracovat kod po spusteni stranky 
    ?>