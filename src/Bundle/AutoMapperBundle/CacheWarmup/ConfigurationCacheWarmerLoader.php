<?php

declare(strict_types=1);

namespace Jane\Bundle\AutoMapperBundle\CacheWarmup;

/**
 * @internal
 */
final class ConfigurationCacheWarmerLoader implements CacheWarmerLoaderInterface
{
    private $mappersToGenerateOnWarmup;

    /**
     * @param list<array{source: string, target: string}> $mappersToGenerateOnWarmup
     */
    public function __construct(array $mappersToGenerateOnWarmup)
    {
        $this->mappersToGenerateOnWarmup = $mappersToGenerateOnWarmup;
    }

    public function loadCacheWarmupData(): iterable
    {
        foreach ($this->mappersToGenerateOnWarmup as $mapperToGenerate) {
            yield CacheWarmupData::fromArray($mapperToGenerate);
        }
    }
}
