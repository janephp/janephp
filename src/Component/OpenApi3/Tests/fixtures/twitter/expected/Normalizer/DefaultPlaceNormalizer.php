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
    class DefaultPlaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultPlace';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultPlace';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultPlace();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('format', $data)) {
                $object->setFormat($data['format']);
                unset($data['format']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('country_code', $data)) {
                $object->setCountryCode($data['country_code']);
                unset($data['country_code']);
            }
            if (\array_key_exists('place_type', $data)) {
                $object->setPlaceType($data['place_type']);
                unset($data['place_type']);
            }
            if (\array_key_exists('full_name', $data)) {
                $object->setFullName($data['full_name']);
                unset($data['full_name']);
            }
            if (\array_key_exists('country', $data)) {
                $object->setCountry($data['country']);
                unset($data['country']);
            }
            if (\array_key_exists('contained_within', $data)) {
                $values = [];
                foreach ($data['contained_within'] as $value) {
                    $values[] = $value;
                }
                $object->setContainedWithin($values);
                unset($data['contained_within']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('format') && null !== $object->getFormat()) {
                $data['format'] = $object->getFormat();
            }
            $data['id'] = $object->getId();
            $data['name'] = $object->getName();
            $data['country_code'] = $object->getCountryCode();
            $data['place_type'] = $object->getPlaceType();
            $data['full_name'] = $object->getFullName();
            $data['country'] = $object->getCountry();
            if ($object->isInitialized('containedWithin') && null !== $object->getContainedWithin()) {
                $values = [];
                foreach ($object->getContainedWithin() as $value) {
                    $values[] = $value;
                }
                $data['contained_within'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultPlace' => false];
        }
    }
} else {
    class DefaultPlaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultPlace';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultPlace';
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
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultPlace();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('format', $data)) {
                $object->setFormat($data['format']);
                unset($data['format']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('country_code', $data)) {
                $object->setCountryCode($data['country_code']);
                unset($data['country_code']);
            }
            if (\array_key_exists('place_type', $data)) {
                $object->setPlaceType($data['place_type']);
                unset($data['place_type']);
            }
            if (\array_key_exists('full_name', $data)) {
                $object->setFullName($data['full_name']);
                unset($data['full_name']);
            }
            if (\array_key_exists('country', $data)) {
                $object->setCountry($data['country']);
                unset($data['country']);
            }
            if (\array_key_exists('contained_within', $data)) {
                $values = [];
                foreach ($data['contained_within'] as $value) {
                    $values[] = $value;
                }
                $object->setContainedWithin($values);
                unset($data['contained_within']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('format') && null !== $object->getFormat()) {
                $data['format'] = $object->getFormat();
            }
            $data['id'] = $object->getId();
            $data['name'] = $object->getName();
            $data['country_code'] = $object->getCountryCode();
            $data['place_type'] = $object->getPlaceType();
            $data['full_name'] = $object->getFullName();
            $data['country'] = $object->getCountry();
            if ($object->isInitialized('containedWithin') && null !== $object->getContainedWithin()) {
                $values = [];
                foreach ($object->getContainedWithin() as $value) {
                    $values[] = $value;
                }
                $data['contained_within'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultPlace' => false];
        }
    }
}