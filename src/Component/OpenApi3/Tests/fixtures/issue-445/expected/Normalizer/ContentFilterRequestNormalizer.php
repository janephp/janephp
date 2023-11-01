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
    class ContentFilterRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ContentFilterRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentFilterRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ContentFilterRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('channelId', $data) && $data['channelId'] !== null) {
                $object->setChannelId($data['channelId']);
            }
            elseif (\array_key_exists('channelId', $data) && $data['channelId'] === null) {
                $object->setChannelId(null);
            }
            if (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] !== null) {
                $values = [];
                foreach ($data['searchLanguages'] as $value) {
                    $values[] = $value;
                }
                $object->setSearchLanguages($values);
            }
            elseif (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] === null) {
                $object->setSearchLanguages(null);
            }
            if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
                $object->setSearchString($data['searchString']);
            }
            elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
                $object->setSearchString(null);
            }
            if (\array_key_exists('searchType', $data)) {
                $object->setSearchType($data['searchType']);
            }
            if (\array_key_exists('collectionId', $data) && $data['collectionId'] !== null) {
                $object->setCollectionId($data['collectionId']);
            }
            elseif (\array_key_exists('collectionId', $data) && $data['collectionId'] === null) {
                $object->setCollectionId(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('lifeCycleFilter', $data)) {
                $object->setLifeCycleFilter($data['lifeCycleFilter']);
            }
            if (\array_key_exists('brokenDependenciesFilter', $data)) {
                $object->setBrokenDependenciesFilter($data['brokenDependenciesFilter']);
            }
            if (\array_key_exists('rightsFilter', $data) && $data['rightsFilter'] !== null) {
                $values_1 = [];
                foreach ($data['rightsFilter'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRightsFilter($values_1);
            }
            elseif (\array_key_exists('rightsFilter', $data) && $data['rightsFilter'] === null) {
                $object->setRightsFilter(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('channelId') && null !== $object->getChannelId()) {
                $data['channelId'] = $object->getChannelId();
            }
            if ($object->isInitialized('searchLanguages') && null !== $object->getSearchLanguages()) {
                $values = [];
                foreach ($object->getSearchLanguages() as $value) {
                    $values[] = $value;
                }
                $data['searchLanguages'] = $values;
            }
            if ($object->isInitialized('searchString') && null !== $object->getSearchString()) {
                $data['searchString'] = $object->getSearchString();
            }
            $data['searchType'] = $object->getSearchType();
            if ($object->isInitialized('collectionId') && null !== $object->getCollectionId()) {
                $data['collectionId'] = $object->getCollectionId();
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            $data['lifeCycleFilter'] = $object->getLifeCycleFilter();
            $data['brokenDependenciesFilter'] = $object->getBrokenDependenciesFilter();
            if ($object->isInitialized('rightsFilter') && null !== $object->getRightsFilter()) {
                $values_1 = [];
                foreach ($object->getRightsFilter() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['rightsFilter'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ContentFilterRequest' => false];
        }
    }
} else {
    class ContentFilterRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ContentFilterRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentFilterRequest';
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
            $object = new \PicturePark\API\Model\ContentFilterRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('channelId', $data) && $data['channelId'] !== null) {
                $object->setChannelId($data['channelId']);
            }
            elseif (\array_key_exists('channelId', $data) && $data['channelId'] === null) {
                $object->setChannelId(null);
            }
            if (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] !== null) {
                $values = [];
                foreach ($data['searchLanguages'] as $value) {
                    $values[] = $value;
                }
                $object->setSearchLanguages($values);
            }
            elseif (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] === null) {
                $object->setSearchLanguages(null);
            }
            if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
                $object->setSearchString($data['searchString']);
            }
            elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
                $object->setSearchString(null);
            }
            if (\array_key_exists('searchType', $data)) {
                $object->setSearchType($data['searchType']);
            }
            if (\array_key_exists('collectionId', $data) && $data['collectionId'] !== null) {
                $object->setCollectionId($data['collectionId']);
            }
            elseif (\array_key_exists('collectionId', $data) && $data['collectionId'] === null) {
                $object->setCollectionId(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('lifeCycleFilter', $data)) {
                $object->setLifeCycleFilter($data['lifeCycleFilter']);
            }
            if (\array_key_exists('brokenDependenciesFilter', $data)) {
                $object->setBrokenDependenciesFilter($data['brokenDependenciesFilter']);
            }
            if (\array_key_exists('rightsFilter', $data) && $data['rightsFilter'] !== null) {
                $values_1 = [];
                foreach ($data['rightsFilter'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRightsFilter($values_1);
            }
            elseif (\array_key_exists('rightsFilter', $data) && $data['rightsFilter'] === null) {
                $object->setRightsFilter(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('channelId') && null !== $object->getChannelId()) {
                $data['channelId'] = $object->getChannelId();
            }
            if ($object->isInitialized('searchLanguages') && null !== $object->getSearchLanguages()) {
                $values = [];
                foreach ($object->getSearchLanguages() as $value) {
                    $values[] = $value;
                }
                $data['searchLanguages'] = $values;
            }
            if ($object->isInitialized('searchString') && null !== $object->getSearchString()) {
                $data['searchString'] = $object->getSearchString();
            }
            $data['searchType'] = $object->getSearchType();
            if ($object->isInitialized('collectionId') && null !== $object->getCollectionId()) {
                $data['collectionId'] = $object->getCollectionId();
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            $data['lifeCycleFilter'] = $object->getLifeCycleFilter();
            $data['brokenDependenciesFilter'] = $object->getBrokenDependenciesFilter();
            if ($object->isInitialized('rightsFilter') && null !== $object->getRightsFilter()) {
                $values_1 = [];
                foreach ($object->getRightsFilter() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['rightsFilter'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ContentFilterRequest' => false];
        }
    }
}