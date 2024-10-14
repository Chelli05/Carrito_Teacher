<?php



$xml = simplexml_load_file('test.xml');

foreach ($xml->xpath("//*[@id='11']") as $node) {
    print_r($node[0]);
    unset($node[0]);

    
}

$xml->asXML('test.xml');



?>