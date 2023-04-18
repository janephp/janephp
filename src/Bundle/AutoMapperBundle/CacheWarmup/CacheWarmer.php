<?php

declare(strict_types=1);

namespace Jane\Bundle\AutoMapperBundle\CacheWarmup;

use Jane\Component\AutoMapper\Loader\FileLoader;
use Jane\Component\AutoMapper\MapperGeneratorMetadataFactoryInterface;
use Jane\Component\AutoMapper\MapperGeneratorMetadataRegistryInterface;
use Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerInterface;

/**
 * @internal
 */
final class CacheWarmer implements CacheWarmerInterface
{
    private $fileLoader;
    private $autoMapperRegistry;
    private $mapperConfigurationFactory;
    /** @var iterable<CacheWarmerLoaderInterface> */
    private $cacheWarmerLoaders;

    /** @param iterable<CacheWarmerLoaderInterface> $cacheWarmerLoaders */
    public function __construct(
        FileLoader $fileLoader,
        MapperGeneratorMetadataRegistryInterface $autoMapperRegistry,
        MapperGeneratorMetadataFactoryInterface $mapperConfigurationFactory,
        iterable $cacheWarmerLoaders
    ) {
        $this->fileLoader = $fileLoader;
        $this->autoMapperRegistry = $autoMapperRegistry;
        $this->mapperConfigurationFactory = $mapperConfigurationFactory;
        $this->cacheWarmerLoaders = $cacheWarmerLoaders;
    }

    public function isOptional()
    {
        return false;
    }

    public function warmUp($cacheDir)
    {
        $mapperClasses = [];

        foreach ($this->cacheWarmerLoaders as $cacheWarmerLoader) {
            foreach ($cacheWarmerLoader->loadCacheWarmupData() as $cacheWarmupData) {
                $mapperClasses[] = $this->fileLoader->saveMapper(
                    $this->mapperConfigurationFactory->create(
                        $this->autoMapperRegistry,
                        $cacheWarmupData->getSource(),
                        $cacheWarmupData->getTarget()
                    )
                );
            }
        }

        return $mapperClasses;
    }
}
