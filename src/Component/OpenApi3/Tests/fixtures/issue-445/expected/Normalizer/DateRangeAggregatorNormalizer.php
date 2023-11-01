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
    class DateRangeAggregatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\DateRangeAggregator';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DateRangeAggregator';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\DateRangeAggregator();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('names', $data) && $data['names'] !== null) {
                $object->setNames($data['names']);
                unset($data['names']);
            }
            elseif (\array_key_exists('names', $data) && $data['names'] === null) {
                $object->setNames(null);
            }
            if (\array_key_exists('aggregators', $data) && $data['aggregators'] !== null) {
                $values = [];
                foreach ($data['aggregators'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
                }
                $object->setAggregators($values);
                unset($data['aggregators']);
            }
            elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
                $object->setAggregators(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
                unset($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('field', $data)) {
                $object->setField($data['field']);
                unset($data['field']);
            }
            if (\array_key_exists('ranges', $data)) {
                $values_1 = [];
                foreach ($data['ranges'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\DateRangeForAggregator', 'json', $context);
                }
                $object->setRanges($values_1);
                unset($data['ranges']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['name'] = $object->getName();
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('aggregators') && null !== $object->getAggregators()) {
                $values = [];
                foreach ($object->getAggregators() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['aggregators'] = $values;
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            $data['kind'] = $object->getKind();
            $data['field'] = $object->getField();
            $values_1 = [];
            foreach ($object->getRanges() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['ranges'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\DateRangeAggregator' => false];
        }
    }
} else {
    class DateRangeAggregatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\DateRangeAggregator';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DateRangeAggregator';
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
            $object = new \PicturePark\API\Model\DateRangeAggregator();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('names', $data) && $data['names'] !== null) {
                $object->setNames($data['names']);
                unset($data['names']);
            }
            elseif (\array_key_exists('names', $data) && $data['names'] === null) {
                $object->setNames(null);
            }
            if (\array_key_exists('aggregators', $data) && $data['aggregators'] !== null) {
                $values = [];
                foreach ($data['aggregators'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
                }
                $object->setAggregators($values);
                unset($data['aggregators']);
            }
            elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
                $object->setAggregators(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
                unset($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('field', $data)) {
                $object->setField($data['field']);
                unset($data['field']);
            }
            if (\array_key_exists('ranges', $data)) {
                $values_1 = [];
                foreach ($data['ranges'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\DateRangeForAggregator', 'json', $context);
                }
                $object->setRanges($values_1);
                unset($data['ranges']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $data['name'] = $object->getName();
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $data['names'] = $object->getNames();
            }
            if ($object->isInitialized('aggregators') && null !== $object->getAggregators()) {
                $values = [];
                foreach ($object->getAggregators() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['aggregators'] = $values;
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            $data['kind'] = $object->getKind();
            $data['field'] = $object->getField();
            $values_1 = [];
            foreach ($object->getRanges() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['ranges'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\DateRangeAggregator' => false];
        }
    }
}