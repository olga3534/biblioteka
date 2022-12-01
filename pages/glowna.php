<h1>Strona główna</h1>

echo '<pre>';
<?=print_r($_COOKIE); ?>
echo '</pre>';
<pre>
    <?= print_r($_SESSION); ?>
</pre>

<?php
if (isset($cookie['krokiet'])) {
    echo '<p> Dane z ciastka są wyświetlane jako tablica</p><pre>';
    print_r(json_encode($_COOKIE['krokiet'], true));
    echo '</pre>';
    echo '<p> jako tekst JSON</p><pre>'
        . $_COOKIE['krokiet'] . '</pre>';
}
?>



