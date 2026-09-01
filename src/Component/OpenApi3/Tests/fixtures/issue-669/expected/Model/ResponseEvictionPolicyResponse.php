<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseEvictionPolicyResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A string specifying the desired eviction policy for a Caching or Valkey cluster.
     * 
     * - `noeviction`: Don't evict any data, returns error when memory limit is reached.
     * - `allkeys_lru:` Evict any key, least recently used (LRU) first.
     * - `allkeys_random`: Evict keys in a random order.
     * - `volatile_lru`: Evict keys with expiration only, least recently used (LRU) first.
     * - `volatile_random`: Evict keys with expiration only in a random order.
     * - `volatile_ttl`: Evict keys with expiration only, shortest time-to-live (TTL) first.
     *
     * @var string
     */
    public string $evictionPolicy;
    public function definedProperties(): array
    {
        return ['evictionPolicy' => 'eviction_policy'];
    }
}