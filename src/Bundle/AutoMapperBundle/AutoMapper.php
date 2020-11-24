<?php

namespace Jane\Bundle\AutoMapperBundle;

use Jane\Bundle\AutoMapperBundle\Configuration\MapperConfigurationInterface;
use Jane\Component\AutoMapper\AutoMapper as BaseAutoMapper;

class AutoMapper extends BaseAutoMapper
{
    public function addMapperConfiguration(MapperConfigurationInterface $mapperConfiguration): void
    {
        $metadata = $this->getMetadata($mapperConfiguration->getSource(), $mapperConfiguration->getTarget());
        $mapperConfiguration->process($metadata);
    }
}
