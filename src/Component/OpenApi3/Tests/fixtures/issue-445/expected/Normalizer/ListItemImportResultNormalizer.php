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
    class ListItemImportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ListItemImportResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ListItemImportResult';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ListItemImportResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('importedListItemCount', $data)) {
                $object->setImportedListItemCount($data['importedListItemCount']);
            }
            if (\array_key_exists('skippedListItemCount', $data)) {
                $object->setSkippedListItemCount($data['skippedListItemCount']);
            }
            if (\array_key_exists('totalListItemCount', $data)) {
                $object->setTotalListItemCount($data['totalListItemCount']);
            }
            if (\array_key_exists('skippedListItemIds', $data) && $data['skippedListItemIds'] !== null) {
                $values = [];
                foreach ($data['skippedListItemIds'] as $value) {
                    $values[] = $value;
                }
                $object->setSkippedListItemIds($values);
            }
            elseif (\array_key_exists('skippedListItemIds', $data) && $data['skippedListItemIds'] === null) {
                $object->setSkippedListItemIds(null);
            }
            if (\array_key_exists('importedListItemIds', $data) && $data['importedListItemIds'] !== null) {
                $values_1 = [];
                foreach ($data['importedListItemIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setImportedListItemIds($values_1);
            }
            elseif (\array_key_exists('importedListItemIds', $data) && $data['importedListItemIds'] === null) {
                $object->setImportedListItemIds(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['importedListItemCount'] = $object->getImportedListItemCount();
            $data['skippedListItemCount'] = $object->getSkippedListItemCount();
            $data['totalListItemCount'] = $object->getTotalListItemCount();
            if ($object->isInitialized('skippedListItemIds') && null !== $object->getSkippedListItemIds()) {
                $values = [];
                foreach ($object->getSkippedListItemIds() as $value) {
                    $values[] = $value;
                }
                $data['skippedListItemIds'] = $values;
            }
            if ($object->isInitialized('importedListItemIds') && null !== $object->getImportedListItemIds()) {
                $values_1 = [];
                foreach ($object->getImportedListItemIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['importedListItemIds'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ListItemImportResult' => false];
        }
    }
} else {
    class ListItemImportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ListItemImportResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ListItemImportResult';
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
            $object = new \PicturePark\API\Model\ListItemImportResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('importedListItemCount', $data)) {
                $object->setImportedListItemCount($data['importedListItemCount']);
            }
            if (\array_key_exists('skippedListItemCount', $data)) {
                $object->setSkippedListItemCount($data['skippedListItemCount']);
            }
            if (\array_key_exists('totalListItemCount', $data)) {
                $object->setTotalListItemCount($data['totalListItemCount']);
            }
            if (\array_key_exists('skippedListItemIds', $data) && $data['skippedListItemIds'] !== null) {
                $values = [];
                foreach ($data['skippedListItemIds'] as $value) {
                    $values[] = $value;
                }
                $object->setSkippedListItemIds($values);
            }
            elseif (\array_key_exists('skippedListItemIds', $data) && $data['skippedListItemIds'] === null) {
                $object->setSkippedListItemIds(null);
            }
            if (\array_key_exists('importedListItemIds', $data) && $data['importedListItemIds'] !== null) {
                $values_1 = [];
                foreach ($data['importedListItemIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setImportedListItemIds($values_1);
            }
            elseif (\array_key_exists('importedListItemIds', $data) && $data['importedListItemIds'] === null) {
                $object->setImportedListItemIds(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['importedListItemCount'] = $object->getImportedListItemCount();
            $data['skippedListItemCount'] = $object->getSkippedListItemCount();
            $data['totalListItemCount'] = $object->getTotalListItemCount();
            if ($object->isInitialized('skippedListItemIds') && null !== $object->getSkippedListItemIds()) {
                $values = [];
                foreach ($object->getSkippedListItemIds() as $value) {
                    $values[] = $value;
                }
                $data['skippedListItemIds'] = $values;
            }
            if ($object->isInitialized('importedListItemIds') && null !== $object->getImportedListItemIds()) {
                $values_1 = [];
                foreach ($object->getImportedListItemIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['importedListItemIds'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ListItemImportResult' => false];
        }
    }
}