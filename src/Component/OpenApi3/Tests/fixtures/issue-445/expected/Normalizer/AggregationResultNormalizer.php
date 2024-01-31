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
    class AggregationResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\AggregationResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\AggregationResult';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\AggregationResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('sumOtherDocCount', $data) && $data['sumOtherDocCount'] !== null) {
                $object->setSumOtherDocCount($data['sumOtherDocCount']);
            }
            elseif (\array_key_exists('sumOtherDocCount', $data) && $data['sumOtherDocCount'] === null) {
                $object->setSumOtherDocCount(null);
            }
            if (\array_key_exists('aggregationResultItems', $data) && $data['aggregationResultItems'] !== null) {
                $values = [];
                foreach ($data['aggregationResultItems'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\AggregationResultItem', 'json', $context);
                }
                $object->setAggregationResultItems($values);
            }
            elseif (\array_key_exists('aggregationResultItems', $data) && $data['aggregationResultItems'] === null) {
                $object->setAggregationResultItems(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['name'] = $object->getName();
            if ($object->isInitialized('sumOtherDocCount') && null !== $object->getSumOtherDocCount()) {
                $data['sumOtherDocCount'] = $object->getSumOtherDocCount();
            }
            if ($object->isInitialized('aggregationResultItems') && null !== $object->getAggregationResultItems()) {
                $values = [];
                foreach ($object->getAggregationResultItems() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['aggregationResultItems'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\AggregationResult' => false];
        }
    }
} else {
    class AggregationResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\AggregationResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\AggregationResult';
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
            $object = new \PicturePark\API\Model\AggregationResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('sumOtherDocCount', $data) && $data['sumOtherDocCount'] !== null) {
                $object->setSumOtherDocCount($data['sumOtherDocCount']);
            }
            elseif (\array_key_exists('sumOtherDocCount', $data) && $data['sumOtherDocCount'] === null) {
                $object->setSumOtherDocCount(null);
            }
            if (\array_key_exists('aggregationResultItems', $data) && $data['aggregationResultItems'] !== null) {
                $values = [];
                foreach ($data['aggregationResultItems'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\AggregationResultItem', 'json', $context);
                }
                $object->setAggregationResultItems($values);
            }
            elseif (\array_key_exists('aggregationResultItems', $data) && $data['aggregationResultItems'] === null) {
                $object->setAggregationResultItems(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['name'] = $object->getName();
            if ($object->isInitialized('sumOtherDocCount') && null !== $object->getSumOtherDocCount()) {
                $data['sumOtherDocCount'] = $object->getSumOtherDocCount();
            }
            if ($object->isInitialized('aggregationResultItems') && null !== $object->getAggregationResultItems()) {
                $values = [];
                foreach ($object->getAggregationResultItems() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['aggregationResultItems'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\AggregationResult' => false];
        }
    }
}