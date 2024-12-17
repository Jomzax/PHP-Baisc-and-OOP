<H3>Extends and implement</H3>

<?php 
interFace ProductInterface{
    public function getinfo();
}

class Parentclass{
    public function getinfo(){
        return "Parent Class";
    }
}

class Product extends Parentclass implements ProductInterface{
    public function getinfo()
    {
        return "Product";
    }
}

$product = new Product();
echo $product->getinfo();
?>