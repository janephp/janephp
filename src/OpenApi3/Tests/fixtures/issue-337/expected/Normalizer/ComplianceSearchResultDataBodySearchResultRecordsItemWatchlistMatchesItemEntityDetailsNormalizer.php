<?php

namespace CreditSafe\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additionalInfo', $data)) {
            $values = array();
            foreach ($data['additionalInfo'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAdditionalInfoItem', 'json', $context);
            }
            $object->setAdditionalInfo($values);
        }
        if (\array_key_exists('addresses', $data)) {
            $values_1 = array();
            foreach ($data['addresses'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem', 'json', $context);
            }
            $object->setAddresses($values_1);
        }
        if (\array_key_exists('akAs', $data)) {
            $values_2 = array();
            foreach ($data['akAs'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItem', 'json', $context);
            }
            $object->setAkAs($values_2);
        }
        if (\array_key_exists('comments', $data)) {
            $object->setComments($data['comments']);
        }
        if (\array_key_exists('dateListed', $data)) {
            $object->setDateListed($data['dateListed']);
        }
        if (\array_key_exists('entityType', $data)) {
            $object->setEntityType($data['entityType']);
        }
        if (\array_key_exists('iDs', $data)) {
            $values_3 = array();
            foreach ($data['iDs'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsIDsItem', 'json', $context);
            }
            $object->setIDs($values_3);
        }
        if (\array_key_exists('listReferenceNumber', $data)) {
            $object->setListReferenceNumber($data['listReferenceNumber']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($this->denormalizer->denormalize($data['name'], 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsName', 'json', $context));
        }
        if (\array_key_exists('reasonListed', $data)) {
            $object->setReasonListed($data['reasonListed']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdditionalInfo()) {
            $values = array();
            foreach ($object->getAdditionalInfo() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['additionalInfo'] = $values;
        }
        if (null !== $object->getAddresses()) {
            $values_1 = array();
            foreach ($object->getAddresses() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['addresses'] = $values_1;
        }
        if (null !== $object->getAkAs()) {
            $values_2 = array();
            foreach ($object->getAkAs() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['akAs'] = $values_2;
        }
        if (null !== $object->getComments()) {
            $data['comments'] = $object->getComments();
        }
        if (null !== $object->getDateListed()) {
            $data['dateListed'] = $object->getDateListed();
        }
        if (null !== $object->getEntityType()) {
            $data['entityType'] = $object->getEntityType();
        }
        if (null !== $object->getIDs()) {
            $values_3 = array();
            foreach ($object->getIDs() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['iDs'] = $values_3;
        }
        if (null !== $object->getListReferenceNumber()) {
            $data['listReferenceNumber'] = $object->getListReferenceNumber();
        }
        if (null !== $object->getName()) {
            $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
        }
        if (null !== $object->getReasonListed()) {
            $data['reasonListed'] = $object->getReasonListed();
        }
        return $data;
    }
}