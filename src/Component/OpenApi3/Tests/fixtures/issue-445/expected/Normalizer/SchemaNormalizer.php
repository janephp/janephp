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
    class SchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\Schema';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Schema';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\Schema();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('parentSchemaId', $data) && $data['parentSchemaId'] !== null) {
                $object->setParentSchemaId($data['parentSchemaId']);
            }
            elseif (\array_key_exists('parentSchemaId', $data) && $data['parentSchemaId'] === null) {
                $object->setParentSchemaId(null);
            }
            if (\array_key_exists('types', $data) && $data['types'] !== null) {
                $values = [];
                foreach ($data['types'] as $value) {
                    $values[] = $value;
                }
                $object->setTypes($values);
            }
            elseif (\array_key_exists('types', $data) && $data['types'] === null) {
                $object->setTypes(null);
            }
            if (\array_key_exists('names', $data) && $data['names'] !== null) {
                $object->setNames($data['names']);
            }
            elseif (\array_key_exists('names', $data) && $data['names'] === null) {
                $object->setNames(null);
            }
            if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
                $object->setDescriptions($data['descriptions']);
            }
            elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
                $object->setDescriptions(null);
            }
            if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
                $values_1 = [];
                foreach ($data['layerSchemaIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setLayerSchemaIds($values_1);
            }
            elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
                $object->setLayerSchemaIds(null);
            }
            if (\array_key_exists('fieldCount', $data)) {
                $object->setFieldCount($data['fieldCount']);
            }
            if (\array_key_exists('childCount', $data)) {
                $object->setChildCount($data['childCount']);
            }
            if (\array_key_exists('level', $data)) {
                $object->setLevel($data['level']);
            }
            if (\array_key_exists('system', $data)) {
                $object->setSystem($data['system']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            if ($object->isInitialized('parentSchemaId') && null !== $object->getParentSchemaId()) {
                $data['parentSchemaId'] = $object->getParentSchemaId();
            }
            if ($object->isInitialized('types') && null !== $object->getTypes()) {
                $values = [];
                foreach ($object->getTypes() as $value) {
                    $values[] = $value;
                }
                $data['types'] = $values;
            }
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('descriptions') && null !== $object->getDescriptions()) {
                $data['descriptions'] = $object->getDescriptions();
            }
            if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
                $values_1 = [];
                foreach ($object->getLayerSchemaIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['layerSchemaIds'] = $values_1;
            }
            $data['fieldCount'] = $object->getFieldCount();
            $data['childCount'] = $object->getChildCount();
            $data['level'] = $object->getLevel();
            $data['system'] = $object->getSystem();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\Schema' => false];
        }
    }
} else {
    class SchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\Schema';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Schema';
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
            $object = new \PicturePark\API\Model\Schema();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('parentSchemaId', $data) && $data['parentSchemaId'] !== null) {
                $object->setParentSchemaId($data['parentSchemaId']);
            }
            elseif (\array_key_exists('parentSchemaId', $data) && $data['parentSchemaId'] === null) {
                $object->setParentSchemaId(null);
            }
            if (\array_key_exists('types', $data) && $data['types'] !== null) {
                $values = [];
                foreach ($data['types'] as $value) {
                    $values[] = $value;
                }
                $object->setTypes($values);
            }
            elseif (\array_key_exists('types', $data) && $data['types'] === null) {
                $object->setTypes(null);
            }
            if (\array_key_exists('names', $data) && $data['names'] !== null) {
                $object->setNames($data['names']);
            }
            elseif (\array_key_exists('names', $data) && $data['names'] === null) {
                $object->setNames(null);
            }
            if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
                $object->setDescriptions($data['descriptions']);
            }
            elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
                $object->setDescriptions(null);
            }
            if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
                $values_1 = [];
                foreach ($data['layerSchemaIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setLayerSchemaIds($values_1);
            }
            elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
                $object->setLayerSchemaIds(null);
            }
            if (\array_key_exists('fieldCount', $data)) {
                $object->setFieldCount($data['fieldCount']);
            }
            if (\array_key_exists('childCount', $data)) {
                $object->setChildCount($data['childCount']);
            }
            if (\array_key_exists('level', $data)) {
                $object->setLevel($data['level']);
            }
            if (\array_key_exists('system', $data)) {
                $object->setSystem($data['system']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['id'] = $object->getId();
            if ($object->isInitialized('parentSchemaId') && null !== $object->getParentSchemaId()) {
                $data['parentSchemaId'] = $object->getParentSchemaId();
            }
            if ($object->isInitialized('types') && null !== $object->getTypes()) {
                $values = [];
                foreach ($object->getTypes() as $value) {
                    $values[] = $value;
                }
                $data['types'] = $values;
            }
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('descriptions') && null !== $object->getDescriptions()) {
                $data['descriptions'] = $object->getDescriptions();
            }
            if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
                $values_1 = [];
                foreach ($object->getLayerSchemaIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['layerSchemaIds'] = $values_1;
            }
            $data['fieldCount'] = $object->getFieldCount();
            $data['childCount'] = $object->getChildCount();
            $data['level'] = $object->getLevel();
            $data['system'] = $object->getSystem();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\Schema' => false];
        }
    }
}