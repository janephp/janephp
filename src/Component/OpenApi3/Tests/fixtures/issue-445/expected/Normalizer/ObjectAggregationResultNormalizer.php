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
    class ObjectAggregationResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ObjectAggregationResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ObjectAggregationResult';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ObjectAggregationResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('elapsedMilliseconds', $data)) {
                $object->setElapsedMilliseconds($data['elapsedMilliseconds']);
            }
            if (\array_key_exists('aggregationResults', $data)) {
                $values = [];
                foreach ($data['aggregationResults'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\AggregationResult', 'json', $context);
                }
                $object->setAggregationResults($values);
            }
            if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
                $object->setSearchString($data['searchString']);
            }
            elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
                $object->setSearchString(null);
            }
            if (\array_key_exists('isSearchStringRewritten', $data)) {
                $object->setIsSearchStringRewritten($data['isSearchStringRewritten']);
            }
            if (\array_key_exists('queryDebugInformation', $data) && $data['queryDebugInformation'] !== null) {
                $values_1 = [];
                foreach ($data['queryDebugInformation'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\QueryDebugInformation', 'json', $context);
                }
                $object->setQueryDebugInformation($values_1);
            }
            elseif (\array_key_exists('queryDebugInformation', $data) && $data['queryDebugInformation'] === null) {
                $object->setQueryDebugInformation(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['elapsedMilliseconds'] = $object->getElapsedMilliseconds();
            $values = [];
            foreach ($object->getAggregationResults() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['aggregationResults'] = $values;
            if ($object->isInitialized('searchString') && null !== $object->getSearchString()) {
                $data['searchString'] = $object->getSearchString();
            }
            $data['isSearchStringRewritten'] = $object->getIsSearchStringRewritten();
            if ($object->isInitialized('queryDebugInformation') && null !== $object->getQueryDebugInformation()) {
                $values_1 = [];
                foreach ($object->getQueryDebugInformation() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['queryDebugInformation'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ObjectAggregationResult' => false];
        }
    }
} else {
    class ObjectAggregationResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ObjectAggregationResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ObjectAggregationResult';
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
            $object = new \PicturePark\API\Model\ObjectAggregationResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('elapsedMilliseconds', $data)) {
                $object->setElapsedMilliseconds($data['elapsedMilliseconds']);
            }
            if (\array_key_exists('aggregationResults', $data)) {
                $values = [];
                foreach ($data['aggregationResults'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\AggregationResult', 'json', $context);
                }
                $object->setAggregationResults($values);
            }
            if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
                $object->setSearchString($data['searchString']);
            }
            elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
                $object->setSearchString(null);
            }
            if (\array_key_exists('isSearchStringRewritten', $data)) {
                $object->setIsSearchStringRewritten($data['isSearchStringRewritten']);
            }
            if (\array_key_exists('queryDebugInformation', $data) && $data['queryDebugInformation'] !== null) {
                $values_1 = [];
                foreach ($data['queryDebugInformation'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\QueryDebugInformation', 'json', $context);
                }
                $object->setQueryDebugInformation($values_1);
            }
            elseif (\array_key_exists('queryDebugInformation', $data) && $data['queryDebugInformation'] === null) {
                $object->setQueryDebugInformation(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['elapsedMilliseconds'] = $object->getElapsedMilliseconds();
            $values = [];
            foreach ($object->getAggregationResults() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['aggregationResults'] = $values;
            if ($object->isInitialized('searchString') && null !== $object->getSearchString()) {
                $data['searchString'] = $object->getSearchString();
            }
            $data['isSearchStringRewritten'] = $object->getIsSearchStringRewritten();
            if ($object->isInitialized('queryDebugInformation') && null !== $object->getQueryDebugInformation()) {
                $values_1 = [];
                foreach ($object->getQueryDebugInformation() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['queryDebugInformation'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ObjectAggregationResult' => false];
        }
    }
}