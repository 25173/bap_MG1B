<!doctype html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BAP OPDRACHT 6</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<h1>BAP OPDRACHT 6</h1>
<h2>Klasgenoten:</h2>
<table>
<?php

    // CONNECTIE MAKEN
    $dbc = mysqli_connect('localhost','root','root','25173_db','3306') or die ('Er is geen connectie met de database. Check je databasevariabelen.');
    // QUERY (OPDRACHT) SCHRIJVEN
    $query = "SELECT * FROM klasgenoten  ORDER BY `klasgenoten`.`klasgenoot_id` ASC ";

    // QUERY UITVOEREN
    $result = mysqli_query($dbc, $query) or die ('De query is mislukt.');

    // MET EEN WHILE-LOOP ALLE GEGEVENS IN BEELD BRENGEN
    while ($row = mysqli_fetch_array($result)) {
         echo "<tr><th>". $row['klasgenoot_id'] . "</th>\t<th>" . $row['naam'] . "</th> \t <th>" . $row['tussenvoegsel'] . "</th> \t <th>" . $row['achternaam'] . "</th> \t <th>" . $row['email'] . "</th> \t <th>" . $row['woonplaats'] . "</th>\t<th>" . $row{'klas'} . "</th></tr> \n";
    }

    // CONNECTIE SLUITEN
    $dbc_closed = mysqli_close($dbc);
?>
</table>
<p>Klik <a href="voegtoe.php">hier</a> om een klasgenoot toe te voegen!</p>

</body>
</html>
