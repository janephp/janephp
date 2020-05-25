<?php

namespace Jane\AutoMapper\Loader;

use Jane\AutoMapper\MapperGeneratorMetadataInterface;

/**
 * Loads (require) a mapping given metadata.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
interface ClassLoaderInterface
{
    public function loadClass(MapperGeneratorMetadataInterface $mapperMetadata): void;
}
