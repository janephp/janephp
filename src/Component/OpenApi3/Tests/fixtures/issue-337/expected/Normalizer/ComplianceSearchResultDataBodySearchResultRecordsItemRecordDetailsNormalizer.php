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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails();
        if (\array_key_exists('addedToAcceptList', $data) && \is_int($data['addedToAcceptList'])) {
            $data['addedToAcceptList'] = (bool) $data['addedToAcceptList'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('acceptListID', $data)) {
            $object->setAcceptListID($data['acceptListID']);
            unset($data['acceptListID']);
        }
        if (\array_key_exists('addedToAcceptList', $data)) {
            $object->setAddedToAcceptList($data['addedToAcceptList']);
            unset($data['addedToAcceptList']);
        }
        if (\array_key_exists('division', $data)) {
            $object->setDivision($data['division']);
            unset($data['division']);
        }
        if (\array_key_exists('dppa', $data)) {
            $object->setDppa($data['dppa']);
            unset($data['dppa']);
        }
        if (\array_key_exists('eftType', $data)) {
            $object->setEftType($data['eftType']);
            unset($data['eftType']);
        }
        if (\array_key_exists('entityType', $data)) {
            $object->setEntityType($data['entityType']);
            unset($data['entityType']);
        }
        if (\array_key_exists('gender', $data)) {
            $object->setGender($data['gender']);
            unset($data['gender']);
        }
        if (\array_key_exists('glb', $data)) {
            $object->setGlb($data['glb']);
            unset($data['glb']);
        }
        if (\array_key_exists('iDs', $data)) {
            $values = [];
            foreach ($data['iDs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsIDsItem::class, 'json', $context);
            }
            $object->setIDs($values);
            unset($data['iDs']);
        }
        if (\array_key_exists('lastUpdatedDate', $data)) {
            $object->setLastUpdatedDate($data['lastUpdatedDate']);
            unset($data['lastUpdatedDate']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($this->denormalizer->denormalize($data['name'], \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsName::class, 'json', $context));
            unset($data['name']);
        }
        if (\array_key_exists('recordState', $data)) {
            $object->setRecordState($this->denormalizer->denormalize($data['recordState'], \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState::class, 'json', $context));
            unset($data['recordState']);
        }
        if (\array_key_exists('searchDate', $data)) {
            $object->setSearchDate($data['searchDate']);
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
        if ($data->isInitialized('acceptListID') && null !== $data->getAcceptListID()) {
            $dataArray['acceptListID'] = $data->getAcceptListID();
        }
        if ($data->isInitialized('addedToAcceptList') && null !== $data->getAddedToAcceptList()) {
            $dataArray['addedToAcceptList'] = $data->getAddedToAcceptList();
        }
        if ($data->isInitialized('division') && null !== $data->getDivision()) {
            $dataArray['division'] = $data->getDivision();
        }
        if ($data->isInitialized('dppa') && null !== $data->getDppa()) {
            $dataArray['dppa'] = $data->getDppa();
        }
        if ($data->isInitialized('eftType') && null !== $data->getEftType()) {
            $dataArray['eftType'] = $data->getEftType();
        }
        if ($data->isInitialized('entityType') && null !== $data->getEntityType()) {
            $dataArray['entityType'] = $data->getEntityType();
        }
        if ($data->isInitialized('gender') && null !== $data->getGender()) {
            $dataArray['gender'] = $data->getGender();
        }
        if ($data->isInitialized('glb') && null !== $data->getGlb()) {
            $dataArray['glb'] = $data->getGlb();
        }
        if ($data->isInitialized('iDs') && null !== $data->getIDs()) {
            $values = [];
            foreach ($data->getIDs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['iDs'] = $values;
        }
        if ($data->isInitialized('lastUpdatedDate') && null !== $data->getLastUpdatedDate()) {
            $dataArray['lastUpdatedDate'] = $data->getLastUpdatedDate();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $this->normalizer->normalize($data->getName(), 'json', $context);
        }
        if ($data->isInitialized('recordState') && null !== $data->getRecordState()) {
            $dataArray['recordState'] = $this->normalizer->normalize($data->getRecordState(), 'json', $context);
        }
        if ($data->isInitialized('searchDate') && null !== $data->getSearchDate()) {
            $dataArray['searchDate'] = $data->getSearchDate();
        }
        foreach ($data as $key => $value_1) {
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