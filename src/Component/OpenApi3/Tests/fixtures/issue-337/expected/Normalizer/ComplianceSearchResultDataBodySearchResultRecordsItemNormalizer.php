<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ComplianceSearchResultDataBodySearchResultRecordsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('record', $data)) {
            $object->record = $data['record'];
            unset($data['record']);
        }
        if (\array_key_exists('recordDetails', $data)) {
            $object->recordDetails = $this->denormalizer->denormalize($data['recordDetails'], \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails::class, 'json', $context);
            unset($data['recordDetails']);
        }
        if (\array_key_exists('resultID', $data)) {
            $object->resultID = $data['resultID'];
            unset($data['resultID']);
        }
        if (\array_key_exists('runID', $data)) {
            $object->runID = $data['runID'];
            unset($data['runID']);
        }
        if (\array_key_exists('watchlist', $data)) {
            $object->watchlist = $this->denormalizer->denormalize($data['watchlist'], \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlist::class, 'json', $context);
            unset($data['watchlist']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('record', get_object_vars($data)) && null !== ($data->record ?? null)) {
            $dataArray['record'] = $data->record ?? null;
        }
        if (array_key_exists('recordDetails', get_object_vars($data)) && null !== ($data->recordDetails ?? null)) {
            $dataArray['recordDetails'] = ($data->recordDetails ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->recordDetails ?? null, 'json', $context));
        }
        if (array_key_exists('resultID', get_object_vars($data)) && null !== ($data->resultID ?? null)) {
            $dataArray['resultID'] = $data->resultID ?? null;
        }
        if (array_key_exists('runID', get_object_vars($data)) && null !== ($data->runID ?? null)) {
            $dataArray['runID'] = $data->runID ?? null;
        }
        if (array_key_exists('watchlist', get_object_vars($data)) && null !== ($data->watchlist ?? null)) {
            $dataArray['watchlist'] = ($data->watchlist ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->watchlist ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItem::class => false];
    }
}