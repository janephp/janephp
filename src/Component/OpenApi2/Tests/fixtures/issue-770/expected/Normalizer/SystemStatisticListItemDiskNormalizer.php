<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SystemStatisticListItemDiskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStatisticListItemDisk::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStatisticListItemDisk::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStatisticListItemDisk();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('total', $data) && \is_int($data['total'])) {
            $data['total'] = (float) $data['total'];
        }
        if (\array_key_exists('free', $data) && \is_int($data['free'])) {
            $data['free'] = (float) $data['free'];
        }
        if (\array_key_exists('maxFree', $data) && \is_int($data['maxFree'])) {
            $data['maxFree'] = (float) $data['maxFree'];
        }
        if (\array_key_exists('minFree', $data) && \is_int($data['minFree'])) {
            $data['minFree'] = (float) $data['minFree'];
        }
        if (\array_key_exists('total', $data)) {
            $object->total = $data['total'];
        }
        if (\array_key_exists('free', $data)) {
            $object->free = $data['free'];
        }
        if (\array_key_exists('maxFree', $data)) {
            $object->maxFree = $data['maxFree'];
        }
        if (\array_key_exists('minFree', $data)) {
            $object->minFree = $data['minFree'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('total', get_object_vars($data)) && null !== ($data->total ?? null)) {
            $dataArray['total'] = $data->total ?? null;
        }
        if (array_key_exists('free', get_object_vars($data)) && null !== ($data->free ?? null)) {
            $dataArray['free'] = $data->free ?? null;
        }
        if (array_key_exists('maxFree', get_object_vars($data)) && null !== ($data->maxFree ?? null)) {
            $dataArray['maxFree'] = $data->maxFree ?? null;
        }
        if (array_key_exists('minFree', get_object_vars($data)) && null !== ($data->minFree ?? null)) {
            $dataArray['minFree'] = $data->minFree ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStatisticListItemDisk::class => false];
    }
}