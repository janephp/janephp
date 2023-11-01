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
    class SchemaImportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\SchemaImportResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SchemaImportResult';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\SchemaImportResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('importedSchemaCount', $data)) {
                $object->setImportedSchemaCount($data['importedSchemaCount']);
            }
            if (\array_key_exists('skippedSchemaCount', $data)) {
                $object->setSkippedSchemaCount($data['skippedSchemaCount']);
            }
            if (\array_key_exists('totalSchemaCount', $data)) {
                $object->setTotalSchemaCount($data['totalSchemaCount']);
            }
            if (\array_key_exists('skippedSchemaIds', $data) && $data['skippedSchemaIds'] !== null) {
                $values = [];
                foreach ($data['skippedSchemaIds'] as $value) {
                    $values[] = $value;
                }
                $object->setSkippedSchemaIds($values);
            }
            elseif (\array_key_exists('skippedSchemaIds', $data) && $data['skippedSchemaIds'] === null) {
                $object->setSkippedSchemaIds(null);
            }
            if (\array_key_exists('importedSchemaIds', $data) && $data['importedSchemaIds'] !== null) {
                $values_1 = [];
                foreach ($data['importedSchemaIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setImportedSchemaIds($values_1);
            }
            elseif (\array_key_exists('importedSchemaIds', $data) && $data['importedSchemaIds'] === null) {
                $object->setImportedSchemaIds(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['importedSchemaCount'] = $object->getImportedSchemaCount();
            $data['skippedSchemaCount'] = $object->getSkippedSchemaCount();
            $data['totalSchemaCount'] = $object->getTotalSchemaCount();
            if ($object->isInitialized('skippedSchemaIds') && null !== $object->getSkippedSchemaIds()) {
                $values = [];
                foreach ($object->getSkippedSchemaIds() as $value) {
                    $values[] = $value;
                }
                $data['skippedSchemaIds'] = $values;
            }
            if ($object->isInitialized('importedSchemaIds') && null !== $object->getImportedSchemaIds()) {
                $values_1 = [];
                foreach ($object->getImportedSchemaIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['importedSchemaIds'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\SchemaImportResult' => false];
        }
    }
} else {
    class SchemaImportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\SchemaImportResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SchemaImportResult';
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
            $object = new \PicturePark\API\Model\SchemaImportResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('importedSchemaCount', $data)) {
                $object->setImportedSchemaCount($data['importedSchemaCount']);
            }
            if (\array_key_exists('skippedSchemaCount', $data)) {
                $object->setSkippedSchemaCount($data['skippedSchemaCount']);
            }
            if (\array_key_exists('totalSchemaCount', $data)) {
                $object->setTotalSchemaCount($data['totalSchemaCount']);
            }
            if (\array_key_exists('skippedSchemaIds', $data) && $data['skippedSchemaIds'] !== null) {
                $values = [];
                foreach ($data['skippedSchemaIds'] as $value) {
                    $values[] = $value;
                }
                $object->setSkippedSchemaIds($values);
            }
            elseif (\array_key_exists('skippedSchemaIds', $data) && $data['skippedSchemaIds'] === null) {
                $object->setSkippedSchemaIds(null);
            }
            if (\array_key_exists('importedSchemaIds', $data) && $data['importedSchemaIds'] !== null) {
                $values_1 = [];
                foreach ($data['importedSchemaIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setImportedSchemaIds($values_1);
            }
            elseif (\array_key_exists('importedSchemaIds', $data) && $data['importedSchemaIds'] === null) {
                $object->setImportedSchemaIds(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['importedSchemaCount'] = $object->getImportedSchemaCount();
            $data['skippedSchemaCount'] = $object->getSkippedSchemaCount();
            $data['totalSchemaCount'] = $object->getTotalSchemaCount();
            if ($object->isInitialized('skippedSchemaIds') && null !== $object->getSkippedSchemaIds()) {
                $values = [];
                foreach ($object->getSkippedSchemaIds() as $value) {
                    $values[] = $value;
                }
                $data['skippedSchemaIds'] = $values;
            }
            if ($object->isInitialized('importedSchemaIds') && null !== $object->getImportedSchemaIds()) {
                $values_1 = [];
                foreach ($object->getImportedSchemaIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['importedSchemaIds'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\SchemaImportResult' => false];
        }
    }
}