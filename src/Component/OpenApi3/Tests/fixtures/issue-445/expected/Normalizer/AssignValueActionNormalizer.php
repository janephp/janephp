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
    class AssignValueActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\AssignValueAction';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\AssignValueAction';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\AssignValueAction();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('traceRefId', $data) && $data['traceRefId'] !== null) {
                $object->setTraceRefId($data['traceRefId']);
                unset($data['traceRefId']);
            }
            elseif (\array_key_exists('traceRefId', $data) && $data['traceRefId'] === null) {
                $object->setTraceRefId(null);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('path', $data) && $data['path'] !== null) {
                $object->setPath($data['path']);
                unset($data['path']);
            }
            elseif (\array_key_exists('path', $data) && $data['path'] === null) {
                $object->setPath(null);
            }
            if (\array_key_exists('fieldId', $data) && $data['fieldId'] !== null) {
                $object->setFieldId($data['fieldId']);
                unset($data['fieldId']);
            }
            elseif (\array_key_exists('fieldId', $data) && $data['fieldId'] === null) {
                $object->setFieldId(null);
            }
            if (\array_key_exists('value', $data) && $data['value'] !== null) {
                $object->setValue($data['value']);
                unset($data['value']);
            }
            elseif (\array_key_exists('value', $data) && $data['value'] === null) {
                $object->setValue(null);
            }
            if (\array_key_exists('replace', $data)) {
                $object->setReplace($data['replace']);
                unset($data['replace']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('traceRefId') && null !== $object->getTraceRefId()) {
                $data['traceRefId'] = $object->getTraceRefId();
            }
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('path') && null !== $object->getPath()) {
                $data['path'] = $object->getPath();
            }
            if ($object->isInitialized('fieldId') && null !== $object->getFieldId()) {
                $data['fieldId'] = $object->getFieldId();
            }
            if ($object->isInitialized('value') && null !== $object->getValue()) {
                $data['value'] = $object->getValue();
            }
            if ($object->isInitialized('replace') && null !== $object->getReplace()) {
                $data['replace'] = $object->getReplace();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\AssignValueAction' => false];
        }
    }
} else {
    class AssignValueActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\AssignValueAction';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\AssignValueAction';
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
            $object = new \PicturePark\API\Model\AssignValueAction();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('traceRefId', $data) && $data['traceRefId'] !== null) {
                $object->setTraceRefId($data['traceRefId']);
                unset($data['traceRefId']);
            }
            elseif (\array_key_exists('traceRefId', $data) && $data['traceRefId'] === null) {
                $object->setTraceRefId(null);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('path', $data) && $data['path'] !== null) {
                $object->setPath($data['path']);
                unset($data['path']);
            }
            elseif (\array_key_exists('path', $data) && $data['path'] === null) {
                $object->setPath(null);
            }
            if (\array_key_exists('fieldId', $data) && $data['fieldId'] !== null) {
                $object->setFieldId($data['fieldId']);
                unset($data['fieldId']);
            }
            elseif (\array_key_exists('fieldId', $data) && $data['fieldId'] === null) {
                $object->setFieldId(null);
            }
            if (\array_key_exists('value', $data) && $data['value'] !== null) {
                $object->setValue($data['value']);
                unset($data['value']);
            }
            elseif (\array_key_exists('value', $data) && $data['value'] === null) {
                $object->setValue(null);
            }
            if (\array_key_exists('replace', $data)) {
                $object->setReplace($data['replace']);
                unset($data['replace']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('traceRefId') && null !== $object->getTraceRefId()) {
                $data['traceRefId'] = $object->getTraceRefId();
            }
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('path') && null !== $object->getPath()) {
                $data['path'] = $object->getPath();
            }
            if ($object->isInitialized('fieldId') && null !== $object->getFieldId()) {
                $data['fieldId'] = $object->getFieldId();
            }
            if ($object->isInitialized('value') && null !== $object->getValue()) {
                $data['value'] = $object->getValue();
            }
            if ($object->isInitialized('replace') && null !== $object->getReplace()) {
                $data['replace'] = $object->getReplace();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\AssignValueAction' => false];
        }
    }
}