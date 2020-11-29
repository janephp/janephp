<?php

namespace Jane\Bundle\AutoMapperBundle\Tests\Fixtures;

use Money\Money;

class Order
{
    /** @var int */
    public $id;

    /** @var Money */
    public $price;
}
