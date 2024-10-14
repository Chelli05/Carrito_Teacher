<?php



$xml = simplexml_load_file('test.xml');

foreach ($xml->xpath("//*[@id='11']") as $node) {
    unset($node[0]);
}

$xml->asXML('test.xml');



?>