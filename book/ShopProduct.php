<?
declare(strict_types=1);

include 'functions.php';

class ShopProduct
{
    public function __construct(
        public string $title,
        public string $producerFirstName = "",
        public string $producerMainName = "",
        public float $price = 0
    ){ }


    public function getProducer()
    {
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }
}

class ShopProductWriter
{
    public function write(ShopProduct $shopProduct): void
    {
        $str  = $shopProduct->title . ": "
            . $shopProduct->getProducer()
            . " (" . $shopProduct->price . ")\n";
        print $str; 
    }
}

$product1 = new ShopProduct("My Antonia", "Willa", "Cather", 5.00);
$writer = new ShopProductWriter();
$writer->write($product1);
// $writer->write(new Wrong());

// class Wrong
// {
// }

// page 62 