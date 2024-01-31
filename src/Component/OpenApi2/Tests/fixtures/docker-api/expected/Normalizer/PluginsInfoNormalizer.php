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
    class PluginsInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\PluginsInfo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\PluginsInfo';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\PluginsInfo();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\PluginsInfoConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Volume', $data)) {
                $values = [];
                foreach ($data['Volume'] as $value) {
                    $values[] = $value;
                }
                $object->setVolume($values);
            }
            if (\array_key_exists('Network', $data)) {
                $values_1 = [];
                foreach ($data['Network'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setNetwork($values_1);
            }
            if (\array_key_exists('Authorization', $data)) {
                $values_2 = [];
                foreach ($data['Authorization'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setAuthorization($values_2);
            }
            if (\array_key_exists('Log', $data)) {
                $values_3 = [];
                foreach ($data['Log'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setLog($values_3);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('volume') && null !== $object->getVolume()) {
                $values = [];
                foreach ($object->getVolume() as $value) {
                    $values[] = $value;
                }
                $data['Volume'] = $values;
            }
            if ($object->isInitialized('network') && null !== $object->getNetwork()) {
                $values_1 = [];
                foreach ($object->getNetwork() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Network'] = $values_1;
            }
            if ($object->isInitialized('authorization') && null !== $object->getAuthorization()) {
                $values_2 = [];
                foreach ($object->getAuthorization() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Authorization'] = $values_2;
            }
            if ($object->isInitialized('log') && null !== $object->getLog()) {
                $values_3 = [];
                foreach ($object->getLog() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['Log'] = $values_3;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\PluginsInfoConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\PluginsInfo' => false];
        }
    }
} else {
    class PluginsInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\PluginsInfo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\PluginsInfo';
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
            $object = new \Docker\Api\Model\PluginsInfo();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\PluginsInfoConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Volume', $data)) {
                $values = [];
                foreach ($data['Volume'] as $value) {
                    $values[] = $value;
                }
                $object->setVolume($values);
            }
            if (\array_key_exists('Network', $data)) {
                $values_1 = [];
                foreach ($data['Network'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setNetwork($values_1);
            }
            if (\array_key_exists('Authorization', $data)) {
                $values_2 = [];
                foreach ($data['Authorization'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setAuthorization($values_2);
            }
            if (\array_key_exists('Log', $data)) {
                $values_3 = [];
                foreach ($data['Log'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setLog($values_3);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('volume') && null !== $object->getVolume()) {
                $values = [];
                foreach ($object->getVolume() as $value) {
                    $values[] = $value;
                }
                $data['Volume'] = $values;
            }
            if ($object->isInitialized('network') && null !== $object->getNetwork()) {
                $values_1 = [];
                foreach ($object->getNetwork() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Network'] = $values_1;
            }
            if ($object->isInitialized('authorization') && null !== $object->getAuthorization()) {
                $values_2 = [];
                foreach ($object->getAuthorization() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Authorization'] = $values_2;
            }
            if ($object->isInitialized('log') && null !== $object->getLog()) {
                $values_3 = [];
                foreach ($object->getLog() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['Log'] = $values_3;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\PluginsInfoConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\PluginsInfo' => false];
        }
    }
}