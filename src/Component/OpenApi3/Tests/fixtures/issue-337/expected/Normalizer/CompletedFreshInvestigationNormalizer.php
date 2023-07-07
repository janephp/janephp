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
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\CompletedFreshInvestigation';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
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
            unset($data['chargeReference']);
        }
        if (\array_key_exists('contactDetails', $data)) {
            $object->setContactDetails($this->denormalizer->denormalize($data['contactDetails'], 'CreditSafe\\API\\Model\\CompletedFreshInvestigationContactDetails', 'json', $context));
            unset($data['contactDetails']);
        }
        if (\array_key_exists('creationDate', $data)) {
            $object->setCreationDate($data['creationDate']);
            unset($data['creationDate']);
        }
        if (\array_key_exists('lastStatusChangeDate', $data)) {
            $object->setLastStatusChangeDate($data['lastStatusChangeDate']);
            unset($data['lastStatusChangeDate']);
        }
        if (\array_key_exists('orderID', $data)) {
            $object->setOrderID($data['orderID']);
            unset($data['orderID']);
        }
        if (\array_key_exists('reportDate', $data)) {
            $object->setReportDate($data['reportDate']);
            unset($data['reportDate']);
        }
        if (\array_key_exists('searchCriteria', $data)) {
            $object->setSearchCriteria($this->denormalizer->denormalize($data['searchCriteria'], 'CreditSafe\\API\\Model\\CompletedFreshInvestigationSearchCriteria', 'json', $context));
            unset($data['searchCriteria']);
        }
        if (\array_key_exists('sections', $data)) {
            $values = array();
            foreach ($data['sections'] as $value) {
                $values[] = $value;
            }
            $object->setSections($values);
            unset($data['sections']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['status'], 'CreditSafe\\API\\Model\\CompletedFreshInvestigationStatus', 'json', $context));
            unset($data['status']);
        }
        if (\array_key_exists('transactionID', $data)) {
            $object->setTransactionID($data['transactionID']);
            unset($data['transactionID']);
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
        if ($object->isInitialized('chargeReference') && null !== $object->getChargeReference()) {
            $data['chargeReference'] = $object->getChargeReference();
        }
        if ($object->isInitialized('contactDetails') && null !== $object->getContactDetails()) {
            $data['contactDetails'] = $this->normalizer->normalize($object->getContactDetails(), 'json', $context);
        }
        if ($object->isInitialized('creationDate') && null !== $object->getCreationDate()) {
            $data['creationDate'] = $object->getCreationDate();
        }
        if ($object->isInitialized('lastStatusChangeDate') && null !== $object->getLastStatusChangeDate()) {
            $data['lastStatusChangeDate'] = $object->getLastStatusChangeDate();
        }
        if ($object->isInitialized('orderID') && null !== $object->getOrderID()) {
            $data['orderID'] = $object->getOrderID();
        }
        if ($object->isInitialized('reportDate') && null !== $object->getReportDate()) {
            $data['reportDate'] = $object->getReportDate();
        }
        if ($object->isInitialized('searchCriteria') && null !== $object->getSearchCriteria()) {
            $data['searchCriteria'] = $this->normalizer->normalize($object->getSearchCriteria(), 'json', $context);
        }
        if ($object->isInitialized('sections') && null !== $object->getSections()) {
            $values = array();
            foreach ($object->getSections() as $value) {
                $values[] = $value;
            }
            $data['sections'] = $values;
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if ($object->isInitialized('transactionID') && null !== $object->getTransactionID()) {
            $data['transactionID'] = $object->getTransactionID();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('CreditSafe\\API\\Model\\CompletedFreshInvestigation' => false);
    }
}