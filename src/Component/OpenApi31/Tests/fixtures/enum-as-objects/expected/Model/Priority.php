<?php

namespace Jane\Component\OpenApi31\Tests\EnumAsObjects\Model;

enum Priority : int
{
    case Value1 = 1;
    case Value2 = 2;
    case Value3 = 3;
}