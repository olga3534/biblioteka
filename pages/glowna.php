<h1>Strona główna</h1>

<h4>Wszystko z super tablicy $_GET </h4>
<a class="collapse_link" data-collapse-block-id="get" href="#">&dArr;</a>
<pre id="get" style="display: none;">
    <?= print_r($_GET); ?>
</pre>



<h4>Wszystko z super tablicy $_POST </h4>
<a class="collapse_link" data-collapse-block-id="get" href="#">&dArr;</a>
<pre id="get" style="display: none;">
    <?= print_r($_POST); ?>
</pre>
<h4>Wszystko z super tablicy $_COOKIE </h4>
<a class="collapse_link" data-collapse-block-id="get" href="#">&dArr;</a>
<pre id="get" style="display: none;">
    <?= print_r($_COOKIE); ?>
</pre>
<h4>Wszystko z super tablicy $_SESSION </h4>
<a class="collapse_link" data-collapse-block-id="get" href="#">&dArr;</a>
<pre id="get" style="display: none;">
    <?= print_r($_SESSION); ?>
</pre>
<h4>Wszystko z super tablicy $_SERVER </h4>
<a class="collapse_link" data-collapse-block-id="get" href="#">&dArr;</a>
<pre id="get" style="display: none;">
    <?= print_r($_SERVER); ?>
</pre>
echo '<pre>';
<?=print_r($_COOKIE); ?>
echo '</pre>';
<pre>
    <?= print_r($_SESSION); ?>
</pre>
<script>
    const collapselinks = document.querySelectorAll(".collapse_link");
    for (const collapselink of collapselinks){
        collapselink.addEventListener("click", () => {
            console.log(element.dataset.collapseBlockId);
            const cellapseElement = document.querySelector("#" + collapselink.dataset.collapseElement);
            console.log(collapseElement);
            if (collapseElement.style.display === "none"){
                cellapseElement.style.display = "block";
                collapselink.innerHTML = " &uArr";}
            else{
                cellapseElement.style.display = "none";
                collapselink.innerHTML = "&uArr";
            }
        });
    }
</script>

<?php
if (isset($cookie['krokiet'])) {
    echo '<p> Dane z ciastka są wyświetlane jako tablica</p><pre>';
    print_r(json_encode($_COOKIE['krokiet'], true));
    echo '</pre>';
    echo '<p> jako tekst JSON</p><pre>'
        . $_COOKIE['krokiet'] . '</pre>';
}
?>



