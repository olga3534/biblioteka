<h1>Edycja rekordu tabeli <i>dzialy</i></h1>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") // Zapisz dane z formularza do bazy
{
    $Id_dzial = $_POST['Id_dzial'] ? intval($_POST['Id_dzial']) : 0;
    $Nazwa = $_POST['Nazwa'] ? htmlspecialchars($_POST['Nazwa']) : '';

    $query = sprintf("UPDATE dzialy SET Nazwa='%s' WHERE Id_dzial=%u;",
        mysqli_real_escape_string($mysqliConnection, $Nazwa),
        mysqli_real_escape_string($mysqliConnection, $Id_dzial)
    );

    //echo '<pre>' . $query . '</pre>';
    if (mysqli_query($mysqliConnection, $query))
    {
        echo "Pomyślnie zaktualizowano";
    }
    else
    {
        echo "Błąd w czasie aktualizacji:" . mysqli_error($mysqliConnection);
    }
}

else // Wpisz dane z bazy na formularz [SELECT]
{
    $Id_dzial = isset($_GET['dzialy']) ? intval($_GET['dzialy']) : 0;

    $query = sprintf("SELECT * FROM dzialy where Id_dzial=%u;",
        mysqli_real_escape_string($mysqliConnection, $Id_dzial));

    //echo '<pre>' . $query . '</pre>;

    $result = mysqli_query($mysqliConnection, $query);

    $row = mysqli_fetch_assoc($result);

    if ($row)
    {
        ?>
        <form action="?page=dzialy_formularz" method="post">
            <table>
                <tr>
                    <td><label for="Id_dzial">Id_dzial</label></td>
                    <td><input id="Id_dzial" type="text" readonly name="Id_dzial" value="<?php echo $row['Id_dzial']; ?> "></td> </tr>
                <tr>
                    <td><label for="Nazwa">Nazwa</label></td>
                    <td><input id="Nazwa"  type="text" maxlength="40" name="Nazwa" value="<?php echo $row['Nazwa']; ?>"></td>
                </tr>
                <tr> <td style="border-right: 0px"></td><td style="border-left: 0px "><input type="submit" value="Zapisz"></td></tr>

            </table>
        </form>
        <?php
    }
    else {
        echo 'Zapytanie zwróciło pusty wynik';}
}
?>



<style>
    table {
        border-collapse: collapse;
    }
    td,th{
        border: 1px solid black;
        padding: 5px;

    }
</style>
