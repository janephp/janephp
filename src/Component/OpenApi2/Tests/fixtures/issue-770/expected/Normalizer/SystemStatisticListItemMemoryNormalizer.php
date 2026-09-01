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
class SystemStatisticListItemMemoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItemMemory::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItemMemory::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItemMemory();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('percent', $data) && \is_int($data['percent'])) {
            $data['percent'] = (float) $data['percent'];
        }
        if (\array_key_exists('maxPercent', $data) && \is_int($data['maxPercent'])) {
            $data['maxPercent'] = (float) $data['maxPercent'];
        }
        if (\array_key_exists('minPercent', $data) && \is_int($data['minPercent'])) {
            $data['minPercent'] = (float) $data['minPercent'];
        }
        if (\array_key_exists('percent', $data)) {
            $object->percent = $data['percent'];
        }
        if (\array_key_exists('maxPercent', $data)) {
            $object->maxPercent = $data['maxPercent'];
        }
        if (\array_key_exists('minPercent', $data)) {
            $object->minPercent = $data['minPercent'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('percent', get_object_vars($data)) && null !== ($data->percent ?? null)) {
            $dataArray['percent'] = $data->percent ?? null;
        }
        if (array_key_exists('maxPercent', get_object_vars($data)) && null !== ($data->maxPercent ?? null)) {
            $dataArray['maxPercent'] = $data->maxPercent ?? null;
        }
        if (array_key_exists('minPercent', get_object_vars($data)) && null !== ($data->minPercent ?? null)) {
            $dataArray['minPercent'] = $data->minPercent ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItemMemory::class => false];
    }
}