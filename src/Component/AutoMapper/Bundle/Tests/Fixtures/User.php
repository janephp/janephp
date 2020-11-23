<?php

namespace Jane\Component\AutoMapper\Bundle\Tests\Fixtures;

use Jane\Component\AutoMapper\Tests\Fixtures\AddressDTO;
use Jane\Component\AutoMapper\Tests\Fixtures\User as BaseUser;

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
