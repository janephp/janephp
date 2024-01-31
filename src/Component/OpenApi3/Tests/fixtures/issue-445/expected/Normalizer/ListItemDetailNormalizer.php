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
    class ListItemDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ListItemDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ListItemDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ListItemDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('contentSchemaId', $data)) {
                $object->setContentSchemaId($data['contentSchemaId']);
            }
            if (\array_key_exists('content', $data) && $data['content'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['content'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setContent($values);
            }
            elseif (\array_key_exists('content', $data) && $data['content'] === null) {
                $object->setContent(null);
            }
            if (\array_key_exists('displayValues', $data) && $data['displayValues'] !== null) {
                $object->setDisplayValues($data['displayValues']);
            }
            elseif (\array_key_exists('displayValues', $data) && $data['displayValues'] === null) {
                $object->setDisplayValues(null);
            }
            if (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] !== null) {
                $values_1 = [];
                foreach ($data['brokenReferenceIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setBrokenReferenceIds($values_1);
            }
            elseif (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] === null) {
                $object->setBrokenReferenceIds(null);
            }
            if (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] !== null) {
                $values_2 = [];
                foreach ($data['brokenRelationTargetIds'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setBrokenRelationTargetIds($values_2);
            }
            elseif (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] === null) {
                $object->setBrokenRelationTargetIds(null);
            }
            if (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] !== null) {
                $values_3 = [];
                foreach ($data['brokenIndirectReferenceIds'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setBrokenIndirectReferenceIds($values_3);
            }
            elseif (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] === null) {
                $object->setBrokenIndirectReferenceIds(null);
            }
            if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
                $object->setAudit($data['audit']);
            }
            elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
                $object->setAudit(null);
            }
            if (\array_key_exists('activity', $data) && $data['activity'] !== null) {
                $object->setActivity($data['activity']);
            }
            elseif (\array_key_exists('activity', $data) && $data['activity'] === null) {
                $object->setActivity(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['contentSchemaId'] = $object->getContentSchemaId();
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $values = [];
                foreach ($object->getContent() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['content'] = $values;
            }
            if ($object->isInitialized('displayValues') && null !== $object->getDisplayValues()) {
                $data['displayValues'] = $object->getDisplayValues();
            }
            if ($object->isInitialized('brokenReferenceIds') && null !== $object->getBrokenReferenceIds()) {
                $values_1 = [];
                foreach ($object->getBrokenReferenceIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['brokenReferenceIds'] = $values_1;
            }
            if ($object->isInitialized('brokenRelationTargetIds') && null !== $object->getBrokenRelationTargetIds()) {
                $values_2 = [];
                foreach ($object->getBrokenRelationTargetIds() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['brokenRelationTargetIds'] = $values_2;
            }
            if ($object->isInitialized('brokenIndirectReferenceIds') && null !== $object->getBrokenIndirectReferenceIds()) {
                $values_3 = [];
                foreach ($object->getBrokenIndirectReferenceIds() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['brokenIndirectReferenceIds'] = $values_3;
            }
            if ($object->isInitialized('audit') && null !== $object->getAudit()) {
                $data['audit'] = $object->getAudit();
            }
            if ($object->isInitialized('activity') && null !== $object->getActivity()) {
                $data['activity'] = $object->getActivity();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ListItemDetail' => false];
        }
    }
} else {
    class ListItemDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ListItemDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ListItemDetail';
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
            $object = new \PicturePark\API\Model\ListItemDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('contentSchemaId', $data)) {
                $object->setContentSchemaId($data['contentSchemaId']);
            }
            if (\array_key_exists('content', $data) && $data['content'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['content'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setContent($values);
            }
            elseif (\array_key_exists('content', $data) && $data['content'] === null) {
                $object->setContent(null);
            }
            if (\array_key_exists('displayValues', $data) && $data['displayValues'] !== null) {
                $object->setDisplayValues($data['displayValues']);
            }
            elseif (\array_key_exists('displayValues', $data) && $data['displayValues'] === null) {
                $object->setDisplayValues(null);
            }
            if (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] !== null) {
                $values_1 = [];
                foreach ($data['brokenReferenceIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setBrokenReferenceIds($values_1);
            }
            elseif (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] === null) {
                $object->setBrokenReferenceIds(null);
            }
            if (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] !== null) {
                $values_2 = [];
                foreach ($data['brokenRelationTargetIds'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setBrokenRelationTargetIds($values_2);
            }
            elseif (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] === null) {
                $object->setBrokenRelationTargetIds(null);
            }
            if (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] !== null) {
                $values_3 = [];
                foreach ($data['brokenIndirectReferenceIds'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setBrokenIndirectReferenceIds($values_3);
            }
            elseif (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] === null) {
                $object->setBrokenIndirectReferenceIds(null);
            }
            if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
                $object->setAudit($data['audit']);
            }
            elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
                $object->setAudit(null);
            }
            if (\array_key_exists('activity', $data) && $data['activity'] !== null) {
                $object->setActivity($data['activity']);
            }
            elseif (\array_key_exists('activity', $data) && $data['activity'] === null) {
                $object->setActivity(null);
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
            $data['contentSchemaId'] = $object->getContentSchemaId();
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $values = [];
                foreach ($object->getContent() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['content'] = $values;
            }
            if ($object->isInitialized('displayValues') && null !== $object->getDisplayValues()) {
                $data['displayValues'] = $object->getDisplayValues();
            }
            if ($object->isInitialized('brokenReferenceIds') && null !== $object->getBrokenReferenceIds()) {
                $values_1 = [];
                foreach ($object->getBrokenReferenceIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['brokenReferenceIds'] = $values_1;
            }
            if ($object->isInitialized('brokenRelationTargetIds') && null !== $object->getBrokenRelationTargetIds()) {
                $values_2 = [];
                foreach ($object->getBrokenRelationTargetIds() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['brokenRelationTargetIds'] = $values_2;
            }
            if ($object->isInitialized('brokenIndirectReferenceIds') && null !== $object->getBrokenIndirectReferenceIds()) {
                $values_3 = [];
                foreach ($object->getBrokenIndirectReferenceIds() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['brokenIndirectReferenceIds'] = $values_3;
            }
            if ($object->isInitialized('audit') && null !== $object->getAudit()) {
                $data['audit'] = $object->getAudit();
            }
            if ($object->isInitialized('activity') && null !== $object->getActivity()) {
                $data['activity'] = $object->getActivity();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ListItemDetail' => false];
        }
    }
}