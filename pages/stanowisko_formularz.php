<h1>Edycja rekordu</h1>
<?php
if ($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $Id_stanowisko = $_POST ['$Id_stanowisko'] ? intval($_POST['Id_stanowisko']) :0;
        $Nazwa = $_POST['Nazwa'] ? htmlspecialchars($_POST['Nazwa']) : '';

        $query = sprintf("UPDATE stanowiska set nazwa='%s' where Id_stanowisko=%u;",
        mysqli_real_escape_string($mysqliConnection, $Nazwa),
            mysqli_real_escape_string($mysqliConnection, $Id_stanowisko),
        );
        if (mysqli_query($mysqliConnection, $query))
        {
            echo "Pomyślnie zaktuali";
            }
        else
        {
            echo "błąd w czasie aktuali:" . mysqli_error($mysqliConnection);
            }
        }
else {
    $Id_stanowisko = isset($Get['stanowisko']) ? intval($_GET['stanowisko']) : 0;
    $query = sprintf("Select * from stanowiska where  Id_stanowisko=%u;",
        mysqli_real_escape_string($mysqliConnection, $Id_stanowisko));
    '<pre>'. $query. '</pre>';
    $result = mysqli_query($mysqliConnection, $query);
    $row = (mysqli_query($mysqliConnection, $query));
}
?>
<form action="?page=stanowisko_formularz" method="post">
<table>
    <tr> <td>label for="Id_stanowisko">Id_stanowsiko</label></td>
        <td>input id="Id_stanowisko"  name="Id_stanowisko" readonly type="text" value="<?=$row['Id_stanowisko'] ?>"</td>
    </tr>
<tr> <tr>
    <td>label for="Nazwa">Nazwa</td>
        <td>input id="Nazwa" maxlenght="40" name="Nazwa" type="text" value="<?=$row['Nazwa'] ?>"</td></tr>
   <tr>
    <td>colspan="2" style=text-align: center; "><input type="submit" value="Zapisz" ></td>


   </tr>
</table>

</form>
