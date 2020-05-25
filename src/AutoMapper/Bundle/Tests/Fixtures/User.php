<?php

namespace Jane\AutoMapper\Bundle\Tests\Fixtures;

use Jane\AutoMapper\Tests\Fixtures\AddressDTO;
use Jane\AutoMapper\Tests\Fixtures\User as BaseUser;

class User extends BaseUser
{
    /**
     * @var AddressDTO
     */
    public $address;

    /**
     * @var AddressDTO[]
     */
    public $addresses = [];
}
