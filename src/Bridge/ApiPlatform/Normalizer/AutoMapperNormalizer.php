<?php

namespace Jane\Bridge\ApiPlatform\Normalizer;

use ApiPlatform\Core\Api\ResourceClassResolverInterface;
use ApiPlatform\Core\Util\ClassInfoTrait;
use Jane\Component\AutoMapper\Normalizer\AutoMapperNormalizer as BaseNormalizer;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * Bridge for symfony/serializer with api-platform/core.
 *
 * @author Baptiste Leduc <baptiste.leduc@gmail.com>
 */
class AutoMapperNormalizer implements NormalizerInterface, DenormalizerInterface, CacheableSupportsMethodInterface
{
    use ClassInfoTrait;

    private $normalizer;
    private $resourceClassResolver;
    private $resourceCache = [];

    public function __construct(BaseNormalizer $normalizer, ResourceClassResolverInterface $resourceClassResolver)
    {
        $this->normalizer = $normalizer;
        $this->resourceClassResolver = $resourceClassResolver;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        return $this->normalizer->normalize($object, $format, $context);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        return $this->normalizer->denormalize($data, $class, $format, $context);
    }

    public function supportsNormalization($data, $format = null)
    {
        if (\is_object($data) && null !== $this->resourceClassResolver && ($this->resourceCache[$objectClass = $this->getObjectClass($data)] ?? $this->resourceCache[$objectClass] = $this->resourceClassResolver->isResourceClass($objectClass))) {
            return false; // skip API Platform resources
        }

        return $this->normalizer->supportsNormalization($data, $format);
    }

    public function supportsDenormalization($data, $type, $format = null)
    {
        if (null !== $this->resourceClassResolver && ($this->resourceCache[$type] ?? $this->resourceCache[$type] = $this->resourceClassResolver->isResourceClass($type))) {
            return false; // skip API Platform resources
        }

        return $this->normalizer->supportsDenormalization($data, $type, $format);
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
