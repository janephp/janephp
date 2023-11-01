<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class BusinessRuleConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\BusinessRuleConfiguration';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleConfiguration';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\BusinessRuleConfiguration();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('disableRuleEngine', $data)) {
                $object->setDisableRuleEngine($data['disableRuleEngine']);
            }
            if (\array_key_exists('rules', $data) && $data['rules'] !== null) {
                $values = [];
                foreach ($data['rules'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\BusinessRule', 'json', $context);
                }
                $object->setRules($values);
            }
            elseif (\array_key_exists('rules', $data) && $data['rules'] === null) {
                $object->setRules(null);
            }
            if (\array_key_exists('caches', $data) && $data['caches'] !== null) {
                $values_1 = [];
                foreach ($data['caches'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\NamedCacheConfigurationBase', 'json', $context);
                }
                $object->setCaches($values_1);
            }
            elseif (\array_key_exists('caches', $data) && $data['caches'] === null) {
                $object->setCaches(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['disableRuleEngine'] = $object->getDisableRuleEngine();
            if ($object->isInitialized('rules') && null !== $object->getRules()) {
                $values = [];
                foreach ($object->getRules() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['rules'] = $values;
            }
            if ($object->isInitialized('caches') && null !== $object->getCaches()) {
                $values_1 = [];
                foreach ($object->getCaches() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['caches'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\BusinessRuleConfiguration' => false];
        }
    }
} else {
    class BusinessRuleConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\BusinessRuleConfiguration';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleConfiguration';
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
            $object = new \PicturePark\API\Model\BusinessRuleConfiguration();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('disableRuleEngine', $data)) {
                $object->setDisableRuleEngine($data['disableRuleEngine']);
            }
            if (\array_key_exists('rules', $data) && $data['rules'] !== null) {
                $values = [];
                foreach ($data['rules'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\BusinessRule', 'json', $context);
                }
                $object->setRules($values);
            }
            elseif (\array_key_exists('rules', $data) && $data['rules'] === null) {
                $object->setRules(null);
            }
            if (\array_key_exists('caches', $data) && $data['caches'] !== null) {
                $values_1 = [];
                foreach ($data['caches'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\NamedCacheConfigurationBase', 'json', $context);
                }
                $object->setCaches($values_1);
            }
            elseif (\array_key_exists('caches', $data) && $data['caches'] === null) {
                $object->setCaches(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['disableRuleEngine'] = $object->getDisableRuleEngine();
            if ($object->isInitialized('rules') && null !== $object->getRules()) {
                $values = [];
                foreach ($object->getRules() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['rules'] = $values;
            }
            if ($object->isInitialized('caches') && null !== $object->getCaches()) {
                $values_1 = [];
                foreach ($object->getCaches() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['caches'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\BusinessRuleConfiguration' => false];
        }
    }
}