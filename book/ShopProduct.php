<?

include 'functions.php';

class ShopProduct
{
    public function __construct(
        public $title,
        public $producerFirstName = "",
        public $producerMainName = "",
        public $price = 0
    ){ }


    public function getProducer()
    {
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }
}

class ShopProductWriter
{
    public function write(ShopProduct $shopProduct)
    {
        $str  = $shopProduct->title . ": "
            . $shopProduct->getProducer()
            . " (" . $shopProduct->price . ")\n";
print $str; }
}

$product1 = new ShopProduct("My Antonia", "Willa", "Cather", 5.99);
$writer = new ShopProductWriter();
$writer->write($product1);
$writer->write(new Wrong());

class Wrong
{
}

// page 62 