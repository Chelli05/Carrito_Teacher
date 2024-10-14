<?php


$cart = simplexml_load_file('cartribalta.xml');
    echo " entrando";
 
    //print_r($cart);

    foreach ($cart->xpath("/cart/product_item[id_product='1']") as $item) {
        echo "<br>d entcontrado<br>";
        print_r($item);
        unset($item[0]);
    }
    
    $cart->asXML('cartribalta.xml');



/////////////

/*
/*

<?xml version="1.0"?>
<cart>


        <product_item>
            <id_product>1</id_product>
            <quantity>-105</quantity>
            <price_item>
                <price>-5250</price>
                <currency>EU</currency>
            </price_item>
        </product_item>






        <product_item>
            <id_product>2</id_product>
            <quantity>-105</quantity>
            <price_item>
                <price>-5250</price>
                <currency>EU</currency>
            </price_item>
        </product_item>
   

</cart>


*/

*/



?>

