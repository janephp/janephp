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
    class DeviceRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\DeviceRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\DeviceRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\DeviceRequest();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\DeviceRequestConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Driver', $data)) {
                $object->setDriver($data['Driver']);
            }
            if (\array_key_exists('Count', $data)) {
                $object->setCount($data['Count']);
            }
            if (\array_key_exists('DeviceIDs', $data)) {
                $values = [];
                foreach ($data['DeviceIDs'] as $value) {
                    $values[] = $value;
                }
                $object->setDeviceIDs($values);
            }
            if (\array_key_exists('Capabilities', $data)) {
                $values_1 = [];
                foreach ($data['Capabilities'] as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $value_2) {
                        $values_2[] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $object->setCapabilities($values_1);
            }
            if (\array_key_exists('Options', $data)) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $object->setOptions($values_3);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('count') && null !== $object->getCount()) {
                $data['Count'] = $object->getCount();
            }
            if ($object->isInitialized('deviceIDs') && null !== $object->getDeviceIDs()) {
                $values = [];
                foreach ($object->getDeviceIDs() as $value) {
                    $values[] = $value;
                }
                $data['DeviceIDs'] = $values;
            }
            if ($object->isInitialized('capabilities') && null !== $object->getCapabilities()) {
                $values_1 = [];
                foreach ($object->getCapabilities() as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $value_2) {
                        $values_2[] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $data['Capabilities'] = $values_1;
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values_3 = [];
                foreach ($object->getOptions() as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $data['Options'] = $values_3;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\DeviceRequestConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\DeviceRequest' => false];
        }
    }
} else {
    class DeviceRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\DeviceRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\DeviceRequest';
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
            $object = new \Docker\Api\Model\DeviceRequest();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\DeviceRequestConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Driver', $data)) {
                $object->setDriver($data['Driver']);
            }
            if (\array_key_exists('Count', $data)) {
                $object->setCount($data['Count']);
            }
            if (\array_key_exists('DeviceIDs', $data)) {
                $values = [];
                foreach ($data['DeviceIDs'] as $value) {
                    $values[] = $value;
                }
                $object->setDeviceIDs($values);
            }
            if (\array_key_exists('Capabilities', $data)) {
                $values_1 = [];
                foreach ($data['Capabilities'] as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $value_2) {
                        $values_2[] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $object->setCapabilities($values_1);
            }
            if (\array_key_exists('Options', $data)) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $object->setOptions($values_3);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('count') && null !== $object->getCount()) {
                $data['Count'] = $object->getCount();
            }
            if ($object->isInitialized('deviceIDs') && null !== $object->getDeviceIDs()) {
                $values = [];
                foreach ($object->getDeviceIDs() as $value) {
                    $values[] = $value;
                }
                $data['DeviceIDs'] = $values;
            }
            if ($object->isInitialized('capabilities') && null !== $object->getCapabilities()) {
                $values_1 = [];
                foreach ($object->getCapabilities() as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $value_2) {
                        $values_2[] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $data['Capabilities'] = $values_1;
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values_3 = [];
                foreach ($object->getOptions() as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $data['Options'] = $values_3;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\DeviceRequestConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\DeviceRequest' => false];
        }
    }
}