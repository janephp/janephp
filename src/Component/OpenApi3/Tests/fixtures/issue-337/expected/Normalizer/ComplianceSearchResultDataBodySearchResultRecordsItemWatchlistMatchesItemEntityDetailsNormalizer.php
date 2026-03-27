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
class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('additionalInfo', $data)) {
            $values = [];
            foreach ($data['additionalInfo'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAdditionalInfoItem::class, 'json', $context);
            }
            $object->setAdditionalInfo($values);
            unset($data['additionalInfo']);
        }
        if (\array_key_exists('addresses', $data)) {
            $values_1 = [];
            foreach ($data['addresses'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem::class, 'json', $context);
            }
            $object->setAddresses($values_1);
            unset($data['addresses']);
        }
        if (\array_key_exists('akAs', $data)) {
            $values_2 = [];
            foreach ($data['akAs'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItem::class, 'json', $context);
            }
            $object->setAkAs($values_2);
            unset($data['akAs']);
        }
        if (\array_key_exists('comments', $data)) {
            $object->setComments($data['comments']);
            unset($data['comments']);
        }
        if (\array_key_exists('dateListed', $data)) {
            $object->setDateListed($data['dateListed']);
            unset($data['dateListed']);
        }
        if (\array_key_exists('entityType', $data)) {
            $object->setEntityType($data['entityType']);
            unset($data['entityType']);
        }
        if (\array_key_exists('iDs', $data)) {
            $values_3 = [];
            foreach ($data['iDs'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsIDsItem::class, 'json', $context);
            }
            $object->setIDs($values_3);
            unset($data['iDs']);
        }
        if (\array_key_exists('listReferenceNumber', $data)) {
            $object->setListReferenceNumber($data['listReferenceNumber']);
            unset($data['listReferenceNumber']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($this->denormalizer->denormalize($data['name'], \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsName::class, 'json', $context));
            unset($data['name']);
        }
        if (\array_key_exists('reasonListed', $data)) {
            $object->setReasonListed($data['reasonListed']);
            unset($data['reasonListed']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('additionalInfo') && null !== $data->getAdditionalInfo()) {
            $values = [];
            foreach ($data->getAdditionalInfo() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['additionalInfo'] = $values;
        }
        if ($data->isInitialized('addresses') && null !== $data->getAddresses()) {
            $values_1 = [];
            foreach ($data->getAddresses() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['addresses'] = $values_1;
        }
        if ($data->isInitialized('akAs') && null !== $data->getAkAs()) {
            $values_2 = [];
            foreach ($data->getAkAs() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['akAs'] = $values_2;
        }
        if ($data->isInitialized('comments') && null !== $data->getComments()) {
            $dataArray['comments'] = $data->getComments();
        }
        if ($data->isInitialized('dateListed') && null !== $data->getDateListed()) {
            $dataArray['dateListed'] = $data->getDateListed();
        }
        if ($data->isInitialized('entityType') && null !== $data->getEntityType()) {
            $dataArray['entityType'] = $data->getEntityType();
        }
        if ($data->isInitialized('iDs') && null !== $data->getIDs()) {
            $values_3 = [];
            foreach ($data->getIDs() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['iDs'] = $values_3;
        }
        if ($data->isInitialized('listReferenceNumber') && null !== $data->getListReferenceNumber()) {
            $dataArray['listReferenceNumber'] = $data->getListReferenceNumber();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $this->normalizer->normalize($data->getName(), 'json', $context);
        }
        if ($data->isInitialized('reasonListed') && null !== $data->getReasonListed()) {
            $dataArray['reasonListed'] = $data->getReasonListed();
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails::class => false];
    }
}