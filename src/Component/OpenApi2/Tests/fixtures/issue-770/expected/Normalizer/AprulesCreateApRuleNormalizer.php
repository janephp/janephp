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
class AprulesCreateApRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesCreateApRule::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesCreateApRule::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesCreateApRule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('ipAddressRange', $data)) {
            $object->setIpAddressRange($this->denormalizer->denormalize($data['ipAddressRange'], \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesIpAddressRange::class, 'json', $context));
        }
        if (\array_key_exists('subnet', $data)) {
            $object->setSubnet($this->denormalizer->denormalize($data['subnet'], \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesSubnet::class, 'json', $context));
        }
        if (\array_key_exists('gpsCoordinates', $data)) {
            $object->setGpsCoordinates($this->denormalizer->denormalize($data['gpsCoordinates'], \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesGpsCoordinates::class, 'json', $context));
        }
        if (\array_key_exists('provisionTag', $data)) {
            $object->setProvisionTag($data['provisionTag']);
        }
        if (\array_key_exists('mobilityZone', $data)) {
            $object->setMobilityZone($this->denormalizer->denormalize($data['mobilityZone'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        $dataArray['type'] = $data->getType();
        if ($data->isInitialized('ipAddressRange') && null !== $data->getIpAddressRange()) {
            $dataArray['ipAddressRange'] = $this->normalizer->normalize($data->getIpAddressRange(), 'json', $context);
        }
        if ($data->isInitialized('subnet') && null !== $data->getSubnet()) {
            $dataArray['subnet'] = $this->normalizer->normalize($data->getSubnet(), 'json', $context);
        }
        if ($data->isInitialized('gpsCoordinates') && null !== $data->getGpsCoordinates()) {
            $dataArray['gpsCoordinates'] = $this->normalizer->normalize($data->getGpsCoordinates(), 'json', $context);
        }
        if ($data->isInitialized('provisionTag') && null !== $data->getProvisionTag()) {
            $dataArray['provisionTag'] = $data->getProvisionTag();
        }
        $dataArray['mobilityZone'] = $this->normalizer->normalize($data->getMobilityZone(), 'json', $context);
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AprulesCreateApRule::class => false];
    }
}