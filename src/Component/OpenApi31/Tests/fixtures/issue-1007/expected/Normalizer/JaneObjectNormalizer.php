<?php

namespace Jane\Component\OpenApi31\Tests\Issue1007\Normalizer;

use Jane\Component\OpenApi31\Tests\Issue1007\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Issue1007\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Jane\Component\OpenApi31\Tests\Issue1007\Model\ThingCollection::class => \Jane\Component\OpenApi31\Tests\Issue1007\Normalizer\ThingCollectionNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Issue1007\Model\OpenSchema::class => \Jane\Component\OpenApi31\Tests\Issue1007\Normalizer\OpenSchemaNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Issue1007\Model\ExplicitOpenSchema::class => \Jane\Component\OpenApi31\Tests\Issue1007\Normalizer\ExplicitOpenSchemaNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Issue1007\Model\ClosedSchema::class => \Jane\Component\OpenApi31\Tests\Issue1007\Normalizer\ClosedSchemaNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Issue1007\Model\TypedMapSchema::class => \Jane\Component\OpenApi31\Tests\Issue1007\Normalizer\TypedMapSchemaNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Jane\Component\OpenApi31\Tests\Issue1007\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}