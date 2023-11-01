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
    class LayerIdsByRootSchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\LayerIdsByRootSchema';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\LayerIdsByRootSchema';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\LayerIdsByRootSchema();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('rootSchemaId', $data) && $data['rootSchemaId'] !== null) {
                $object->setRootSchemaId($data['rootSchemaId']);
            }
            elseif (\array_key_exists('rootSchemaId', $data) && $data['rootSchemaId'] === null) {
                $object->setRootSchemaId(null);
            }
            if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
                $values = [];
                foreach ($data['layerSchemaIds'] as $value) {
                    $values[] = $value;
                }
                $object->setLayerSchemaIds($values);
            }
            elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
                $object->setLayerSchemaIds(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('rootSchemaId') && null !== $object->getRootSchemaId()) {
                $data['rootSchemaId'] = $object->getRootSchemaId();
            }
            if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
                $values = [];
                foreach ($object->getLayerSchemaIds() as $value) {
                    $values[] = $value;
                }
                $data['layerSchemaIds'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\LayerIdsByRootSchema' => false];
        }
    }
} else {
    class LayerIdsByRootSchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\LayerIdsByRootSchema';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\LayerIdsByRootSchema';
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
            $object = new \PicturePark\API\Model\LayerIdsByRootSchema();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('rootSchemaId', $data) && $data['rootSchemaId'] !== null) {
                $object->setRootSchemaId($data['rootSchemaId']);
            }
            elseif (\array_key_exists('rootSchemaId', $data) && $data['rootSchemaId'] === null) {
                $object->setRootSchemaId(null);
            }
            if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
                $values = [];
                foreach ($data['layerSchemaIds'] as $value) {
                    $values[] = $value;
                }
                $object->setLayerSchemaIds($values);
            }
            elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
                $object->setLayerSchemaIds(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('rootSchemaId') && null !== $object->getRootSchemaId()) {
                $data['rootSchemaId'] = $object->getRootSchemaId();
            }
            if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
                $values = [];
                foreach ($object->getLayerSchemaIds() as $value) {
                    $values[] = $value;
                }
                $data['layerSchemaIds'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\LayerIdsByRootSchema' => false];
        }
    }
}