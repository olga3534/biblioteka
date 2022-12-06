<h1>Tabela <i>książki</i></h1>
<?php
$query = 'SELECT * FROM wypozyczenia;';
$result = mysqli_query($mysqliConnection, $query);
?>
<p>Tabela zawiera <?=mysqli_num_rows($result)?> rekordów</p>

<table>
    <tr><th>Numer transakcji</th><th>Sygnatura</th><th>Id pracownika</th><th>Numer czytelnika</th><th>Data wypożyczenia</th><th>Data zwrotu</th></tr>
    <?php
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $row['Nr_transakcji'] . "</td><td>"
                . $row['Sygnatura'] . "</td><td>"
                . $row['Id_pracownika'] . "</td><td>"
                . $row['Nr_czytelnika'] . "</td><td>"
                . $row['Data_wypozyczenia'] . "</td><td>"
                . $row['Data_zwrotu'] . "</td></tr>";
        }
    }
    ?>
</table>

