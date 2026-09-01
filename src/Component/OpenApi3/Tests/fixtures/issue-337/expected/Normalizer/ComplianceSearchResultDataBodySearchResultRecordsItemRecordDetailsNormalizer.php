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
class ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('addedToAcceptList', $data) && \is_int($data['addedToAcceptList'])) {
            $data['addedToAcceptList'] = (bool) $data['addedToAcceptList'];
        }
        if (\array_key_exists('acceptListID', $data)) {
            $object->acceptListID = $data['acceptListID'];
            unset($data['acceptListID']);
        }
        if (\array_key_exists('addedToAcceptList', $data)) {
            $object->addedToAcceptList = $data['addedToAcceptList'];
            unset($data['addedToAcceptList']);
        }
        if (\array_key_exists('division', $data)) {
            $object->division = $data['division'];
            unset($data['division']);
        }
        if (\array_key_exists('dppa', $data)) {
            $object->dppa = $data['dppa'];
            unset($data['dppa']);
        }
        if (\array_key_exists('eftType', $data)) {
            $object->eftType = $data['eftType'];
            unset($data['eftType']);
        }
        if (\array_key_exists('entityType', $data)) {
            $object->entityType = $data['entityType'];
            unset($data['entityType']);
        }
        if (\array_key_exists('gender', $data)) {
            $object->gender = $data['gender'];
            unset($data['gender']);
        }
        if (\array_key_exists('glb', $data)) {
            $object->glb = $data['glb'];
            unset($data['glb']);
        }
        if (\array_key_exists('iDs', $data)) {
            $values = [];
            foreach ($data['iDs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsIDsItem::class, 'json', $context);
            }
            $object->iDs = $values;
            unset($data['iDs']);
        }
        if (\array_key_exists('lastUpdatedDate', $data)) {
            $object->lastUpdatedDate = $data['lastUpdatedDate'];
            unset($data['lastUpdatedDate']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $this->denormalizer->denormalize($data['name'], \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsName::class, 'json', $context);
            unset($data['name']);
        }
        if (\array_key_exists('recordState', $data)) {
            $object->recordState = $this->denormalizer->denormalize($data['recordState'], \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState::class, 'json', $context);
            unset($data['recordState']);
        }
        if (\array_key_exists('searchDate', $data)) {
            $object->searchDate = $data['searchDate'];
            unset($data['searchDate']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('acceptListID', get_object_vars($data)) && null !== ($data->acceptListID ?? null)) {
            $dataArray['acceptListID'] = $data->acceptListID ?? null;
        }
        if (array_key_exists('addedToAcceptList', get_object_vars($data)) && null !== ($data->addedToAcceptList ?? null)) {
            $dataArray['addedToAcceptList'] = $data->addedToAcceptList ?? null;
        }
        if (array_key_exists('division', get_object_vars($data)) && null !== ($data->division ?? null)) {
            $dataArray['division'] = $data->division ?? null;
        }
        if (array_key_exists('dppa', get_object_vars($data)) && null !== ($data->dppa ?? null)) {
            $dataArray['dppa'] = $data->dppa ?? null;
        }
        if (array_key_exists('eftType', get_object_vars($data)) && null !== ($data->eftType ?? null)) {
            $dataArray['eftType'] = $data->eftType ?? null;
        }
        if (array_key_exists('entityType', get_object_vars($data)) && null !== ($data->entityType ?? null)) {
            $dataArray['entityType'] = $data->entityType ?? null;
        }
        if (array_key_exists('gender', get_object_vars($data)) && null !== ($data->gender ?? null)) {
            $dataArray['gender'] = $data->gender ?? null;
        }
        if (array_key_exists('glb', get_object_vars($data)) && null !== ($data->glb ?? null)) {
            $dataArray['glb'] = $data->glb ?? null;
        }
        if (array_key_exists('iDs', get_object_vars($data)) && null !== ($data->iDs ?? null)) {
            $values = [];
            foreach ($data->iDs ?? null as $value) {
                $values[] = $value === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['iDs'] = $values;
        }
        if (array_key_exists('lastUpdatedDate', get_object_vars($data)) && null !== ($data->lastUpdatedDate ?? null)) {
            $dataArray['lastUpdatedDate'] = $data->lastUpdatedDate ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = ($data->name ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->name ?? null, 'json', $context));
        }
        if (array_key_exists('recordState', get_object_vars($data)) && null !== ($data->recordState ?? null)) {
            $dataArray['recordState'] = ($data->recordState ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->recordState ?? null, 'json', $context));
        }
        if (array_key_exists('searchDate', get_object_vars($data)) && null !== ($data->searchDate ?? null)) {
            $dataArray['searchDate'] = $data->searchDate ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails::class => false];
    }
}