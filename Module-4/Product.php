<?php
class Product
{
    /*-- Properties Added --*/
    private $id, $name, $price;
    
    public function __construct($id, $name, $price)
    {
        /*-- Properties Initialized --*/
        $this->id    = $id;
        $this->name  = $name;
        $this->price = $price;
    }

    /*-- getFormattedPrice method --*/
    function getFormattedPrice()
    {
        return '$' . number_format($this->price,2);
    }

    /*-- showDetails Method --*/
    function showDetails()
    {
        echo "Product Details:\n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: {$this->getFormattedPrice()}";
    }
}

/*-- Testing the Product class --*/
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
?>
