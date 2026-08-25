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
            $object->setChargeReference($data['chargeReference']);
            unset($data['chargeReference']);
        }
        if (\array_key_exists('contactDetails', $data)) {
            $object->setContactDetails($this->denormalizer->denormalize($data['contactDetails'], \CreditSafe\API\Model\CompletedFreshInvestigationContactDetails::class, 'json', $context));
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
            $object->setSearchCriteria($this->denormalizer->denormalize($data['searchCriteria'], \CreditSafe\API\Model\CompletedFreshInvestigationSearchCriteria::class, 'json', $context));
            unset($data['searchCriteria']);
        }
        if (\array_key_exists('sections', $data)) {
            $values = [];
            foreach ($data['sections'] as $value) {
                $values[] = $value;
            }
            $object->setSections($values);
            unset($data['sections']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['status'], \CreditSafe\API\Model\CompletedFreshInvestigationStatus::class, 'json', $context));
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('chargeReference') && null !== $data->getChargeReference()) {
            $dataArray['chargeReference'] = $data->getChargeReference();
        }
        if ($data->isInitialized('contactDetails') && null !== $data->getContactDetails()) {
            $dataArray['contactDetails'] = $data->getContactDetails() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getContactDetails(), 'json', $context));
        }
        if ($data->isInitialized('creationDate') && null !== $data->getCreationDate()) {
            $dataArray['creationDate'] = $data->getCreationDate();
        }
        if ($data->isInitialized('lastStatusChangeDate') && null !== $data->getLastStatusChangeDate()) {
            $dataArray['lastStatusChangeDate'] = $data->getLastStatusChangeDate();
        }
        if ($data->isInitialized('orderID') && null !== $data->getOrderID()) {
            $dataArray['orderID'] = $data->getOrderID();
        }
        if ($data->isInitialized('reportDate') && null !== $data->getReportDate()) {
            $dataArray['reportDate'] = $data->getReportDate();
        }
        if ($data->isInitialized('searchCriteria') && null !== $data->getSearchCriteria()) {
            $dataArray['searchCriteria'] = $data->getSearchCriteria() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getSearchCriteria(), 'json', $context));
        }
        if ($data->isInitialized('sections') && null !== $data->getSections()) {
            $values = [];
            foreach ($data->getSections() as $value) {
                $values[] = $value;
            }
            $dataArray['sections'] = $values;
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getStatus(), 'json', $context));
        }
        if ($data->isInitialized('transactionID') && null !== $data->getTransactionID()) {
            $dataArray['transactionID'] = $data->getTransactionID();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\CompletedFreshInvestigation::class => false];
    }
}