<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class EndpointSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\EndpointSettings';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\EndpointSettings';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\EndpointSettings();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\EndpointSettingsConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('IPAMConfig', $data) && $data['IPAMConfig'] !== null) {
                $object->setIPAMConfig($this->denormalizer->denormalize($data['IPAMConfig'], 'Docker\\Api\\Model\\EndpointIPAMConfig', 'json', $context));
            }
            elseif (\array_key_exists('IPAMConfig', $data) && $data['IPAMConfig'] === null) {
                $object->setIPAMConfig(null);
            }
            if (\array_key_exists('Links', $data)) {
                $values = [];
                foreach ($data['Links'] as $value) {
                    $values[] = $value;
                }
                $object->setLinks($values);
            }
            if (\array_key_exists('Aliases', $data)) {
                $values_1 = [];
                foreach ($data['Aliases'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAliases($values_1);
            }
            if (\array_key_exists('NetworkID', $data)) {
                $object->setNetworkID($data['NetworkID']);
            }
            if (\array_key_exists('EndpointID', $data)) {
                $object->setEndpointID($data['EndpointID']);
            }
            if (\array_key_exists('Gateway', $data)) {
                $object->setGateway($data['Gateway']);
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
            if (\array_key_exists('GlobalIPv6Address', $data)) {
                $object->setGlobalIPv6Address($data['GlobalIPv6Address']);
            }
            if (\array_key_exists('GlobalIPv6PrefixLen', $data)) {
                $object->setGlobalIPv6PrefixLen($data['GlobalIPv6PrefixLen']);
            }
            if (\array_key_exists('MacAddress', $data)) {
                $object->setMacAddress($data['MacAddress']);
            }
            if (\array_key_exists('DriverOpts', $data) && $data['DriverOpts'] !== null) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['DriverOpts'] as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $object->setDriverOpts($values_2);
            }
            elseif (\array_key_exists('DriverOpts', $data) && $data['DriverOpts'] === null) {
                $object->setDriverOpts(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('iPAMConfig') && null !== $object->getIPAMConfig()) {
                $data['IPAMConfig'] = $this->normalizer->normalize($object->getIPAMConfig(), 'json', $context);
            }
            if ($object->isInitialized('links') && null !== $object->getLinks()) {
                $values = [];
                foreach ($object->getLinks() as $value) {
                    $values[] = $value;
                }
                $data['Links'] = $values;
            }
            if ($object->isInitialized('aliases') && null !== $object->getAliases()) {
                $values_1 = [];
                foreach ($object->getAliases() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Aliases'] = $values_1;
            }
            if ($object->isInitialized('networkID') && null !== $object->getNetworkID()) {
                $data['NetworkID'] = $object->getNetworkID();
            }
            if ($object->isInitialized('endpointID') && null !== $object->getEndpointID()) {
                $data['EndpointID'] = $object->getEndpointID();
            }
            if ($object->isInitialized('gateway') && null !== $object->getGateway()) {
                $data['Gateway'] = $object->getGateway();
            }
            if ($object->isInitialized('iPAddress') && null !== $object->getIPAddress()) {
                $data['IPAddress'] = $object->getIPAddress();
            }
            if ($object->isInitialized('iPPrefixLen') && null !== $object->getIPPrefixLen()) {
                $data['IPPrefixLen'] = $object->getIPPrefixLen();
            }
            if ($object->isInitialized('iPv6Gateway') && null !== $object->getIPv6Gateway()) {
                $data['IPv6Gateway'] = $object->getIPv6Gateway();
            }
            if ($object->isInitialized('globalIPv6Address') && null !== $object->getGlobalIPv6Address()) {
                $data['GlobalIPv6Address'] = $object->getGlobalIPv6Address();
            }
            if ($object->isInitialized('globalIPv6PrefixLen') && null !== $object->getGlobalIPv6PrefixLen()) {
                $data['GlobalIPv6PrefixLen'] = $object->getGlobalIPv6PrefixLen();
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['MacAddress'] = $object->getMacAddress();
            }
            if ($object->isInitialized('driverOpts') && null !== $object->getDriverOpts()) {
                $values_2 = [];
                foreach ($object->getDriverOpts() as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $data['DriverOpts'] = $values_2;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\EndpointSettingsConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\EndpointSettings' => false];
        }
    }
} else {
    class EndpointSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\EndpointSettings';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\EndpointSettings';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\EndpointSettings();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\EndpointSettingsConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('IPAMConfig', $data) && $data['IPAMConfig'] !== null) {
                $object->setIPAMConfig($this->denormalizer->denormalize($data['IPAMConfig'], 'Docker\\Api\\Model\\EndpointIPAMConfig', 'json', $context));
            }
            elseif (\array_key_exists('IPAMConfig', $data) && $data['IPAMConfig'] === null) {
                $object->setIPAMConfig(null);
            }
            if (\array_key_exists('Links', $data)) {
                $values = [];
                foreach ($data['Links'] as $value) {
                    $values[] = $value;
                }
                $object->setLinks($values);
            }
            if (\array_key_exists('Aliases', $data)) {
                $values_1 = [];
                foreach ($data['Aliases'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAliases($values_1);
            }
            if (\array_key_exists('NetworkID', $data)) {
                $object->setNetworkID($data['NetworkID']);
            }
            if (\array_key_exists('EndpointID', $data)) {
                $object->setEndpointID($data['EndpointID']);
            }
            if (\array_key_exists('Gateway', $data)) {
                $object->setGateway($data['Gateway']);
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
            if (\array_key_exists('GlobalIPv6Address', $data)) {
                $object->setGlobalIPv6Address($data['GlobalIPv6Address']);
            }
            if (\array_key_exists('GlobalIPv6PrefixLen', $data)) {
                $object->setGlobalIPv6PrefixLen($data['GlobalIPv6PrefixLen']);
            }
            if (\array_key_exists('MacAddress', $data)) {
                $object->setMacAddress($data['MacAddress']);
            }
            if (\array_key_exists('DriverOpts', $data) && $data['DriverOpts'] !== null) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['DriverOpts'] as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $object->setDriverOpts($values_2);
            }
            elseif (\array_key_exists('DriverOpts', $data) && $data['DriverOpts'] === null) {
                $object->setDriverOpts(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('iPAMConfig') && null !== $object->getIPAMConfig()) {
                $data['IPAMConfig'] = $this->normalizer->normalize($object->getIPAMConfig(), 'json', $context);
            }
            if ($object->isInitialized('links') && null !== $object->getLinks()) {
                $values = [];
                foreach ($object->getLinks() as $value) {
                    $values[] = $value;
                }
                $data['Links'] = $values;
            }
            if ($object->isInitialized('aliases') && null !== $object->getAliases()) {
                $values_1 = [];
                foreach ($object->getAliases() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Aliases'] = $values_1;
            }
            if ($object->isInitialized('networkID') && null !== $object->getNetworkID()) {
                $data['NetworkID'] = $object->getNetworkID();
            }
            if ($object->isInitialized('endpointID') && null !== $object->getEndpointID()) {
                $data['EndpointID'] = $object->getEndpointID();
            }
            if ($object->isInitialized('gateway') && null !== $object->getGateway()) {
                $data['Gateway'] = $object->getGateway();
            }
            if ($object->isInitialized('iPAddress') && null !== $object->getIPAddress()) {
                $data['IPAddress'] = $object->getIPAddress();
            }
            if ($object->isInitialized('iPPrefixLen') && null !== $object->getIPPrefixLen()) {
                $data['IPPrefixLen'] = $object->getIPPrefixLen();
            }
            if ($object->isInitialized('iPv6Gateway') && null !== $object->getIPv6Gateway()) {
                $data['IPv6Gateway'] = $object->getIPv6Gateway();
            }
            if ($object->isInitialized('globalIPv6Address') && null !== $object->getGlobalIPv6Address()) {
                $data['GlobalIPv6Address'] = $object->getGlobalIPv6Address();
            }
            if ($object->isInitialized('globalIPv6PrefixLen') && null !== $object->getGlobalIPv6PrefixLen()) {
                $data['GlobalIPv6PrefixLen'] = $object->getGlobalIPv6PrefixLen();
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['MacAddress'] = $object->getMacAddress();
            }
            if ($object->isInitialized('driverOpts') && null !== $object->getDriverOpts()) {
                $values_2 = [];
                foreach ($object->getDriverOpts() as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $data['DriverOpts'] = $values_2;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\EndpointSettingsConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\EndpointSettings' => false];
        }
    }
}