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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\NetworkSettings();
        if (\array_key_exists('HairpinMode', $data) && \is_int($data['HairpinMode'])) {
            $data['HairpinMode'] = (bool) $data['HairpinMode'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\NetworkSettingsConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Bridge', $data)) {
            $object->setBridge($data['Bridge']);
        }
        if (\array_key_exists('SandboxID', $data)) {
            $object->setSandboxID($data['SandboxID']);
        }
        if (\array_key_exists('HairpinMode', $data)) {
            $object->setHairpinMode($data['HairpinMode']);
        }
        if (\array_key_exists('LinkLocalIPv6Address', $data)) {
            $object->setLinkLocalIPv6Address($data['LinkLocalIPv6Address']);
        }
        if (\array_key_exists('LinkLocalIPv6PrefixLen', $data)) {
            $object->setLinkLocalIPv6PrefixLen($data['LinkLocalIPv6PrefixLen']);
        }
        if (\array_key_exists('Ports', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Ports'] as $key => $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\Api\Model\PortBinding::class, 'json', $context);
                }
                $values[$key] = $values_1;
            }
            $object->setPorts($values);
        }
        if (\array_key_exists('SandboxKey', $data)) {
            $object->setSandboxKey($data['SandboxKey']);
        }
        if (\array_key_exists('SecondaryIPAddresses', $data) && $data['SecondaryIPAddresses'] !== null) {
            $values_2 = [];
            foreach ($data['SecondaryIPAddresses'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Docker\Api\Model\Address::class, 'json', $context);
            }
            $object->setSecondaryIPAddresses($values_2);
        }
        elseif (\array_key_exists('SecondaryIPAddresses', $data) && $data['SecondaryIPAddresses'] === null) {
            $object->setSecondaryIPAddresses(null);
        }
        if (\array_key_exists('SecondaryIPv6Addresses', $data) && $data['SecondaryIPv6Addresses'] !== null) {
            $values_3 = [];
            foreach ($data['SecondaryIPv6Addresses'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Docker\Api\Model\Address::class, 'json', $context);
            }
            $object->setSecondaryIPv6Addresses($values_3);
        }
        elseif (\array_key_exists('SecondaryIPv6Addresses', $data) && $data['SecondaryIPv6Addresses'] === null) {
            $object->setSecondaryIPv6Addresses(null);
        }
        if (\array_key_exists('EndpointID', $data)) {
            $object->setEndpointID($data['EndpointID']);
        }
        if (\array_key_exists('Gateway', $data)) {
            $object->setGateway($data['Gateway']);
        }
        if (\array_key_exists('GlobalIPv6Address', $data)) {
            $object->setGlobalIPv6Address($data['GlobalIPv6Address']);
        }
        if (\array_key_exists('GlobalIPv6PrefixLen', $data)) {
            $object->setGlobalIPv6PrefixLen($data['GlobalIPv6PrefixLen']);
        }
        if (\array_key_exists('IPAddress', $data)) {
            $object->setIPAddress($data['IPAddress']);
        }
        if (\array_key_exists('IPPrefixLen', $data)) {
            $object->setIPPrefixLen($data['IPPrefixLen']);
        }
        if (\array_key_exists('IPv6Gateway', $data)) {
            $object->setIPv6Gateway($data['IPv6Gateway']);
        }
        if (\array_key_exists('MacAddress', $data)) {
            $object->setMacAddress($data['MacAddress']);
        }
        if (\array_key_exists('Networks', $data)) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Networks'] as $key_1 => $value_4) {
                $values_4[$key_1] = $this->denormalizer->denormalize($value_4, \Docker\Api\Model\EndpointSettings::class, 'json', $context);
            }
            $object->setNetworks($values_4);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('bridge') && null !== $data->getBridge()) {
            $dataArray['Bridge'] = $data->getBridge();
        }
        if ($data->isInitialized('sandboxID') && null !== $data->getSandboxID()) {
            $dataArray['SandboxID'] = $data->getSandboxID();
        }
        if ($data->isInitialized('hairpinMode') && null !== $data->getHairpinMode()) {
            $dataArray['HairpinMode'] = $data->getHairpinMode();
        }
        if ($data->isInitialized('linkLocalIPv6Address') && null !== $data->getLinkLocalIPv6Address()) {
            $dataArray['LinkLocalIPv6Address'] = $data->getLinkLocalIPv6Address();
        }
        if ($data->isInitialized('linkLocalIPv6PrefixLen') && null !== $data->getLinkLocalIPv6PrefixLen()) {
            $dataArray['LinkLocalIPv6PrefixLen'] = $data->getLinkLocalIPv6PrefixLen();
        }
        if ($data->isInitialized('ports') && null !== $data->getPorts()) {
            $values = [];
            foreach ($data->getPorts() as $key => $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $values[$key] = $values_1;
            }
            $dataArray['Ports'] = $values;
        }
        if ($data->isInitialized('sandboxKey') && null !== $data->getSandboxKey()) {
            $dataArray['SandboxKey'] = $data->getSandboxKey();
        }
        if ($data->isInitialized('secondaryIPAddresses')) {
            $values_2 = [];
            foreach ($data->getSecondaryIPAddresses() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['SecondaryIPAddresses'] = $values_2;
        }
        if ($data->isInitialized('secondaryIPv6Addresses')) {
            $values_3 = [];
            foreach ($data->getSecondaryIPv6Addresses() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['SecondaryIPv6Addresses'] = $values_3;
        }
        if ($data->isInitialized('endpointID') && null !== $data->getEndpointID()) {
            $dataArray['EndpointID'] = $data->getEndpointID();
        }
        if ($data->isInitialized('gateway') && null !== $data->getGateway()) {
            $dataArray['Gateway'] = $data->getGateway();
        }
        if ($data->isInitialized('globalIPv6Address') && null !== $data->getGlobalIPv6Address()) {
            $dataArray['GlobalIPv6Address'] = $data->getGlobalIPv6Address();
        }
        if ($data->isInitialized('globalIPv6PrefixLen') && null !== $data->getGlobalIPv6PrefixLen()) {
            $dataArray['GlobalIPv6PrefixLen'] = $data->getGlobalIPv6PrefixLen();
        }
        if ($data->isInitialized('iPAddress') && null !== $data->getIPAddress()) {
            $dataArray['IPAddress'] = $data->getIPAddress();
        }
        if ($data->isInitialized('iPPrefixLen') && null !== $data->getIPPrefixLen()) {
            $dataArray['IPPrefixLen'] = $data->getIPPrefixLen();
        }
        if ($data->isInitialized('iPv6Gateway') && null !== $data->getIPv6Gateway()) {
            $dataArray['IPv6Gateway'] = $data->getIPv6Gateway();
        }
        if ($data->isInitialized('macAddress') && null !== $data->getMacAddress()) {
            $dataArray['MacAddress'] = $data->getMacAddress();
        }
        if ($data->isInitialized('networks') && null !== $data->getNetworks()) {
            $values_4 = [];
            foreach ($data->getNetworks() as $key_1 => $value_4) {
                $values_4[$key_1] = $this->normalizer->normalize($value_4, 'json', $context);
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