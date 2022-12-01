<h1>Tabela <i>książki</i></h1>
<?php
$query = 'SELECT ksiazki.*, dzialy.Nazwa FROM ksiazki
INNER JOIN dzialy ON
ksiazki.Id_dzial=dzialy.Id_dzial ORDER BY ksiazki.Sygnatura';

$result = mysqli_query($mysqliConnection, $query);
echo $_SESSION['Sebix'];
if (mysqli_num_rows($result) > 0){

    echo '<table>';
    echo '<tr><th>Sygnatura</th>
              <th>Tytul</th>
              <th>Nazwisko</th>
              <th>Imie</th>
              <th>Wydawnictwo</th>
              <th>Miejsce_wyd</th>
              <th>Objetosc_ks</th>
              <th>Cena</th>
              <th>Nazwa działu</th></tr>';

    while ($row = mysqli_fetch_assoc($result))
    {
        echo '<tr><td>' . $row['Sygnatura'] . '</td>'
            . '<td>' . $row['Tytul'] . '</td>'
            . '<td>' . $row['Nazwisko'] . '</td>'
            . '<td>' . $row['Imie'] . '</td>'
            . '<td>' . $row['Wydawnictwo'] . '</td>'
            . '<td>' . $row['Miejsce_wyd'] . '</td>'
            . '<td>' . $row['Objetosc_ks'] . '</td>'
            . '<td>' . $row['Cena'] . '</td>'
            . '<td>' . $row['Nazwa'] . '</td></tr>';
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
