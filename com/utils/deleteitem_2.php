<?php



$xml = simplexml_load_file('test2.xml');

foreach ($xml->xpath("/root/node[nodeid ='22']") as $node) {
    
  

    echo '<br>____________________________sss';
    print_r($node);
    unset($node[0]);
    //unset($node->parent);
    //print_r($node->parent);

    //unset($node->parent[0]);

}

$xml->asXML('test2.xml');

/*
<?xml version="1.0"?>
<root>
    <node>
        <nodeid>1</nodeid>
        <desc>Nodo 1</desc>
    </node>
    <node>
        <nodeid>2</nodeid>
        <desc>Nodo 2</desc>
    </node>
    <node>
        <nodeid>3</nodeid>
        <desc>Nodo 3</desc>
    </node>

</root>


*/

?>