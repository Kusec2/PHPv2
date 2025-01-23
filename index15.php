<!DOCTYPE HTML>
<html lang="hr">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretraga</title>
</head>
<body>
    <h1>Pretraga</h1>

    <form action="" method="GET">
        <label for="pretraga">Pretražite</label>
        <input type="text" id="pretraga" name="pretraga">
        <input type="submit" value="Pretraži">
    </form>

    <?php
    $pretraga=$_GET['pretraga'];
    $conn=mysqli_connect('localhost', 'root', '', 'projekt');
    $query="SELECT firstname, lastname FROM users WHERE concat(firstname, ' ', lastname) like '%$pretraga'";
    $result=mysqli_query($conn, $query);
    while ($row=mysqli_fetch_array($result)){
        echo "<p>" . $row['firstname'] . " " . $row['lastname'] . "</p>";
    }
    mysqli_close($conn);

?>
    
</body>
</html>