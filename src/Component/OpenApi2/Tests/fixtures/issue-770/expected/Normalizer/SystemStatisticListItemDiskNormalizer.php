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
class SystemStatisticListItemDiskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItemDisk::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItemDisk::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItemDisk();
        if (\array_key_exists('total', $data) && \is_int($data['total'])) {
            $data['total'] = (double) $data['total'];
        }
        if (\array_key_exists('free', $data) && \is_int($data['free'])) {
            $data['free'] = (double) $data['free'];
        }
        if (\array_key_exists('maxFree', $data) && \is_int($data['maxFree'])) {
            $data['maxFree'] = (double) $data['maxFree'];
        }
        if (\array_key_exists('minFree', $data) && \is_int($data['minFree'])) {
            $data['minFree'] = (double) $data['minFree'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
        }
        if (\array_key_exists('free', $data)) {
            $object->setFree($data['free']);
        }
        if (\array_key_exists('maxFree', $data)) {
            $object->setMaxFree($data['maxFree']);
        }
        if (\array_key_exists('minFree', $data)) {
            $object->setMinFree($data['minFree']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('total') && null !== $data->getTotal()) {
            $dataArray['total'] = $data->getTotal();
        }
        if ($data->isInitialized('free') && null !== $data->getFree()) {
            $dataArray['free'] = $data->getFree();
        }
        if ($data->isInitialized('maxFree') && null !== $data->getMaxFree()) {
            $dataArray['maxFree'] = $data->getMaxFree();
        }
        if ($data->isInitialized('minFree') && null !== $data->getMinFree()) {
            $dataArray['minFree'] = $data->getMinFree();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItemDisk::class => false];
    }
}