<?php

namespace Jane\Component\AutoMapper\Bundle;

use Jane\Component\AutoMapper\AutoMapper as BaseAutoMapper;
use Jane\Component\AutoMapper\Bundle\Configuration\MapperConfigurationInterface;

class AutoMapper extends BaseAutoMapper
{
    public function addMapperConfiguration(MapperConfigurationInterface $mapperConfiguration): void
    {
        $metadata = $this->getMetadata($mapperConfiguration->getSource(), $mapperConfiguration->getTarget());
        $mapperConfiguration->process($metadata);
    }
}
