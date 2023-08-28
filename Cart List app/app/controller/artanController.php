<?php
if (isset($_POST["artan"])) {
    $url = $_POST["url"];

    $context = getOptions();

    $array = array();

    if (isset($url)) {
        $fgc = file_get_contents($url, false, $context);

        $doc = new DOMDocument();
        libxml_use_internal_errors(true);
        $doc->loadHTML($fgc);
        libxml_clear_errors();

        $xpath = new DOMXPath($doc);

        $cardContainers = $xpath->query('//div[contains(@class, "s-card-container")]');

        foreach ($cardContainers as $card) {

            $image = $xpath->query('.//img[contains(@class, "s-image")]', $card)[0]->getAttribute('src');
            $title = $xpath->query('.//span[contains(@class, "a-text-normal")]', $card)[0]->textContent;

            if (!isset($xpath->query('.//span[contains(@class, "a-offscreen")]', $card)[0]->textContent)) {
                $price = "00,00 TL";
            } else {
                $price = $xpath->query('.//span[contains(@class, "a-offscreen")]', $card)[0]->textContent;
            }

            $key = intval(str_replace(array('.', 'TL', ','), '', $price));

            $array[] = array(
                "key"  => $key,
                "image" => $image,
                "title" => $title,
                "price" => $price,
            );
        }

        sort($array);

        echo '<div class="row" class="table" style="text-align:center;">';

        foreach ($array as $product) {
            echo '<div class="col-md-3 mb-3" style="text-align:center;">';

            echo "<img src='" . $product['image'] . "' style='width: 150px; height: auto; max-height:190px;'><br>";
            echo $product['title'] . "<br>";
            echo "<b>" . $product['price'] . "</b><br>";
            echo '</div>';
        }

        echo '</div>';
    }
}
