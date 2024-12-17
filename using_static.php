<h3>Using Statilc</h3>

<?php 
class Product{
    public static $name = "Product";

    public static function getInfo(){
        return self::$name;
    }

    public function getInfo2(){
        return self::$name;
    }
}

echo Product::getinfo();
echo "<br>";

$product = new Product();
echo $product->getinfo();

?>