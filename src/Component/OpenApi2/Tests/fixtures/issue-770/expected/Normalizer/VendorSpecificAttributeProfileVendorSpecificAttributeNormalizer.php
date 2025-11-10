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
class VendorSpecificAttributeProfileVendorSpecificAttributeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\VendorSpecificAttributeProfileVendorSpecificAttribute::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\VendorSpecificAttributeProfileVendorSpecificAttribute::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\VendorSpecificAttributeProfileVendorSpecificAttribute();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('vendorId', $data)) {
            $object->setVendorId($data['vendorId']);
        }
        if (\array_key_exists('keyId', $data)) {
            $object->setKeyId($data['keyId']);
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($data['value']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('supportedRadiusProtocol', $data)) {
            $object->setSupportedRadiusProtocol($data['supportedRadiusProtocol']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['vendorId'] = $data->getVendorId();
        $dataArray['keyId'] = $data->getKeyId();
        $dataArray['value'] = $data->getValue();
        $dataArray['type'] = $data->getType();
        $dataArray['supportedRadiusProtocol'] = $data->getSupportedRadiusProtocol();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\VendorSpecificAttributeProfileVendorSpecificAttribute::class => false];
    }
}