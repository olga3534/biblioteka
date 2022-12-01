<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<h1>Tabela <i>stanowiska</i></h1>
<?php
$query = 'SELECT * FROM stanowiska';

$result = mysqli_query($mysqliConnection, $query);

if (mysqli_num_rows($result) > 0){

    echo '<table>';
    echo '<tr> <th>Id_stanowisko</th>
              <th>Nazwa</th></tr>';
    while ($row = mysqli_fetch_assoc($result))
    {
        echo '<tr><td>' . $row['Id_stanowisko'] . '</td>'
            . '<td>' . $row['Nazwa'] . '</td>'
            .'<td>' . '<a href="?page=stanowisko_formularz&stanowsiko='.$row['Id_stanowisko'].'">Edycja</a>'.'</td></tr>';
    }
    echo '</table>';
}
else
{
    echo 'brak danych';
}
?>

<style>
    table {
        border-collapse: collapse;
    }
    td,th{
        border: 1px solid black;
        padding: 10px;

    }
</style>
</body>
</html>

