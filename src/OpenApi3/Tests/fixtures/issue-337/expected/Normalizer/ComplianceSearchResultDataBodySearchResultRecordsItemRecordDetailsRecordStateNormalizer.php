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
class ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState();
        if (\array_key_exists('addedToAcceptList', $data)) {
            $object->setAddedToAcceptList($data['addedToAcceptList']);
        }
        if (\array_key_exists('alertState', $data)) {
            $object->setAlertState($data['alertState']);
        }
        if (\array_key_exists('assignedTo', $data)) {
            $values = array();
            foreach ($data['assignedTo'] as $value) {
                $values[] = $value;
            }
            $object->setAssignedTo($values);
        }
        if (\array_key_exists('assignmentType', $data)) {
            $object->setAssignmentType($data['assignmentType']);
        }
        if (\array_key_exists('division', $data)) {
            $object->setDivision($data['division']);
        }
        if (\array_key_exists('history', $data)) {
            $values_1 = array();
            foreach ($data['history'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItem', 'json', $context);
            }
            $object->setHistory($values_1);
        }
        if (\array_key_exists('matchStates', $data)) {
            $values_2 = array();
            foreach ($data['matchStates'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItem', 'json', $context);
            }
            $object->setMatchStates($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAddedToAcceptList()) {
            $data['addedToAcceptList'] = $object->getAddedToAcceptList();
        }
        if (null !== $object->getAlertState()) {
            $data['alertState'] = $object->getAlertState();
        }
        if (null !== $object->getAssignedTo()) {
            $values = array();
            foreach ($object->getAssignedTo() as $value) {
                $values[] = $value;
            }
            $data['assignedTo'] = $values;
        }
        if (null !== $object->getAssignmentType()) {
            $data['assignmentType'] = $object->getAssignmentType();
        }
        if (null !== $object->getDivision()) {
            $data['division'] = $object->getDivision();
        }
        if (null !== $object->getHistory()) {
            $values_1 = array();
            foreach ($object->getHistory() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['history'] = $values_1;
        }
        if (null !== $object->getMatchStates()) {
            $values_2 = array();
            foreach ($object->getMatchStates() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['matchStates'] = $values_2;
        }
        return $data;
    }
}