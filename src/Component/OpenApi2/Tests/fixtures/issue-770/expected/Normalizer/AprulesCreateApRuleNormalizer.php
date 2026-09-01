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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesCreateApRule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
        }
        if (\array_key_exists('ipAddressRange', $data)) {
            $object->ipAddressRange = $this->denormalizer->denormalize($data['ipAddressRange'], \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesIpAddressRange::class, 'json', $context);
        }
        if (\array_key_exists('subnet', $data)) {
            $object->subnet = $this->denormalizer->denormalize($data['subnet'], \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesSubnet::class, 'json', $context);
        }
        if (\array_key_exists('gpsCoordinates', $data)) {
            $object->gpsCoordinates = $this->denormalizer->denormalize($data['gpsCoordinates'], \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesGpsCoordinates::class, 'json', $context);
        }
        if (\array_key_exists('provisionTag', $data)) {
            $object->provisionTag = $data['provisionTag'];
        }
        if (\array_key_exists('mobilityZone', $data)) {
            $object->mobilityZone = $this->denormalizer->denormalize($data['mobilityZone'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        $dataArray['type'] = $data->type ?? null;
        if (array_key_exists('ipAddressRange', get_object_vars($data)) && null !== ($data->ipAddressRange ?? null)) {
            $dataArray['ipAddressRange'] = ($data->ipAddressRange ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->ipAddressRange ?? null, 'json', $context));
        }
        if (array_key_exists('subnet', get_object_vars($data)) && null !== ($data->subnet ?? null)) {
            $dataArray['subnet'] = ($data->subnet ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->subnet ?? null, 'json', $context));
        }
        if (array_key_exists('gpsCoordinates', get_object_vars($data)) && null !== ($data->gpsCoordinates ?? null)) {
            $dataArray['gpsCoordinates'] = ($data->gpsCoordinates ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->gpsCoordinates ?? null, 'json', $context));
        }
        if (array_key_exists('provisionTag', get_object_vars($data)) && null !== ($data->provisionTag ?? null)) {
            $dataArray['provisionTag'] = $data->provisionTag ?? null;
        }
        $dataArray['mobilityZone'] = ($data->mobilityZone ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->mobilityZone ?? null, 'json', $context));
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AprulesCreateApRule::class => false];
    }
}