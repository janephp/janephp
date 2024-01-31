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
    class BusinessRuleFiredEventDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\BusinessRuleFiredEventDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleFiredEventDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\BusinessRuleFiredEventDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('documentId', $data) && $data['documentId'] !== null) {
                $object->setDocumentId($data['documentId']);
            }
            elseif (\array_key_exists('documentId', $data) && $data['documentId'] === null) {
                $object->setDocumentId(null);
            }
            if (\array_key_exists('documentType', $data) && $data['documentType'] !== null) {
                $object->setDocumentType($data['documentType']);
            }
            elseif (\array_key_exists('documentType', $data) && $data['documentType'] === null) {
                $object->setDocumentType(null);
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
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('documentId') && null !== $object->getDocumentId()) {
                $data['documentId'] = $object->getDocumentId();
            }
            if ($object->isInitialized('documentType') && null !== $object->getDocumentType()) {
                $data['documentType'] = $object->getDocumentType();
            }
            if ($object->isInitialized('ruleIds') && null !== $object->getRuleIds()) {
                $values = [];
                foreach ($object->getRuleIds() as $value) {
                    $values[] = $value;
                }
                $data['ruleIds'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\BusinessRuleFiredEventDetail' => false];
        }
    }
} else {
    class BusinessRuleFiredEventDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\BusinessRuleFiredEventDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleFiredEventDetail';
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
            $object = new \PicturePark\API\Model\BusinessRuleFiredEventDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('documentId', $data) && $data['documentId'] !== null) {
                $object->setDocumentId($data['documentId']);
            }
            elseif (\array_key_exists('documentId', $data) && $data['documentId'] === null) {
                $object->setDocumentId(null);
            }
            if (\array_key_exists('documentType', $data) && $data['documentType'] !== null) {
                $object->setDocumentType($data['documentType']);
            }
            elseif (\array_key_exists('documentType', $data) && $data['documentType'] === null) {
                $object->setDocumentType(null);
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
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('documentId') && null !== $object->getDocumentId()) {
                $data['documentId'] = $object->getDocumentId();
            }
            if ($object->isInitialized('documentType') && null !== $object->getDocumentType()) {
                $data['documentType'] = $object->getDocumentType();
            }
            if ($object->isInitialized('ruleIds') && null !== $object->getRuleIds()) {
                $values = [];
                foreach ($object->getRuleIds() as $value) {
                    $values[] = $value;
                }
                $data['ruleIds'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\BusinessRuleFiredEventDetail' => false];
        }
    }
}