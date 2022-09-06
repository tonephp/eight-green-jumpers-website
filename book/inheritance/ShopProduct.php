<?php

class ShopProduct
{
    public function __construct(
        public string $title,
        public string $producerFirstName,
        public string $producerMainName,
        public float $price
    ) {
    }

    public function getProducer(): string
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }

    public function getSummaryLine(): string
    {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";

        return $base;
    }
}
