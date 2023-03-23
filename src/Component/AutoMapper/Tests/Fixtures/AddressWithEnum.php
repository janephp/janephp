<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

class AddressWithEnum
{
    private AddressType $type;

    public function setType(AddressType $type): void
    {
        $this->type = $type;
    }

    public function getType(): AddressType
    {
        return $this->type;
    }
}
