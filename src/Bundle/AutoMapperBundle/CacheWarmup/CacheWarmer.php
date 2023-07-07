<?php

declare(strict_types=1);

namespace Jane\Bundle\AutoMapperBundle\CacheWarmup;

use Jane\Component\AutoMapper\AutoMapperRegistryInterface;
use Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerInterface;

/**
 * @internal
 */
final class CacheWarmer implements CacheWarmerInterface
{
    private $autoMapperRegistry;
    /** @var iterable<CacheWarmerLoaderInterface> */
    private $cacheWarmerLoaders;
    private $autoMapperCacheDirectory;

    /** @param iterable<CacheWarmerLoaderInterface> $cacheWarmerLoaders */
    public function __construct(
        AutoMapperRegistryInterface $autoMapperRegistry,
        iterable $cacheWarmerLoaders,
        string $autoMapperCacheDirectory
    ) {
        $this->autoMapperRegistry = $autoMapperRegistry;
        $this->cacheWarmerLoaders = $cacheWarmerLoaders;
        $this->autoMapperCacheDirectory = $autoMapperCacheDirectory;
    }

    public function isOptional()
    {
        return false;
    }

    public function warmUp($cacheDir)
    {
        foreach ($this->cacheWarmerLoaders as $cacheWarmerLoader) {
            foreach ($cacheWarmerLoader->loadCacheWarmupData() as $cacheWarmupData) {
                $this->autoMapperRegistry->getMapper($cacheWarmupData->getSource(), $cacheWarmupData->getTarget());
            }
        }

        // preloaded files must be in cache directory
        if (0 !== strpos($this->autoMapperCacheDirectory, $cacheDir)) {
            return [];
        }

        $registryFile = sprintf('%s/registry.php', $this->autoMapperCacheDirectory);
        if (!file_exists($registryFile)) {
            return [];
        }

        $mapppers = array_keys(require_once $registryFile);

        return array_map(
            function ($mapper) {
                return sprintf('%s/%s.php', $this->autoMapperCacheDirectory, $mapper);
            },
            $mapppers
        );
    }
}
