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
class EndpointSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\EndpointSettings::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\EndpointSettings::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\EndpointSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\EndpointSettingsConstraint());
        }
        if (\array_key_exists('IPAMConfig', $data) && $data['IPAMConfig'] !== null) {
            $object->iPAMConfig = $this->denormalizer->denormalize($data['IPAMConfig'], \Docker\Api\Model\EndpointIPAMConfig::class, 'json', $context);
        }
        elseif (\array_key_exists('IPAMConfig', $data) && $data['IPAMConfig'] === null) {
            $object->iPAMConfig = null;
        }
        if (\array_key_exists('Links', $data)) {
            $values = [];
            foreach ($data['Links'] as $value) {
                $values[] = $value;
            }
            $object->links = $values;
        }
        if (\array_key_exists('Aliases', $data)) {
            $values_1 = [];
            foreach ($data['Aliases'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->aliases = $values_1;
        }
        if (\array_key_exists('NetworkID', $data)) {
            $object->networkID = $data['NetworkID'];
        }
        if (\array_key_exists('EndpointID', $data)) {
            $object->endpointID = $data['EndpointID'];
        }
        if (\array_key_exists('Gateway', $data)) {
            $object->gateway = $data['Gateway'];
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
        if (\array_key_exists('GlobalIPv6Address', $data)) {
            $object->globalIPv6Address = $data['GlobalIPv6Address'];
        }
        if (\array_key_exists('GlobalIPv6PrefixLen', $data)) {
            $object->globalIPv6PrefixLen = $data['GlobalIPv6PrefixLen'];
        }
        if (\array_key_exists('MacAddress', $data)) {
            $object->macAddress = $data['MacAddress'];
        }
        if (\array_key_exists('DriverOpts', $data) && $data['DriverOpts'] !== null) {
            $values_2 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['DriverOpts'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->driverOpts = $values_2;
        }
        elseif (\array_key_exists('DriverOpts', $data) && $data['DriverOpts'] === null) {
            $object->driverOpts = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('iPAMConfig', get_object_vars($data)) && null !== ($data->iPAMConfig ?? null)) {
            $dataArray['IPAMConfig'] = ($data->iPAMConfig ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->iPAMConfig ?? null, 'json', $context));
        }
        if (array_key_exists('links', get_object_vars($data)) && null !== ($data->links ?? null)) {
            $values = [];
            foreach ($data->links ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['Links'] = $values;
        }
        if (array_key_exists('aliases', get_object_vars($data)) && null !== ($data->aliases ?? null)) {
            $values_1 = [];
            foreach ($data->aliases ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['Aliases'] = $values_1;
        }
        if (array_key_exists('networkID', get_object_vars($data)) && null !== ($data->networkID ?? null)) {
            $dataArray['NetworkID'] = $data->networkID ?? null;
        }
        if (array_key_exists('endpointID', get_object_vars($data)) && null !== ($data->endpointID ?? null)) {
            $dataArray['EndpointID'] = $data->endpointID ?? null;
        }
        if (array_key_exists('gateway', get_object_vars($data)) && null !== ($data->gateway ?? null)) {
            $dataArray['Gateway'] = $data->gateway ?? null;
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
        if (array_key_exists('globalIPv6Address', get_object_vars($data)) && null !== ($data->globalIPv6Address ?? null)) {
            $dataArray['GlobalIPv6Address'] = $data->globalIPv6Address ?? null;
        }
        if (array_key_exists('globalIPv6PrefixLen', get_object_vars($data)) && null !== ($data->globalIPv6PrefixLen ?? null)) {
            $dataArray['GlobalIPv6PrefixLen'] = $data->globalIPv6PrefixLen ?? null;
        }
        if (array_key_exists('macAddress', get_object_vars($data)) && null !== ($data->macAddress ?? null)) {
            $dataArray['MacAddress'] = $data->macAddress ?? null;
        }
        if (array_key_exists('driverOpts', get_object_vars($data)) && null !== ($data->driverOpts ?? null)) {
            $values_2 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->driverOpts ?? null as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $dataArray['DriverOpts'] = $values_2;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\EndpointSettingsConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\EndpointSettings::class => false];
    }
}