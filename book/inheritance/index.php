<?php

declare(strict_types=1);

include 'ShopProduct.php';
include 'BookProduct.php';
include 'CdProduct.php';

$cd = new CdProduct(
    'My CD',
    'Andrii',
    'Pereverziev',
    20,
    256
);

$book = new BookProduct(
    'My BOOK',
    'Andrii',
    'Pereverziev',
    30,
    1000
);

echo $cd->getSummaryLine();
echo '<br>';
echo $book->getSummaryLine();
