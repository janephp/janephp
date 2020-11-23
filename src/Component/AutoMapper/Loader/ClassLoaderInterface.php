<?php

namespace Jane\Component\AutoMapper\Loader;

use Jane\Component\AutoMapper\MapperGeneratorMetadataInterface;

/**
 * Loads (require) a mapping given metadata.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
interface ClassLoaderInterface
{
    public function loadClass(MapperGeneratorMetadataInterface $mapperMetadata): void;
}
