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
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState();
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
        if (\array_key_exists('addedToAcceptList', $data)) {
            $object->addedToAcceptList = $data['addedToAcceptList'];
            unset($data['addedToAcceptList']);
        }
        if (\array_key_exists('alertState', $data)) {
            $object->alertState = $data['alertState'];
            unset($data['alertState']);
        }
        if (\array_key_exists('assignedTo', $data)) {
            $values = [];
            foreach ($data['assignedTo'] as $value) {
                $values[] = $value;
            }
            $object->assignedTo = $values;
            unset($data['assignedTo']);
        }
        if (\array_key_exists('assignmentType', $data)) {
            $object->assignmentType = $data['assignmentType'];
            unset($data['assignmentType']);
        }
        if (\array_key_exists('division', $data)) {
            $object->division = $data['division'];
            unset($data['division']);
        }
        if (\array_key_exists('history', $data)) {
            $values_1 = [];
            foreach ($data['history'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItem::class, 'json', $context);
            }
            $object->history = $values_1;
            unset($data['history']);
        }
        if (\array_key_exists('matchStates', $data)) {
            $values_2 = [];
            foreach ($data['matchStates'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItem::class, 'json', $context);
            }
            $object->matchStates = $values_2;
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
        if (array_key_exists('addedToAcceptList', get_object_vars($data)) && null !== ($data->addedToAcceptList ?? null)) {
            $dataArray['addedToAcceptList'] = $data->addedToAcceptList ?? null;
        }
        if (array_key_exists('alertState', get_object_vars($data)) && null !== ($data->alertState ?? null)) {
            $dataArray['alertState'] = $data->alertState ?? null;
        }
        if (array_key_exists('assignedTo', get_object_vars($data)) && null !== ($data->assignedTo ?? null)) {
            $values = [];
            foreach ($data->assignedTo ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['assignedTo'] = $values;
        }
        if (array_key_exists('assignmentType', get_object_vars($data)) && null !== ($data->assignmentType ?? null)) {
            $dataArray['assignmentType'] = $data->assignmentType ?? null;
        }
        if (array_key_exists('division', get_object_vars($data)) && null !== ($data->division ?? null)) {
            $dataArray['division'] = $data->division ?? null;
        }
        if (array_key_exists('history', get_object_vars($data)) && null !== ($data->history ?? null)) {
            $values_1 = [];
            foreach ($data->history ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['history'] = $values_1;
        }
        if (array_key_exists('matchStates', get_object_vars($data)) && null !== ($data->matchStates ?? null)) {
            $values_2 = [];
            foreach ($data->matchStates ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['matchStates'] = $values_2;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
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