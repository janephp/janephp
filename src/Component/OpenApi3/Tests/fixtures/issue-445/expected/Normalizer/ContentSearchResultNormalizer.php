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
class ContentSearchResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ContentSearchResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentSearchResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\ContentSearchResult();
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
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\Content::class, 'json', $context);
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
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\QueryDebugInformation::class, 'json', $context);
            }
            $object->setQueryDebugInformation($values_1);
            unset($data['queryDebugInformation']);
        }
        elseif (\array_key_exists('queryDebugInformation', $data) && $data['queryDebugInformation'] === null) {
            $object->setQueryDebugInformation(null);
        }
        if (\array_key_exists('aggregationResults', $data) && $data['aggregationResults'] !== null) {
            $values_2 = [];
            foreach ($data['aggregationResults'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\AggregationResult::class, 'json', $context);
            }
            $object->setAggregationResults($values_2);
            unset($data['aggregationResults']);
        }
        elseif (\array_key_exists('aggregationResults', $data) && $data['aggregationResults'] === null) {
            $object->setAggregationResults(null);
        }
        if (\array_key_exists('rightsAggregationsCounts', $data) && $data['rightsAggregationsCounts'] !== null) {
            $values_3 = [];
            foreach ($data['rightsAggregationsCounts'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \PicturePark\API\Model\ContentRightAggregationCount::class, 'json', $context);
            }
            $object->setRightsAggregationsCounts($values_3);
            unset($data['rightsAggregationsCounts']);
        }
        elseif (\array_key_exists('rightsAggregationsCounts', $data) && $data['rightsAggregationsCounts'] === null) {
            $object->setRightsAggregationsCounts(null);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['totalResults'] = $data->getTotalResults();
        $values = [];
        foreach ($data->getResults() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['results'] = $values;
        $dataArray['elapsedMilliseconds'] = $data->getElapsedMilliseconds();
        if ($data->isInitialized('pageToken') && null !== $data->getPageToken()) {
            $dataArray['pageToken'] = $data->getPageToken();
        }
        if ($data->isInitialized('searchString') && null !== $data->getSearchString()) {
            $dataArray['searchString'] = $data->getSearchString();
        }
        if ($data->isInitialized('isSearchStringRewritten') && null !== $data->getIsSearchStringRewritten()) {
            $dataArray['isSearchStringRewritten'] = $data->getIsSearchStringRewritten();
        }
        if ($data->isInitialized('queryDebugInformation') && null !== $data->getQueryDebugInformation()) {
            $values_1 = [];
            foreach ($data->getQueryDebugInformation() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['queryDebugInformation'] = $values_1;
        }
        if ($data->isInitialized('aggregationResults') && null !== $data->getAggregationResults()) {
            $values_2 = [];
            foreach ($data->getAggregationResults() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['aggregationResults'] = $values_2;
        }
        if ($data->isInitialized('rightsAggregationsCounts') && null !== $data->getRightsAggregationsCounts()) {
            $values_3 = [];
            foreach ($data->getRightsAggregationsCounts() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['rightsAggregationsCounts'] = $values_3;
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ContentSearchResult::class => false];
    }
}