<?php

namespace Jane\AutoMapper\Bundle;

use Jane\AutoMapper\AutoMapper as BaseAutoMapper;
use Jane\AutoMapper\Bundle\Configuration\MapperConfigurationInterface;

class AutoMapper extends BaseAutoMapper
{
    public function addMapperConfiguration(MapperConfigurationInterface $mapperConfiguration): void
    {
        $metadata = $this->getMetadata($mapperConfiguration->getSource(), $mapperConfiguration->getTarget());
        $mapperConfiguration->process($metadata);
    }
}
