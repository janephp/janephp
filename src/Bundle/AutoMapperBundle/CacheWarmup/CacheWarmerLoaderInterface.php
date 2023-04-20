<?php

declare(strict_types=1);

namespace Jane\Bundle\AutoMapperBundle\CacheWarmup;

interface CacheWarmerLoaderInterface
{
    /**
     * @return iterable<CacheWarmupData>
     */
    public function loadCacheWarmupData(): iterable;
}
