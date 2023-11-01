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
    class SearchBehaviorBaseResultOfContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\SearchBehaviorBaseResultOfContent';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SearchBehaviorBaseResultOfContent';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\SearchBehaviorBaseResultOfContent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('totalResults', $data)) {
                $object->setTotalResults($data['totalResults']);
                unset($data['totalResults']);
            }
            if (\array_key_exists('results', $data)) {
                $values = [];
                foreach ($data['results'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\Content', 'json', $context);
                }
                $object->setResults($values);
                unset($data['results']);
            }
            if (\array_key_exists('elapsedMilliseconds', $data)) {
                $object->setElapsedMilliseconds($data['elapsedMilliseconds']);
                unset($data['elapsedMilliseconds']);
            }
            if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
                $object->setPageToken($data['pageToken']);
                unset($data['pageToken']);
            }
            elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
                $object->setPageToken(null);
            }
            if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
                $object->setSearchString($data['searchString']);
                unset($data['searchString']);
            }
            elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
                $object->setSearchString(null);
            }
            if (\array_key_exists('isSearchStringRewritten', $data)) {
                $object->setIsSearchStringRewritten($data['isSearchStringRewritten']);
                unset($data['isSearchStringRewritten']);
            }
            if (\array_key_exists('queryDebugInformation', $data) && $data['queryDebugInformation'] !== null) {
                $values_1 = [];
                foreach ($data['queryDebugInformation'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\QueryDebugInformation', 'json', $context);
                }
                $object->setQueryDebugInformation($values_1);
                unset($data['queryDebugInformation']);
            }
            elseif (\array_key_exists('queryDebugInformation', $data) && $data['queryDebugInformation'] === null) {
                $object->setQueryDebugInformation(null);
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
            $data['totalResults'] = $object->getTotalResults();
            $values = [];
            foreach ($object->getResults() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['results'] = $values;
            $data['elapsedMilliseconds'] = $object->getElapsedMilliseconds();
            if ($object->isInitialized('pageToken') && null !== $object->getPageToken()) {
                $data['pageToken'] = $object->getPageToken();
            }
            if ($object->isInitialized('searchString') && null !== $object->getSearchString()) {
                $data['searchString'] = $object->getSearchString();
            }
            if ($object->isInitialized('isSearchStringRewritten') && null !== $object->getIsSearchStringRewritten()) {
                $data['isSearchStringRewritten'] = $object->getIsSearchStringRewritten();
            }
            if ($object->isInitialized('queryDebugInformation') && null !== $object->getQueryDebugInformation()) {
                $values_1 = [];
                foreach ($object->getQueryDebugInformation() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['queryDebugInformation'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\SearchBehaviorBaseResultOfContent' => false];
        }
    }
} else {
    class SearchBehaviorBaseResultOfContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\SearchBehaviorBaseResultOfContent';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SearchBehaviorBaseResultOfContent';
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
            $object = new \PicturePark\API\Model\SearchBehaviorBaseResultOfContent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('totalResults', $data)) {
                $object->setTotalResults($data['totalResults']);
                unset($data['totalResults']);
            }
            if (\array_key_exists('results', $data)) {
                $values = [];
                foreach ($data['results'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\Content', 'json', $context);
                }
                $object->setResults($values);
                unset($data['results']);
            }
            if (\array_key_exists('elapsedMilliseconds', $data)) {
                $object->setElapsedMilliseconds($data['elapsedMilliseconds']);
                unset($data['elapsedMilliseconds']);
            }
            if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
                $object->setPageToken($data['pageToken']);
                unset($data['pageToken']);
            }
            elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
                $object->setPageToken(null);
            }
            if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
                $object->setSearchString($data['searchString']);
                unset($data['searchString']);
            }
            elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
                $object->setSearchString(null);
            }
            if (\array_key_exists('isSearchStringRewritten', $data)) {
                $object->setIsSearchStringRewritten($data['isSearchStringRewritten']);
                unset($data['isSearchStringRewritten']);
            }
            if (\array_key_exists('queryDebugInformation', $data) && $data['queryDebugInformation'] !== null) {
                $values_1 = [];
                foreach ($data['queryDebugInformation'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\QueryDebugInformation', 'json', $context);
                }
                $object->setQueryDebugInformation($values_1);
                unset($data['queryDebugInformation']);
            }
            elseif (\array_key_exists('queryDebugInformation', $data) && $data['queryDebugInformation'] === null) {
                $object->setQueryDebugInformation(null);
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
            $data['totalResults'] = $object->getTotalResults();
            $values = [];
            foreach ($object->getResults() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['results'] = $values;
            $data['elapsedMilliseconds'] = $object->getElapsedMilliseconds();
            if ($object->isInitialized('pageToken') && null !== $object->getPageToken()) {
                $data['pageToken'] = $object->getPageToken();
            }
            if ($object->isInitialized('searchString') && null !== $object->getSearchString()) {
                $data['searchString'] = $object->getSearchString();
            }
            if ($object->isInitialized('isSearchStringRewritten') && null !== $object->getIsSearchStringRewritten()) {
                $data['isSearchStringRewritten'] = $object->getIsSearchStringRewritten();
            }
            if ($object->isInitialized('queryDebugInformation') && null !== $object->getQueryDebugInformation()) {
                $values_1 = [];
                foreach ($object->getQueryDebugInformation() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['queryDebugInformation'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\SearchBehaviorBaseResultOfContent' => false];
        }
    }
}