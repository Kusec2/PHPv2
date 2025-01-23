<!DOCTYPE HTML>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Str_word_count</title>
</head>

<body>
    <h1>Prebroji riječi u rečenici</h1>
    <form action="" method="POST">
        <label for="ulaz_niz">Ulazni niz:</label><br>
        <input type="text" id="ulaz_niz" name="ulaz_niz"><br><br>

        <input type="submit" value="Ispiši broj riječi">

    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        echo "ulazni niz:  <code>" . $_POST["ulaz_niz"] . "</code> sadrži " . str_word_count($_POST["ulaz_niz"]) . " riječi";
    }

    ?>
</body>
</html>