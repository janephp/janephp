<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProfileDownlinkRateLimitingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDownlinkRateLimiting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDownlinkRateLimiting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDownlinkRateLimiting();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('downlinkRateLimitingEnabled', $data) && \is_int($data['downlinkRateLimitingEnabled'])) {
            $data['downlinkRateLimitingEnabled'] = (bool) $data['downlinkRateLimitingEnabled'];
        }
        if (\array_key_exists('downlinkRateLimitingEnabled', $data)) {
            $object->setDownlinkRateLimitingEnabled($data['downlinkRateLimitingEnabled']);
        }
        if (\array_key_exists('downlinkRateLimitingBps', $data)) {
            $object->setDownlinkRateLimitingBps($data['downlinkRateLimitingBps']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('downlinkRateLimitingEnabled') && null !== $data->getDownlinkRateLimitingEnabled()) {
            $dataArray['downlinkRateLimitingEnabled'] = $data->getDownlinkRateLimitingEnabled();
        }
        if ($data->isInitialized('downlinkRateLimitingBps') && null !== $data->getDownlinkRateLimitingBps()) {
            $dataArray['downlinkRateLimitingBps'] = $data->getDownlinkRateLimitingBps();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDownlinkRateLimiting::class => false];
    }
}