<h3>Class and Method</h3>

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

    function getinfo()
    {
        return "Name: " . $this->name .", Price: ".$this->price;
    }
}

$producst = new Product("Product 1", 100);

echo $producst->getinfo();
?>