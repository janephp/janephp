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
class CompletedFreshInvestigationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\CompletedFreshInvestigation';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\CompletedFreshInvestigation';
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
        $object = new \CreditSafe\API\Model\CompletedFreshInvestigation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('chargeReference', $data)) {
            $object->setChargeReference($data['chargeReference']);
        }
        if (\array_key_exists('contactDetails', $data)) {
            $object->setContactDetails($this->denormalizer->denormalize($data['contactDetails'], 'CreditSafe\\API\\Model\\CompletedFreshInvestigationContactDetails', 'json', $context));
        }
        if (\array_key_exists('creationDate', $data)) {
            $object->setCreationDate($data['creationDate']);
        }
        if (\array_key_exists('lastStatusChangeDate', $data)) {
            $object->setLastStatusChangeDate($data['lastStatusChangeDate']);
        }
        if (\array_key_exists('orderID', $data)) {
            $object->setOrderID($data['orderID']);
        }
        if (\array_key_exists('reportDate', $data)) {
            $object->setReportDate($data['reportDate']);
        }
        if (\array_key_exists('searchCriteria', $data)) {
            $object->setSearchCriteria($this->denormalizer->denormalize($data['searchCriteria'], 'CreditSafe\\API\\Model\\CompletedFreshInvestigationSearchCriteria', 'json', $context));
        }
        if (\array_key_exists('sections', $data)) {
            $values = array();
            foreach ($data['sections'] as $value) {
                $values[] = $value;
            }
            $object->setSections($values);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['status'], 'CreditSafe\\API\\Model\\CompletedFreshInvestigationStatus', 'json', $context));
        }
        if (\array_key_exists('transactionID', $data)) {
            $object->setTransactionID($data['transactionID']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getChargeReference()) {
            $data['chargeReference'] = $object->getChargeReference();
        }
        if (null !== $object->getContactDetails()) {
            $data['contactDetails'] = $this->normalizer->normalize($object->getContactDetails(), 'json', $context);
        }
        if (null !== $object->getCreationDate()) {
            $data['creationDate'] = $object->getCreationDate();
        }
        if (null !== $object->getLastStatusChangeDate()) {
            $data['lastStatusChangeDate'] = $object->getLastStatusChangeDate();
        }
        if (null !== $object->getOrderID()) {
            $data['orderID'] = $object->getOrderID();
        }
        if (null !== $object->getReportDate()) {
            $data['reportDate'] = $object->getReportDate();
        }
        if (null !== $object->getSearchCriteria()) {
            $data['searchCriteria'] = $this->normalizer->normalize($object->getSearchCriteria(), 'json', $context);
        }
        if (null !== $object->getSections()) {
            $values = array();
            foreach ($object->getSections() as $value) {
                $values[] = $value;
            }
            $data['sections'] = $values;
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if (null !== $object->getTransactionID()) {
            $data['transactionID'] = $object->getTransactionID();
        }
        return $data;
    }
}