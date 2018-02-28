<?php
/**
 * Created by PhpStorm.
 * User: chase
 * Date: 11/3/2017
 * Time: 11:37 AM
 */

function save_image($inPath, $outPath) { //Download images from remote server
    $in = fopen($inPath, "rb");
    $out = fopen($outPath, "wb");
    while ($chunk = fread($in, 8192)) {
        fwrite($out, $chunk, 8192);
    }
    fclose($in);
    fclose($out);

    echo "SAVING $inPath <br />";
}

function getElementsByClass($classname, $dom) {
    $finder = new DomXPath($dom);
    $nodes = $finder->query("//*[contains(@class, '$classname')]");
    return $nodes;
}

function insertData($url) {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $html = curl_exec($ch);
    curl_close($ch);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);


    $itemName = $dom->getElementById("firstHeading")->textContent;
    echo $itemName . "<br />";

    $nodes = getElementsByClass("image", $dom);
    for ($i = 0; $i < $nodes->length; $i++) {
        $element = $nodes->item($i);
        if ($element->hasChildNodes()) {

            $imageNode = $element->childNodes->item(0);
            $tagName = $imageNode->localName;
            if ($tagName == "img") {
                $imageLoc = substr($imageNode->getAttribute("src"), 0, strpos($imageNode->getAttribute("src"), "?"));
                save_image("$imageLoc", "assets/items/$itemName.png");
            }

        } else {
            echo "NO CHILD $i";
        }


    }


//
//    foreach ($dom->getElementById('td') as $td) {
//        echo $td;
//        $hyperlink = $link->getAttribute('href');
//        if (strpos(strtolower($hyperlink), "key")) {
//            echo $hyperlink;
//            echo "<br />";
//        }
//    }

}


function loadKeys() {
    $url = "https://escapefromtarkov.gamepedia.com/Intel";
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $html = curl_exec($ch);
    curl_close($ch);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);

    foreach ($dom->getElementsByTagName('a') as $link) {

        $hyperlink = $link->getAttribute('href');

        if (strpos(strtolower($hyperlink), "key")) {
//            echo $hyperlink;


            //insertData("https://escapefromtarkov.gamepedia.com/$hyperlink");


        }
    }
}

//loadKeys();


insertData("https://escapefromtarkov.gamepedia.com/Door_key");


//$this->save_image('http://www.someimagesite.com/img.jpg','image.jpg');