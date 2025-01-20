<!DOCTPYE HTML>
<html>
    <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">

	<title>Prosjek ocjena</title>
    <style>
	
	body{
		font-family: 'Open Sans Condensed';
		font-size: 110%;
		color: #232323;
		width: 50%;
		margin: 0 auto;
		margin-top: 2em;
	}
		
	input[type="number"]{
		box-sizing: border-box;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		outline: none;
		display: block;
		width: 100%;
		padding: 7px;
		border: none;
		border-bottom: 1px solid #ddd;
		background: transparent;
		margin-bottom: 10px;
		font: 16px Arial, Helvetica, sans-serif;
		height: 45px;
		font-family: 'Open Sans Condensed', arial, sans;
	}	
	label {
		width: 250px;
		display:inline-block;
	}
	.block {
		margin: 4px 0;
	}
	input[type="submit"] {
		-moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
		-webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
		box-shadow: inset 0px 1px 0px 0px #45D6D6;
		background-color: #2CBBBB;
		border: 1px solid #27A0A0;
		display: inline-block;
		cursor: pointer;
		color: #FFFFFF;
		font-family: 'Open Sans Condensed', arial, sans;
		font-size: 14px;
		padding: 8px 18px;
		text-decoration: none;
		text-transform: uppercase;
	}
	</style>
    </head>
<body>
<h1>Izračun ocjene iz kolokvija</h1>
<div class= "tekst">
    <p> Potrebno je napraviti formu za izračun ocjene iz kolokvija. 
    Imamo uvjet da moramo izračunati srednju ocjenu iz prvog i drugog kolokvija. 
    Ukoliko je jedan od kolokvija negativan, krajnja ocjena je negativna. 
    Drugi uvjet je da ocjena ne smije biti manja od 1 i veća od 5
    </p>
</div>
<br>




<form action="" method="POST">

    <label for="ocjena1">Ocjena I. kolokvija</label><br>
    <input type="number" id="ocjena1" name="ocjene[]" min="1" max="5"><br>
    
    <label for="ocjena2">Ocjena II. kolokvija</label><br>
    <input type="number" id="ocjena2" name="ocjene[]" min="1" max="5"><br>
    
    <input type="submit" value="Pošalji">
</form>


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ocjene = $_POST['ocjene'];
        $negativna = false;

        foreach ($ocjene as $ocjena) {
            if ($ocjena < 1 || $ocjena > 5) {
                echo "<p>Ocjene moraju biti između 1 i 5.</p>";
                exit;
            }
            if ($ocjena == 1) {
                $negativna = true;
            }
        }

        if ($negativna) {
            echo "<p>Krajnja ocjena je negativna jer je jedan od kolokvija negativan.</p>";
        } else {
            print '<p>Ocjena I. kolokvija: ' . $ocjene[0] . '</p>';
            print '<p>Ocjena II. kolokvija: ' . $ocjene[1] . '</p>';
            $prosjek = array_sum($ocjene) / count($ocjene);
            echo "<p>Prosjek ocjena je: $prosjek</p>";
        }
    }
    

?>
</body>
</html>