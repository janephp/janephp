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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItem();
        if (\array_key_exists('consent', $data) && \is_int($data['consent'])) {
            $data['consent'] = (bool) $data['consent'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('orderID', $data)) {
            $object->setOrderID($data['orderID']);
            unset($data['orderID']);
        }
        if (\array_key_exists('userID', $data)) {
            $object->setUserID($data['userID']);
            unset($data['userID']);
        }
        if (\array_key_exists('creationDate', $data)) {
            $object->setCreationDate($data['creationDate']);
            unset($data['creationDate']);
        }
        if (\array_key_exists('lastStatusChangeDate', $data)) {
            $object->setLastStatusChangeDate($data['lastStatusChangeDate']);
            unset($data['lastStatusChangeDate']);
        }
        if (\array_key_exists('transactionID', $data)) {
            $object->setTransactionID($data['transactionID']);
            unset($data['transactionID']);
        }
        if (\array_key_exists('chargeReference', $data)) {
            $object->setChargeReference($data['chargeReference']);
            unset($data['chargeReference']);
        }
        if (\array_key_exists('contactDetails', $data)) {
            $object->setContactDetails($this->denormalizer->denormalize($data['contactDetails'], \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItemContactDetails::class, 'json', $context));
            unset($data['contactDetails']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['status'], \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItemStatus::class, 'json', $context));
            unset($data['status']);
        }
        if (\array_key_exists('consent', $data)) {
            $object->setConsent($data['consent']);
            unset($data['consent']);
        }
        if (\array_key_exists('searchCriteria', $data)) {
            $object->setSearchCriteria($this->denormalizer->denormalize($data['searchCriteria'], \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItemSearchCriteria::class, 'json', $context));
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
        if ($data->isInitialized('orderID') && null !== $data->getOrderID()) {
            $dataArray['orderID'] = $data->getOrderID();
        }
        if ($data->isInitialized('userID') && null !== $data->getUserID()) {
            $dataArray['userID'] = $data->getUserID();
        }
        if ($data->isInitialized('creationDate') && null !== $data->getCreationDate()) {
            $dataArray['creationDate'] = $data->getCreationDate();
        }
        if ($data->isInitialized('lastStatusChangeDate') && null !== $data->getLastStatusChangeDate()) {
            $dataArray['lastStatusChangeDate'] = $data->getLastStatusChangeDate();
        }
        if ($data->isInitialized('transactionID') && null !== $data->getTransactionID()) {
            $dataArray['transactionID'] = $data->getTransactionID();
        }
        if ($data->isInitialized('chargeReference') && null !== $data->getChargeReference()) {
            $dataArray['chargeReference'] = $data->getChargeReference();
        }
        if ($data->isInitialized('contactDetails') && null !== $data->getContactDetails()) {
            $dataArray['contactDetails'] = $this->normalizer->normalize($data->getContactDetails(), 'json', $context);
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $this->normalizer->normalize($data->getStatus(), 'json', $context);
        }
        if ($data->isInitialized('consent') && null !== $data->getConsent()) {
            $dataArray['consent'] = $data->getConsent();
        }
        if ($data->isInitialized('searchCriteria') && null !== $data->getSearchCriteria()) {
            $dataArray['searchCriteria'] = $this->normalizer->normalize($data->getSearchCriteria(), 'json', $context);
        }
        foreach ($data as $key => $value) {
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