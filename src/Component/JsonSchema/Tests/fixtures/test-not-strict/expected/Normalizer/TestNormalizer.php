<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class TestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Test';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Test;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Test();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('onlyNull', $data) && $data['onlyNull'] !== null) {
                $object->setOnlyNull($data['onlyNull']);
            }
            elseif (\array_key_exists('onlyNull', $data) && $data['onlyNull'] === null) {
                $object->setOnlyNull(null);
            }
            if (\array_key_exists('nullOrString', $data) && $data['nullOrString'] !== null) {
                $value = $data['nullOrString'];
                if (is_string($data['nullOrString'])) {
                    $value = $data['nullOrString'];
                } elseif (is_null($data['nullOrString'])) {
                    $value = $data['nullOrString'];
                }
                $object->setNullOrString($value);
            }
            elseif (\array_key_exists('nullOrString', $data) && $data['nullOrString'] === null) {
                $object->setNullOrString(null);
            }
            if (\array_key_exists('array', $data) && $data['array'] !== null) {
                $values = [];
                foreach ($data['array'] as $value_1) {
                    $values[] = $value_1;
                }
                $object->setArray($values);
            }
            elseif (\array_key_exists('array', $data) && $data['array'] === null) {
                $object->setArray(null);
            }
            if (\array_key_exists('object', $data) && $data['object'] !== null) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['object'] as $key => $value_2) {
                    $values_1[$key] = $value_2;
                }
                $object->setObject($values_1);
            }
            elseif (\array_key_exists('object', $data) && $data['object'] === null) {
                $object->setObject(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('onlyNull') && null !== $object->getOnlyNull()) {
                $data['onlyNull'] = $object->getOnlyNull();
            }
            if ($object->isInitialized('nullOrString') && null !== $object->getNullOrString()) {
                $value = $object->getNullOrString();
                if (is_string($object->getNullOrString())) {
                    $value = $object->getNullOrString();
                } elseif (is_null($object->getNullOrString())) {
                    $value = $object->getNullOrString();
                }
                $data['nullOrString'] = $value;
            }
            if ($object->isInitialized('array') && null !== $object->getArray()) {
                $values = [];
                foreach ($object->getArray() as $value_1) {
                    $values[] = $value_1;
                }
                $data['array'] = $values;
            }
            if ($object->isInitialized('object') && null !== $object->getObject()) {
                $values_1 = [];
                foreach ($object->getObject() as $key => $value_2) {
                    $values_1[$key] = $value_2;
                }
                $data['object'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Test' => false];
        }
    }
} else {
    class TestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Test';
        }
        public function supportsNormalization($data, $format = null, array $context = []) : bool
        {
            return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Test;
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
            $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Test();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('onlyNull', $data) && $data['onlyNull'] !== null) {
                $object->setOnlyNull($data['onlyNull']);
            }
            elseif (\array_key_exists('onlyNull', $data) && $data['onlyNull'] === null) {
                $object->setOnlyNull(null);
            }
            if (\array_key_exists('nullOrString', $data) && $data['nullOrString'] !== null) {
                $value = $data['nullOrString'];
                if (is_string($data['nullOrString'])) {
                    $value = $data['nullOrString'];
                } elseif (is_null($data['nullOrString'])) {
                    $value = $data['nullOrString'];
                }
                $object->setNullOrString($value);
            }
            elseif (\array_key_exists('nullOrString', $data) && $data['nullOrString'] === null) {
                $object->setNullOrString(null);
            }
            if (\array_key_exists('array', $data) && $data['array'] !== null) {
                $values = [];
                foreach ($data['array'] as $value_1) {
                    $values[] = $value_1;
                }
                $object->setArray($values);
            }
            elseif (\array_key_exists('array', $data) && $data['array'] === null) {
                $object->setArray(null);
            }
            if (\array_key_exists('object', $data) && $data['object'] !== null) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['object'] as $key => $value_2) {
                    $values_1[$key] = $value_2;
                }
                $object->setObject($values_1);
            }
            elseif (\array_key_exists('object', $data) && $data['object'] === null) {
                $object->setObject(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('onlyNull') && null !== $object->getOnlyNull()) {
                $data['onlyNull'] = $object->getOnlyNull();
            }
            if ($object->isInitialized('nullOrString') && null !== $object->getNullOrString()) {
                $value = $object->getNullOrString();
                if (is_string($object->getNullOrString())) {
                    $value = $object->getNullOrString();
                } elseif (is_null($object->getNullOrString())) {
                    $value = $object->getNullOrString();
                }
                $data['nullOrString'] = $value;
            }
            if ($object->isInitialized('array') && null !== $object->getArray()) {
                $values = [];
                foreach ($object->getArray() as $value_1) {
                    $values[] = $value_1;
                }
                $data['array'] = $values;
            }
            if ($object->isInitialized('object') && null !== $object->getObject()) {
                $values_1 = [];
                foreach ($object->getObject() as $key => $value_2) {
                    $values_1[$key] = $value_2;
                }
                $data['object'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Test' => false];
        }
    }
}