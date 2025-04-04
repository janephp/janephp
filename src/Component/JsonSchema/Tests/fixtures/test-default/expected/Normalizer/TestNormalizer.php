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
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Jane\Component\JsonSchema\Tests\Expected\Model\Test::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Test;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Test();
            if (\array_key_exists('float', $data) && \is_int($data['float'])) {
                $data['float'] = (double) $data['float'];
            }
            if (\array_key_exists('bool', $data) && \is_int($data['bool'])) {
                $data['bool'] = (bool) $data['bool'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('string', $data) && $data['string'] !== null) {
                $object->setString($data['string']);
            }
            elseif (\array_key_exists('string', $data) && $data['string'] === null) {
                $object->setString(null);
            }
            if (\array_key_exists('bool', $data) && $data['bool'] !== null) {
                $object->setBool($data['bool']);
            }
            elseif (\array_key_exists('bool', $data) && $data['bool'] === null) {
                $object->setBool(null);
            }
            if (\array_key_exists('integer', $data) && $data['integer'] !== null) {
                $object->setInteger($data['integer']);
            }
            elseif (\array_key_exists('integer', $data) && $data['integer'] === null) {
                $object->setInteger(null);
            }
            if (\array_key_exists('float', $data) && $data['float'] !== null) {
                $object->setFloat($data['float']);
            }
            elseif (\array_key_exists('float', $data) && $data['float'] === null) {
                $object->setFloat(null);
            }
            if (\array_key_exists('array', $data) && $data['array'] !== null) {
                $values = [];
                foreach ($data['array'] as $value) {
                    $values[] = $value;
                }
                $object->setArray($values);
            }
            elseif (\array_key_exists('array', $data) && $data['array'] === null) {
                $object->setArray(null);
            }
            if (\array_key_exists('object', $data) && $data['object'] !== null) {
                $values_1 = [];
                foreach ($data['object'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setObject($values_1);
            }
            elseif (\array_key_exists('object', $data) && $data['object'] === null) {
                $object->setObject(null);
            }
            if (\array_key_exists('subObject', $data) && $data['subObject'] !== null) {
                $object->setSubObject($this->denormalizer->denormalize($data['subObject'], \Jane\Component\JsonSchema\Tests\Expected\Model\TestSubObject::class, 'json', $context));
            }
            elseif (\array_key_exists('subObject', $data) && $data['subObject'] === null) {
                $object->setSubObject(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('string') && null !== $object->getString()) {
                $data['string'] = $object->getString();
            }
            if ($object->isInitialized('bool') && null !== $object->getBool()) {
                $data['bool'] = $object->getBool();
            }
            if ($object->isInitialized('integer') && null !== $object->getInteger()) {
                $data['integer'] = $object->getInteger();
            }
            if ($object->isInitialized('float') && null !== $object->getFloat()) {
                $data['float'] = $object->getFloat();
            }
            if ($object->isInitialized('array') && null !== $object->getArray()) {
                $values = [];
                foreach ($object->getArray() as $value) {
                    $values[] = $value;
                }
                $data['array'] = $values;
            }
            if ($object->isInitialized('object') && null !== $object->getObject()) {
                $values_1 = [];
                foreach ($object->getObject() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['object'] = $values_1;
            }
            if ($object->isInitialized('subObject') && null !== $object->getSubObject()) {
                $data['subObject'] = $this->normalizer->normalize($object->getSubObject(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Jane\Component\JsonSchema\Tests\Expected\Model\Test::class => false];
        }
    }
} else {
    class TestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Jane\Component\JsonSchema\Tests\Expected\Model\Test::class;
        }
        public function supportsNormalization($data, $format = null, array $context = []): bool
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
            if (\array_key_exists('float', $data) && \is_int($data['float'])) {
                $data['float'] = (double) $data['float'];
            }
            if (\array_key_exists('bool', $data) && \is_int($data['bool'])) {
                $data['bool'] = (bool) $data['bool'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('string', $data) && $data['string'] !== null) {
                $object->setString($data['string']);
            }
            elseif (\array_key_exists('string', $data) && $data['string'] === null) {
                $object->setString(null);
            }
            if (\array_key_exists('bool', $data) && $data['bool'] !== null) {
                $object->setBool($data['bool']);
            }
            elseif (\array_key_exists('bool', $data) && $data['bool'] === null) {
                $object->setBool(null);
            }
            if (\array_key_exists('integer', $data) && $data['integer'] !== null) {
                $object->setInteger($data['integer']);
            }
            elseif (\array_key_exists('integer', $data) && $data['integer'] === null) {
                $object->setInteger(null);
            }
            if (\array_key_exists('float', $data) && $data['float'] !== null) {
                $object->setFloat($data['float']);
            }
            elseif (\array_key_exists('float', $data) && $data['float'] === null) {
                $object->setFloat(null);
            }
            if (\array_key_exists('array', $data) && $data['array'] !== null) {
                $values = [];
                foreach ($data['array'] as $value) {
                    $values[] = $value;
                }
                $object->setArray($values);
            }
            elseif (\array_key_exists('array', $data) && $data['array'] === null) {
                $object->setArray(null);
            }
            if (\array_key_exists('object', $data) && $data['object'] !== null) {
                $values_1 = [];
                foreach ($data['object'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setObject($values_1);
            }
            elseif (\array_key_exists('object', $data) && $data['object'] === null) {
                $object->setObject(null);
            }
            if (\array_key_exists('subObject', $data) && $data['subObject'] !== null) {
                $object->setSubObject($this->denormalizer->denormalize($data['subObject'], \Jane\Component\JsonSchema\Tests\Expected\Model\TestSubObject::class, 'json', $context));
            }
            elseif (\array_key_exists('subObject', $data) && $data['subObject'] === null) {
                $object->setSubObject(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('string') && null !== $object->getString()) {
                $data['string'] = $object->getString();
            }
            if ($object->isInitialized('bool') && null !== $object->getBool()) {
                $data['bool'] = $object->getBool();
            }
            if ($object->isInitialized('integer') && null !== $object->getInteger()) {
                $data['integer'] = $object->getInteger();
            }
            if ($object->isInitialized('float') && null !== $object->getFloat()) {
                $data['float'] = $object->getFloat();
            }
            if ($object->isInitialized('array') && null !== $object->getArray()) {
                $values = [];
                foreach ($object->getArray() as $value) {
                    $values[] = $value;
                }
                $data['array'] = $values;
            }
            if ($object->isInitialized('object') && null !== $object->getObject()) {
                $values_1 = [];
                foreach ($object->getObject() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['object'] = $values_1;
            }
            if ($object->isInitialized('subObject') && null !== $object->getSubObject()) {
                $data['subObject'] = $this->normalizer->normalize($object->getSubObject(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Jane\Component\JsonSchema\Tests\Expected\Model\Test::class => false];
        }
    }
}