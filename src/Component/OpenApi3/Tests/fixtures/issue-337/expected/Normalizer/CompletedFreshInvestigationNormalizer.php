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
class CompletedFreshInvestigationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\CompletedFreshInvestigation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\CompletedFreshInvestigation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\CompletedFreshInvestigation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('chargeReference', $data)) {
            $object->chargeReference = $data['chargeReference'];
            unset($data['chargeReference']);
        }
        if (\array_key_exists('contactDetails', $data)) {
            $object->contactDetails = $this->denormalizer->denormalize($data['contactDetails'], \CreditSafe\API\Model\CompletedFreshInvestigationContactDetails::class, 'json', $context);
            unset($data['contactDetails']);
        }
        if (\array_key_exists('creationDate', $data)) {
            $object->creationDate = $data['creationDate'];
            unset($data['creationDate']);
        }
        if (\array_key_exists('lastStatusChangeDate', $data)) {
            $object->lastStatusChangeDate = $data['lastStatusChangeDate'];
            unset($data['lastStatusChangeDate']);
        }
        if (\array_key_exists('orderID', $data)) {
            $object->orderID = $data['orderID'];
            unset($data['orderID']);
        }
        if (\array_key_exists('reportDate', $data)) {
            $object->reportDate = $data['reportDate'];
            unset($data['reportDate']);
        }
        if (\array_key_exists('searchCriteria', $data)) {
            $object->searchCriteria = $this->denormalizer->denormalize($data['searchCriteria'], \CreditSafe\API\Model\CompletedFreshInvestigationSearchCriteria::class, 'json', $context);
            unset($data['searchCriteria']);
        }
        if (\array_key_exists('sections', $data)) {
            $values = [];
            foreach ($data['sections'] as $value) {
                $value_1 = $value;
                if (is_array($value)) {
                    $value_1 = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\CompletedFreshInvestigationSectionsItemAnyOf::class, 'json', $context);
                }
                $values[] = $value_1;
            }
            $object->sections = $values;
            unset($data['sections']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $this->denormalizer->denormalize($data['status'], \CreditSafe\API\Model\CompletedFreshInvestigationStatus::class, 'json', $context);
            unset($data['status']);
        }
        if (\array_key_exists('transactionID', $data)) {
            $object->transactionID = $data['transactionID'];
            unset($data['transactionID']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('chargeReference', get_object_vars($data)) && null !== ($data->chargeReference ?? null)) {
            $dataArray['chargeReference'] = $data->chargeReference;
        }
        if (array_key_exists('contactDetails', get_object_vars($data)) && null !== ($data->contactDetails ?? null)) {
            $normalized = $this->normalizer->normalize($data->contactDetails, 'json', $context);
            $dataArray['contactDetails'] = \is_iterable($normalized) ? new \CreditSafe\API\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('creationDate', get_object_vars($data)) && null !== ($data->creationDate ?? null)) {
            $dataArray['creationDate'] = $data->creationDate;
        }
        if (array_key_exists('lastStatusChangeDate', get_object_vars($data)) && null !== ($data->lastStatusChangeDate ?? null)) {
            $dataArray['lastStatusChangeDate'] = $data->lastStatusChangeDate;
        }
        if (array_key_exists('orderID', get_object_vars($data)) && null !== ($data->orderID ?? null)) {
            $dataArray['orderID'] = $data->orderID;
        }
        if (array_key_exists('reportDate', get_object_vars($data)) && null !== ($data->reportDate ?? null)) {
            $dataArray['reportDate'] = $data->reportDate;
        }
        if (array_key_exists('searchCriteria', get_object_vars($data)) && null !== ($data->searchCriteria ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->searchCriteria, 'json', $context);
            $dataArray['searchCriteria'] = \is_iterable($normalized_1) ? new \CreditSafe\API\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('sections', get_object_vars($data)) && null !== ($data->sections ?? null)) {
            $values = [];
            foreach ($data->sections as $value) {
                $value_1 = $value;
                if (is_object($value)) {
                    $normalized_2 = $this->normalizer->normalize($value, 'json', $context);
                    $value_1 = \is_iterable($normalized_2) ? new \CreditSafe\API\Runtime\JsonObject($normalized_2) : $normalized_2;
                }
                $values[] = $value_1;
            }
            $dataArray['sections'] = $values;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->status, 'json', $context);
            $dataArray['status'] = \is_iterable($normalized_3) ? new \CreditSafe\API\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('transactionID', get_object_vars($data)) && null !== ($data->transactionID ?? null)) {
            $dataArray['transactionID'] = $data->transactionID;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\CompletedFreshInvestigation::class => false];
    }
}