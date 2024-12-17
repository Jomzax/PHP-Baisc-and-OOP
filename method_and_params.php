<H3>Nethod and Params</H3>

<?php 
class Product{
    function getInfo($name, $price){
        return "Name: " . $name .", Price: ".$price;
    }
}

$product = new Product();

echo $product->getInfo("product 1", 100);
?>