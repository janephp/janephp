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
    class BusinessRuleTraceLogNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\BusinessRuleTraceLog';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleTraceLog';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\BusinessRuleTraceLog();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('documentId', $data) && $data['documentId'] !== null) {
                $object->setDocumentId($data['documentId']);
            }
            elseif (\array_key_exists('documentId', $data) && $data['documentId'] === null) {
                $object->setDocumentId(null);
            }
            if (\array_key_exists('documentType', $data)) {
                $object->setDocumentType($data['documentType']);
            }
            if (\array_key_exists('ruleIds', $data) && $data['ruleIds'] !== null) {
                $values = [];
                foreach ($data['ruleIds'] as $value) {
                    $values[] = $value;
                }
                $object->setRuleIds($values);
            }
            elseif (\array_key_exists('ruleIds', $data) && $data['ruleIds'] === null) {
                $object->setRuleIds(null);
            }
            if (\array_key_exists('rules', $data) && $data['rules'] !== null) {
                $values_1 = [];
                foreach ($data['rules'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\BusinessRuleTracedRule', 'json', $context);
                }
                $object->setRules($values_1);
            }
            elseif (\array_key_exists('rules', $data) && $data['rules'] === null) {
                $object->setRules(null);
            }
            if (\array_key_exists('validationErrors', $data) && $data['validationErrors'] !== null) {
                $values_2 = [];
                foreach ($data['validationErrors'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'PicturePark\\API\\Model\\ErrorResponse', 'json', $context);
                }
                $object->setValidationErrors($values_2);
            }
            elseif (\array_key_exists('validationErrors', $data) && $data['validationErrors'] === null) {
                $object->setValidationErrors(null);
            }
            if (\array_key_exists('generalErrors', $data) && $data['generalErrors'] !== null) {
                $values_3 = [];
                foreach ($data['generalErrors'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\ErrorResponse', 'json', $context);
                }
                $object->setGeneralErrors($values_3);
            }
            elseif (\array_key_exists('generalErrors', $data) && $data['generalErrors'] === null) {
                $object->setGeneralErrors(null);
            }
            if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
                $object->setAudit($data['audit']);
            }
            elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
                $object->setAudit(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('documentId') && null !== $object->getDocumentId()) {
                $data['documentId'] = $object->getDocumentId();
            }
            $data['documentType'] = $object->getDocumentType();
            if ($object->isInitialized('ruleIds') && null !== $object->getRuleIds()) {
                $values = [];
                foreach ($object->getRuleIds() as $value) {
                    $values[] = $value;
                }
                $data['ruleIds'] = $values;
            }
            if ($object->isInitialized('rules') && null !== $object->getRules()) {
                $values_1 = [];
                foreach ($object->getRules() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['rules'] = $values_1;
            }
            if ($object->isInitialized('validationErrors') && null !== $object->getValidationErrors()) {
                $values_2 = [];
                foreach ($object->getValidationErrors() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['validationErrors'] = $values_2;
            }
            if ($object->isInitialized('generalErrors') && null !== $object->getGeneralErrors()) {
                $values_3 = [];
                foreach ($object->getGeneralErrors() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['generalErrors'] = $values_3;
            }
            if ($object->isInitialized('audit') && null !== $object->getAudit()) {
                $data['audit'] = $object->getAudit();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\BusinessRuleTraceLog' => false];
        }
    }
} else {
    class BusinessRuleTraceLogNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\BusinessRuleTraceLog';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleTraceLog';
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
            $object = new \PicturePark\API\Model\BusinessRuleTraceLog();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('documentId', $data) && $data['documentId'] !== null) {
                $object->setDocumentId($data['documentId']);
            }
            elseif (\array_key_exists('documentId', $data) && $data['documentId'] === null) {
                $object->setDocumentId(null);
            }
            if (\array_key_exists('documentType', $data)) {
                $object->setDocumentType($data['documentType']);
            }
            if (\array_key_exists('ruleIds', $data) && $data['ruleIds'] !== null) {
                $values = [];
                foreach ($data['ruleIds'] as $value) {
                    $values[] = $value;
                }
                $object->setRuleIds($values);
            }
            elseif (\array_key_exists('ruleIds', $data) && $data['ruleIds'] === null) {
                $object->setRuleIds(null);
            }
            if (\array_key_exists('rules', $data) && $data['rules'] !== null) {
                $values_1 = [];
                foreach ($data['rules'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\BusinessRuleTracedRule', 'json', $context);
                }
                $object->setRules($values_1);
            }
            elseif (\array_key_exists('rules', $data) && $data['rules'] === null) {
                $object->setRules(null);
            }
            if (\array_key_exists('validationErrors', $data) && $data['validationErrors'] !== null) {
                $values_2 = [];
                foreach ($data['validationErrors'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'PicturePark\\API\\Model\\ErrorResponse', 'json', $context);
                }
                $object->setValidationErrors($values_2);
            }
            elseif (\array_key_exists('validationErrors', $data) && $data['validationErrors'] === null) {
                $object->setValidationErrors(null);
            }
            if (\array_key_exists('generalErrors', $data) && $data['generalErrors'] !== null) {
                $values_3 = [];
                foreach ($data['generalErrors'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\ErrorResponse', 'json', $context);
                }
                $object->setGeneralErrors($values_3);
            }
            elseif (\array_key_exists('generalErrors', $data) && $data['generalErrors'] === null) {
                $object->setGeneralErrors(null);
            }
            if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
                $object->setAudit($data['audit']);
            }
            elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
                $object->setAudit(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('documentId') && null !== $object->getDocumentId()) {
                $data['documentId'] = $object->getDocumentId();
            }
            $data['documentType'] = $object->getDocumentType();
            if ($object->isInitialized('ruleIds') && null !== $object->getRuleIds()) {
                $values = [];
                foreach ($object->getRuleIds() as $value) {
                    $values[] = $value;
                }
                $data['ruleIds'] = $values;
            }
            if ($object->isInitialized('rules') && null !== $object->getRules()) {
                $values_1 = [];
                foreach ($object->getRules() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['rules'] = $values_1;
            }
            if ($object->isInitialized('validationErrors') && null !== $object->getValidationErrors()) {
                $values_2 = [];
                foreach ($object->getValidationErrors() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['validationErrors'] = $values_2;
            }
            if ($object->isInitialized('generalErrors') && null !== $object->getGeneralErrors()) {
                $values_3 = [];
                foreach ($object->getGeneralErrors() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['generalErrors'] = $values_3;
            }
            if ($object->isInitialized('audit') && null !== $object->getAudit()) {
                $data['audit'] = $object->getAudit();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\BusinessRuleTraceLog' => false];
        }
    }
}