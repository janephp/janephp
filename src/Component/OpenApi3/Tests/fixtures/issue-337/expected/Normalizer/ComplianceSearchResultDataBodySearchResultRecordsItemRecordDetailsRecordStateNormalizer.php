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
class ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addedToAcceptList', $data)) {
            $object->setAddedToAcceptList($data['addedToAcceptList']);
            unset($data['addedToAcceptList']);
        }
        if (\array_key_exists('alertState', $data)) {
            $object->setAlertState($data['alertState']);
            unset($data['alertState']);
        }
        if (\array_key_exists('assignedTo', $data)) {
            $values = [];
            foreach ($data['assignedTo'] as $value) {
                $values[] = $value;
            }
            $object->setAssignedTo($values);
            unset($data['assignedTo']);
        }
        if (\array_key_exists('assignmentType', $data)) {
            $object->setAssignmentType($data['assignmentType']);
            unset($data['assignmentType']);
        }
        if (\array_key_exists('division', $data)) {
            $object->setDivision($data['division']);
            unset($data['division']);
        }
        if (\array_key_exists('history', $data)) {
            $values_1 = [];
            foreach ($data['history'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItem::class, 'json', $context);
            }
            $object->setHistory($values_1);
            unset($data['history']);
        }
        if (\array_key_exists('matchStates', $data)) {
            $values_2 = [];
            foreach ($data['matchStates'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItem::class, 'json', $context);
            }
            $object->setMatchStates($values_2);
            unset($data['matchStates']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('addedToAcceptList') && null !== $data->getAddedToAcceptList()) {
            $dataArray['addedToAcceptList'] = $data->getAddedToAcceptList();
        }
        if ($data->isInitialized('alertState') && null !== $data->getAlertState()) {
            $dataArray['alertState'] = $data->getAlertState();
        }
        if ($data->isInitialized('assignedTo') && null !== $data->getAssignedTo()) {
            $values = [];
            foreach ($data->getAssignedTo() as $value) {
                $values[] = $value;
            }
            $dataArray['assignedTo'] = $values;
        }
        if ($data->isInitialized('assignmentType') && null !== $data->getAssignmentType()) {
            $dataArray['assignmentType'] = $data->getAssignmentType();
        }
        if ($data->isInitialized('division') && null !== $data->getDivision()) {
            $dataArray['division'] = $data->getDivision();
        }
        if ($data->isInitialized('history') && null !== $data->getHistory()) {
            $values_1 = [];
            foreach ($data->getHistory() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['history'] = $values_1;
        }
        if ($data->isInitialized('matchStates') && null !== $data->getMatchStates()) {
            $values_2 = [];
            foreach ($data->getMatchStates() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['matchStates'] = $values_2;
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState::class => false];
    }
}