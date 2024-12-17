<H3>class and Object</H3>

<?php 

class Product{
    public $name;
    public $price;
}

$product = new Product();
$product->name = "product 1";
$product->price = 100; 

echo $product->name;
echo "<br>";
echo $product->price;
?>