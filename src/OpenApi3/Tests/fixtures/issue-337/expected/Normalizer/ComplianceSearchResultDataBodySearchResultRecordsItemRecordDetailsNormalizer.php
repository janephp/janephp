<?php

namespace CreditSafe\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('acceptListID', $data)) {
            $object->setAcceptListID($data['acceptListID']);
        }
        if (\array_key_exists('addedToAcceptList', $data)) {
            $object->setAddedToAcceptList($data['addedToAcceptList']);
        }
        if (\array_key_exists('division', $data)) {
            $object->setDivision($data['division']);
        }
        if (\array_key_exists('dppa', $data)) {
            $object->setDppa($data['dppa']);
        }
        if (\array_key_exists('eftType', $data)) {
            $object->setEftType($data['eftType']);
        }
        if (\array_key_exists('entityType', $data)) {
            $object->setEntityType($data['entityType']);
        }
        if (\array_key_exists('gender', $data)) {
            $object->setGender($data['gender']);
        }
        if (\array_key_exists('glb', $data)) {
            $object->setGlb($data['glb']);
        }
        if (\array_key_exists('iDs', $data)) {
            $values = array();
            foreach ($data['iDs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsIDsItem', 'json', $context);
            }
            $object->setIDs($values);
        }
        if (\array_key_exists('lastUpdatedDate', $data)) {
            $object->setLastUpdatedDate($data['lastUpdatedDate']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($this->denormalizer->denormalize($data['name'], 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsName', 'json', $context));
        }
        if (\array_key_exists('recordState', $data)) {
            $object->setRecordState($this->denormalizer->denormalize($data['recordState'], 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState', 'json', $context));
        }
        if (\array_key_exists('searchDate', $data)) {
            $object->setSearchDate($data['searchDate']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAcceptListID()) {
            $data['acceptListID'] = $object->getAcceptListID();
        }
        if (null !== $object->getAddedToAcceptList()) {
            $data['addedToAcceptList'] = $object->getAddedToAcceptList();
        }
        if (null !== $object->getDivision()) {
            $data['division'] = $object->getDivision();
        }
        if (null !== $object->getDppa()) {
            $data['dppa'] = $object->getDppa();
        }
        if (null !== $object->getEftType()) {
            $data['eftType'] = $object->getEftType();
        }
        if (null !== $object->getEntityType()) {
            $data['entityType'] = $object->getEntityType();
        }
        if (null !== $object->getGender()) {
            $data['gender'] = $object->getGender();
        }
        if (null !== $object->getGlb()) {
            $data['glb'] = $object->getGlb();
        }
        if (null !== $object->getIDs()) {
            $values = array();
            foreach ($object->getIDs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['iDs'] = $values;
        }
        if (null !== $object->getLastUpdatedDate()) {
            $data['lastUpdatedDate'] = $object->getLastUpdatedDate();
        }
        if (null !== $object->getName()) {
            $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
        }
        if (null !== $object->getRecordState()) {
            $data['recordState'] = $this->normalizer->normalize($object->getRecordState(), 'json', $context);
        }
        if (null !== $object->getSearchDate()) {
            $data['searchDate'] = $object->getSearchDate();
        }
        return $data;
    }
}