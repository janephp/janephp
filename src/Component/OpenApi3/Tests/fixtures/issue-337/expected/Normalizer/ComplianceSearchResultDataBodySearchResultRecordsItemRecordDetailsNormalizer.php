<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails();
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
            $values = array();
            foreach ($data['iDs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsIDsItem', 'json', $context);
            }
            $object->setIDs($values);
            unset($data['iDs']);
        }
        if (\array_key_exists('lastUpdatedDate', $data)) {
            $object->setLastUpdatedDate($data['lastUpdatedDate']);
            unset($data['lastUpdatedDate']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($this->denormalizer->denormalize($data['name'], 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsName', 'json', $context));
            unset($data['name']);
        }
        if (\array_key_exists('recordState', $data)) {
            $object->setRecordState($this->denormalizer->denormalize($data['recordState'], 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState', 'json', $context));
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('acceptListID') && null !== $object->getAcceptListID()) {
            $data['acceptListID'] = $object->getAcceptListID();
        }
        if ($object->isInitialized('addedToAcceptList') && null !== $object->getAddedToAcceptList()) {
            $data['addedToAcceptList'] = $object->getAddedToAcceptList();
        }
        if ($object->isInitialized('division') && null !== $object->getDivision()) {
            $data['division'] = $object->getDivision();
        }
        if ($object->isInitialized('dppa') && null !== $object->getDppa()) {
            $data['dppa'] = $object->getDppa();
        }
        if ($object->isInitialized('eftType') && null !== $object->getEftType()) {
            $data['eftType'] = $object->getEftType();
        }
        if ($object->isInitialized('entityType') && null !== $object->getEntityType()) {
            $data['entityType'] = $object->getEntityType();
        }
        if ($object->isInitialized('gender') && null !== $object->getGender()) {
            $data['gender'] = $object->getGender();
        }
        if ($object->isInitialized('glb') && null !== $object->getGlb()) {
            $data['glb'] = $object->getGlb();
        }
        if ($object->isInitialized('iDs') && null !== $object->getIDs()) {
            $values = array();
            foreach ($object->getIDs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['iDs'] = $values;
        }
        if ($object->isInitialized('lastUpdatedDate') && null !== $object->getLastUpdatedDate()) {
            $data['lastUpdatedDate'] = $object->getLastUpdatedDate();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
        }
        if ($object->isInitialized('recordState') && null !== $object->getRecordState()) {
            $data['recordState'] = $this->normalizer->normalize($object->getRecordState(), 'json', $context);
        }
        if ($object->isInitialized('searchDate') && null !== $object->getSearchDate()) {
            $data['searchDate'] = $object->getSearchDate();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}