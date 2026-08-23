<?php

namespace Jane\Component\OpenApi31\Tests\EnumAsObjects\Model;

enum ItemStatus : string
{
    case Available = 'available';
    case OutOfStock = 'out-of-stock';
    case Reserved = 'reserved';
    case NewYork = 'new-york';
    case Newyork = 'NewYork';
}