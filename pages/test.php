<h1>Test połączenia z serwerem <i><?= "localhost"?></i> i bazą <i><?="biblioteka" ?></i></h1>

<p>
    <?php
    echo 'Host info: ' . mysqli_get_host_info($mysqliConnection) . '<br>';
    echo 'MySQLi stat: ' . mysqli_stat($mysqliConnection);
    ?>
</p>