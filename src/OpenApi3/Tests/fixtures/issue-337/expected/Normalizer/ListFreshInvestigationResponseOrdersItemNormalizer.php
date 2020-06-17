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
class ListFreshInvestigationResponseOrdersItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\ListFreshInvestigationResponseOrdersItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ListFreshInvestigationResponseOrdersItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItem();
        if (\array_key_exists('orderID', $data)) {
            $object->setOrderID($data['orderID']);
        }
        if (\array_key_exists('userID', $data)) {
            $object->setUserID($data['userID']);
        }
        if (\array_key_exists('creationDate', $data)) {
            $object->setCreationDate($data['creationDate']);
        }
        if (\array_key_exists('lastStatusChangeDate', $data)) {
            $object->setLastStatusChangeDate($data['lastStatusChangeDate']);
        }
        if (\array_key_exists('transactionID', $data)) {
            $object->setTransactionID($data['transactionID']);
        }
        if (\array_key_exists('chargeReference', $data)) {
            $object->setChargeReference($data['chargeReference']);
        }
        if (\array_key_exists('contactDetails', $data)) {
            $object->setContactDetails($this->denormalizer->denormalize($data['contactDetails'], 'CreditSafe\\API\\Model\\ListFreshInvestigationResponseOrdersItemContactDetails', 'json', $context));
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['status'], 'CreditSafe\\API\\Model\\ListFreshInvestigationResponseOrdersItemStatus', 'json', $context));
        }
        if (\array_key_exists('consent', $data)) {
            $object->setConsent($data['consent']);
        }
        if (\array_key_exists('searchCriteria', $data)) {
            $object->setSearchCriteria($this->denormalizer->denormalize($data['searchCriteria'], 'CreditSafe\\API\\Model\\ListFreshInvestigationResponseOrdersItemSearchCriteria', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getOrderID()) {
            $data['orderID'] = $object->getOrderID();
        }
        if (null !== $object->getUserID()) {
            $data['userID'] = $object->getUserID();
        }
        if (null !== $object->getCreationDate()) {
            $data['creationDate'] = $object->getCreationDate();
        }
        if (null !== $object->getLastStatusChangeDate()) {
            $data['lastStatusChangeDate'] = $object->getLastStatusChangeDate();
        }
        if (null !== $object->getTransactionID()) {
            $data['transactionID'] = $object->getTransactionID();
        }
        if (null !== $object->getChargeReference()) {
            $data['chargeReference'] = $object->getChargeReference();
        }
        if (null !== $object->getContactDetails()) {
            $data['contactDetails'] = $this->normalizer->normalize($object->getContactDetails(), 'json', $context);
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if (null !== $object->getConsent()) {
            $data['consent'] = $object->getConsent();
        }
        if (null !== $object->getSearchCriteria()) {
            $data['searchCriteria'] = $this->normalizer->normalize($object->getSearchCriteria(), 'json', $context);
        }
        return $data;
    }
}