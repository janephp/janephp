<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class NetworkSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\NetworkSettings::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\NetworkSettings::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\NetworkSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('HairpinMode', $data) && \is_int($data['HairpinMode'])) {
            $data['HairpinMode'] = (bool) $data['HairpinMode'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\NetworkSettingsConstraint());
        }
        if (\array_key_exists('Bridge', $data)) {
            $object->bridge = $data['Bridge'];
        }
        if (\array_key_exists('SandboxID', $data)) {
            $object->sandboxID = $data['SandboxID'];
        }
        if (\array_key_exists('HairpinMode', $data)) {
            $object->hairpinMode = $data['HairpinMode'];
        }
        if (\array_key_exists('LinkLocalIPv6Address', $data)) {
            $object->linkLocalIPv6Address = $data['LinkLocalIPv6Address'];
        }
        if (\array_key_exists('LinkLocalIPv6PrefixLen', $data)) {
            $object->linkLocalIPv6PrefixLen = $data['LinkLocalIPv6PrefixLen'];
        }
        if (\array_key_exists('Ports', $data)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Ports'] as $key => $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\Api\Model\PortBinding::class, 'json', $context);
                }
                $values[$key] = $values_1;
            }
            $object->ports = $values;
        }
        if (\array_key_exists('SandboxKey', $data)) {
            $object->sandboxKey = $data['SandboxKey'];
        }
        if (\array_key_exists('SecondaryIPAddresses', $data) && $data['SecondaryIPAddresses'] !== null) {
            $values_2 = [];
            foreach ($data['SecondaryIPAddresses'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Docker\Api\Model\Address::class, 'json', $context);
            }
            $object->secondaryIPAddresses = $values_2;
        }
        elseif (\array_key_exists('SecondaryIPAddresses', $data) && $data['SecondaryIPAddresses'] === null) {
            $object->secondaryIPAddresses = null;
        }
        if (\array_key_exists('SecondaryIPv6Addresses', $data) && $data['SecondaryIPv6Addresses'] !== null) {
            $values_3 = [];
            foreach ($data['SecondaryIPv6Addresses'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Docker\Api\Model\Address::class, 'json', $context);
            }
            $object->secondaryIPv6Addresses = $values_3;
        }
        elseif (\array_key_exists('SecondaryIPv6Addresses', $data) && $data['SecondaryIPv6Addresses'] === null) {
            $object->secondaryIPv6Addresses = null;
        }
        if (\array_key_exists('EndpointID', $data)) {
            $object->endpointID = $data['EndpointID'];
        }
        if (\array_key_exists('Gateway', $data)) {
            $object->gateway = $data['Gateway'];
        }
        if (\array_key_exists('GlobalIPv6Address', $data)) {
            $object->globalIPv6Address = $data['GlobalIPv6Address'];
        }
        if (\array_key_exists('GlobalIPv6PrefixLen', $data)) {
            $object->globalIPv6PrefixLen = $data['GlobalIPv6PrefixLen'];
        }
        if (\array_key_exists('IPAddress', $data)) {
            $object->iPAddress = $data['IPAddress'];
        }
        if (\array_key_exists('IPPrefixLen', $data)) {
            $object->iPPrefixLen = $data['IPPrefixLen'];
        }
        if (\array_key_exists('IPv6Gateway', $data)) {
            $object->iPv6Gateway = $data['IPv6Gateway'];
        }
        if (\array_key_exists('MacAddress', $data)) {
            $object->macAddress = $data['MacAddress'];
        }
        if (\array_key_exists('Networks', $data)) {
            $values_4 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Networks'] as $key_1 => $value_4) {
                $values_4[$key_1] = $this->denormalizer->denormalize($value_4, \Docker\Api\Model\EndpointSettings::class, 'json', $context);
            }
            $object->networks = $values_4;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('bridge', get_object_vars($data)) && null !== ($data->bridge ?? null)) {
            $dataArray['Bridge'] = $data->bridge ?? null;
        }
        if (array_key_exists('sandboxID', get_object_vars($data)) && null !== ($data->sandboxID ?? null)) {
            $dataArray['SandboxID'] = $data->sandboxID ?? null;
        }
        if (array_key_exists('hairpinMode', get_object_vars($data)) && null !== ($data->hairpinMode ?? null)) {
            $dataArray['HairpinMode'] = $data->hairpinMode ?? null;
        }
        if (array_key_exists('linkLocalIPv6Address', get_object_vars($data)) && null !== ($data->linkLocalIPv6Address ?? null)) {
            $dataArray['LinkLocalIPv6Address'] = $data->linkLocalIPv6Address ?? null;
        }
        if (array_key_exists('linkLocalIPv6PrefixLen', get_object_vars($data)) && null !== ($data->linkLocalIPv6PrefixLen ?? null)) {
            $dataArray['LinkLocalIPv6PrefixLen'] = $data->linkLocalIPv6PrefixLen ?? null;
        }
        if (array_key_exists('ports', get_object_vars($data)) && null !== ($data->ports ?? null)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->ports ?? null as $key => $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
                }
                $values[$key] = $values_1;
            }
            $dataArray['Ports'] = $values;
        }
        if (array_key_exists('sandboxKey', get_object_vars($data)) && null !== ($data->sandboxKey ?? null)) {
            $dataArray['SandboxKey'] = $data->sandboxKey ?? null;
        }
        if (array_key_exists('secondaryIPAddresses', get_object_vars($data)) && null !== ($data->secondaryIPAddresses ?? null)) {
            $values_2 = [];
            foreach ($data->secondaryIPAddresses ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['SecondaryIPAddresses'] = $values_2;
        }
        if (array_key_exists('secondaryIPv6Addresses', get_object_vars($data)) && null !== ($data->secondaryIPv6Addresses ?? null)) {
            $values_3 = [];
            foreach ($data->secondaryIPv6Addresses ?? null as $value_3) {
                $values_3[] = $value_3 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['SecondaryIPv6Addresses'] = $values_3;
        }
        if (array_key_exists('endpointID', get_object_vars($data)) && null !== ($data->endpointID ?? null)) {
            $dataArray['EndpointID'] = $data->endpointID ?? null;
        }
        if (array_key_exists('gateway', get_object_vars($data)) && null !== ($data->gateway ?? null)) {
            $dataArray['Gateway'] = $data->gateway ?? null;
        }
        if (array_key_exists('globalIPv6Address', get_object_vars($data)) && null !== ($data->globalIPv6Address ?? null)) {
            $dataArray['GlobalIPv6Address'] = $data->globalIPv6Address ?? null;
        }
        if (array_key_exists('globalIPv6PrefixLen', get_object_vars($data)) && null !== ($data->globalIPv6PrefixLen ?? null)) {
            $dataArray['GlobalIPv6PrefixLen'] = $data->globalIPv6PrefixLen ?? null;
        }
        if (array_key_exists('iPAddress', get_object_vars($data)) && null !== ($data->iPAddress ?? null)) {
            $dataArray['IPAddress'] = $data->iPAddress ?? null;
        }
        if (array_key_exists('iPPrefixLen', get_object_vars($data)) && null !== ($data->iPPrefixLen ?? null)) {
            $dataArray['IPPrefixLen'] = $data->iPPrefixLen ?? null;
        }
        if (array_key_exists('iPv6Gateway', get_object_vars($data)) && null !== ($data->iPv6Gateway ?? null)) {
            $dataArray['IPv6Gateway'] = $data->iPv6Gateway ?? null;
        }
        if (array_key_exists('macAddress', get_object_vars($data)) && null !== ($data->macAddress ?? null)) {
            $dataArray['MacAddress'] = $data->macAddress ?? null;
        }
        if (array_key_exists('networks', get_object_vars($data)) && null !== ($data->networks ?? null)) {
            $values_4 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->networks ?? null as $key_1 => $value_4) {
                $values_4[$key_1] = $value_4 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['Networks'] = $values_4;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\NetworkSettingsConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\NetworkSettings::class => false];
    }
}