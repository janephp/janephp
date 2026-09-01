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
class ListFreshInvestigationResponseOrdersItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('consent', $data) && \is_int($data['consent'])) {
            $data['consent'] = (bool) $data['consent'];
        }
        if (\array_key_exists('orderID', $data)) {
            $object->orderID = $data['orderID'];
            unset($data['orderID']);
        }
        if (\array_key_exists('userID', $data)) {
            $object->userID = $data['userID'];
            unset($data['userID']);
        }
        if (\array_key_exists('creationDate', $data)) {
            $object->creationDate = $data['creationDate'];
            unset($data['creationDate']);
        }
        if (\array_key_exists('lastStatusChangeDate', $data)) {
            $object->lastStatusChangeDate = $data['lastStatusChangeDate'];
            unset($data['lastStatusChangeDate']);
        }
        if (\array_key_exists('transactionID', $data)) {
            $object->transactionID = $data['transactionID'];
            unset($data['transactionID']);
        }
        if (\array_key_exists('chargeReference', $data)) {
            $object->chargeReference = $data['chargeReference'];
            unset($data['chargeReference']);
        }
        if (\array_key_exists('contactDetails', $data)) {
            $object->contactDetails = $this->denormalizer->denormalize($data['contactDetails'], \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItemContactDetails::class, 'json', $context);
            unset($data['contactDetails']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $this->denormalizer->denormalize($data['status'], \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItemStatus::class, 'json', $context);
            unset($data['status']);
        }
        if (\array_key_exists('consent', $data)) {
            $object->consent = $data['consent'];
            unset($data['consent']);
        }
        if (\array_key_exists('searchCriteria', $data)) {
            $object->searchCriteria = $this->denormalizer->denormalize($data['searchCriteria'], \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItemSearchCriteria::class, 'json', $context);
            unset($data['searchCriteria']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('orderID', get_object_vars($data)) && null !== ($data->orderID ?? null)) {
            $dataArray['orderID'] = $data->orderID ?? null;
        }
        if (array_key_exists('userID', get_object_vars($data)) && null !== ($data->userID ?? null)) {
            $dataArray['userID'] = $data->userID ?? null;
        }
        if (array_key_exists('creationDate', get_object_vars($data)) && null !== ($data->creationDate ?? null)) {
            $dataArray['creationDate'] = $data->creationDate ?? null;
        }
        if (array_key_exists('lastStatusChangeDate', get_object_vars($data)) && null !== ($data->lastStatusChangeDate ?? null)) {
            $dataArray['lastStatusChangeDate'] = $data->lastStatusChangeDate ?? null;
        }
        if (array_key_exists('transactionID', get_object_vars($data)) && null !== ($data->transactionID ?? null)) {
            $dataArray['transactionID'] = $data->transactionID ?? null;
        }
        if (array_key_exists('chargeReference', get_object_vars($data)) && null !== ($data->chargeReference ?? null)) {
            $dataArray['chargeReference'] = $data->chargeReference ?? null;
        }
        if (array_key_exists('contactDetails', get_object_vars($data)) && null !== ($data->contactDetails ?? null)) {
            $dataArray['contactDetails'] = ($data->contactDetails ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->contactDetails ?? null, 'json', $context));
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = ($data->status ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->status ?? null, 'json', $context));
        }
        if (array_key_exists('consent', get_object_vars($data)) && null !== ($data->consent ?? null)) {
            $dataArray['consent'] = $data->consent ?? null;
        }
        if (array_key_exists('searchCriteria', get_object_vars($data)) && null !== ($data->searchCriteria ?? null)) {
            $dataArray['searchCriteria'] = ($data->searchCriteria ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->searchCriteria ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItem::class => false];
    }
}