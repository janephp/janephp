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
class ProfileBonjourFencingServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingService::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingService::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingService();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sourceType', $data)) {
            $object->setSourceType($data['sourceType']);
        }
        if (\array_key_exists('neighborApMac', $data)) {
            $object->setNeighborApMac($data['neighborApMac']);
        }
        if (\array_key_exists('neighborApName', $data)) {
            $object->setNeighborApName($data['neighborApName']);
        }
        if (\array_key_exists('serviceType', $data)) {
            $object->setServiceType($data['serviceType']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('sourceType') && null !== $data->getSourceType()) {
            $dataArray['sourceType'] = $data->getSourceType();
        }
        if ($data->isInitialized('neighborApMac') && null !== $data->getNeighborApMac()) {
            $dataArray['neighborApMac'] = $data->getNeighborApMac();
        }
        if ($data->isInitialized('neighborApName') && null !== $data->getNeighborApName()) {
            $dataArray['neighborApName'] = $data->getNeighborApName();
        }
        if ($data->isInitialized('serviceType') && null !== $data->getServiceType()) {
            $dataArray['serviceType'] = $data->getServiceType();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingService::class => false];
    }
}