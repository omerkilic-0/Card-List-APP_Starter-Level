<?php
include '../config/functions.php';

if (isset($_POST["submit"])) {
    $url = $_POST["url"];

    $context = getOptions();

    if (isset($url)) {
        $fgc = file_get_contents($url, false, $context);

        $doc = new DOMDocument();
        libxml_use_internal_errors(true);
        $doc->loadHTML($fgc);
        libxml_clear_errors();

        $xpath = new DOMXPath($doc);

        echo '<div class="row" class="table" style="text-align:center;">';

        $cardContainers = $xpath->query('//div[contains(@class, "s-card-container")]');

        foreach ($cardContainers as $card) {
            echo '<div class="col-md-3 mb-3" style="text-align:center;">';

            $image = $xpath->query('.//img[contains(@class, "s-image")]', $card)[0]->getAttribute('src');
            $title = $xpath->query('.//span[contains(@class, "a-text-normal")]', $card)[0]->textContent;
            $price = $xpath->query('.//span[contains(@class, "a-offscreen")]', $card)[0]->textContent;

            echo "<img src='$image' style='width: 150px; height: auto; max-height:190px;'><br>";
            echo $title . "<br>";
            echo "<b>" . $price . " TL</b><br>";
            echo '</div>';
        }
        echo '</div>';
    }
}
