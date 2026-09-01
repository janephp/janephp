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
class SystemDataPlaneConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemDataPlaneConfiguration::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemDataPlaneConfiguration::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemDataPlaneConfiguration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('keepConfig', $data) && \is_int($data['keepConfig'])) {
            $data['keepConfig'] = (bool) $data['keepConfig'];
        }
        if (\array_key_exists('isDataCenter', $data) && \is_int($data['isDataCenter'])) {
            $data['isDataCenter'] = (bool) $data['isDataCenter'];
        }
        if (\array_key_exists('interfaceMode', $data)) {
            $object->interfaceMode = $data['interfaceMode'];
        }
        if (\array_key_exists('primaryInterface', $data)) {
            $object->primaryInterface = $this->denormalizer->denormalize($data['primaryInterface'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPrimaryInterface::class, 'json', $context);
        }
        if (\array_key_exists('ipv6PrimaryInterface', $data)) {
            $object->ipv6PrimaryInterface = $this->denormalizer->denormalize($data['ipv6PrimaryInterface'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv6PrimaryInterface::class, 'json', $context);
        }
        if (\array_key_exists('ipv6SecondaryInterface', $data)) {
            $object->ipv6SecondaryInterface = $this->denormalizer->denormalize($data['ipv6SecondaryInterface'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv6SecondaryInterface::class, 'json', $context);
        }
        if (\array_key_exists('secondaryInterface', $data)) {
            $object->secondaryInterface = $this->denormalizer->denormalize($data['secondaryInterface'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSecondaryInterface::class, 'json', $context);
        }
        if (\array_key_exists('staticRoute', $data)) {
            $values = [];
            foreach ($data['staticRoute'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStaticRoute::class, 'json', $context);
            }
            $object->staticRoute = $values;
        }
        if (\array_key_exists('keepConfig', $data)) {
            $object->keepConfig = $data['keepConfig'];
        }
        if (\array_key_exists('isDataCenter', $data)) {
            $object->isDataCenter = $data['isDataCenter'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('interfaceMode', get_object_vars($data)) && null !== ($data->interfaceMode ?? null)) {
            $dataArray['interfaceMode'] = $data->interfaceMode ?? null;
        }
        if (array_key_exists('primaryInterface', get_object_vars($data)) && null !== ($data->primaryInterface ?? null)) {
            $dataArray['primaryInterface'] = ($data->primaryInterface ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->primaryInterface ?? null, 'json', $context));
        }
        if (array_key_exists('ipv6PrimaryInterface', get_object_vars($data)) && null !== ($data->ipv6PrimaryInterface ?? null)) {
            $dataArray['ipv6PrimaryInterface'] = ($data->ipv6PrimaryInterface ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->ipv6PrimaryInterface ?? null, 'json', $context));
        }
        if (array_key_exists('ipv6SecondaryInterface', get_object_vars($data)) && null !== ($data->ipv6SecondaryInterface ?? null)) {
            $dataArray['ipv6SecondaryInterface'] = ($data->ipv6SecondaryInterface ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->ipv6SecondaryInterface ?? null, 'json', $context));
        }
        if (array_key_exists('secondaryInterface', get_object_vars($data)) && null !== ($data->secondaryInterface ?? null)) {
            $dataArray['secondaryInterface'] = ($data->secondaryInterface ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->secondaryInterface ?? null, 'json', $context));
        }
        if (array_key_exists('staticRoute', get_object_vars($data)) && null !== ($data->staticRoute ?? null)) {
            $values = [];
            foreach ($data->staticRoute ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['staticRoute'] = $values;
        }
        if (array_key_exists('keepConfig', get_object_vars($data)) && null !== ($data->keepConfig ?? null)) {
            $dataArray['keepConfig'] = $data->keepConfig ?? null;
        }
        if (array_key_exists('isDataCenter', get_object_vars($data)) && null !== ($data->isDataCenter ?? null)) {
            $dataArray['isDataCenter'] = $data->isDataCenter ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemDataPlaneConfiguration::class => false];
    }
}