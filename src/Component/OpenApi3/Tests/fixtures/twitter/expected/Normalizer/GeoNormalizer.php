<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class GeoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Geo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Geo';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\Geo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('bbox', $data)) {
                $values = [];
                foreach ($data['bbox'] as $value) {
                    $values[] = $value;
                }
                $object->setBbox($values);
                unset($data['bbox']);
            }
            if (\array_key_exists('geometry', $data)) {
                $object->setGeometry($this->denormalizer->denormalize($data['geometry'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Point', 'json', $context));
                unset($data['geometry']);
            }
            if (\array_key_exists('properties', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['properties'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setProperties($values_1);
                unset($data['properties']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['type'] = $object->getType();
            $values = [];
            foreach ($object->getBbox() as $value) {
                $values[] = $value;
            }
            $data['bbox'] = $values;
            if ($object->isInitialized('geometry') && null !== $object->getGeometry()) {
                $data['geometry'] = $this->normalizer->normalize($object->getGeometry(), 'json', $context);
            }
            $values_1 = [];
            foreach ($object->getProperties() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['properties'] = $values_1;
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Geo' => false];
        }
    }
} else {
    class GeoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Geo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Geo';
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
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\Geo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('bbox', $data)) {
                $values = [];
                foreach ($data['bbox'] as $value) {
                    $values[] = $value;
                }
                $object->setBbox($values);
                unset($data['bbox']);
            }
            if (\array_key_exists('geometry', $data)) {
                $object->setGeometry($this->denormalizer->denormalize($data['geometry'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Point', 'json', $context));
                unset($data['geometry']);
            }
            if (\array_key_exists('properties', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['properties'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setProperties($values_1);
                unset($data['properties']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['type'] = $object->getType();
            $values = [];
            foreach ($object->getBbox() as $value) {
                $values[] = $value;
            }
            $data['bbox'] = $values;
            if ($object->isInitialized('geometry') && null !== $object->getGeometry()) {
                $data['geometry'] = $this->normalizer->normalize($object->getGeometry(), 'json', $context);
            }
            $values_1 = [];
            foreach ($object->getProperties() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['properties'] = $values_1;
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Geo' => false];
        }
    }
}