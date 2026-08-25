<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ContentFilterRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ContentFilterRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentFilterRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ContentFilterRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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
            $value_1 = $data['searchType'];
            if (is_string($data['searchType'])) {
                $value_1 = $data['searchType'];
            }
            $object->setSearchType($value_1);
        }
        if (\array_key_exists('collectionId', $data) && $data['collectionId'] !== null) {
            $object->setCollectionId($data['collectionId']);
        }
        elseif (\array_key_exists('collectionId', $data) && $data['collectionId'] === null) {
            $object->setCollectionId(null);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value_2 = $data['filter'];
            if (is_array($data['filter']) and \array_key_exists('kind', $data['filter'])) {
                $value_2 = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->setFilter($value_2);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
        }
        if (\array_key_exists('lifeCycleFilter', $data)) {
            $value_3 = $data['lifeCycleFilter'];
            if (is_string($data['lifeCycleFilter'])) {
                $value_3 = $data['lifeCycleFilter'];
            }
            $object->setLifeCycleFilter($value_3);
        }
        if (\array_key_exists('brokenDependenciesFilter', $data)) {
            $value_4 = $data['brokenDependenciesFilter'];
            if (is_string($data['brokenDependenciesFilter'])) {
                $value_4 = $data['brokenDependenciesFilter'];
            }
            $object->setBrokenDependenciesFilter($value_4);
        }
        if (\array_key_exists('rightsFilter', $data) && $data['rightsFilter'] !== null) {
            $values_1 = [];
            foreach ($data['rightsFilter'] as $value_5) {
                $values_1[] = $value_5;
            }
            $object->setRightsFilter($values_1);
        }
        elseif (\array_key_exists('rightsFilter', $data) && $data['rightsFilter'] === null) {
            $object->setRightsFilter(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('channelId') && null !== $data->getChannelId()) {
            $dataArray['channelId'] = $data->getChannelId();
        }
        if ($data->isInitialized('searchLanguages') && null !== $data->getSearchLanguages()) {
            $values = [];
            foreach ($data->getSearchLanguages() as $value) {
                $values[] = $value;
            }
            $dataArray['searchLanguages'] = $values;
        }
        if ($data->isInitialized('searchString') && null !== $data->getSearchString()) {
            $dataArray['searchString'] = $data->getSearchString();
        }
        $value_1 = $data->getSearchType();
        if (is_string($data->getSearchType())) {
            $value_1 = $data->getSearchType();
        }
        $dataArray['searchType'] = $value_1;
        if ($data->isInitialized('collectionId') && null !== $data->getCollectionId()) {
            $dataArray['collectionId'] = $data->getCollectionId();
        }
        if ($data->isInitialized('filter') && null !== $data->getFilter()) {
            $value_2 = $data->getFilter();
            if (is_object($data->getFilter())) {
                $value_2 = $data->getFilter() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getFilter(), 'json', $context));
            }
            $dataArray['filter'] = $value_2;
        }
        $value_3 = $data->getLifeCycleFilter();
        if (is_string($data->getLifeCycleFilter())) {
            $value_3 = $data->getLifeCycleFilter();
        }
        $dataArray['lifeCycleFilter'] = $value_3;
        $value_4 = $data->getBrokenDependenciesFilter();
        if (is_string($data->getBrokenDependenciesFilter())) {
            $value_4 = $data->getBrokenDependenciesFilter();
        }
        $dataArray['brokenDependenciesFilter'] = $value_4;
        if ($data->isInitialized('rightsFilter') && null !== $data->getRightsFilter()) {
            $values_1 = [];
            foreach ($data->getRightsFilter() as $value_5) {
                $values_1[] = $value_5;
            }
            $dataArray['rightsFilter'] = $values_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ContentFilterRequest::class => false];
    }
}