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
    class PluginSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\PluginSettings';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\PluginSettings';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\PluginSettings();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\PluginSettingsConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Mounts', $data)) {
                $values = [];
                foreach ($data['Mounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Docker\\Api\\Model\\PluginMount', 'json', $context);
                }
                $object->setMounts($values);
            }
            if (\array_key_exists('Env', $data)) {
                $values_1 = [];
                foreach ($data['Env'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setEnv($values_1);
            }
            if (\array_key_exists('Args', $data)) {
                $values_2 = [];
                foreach ($data['Args'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setArgs($values_2);
            }
            if (\array_key_exists('Devices', $data)) {
                $values_3 = [];
                foreach ($data['Devices'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\Api\\Model\\PluginDevice', 'json', $context);
                }
                $object->setDevices($values_3);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $values = [];
            foreach ($object->getMounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Mounts'] = $values;
            $values_1 = [];
            foreach ($object->getEnv() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['Env'] = $values_1;
            $values_2 = [];
            foreach ($object->getArgs() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['Args'] = $values_2;
            $values_3 = [];
            foreach ($object->getDevices() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['Devices'] = $values_3;
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\PluginSettingsConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\PluginSettings' => false];
        }
    }
} else {
    class PluginSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\PluginSettings';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\PluginSettings';
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
            $object = new \Docker\Api\Model\PluginSettings();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\PluginSettingsConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Mounts', $data)) {
                $values = [];
                foreach ($data['Mounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Docker\\Api\\Model\\PluginMount', 'json', $context);
                }
                $object->setMounts($values);
            }
            if (\array_key_exists('Env', $data)) {
                $values_1 = [];
                foreach ($data['Env'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setEnv($values_1);
            }
            if (\array_key_exists('Args', $data)) {
                $values_2 = [];
                foreach ($data['Args'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setArgs($values_2);
            }
            if (\array_key_exists('Devices', $data)) {
                $values_3 = [];
                foreach ($data['Devices'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\Api\\Model\\PluginDevice', 'json', $context);
                }
                $object->setDevices($values_3);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $values = [];
            foreach ($object->getMounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Mounts'] = $values;
            $values_1 = [];
            foreach ($object->getEnv() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['Env'] = $values_1;
            $values_2 = [];
            foreach ($object->getArgs() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['Args'] = $values_2;
            $values_3 = [];
            foreach ($object->getDevices() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['Devices'] = $values_3;
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\PluginSettingsConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\PluginSettings' => false];
        }
    }
}