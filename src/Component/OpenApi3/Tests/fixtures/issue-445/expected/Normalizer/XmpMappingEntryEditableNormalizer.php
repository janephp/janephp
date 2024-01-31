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
    class XmpMappingEntryEditableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\XmpMappingEntryEditable';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\XmpMappingEntryEditable';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\XmpMappingEntryEditable();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('direction', $data)) {
                $object->setDirection($data['direction']);
            }
            if (\array_key_exists('priority', $data)) {
                $object->setPriority($data['priority']);
            }
            if (\array_key_exists('stopProcessing', $data)) {
                $object->setStopProcessing($data['stopProcessing']);
            }
            if (\array_key_exists('xmpPath', $data)) {
                $object->setXmpPath($data['xmpPath']);
            }
            if (\array_key_exists('metadataPath', $data)) {
                $object->setMetadataPath($data['metadataPath']);
            }
            if (\array_key_exists('configuration', $data) && $data['configuration'] !== null) {
                $object->setConfiguration($data['configuration']);
            }
            elseif (\array_key_exists('configuration', $data) && $data['configuration'] === null) {
                $object->setConfiguration(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['direction'] = $object->getDirection();
            $data['priority'] = $object->getPriority();
            $data['stopProcessing'] = $object->getStopProcessing();
            $data['xmpPath'] = $object->getXmpPath();
            $data['metadataPath'] = $object->getMetadataPath();
            if ($object->isInitialized('configuration') && null !== $object->getConfiguration()) {
                $data['configuration'] = $object->getConfiguration();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\XmpMappingEntryEditable' => false];
        }
    }
} else {
    class XmpMappingEntryEditableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\XmpMappingEntryEditable';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\XmpMappingEntryEditable';
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
            $object = new \PicturePark\API\Model\XmpMappingEntryEditable();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('direction', $data)) {
                $object->setDirection($data['direction']);
            }
            if (\array_key_exists('priority', $data)) {
                $object->setPriority($data['priority']);
            }
            if (\array_key_exists('stopProcessing', $data)) {
                $object->setStopProcessing($data['stopProcessing']);
            }
            if (\array_key_exists('xmpPath', $data)) {
                $object->setXmpPath($data['xmpPath']);
            }
            if (\array_key_exists('metadataPath', $data)) {
                $object->setMetadataPath($data['metadataPath']);
            }
            if (\array_key_exists('configuration', $data) && $data['configuration'] !== null) {
                $object->setConfiguration($data['configuration']);
            }
            elseif (\array_key_exists('configuration', $data) && $data['configuration'] === null) {
                $object->setConfiguration(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['direction'] = $object->getDirection();
            $data['priority'] = $object->getPriority();
            $data['stopProcessing'] = $object->getStopProcessing();
            $data['xmpPath'] = $object->getXmpPath();
            $data['metadataPath'] = $object->getMetadataPath();
            if ($object->isInitialized('configuration') && null !== $object->getConfiguration()) {
                $data['configuration'] = $object->getConfiguration();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\XmpMappingEntryEditable' => false];
        }
    }
}