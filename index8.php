<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Odabir vozila</title>
    </head>
    <body>
        <h1>Odabir vozila</h1><br>
        <form action="" method="POST">
        <?php
        echo "Označite vozilo:<br>";
        echo '<ul>';
        $cars=array("Audi", "BMW", "Renault", "Citroen");
        foreach ($cars as $car){
            echo  "<input type='radio' id='".$car."' name='cars' value='".$car."''>";
            echo "<label for='".$car."'>" . $car . '</label><br>';
        }
        echo '</ul>';
    ?>

    <br>
    <input type="submit" value="Pošalji">
    </form>

    <?php

        if($_SERVER['REQUEST_METHOD']=="POST" && !empty($_POST["cars"])){
            $odabranoVozilo= $_POST['cars'];
            echo '<p>Odabrali ste:</p>';
            echo "$odabranoVozilo<br>";
        }
    ?>
    </body>

</html>