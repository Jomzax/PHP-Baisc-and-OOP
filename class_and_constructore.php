<H3>Class and Constructor</H3>

<?php 

class Product
{
    public $name;
    public $price;
    
    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

$Product = new Product("Product 1", 100);

echo $Product->name;
echo "<br>";
echo $Product->price;
?>