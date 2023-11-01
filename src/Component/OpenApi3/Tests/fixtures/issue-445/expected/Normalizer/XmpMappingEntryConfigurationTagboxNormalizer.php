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
    class XmpMappingEntryConfigurationTagboxNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\XmpMappingEntryConfigurationTagbox';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\XmpMappingEntryConfigurationTagbox';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\XmpMappingEntryConfigurationTagbox();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('keyFieldIds', $data)) {
                $values = [];
                foreach ($data['keyFieldIds'] as $value) {
                    $values[] = $value;
                }
                $object->setKeyFieldIds($values);
                unset($data['keyFieldIds']);
            }
            if (\array_key_exists('caseSensitive', $data)) {
                $object->setCaseSensitive($data['caseSensitive']);
                unset($data['caseSensitive']);
            }
            if (\array_key_exists('includeAllSchemaChildren', $data)) {
                $object->setIncludeAllSchemaChildren($data['includeAllSchemaChildren']);
                unset($data['includeAllSchemaChildren']);
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
            $data['kind'] = $object->getKind();
            $values = [];
            foreach ($object->getKeyFieldIds() as $value) {
                $values[] = $value;
            }
            $data['keyFieldIds'] = $values;
            $data['caseSensitive'] = $object->getCaseSensitive();
            $data['includeAllSchemaChildren'] = $object->getIncludeAllSchemaChildren();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\XmpMappingEntryConfigurationTagbox' => false];
        }
    }
} else {
    class XmpMappingEntryConfigurationTagboxNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\XmpMappingEntryConfigurationTagbox';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\XmpMappingEntryConfigurationTagbox';
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
            $object = new \PicturePark\API\Model\XmpMappingEntryConfigurationTagbox();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('keyFieldIds', $data)) {
                $values = [];
                foreach ($data['keyFieldIds'] as $value) {
                    $values[] = $value;
                }
                $object->setKeyFieldIds($values);
                unset($data['keyFieldIds']);
            }
            if (\array_key_exists('caseSensitive', $data)) {
                $object->setCaseSensitive($data['caseSensitive']);
                unset($data['caseSensitive']);
            }
            if (\array_key_exists('includeAllSchemaChildren', $data)) {
                $object->setIncludeAllSchemaChildren($data['includeAllSchemaChildren']);
                unset($data['includeAllSchemaChildren']);
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
            $data['kind'] = $object->getKind();
            $values = [];
            foreach ($object->getKeyFieldIds() as $value) {
                $values[] = $value;
            }
            $data['keyFieldIds'] = $values;
            $data['caseSensitive'] = $object->getCaseSensitive();
            $data['includeAllSchemaChildren'] = $object->getIncludeAllSchemaChildren();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\XmpMappingEntryConfigurationTagbox' => false];
        }
    }
}