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
            $object->additionalInfo = $values;
            unset($data['additionalInfo']);
        }
        if (\array_key_exists('addresses', $data)) {
            $values_1 = [];
            foreach ($data['addresses'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem::class, 'json', $context);
            }
            $object->addresses = $values_1;
            unset($data['addresses']);
        }
        if (\array_key_exists('akAs', $data)) {
            $values_2 = [];
            foreach ($data['akAs'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItem::class, 'json', $context);
            }
            $object->akAs = $values_2;
            unset($data['akAs']);
        }
        if (\array_key_exists('comments', $data)) {
            $object->comments = $data['comments'];
            unset($data['comments']);
        }
        if (\array_key_exists('dateListed', $data)) {
            $object->dateListed = $data['dateListed'];
            unset($data['dateListed']);
        }
        if (\array_key_exists('entityType', $data)) {
            $object->entityType = $data['entityType'];
            unset($data['entityType']);
        }
        if (\array_key_exists('iDs', $data)) {
            $values_3 = [];
            foreach ($data['iDs'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsIDsItem::class, 'json', $context);
            }
            $object->iDs = $values_3;
            unset($data['iDs']);
        }
        if (\array_key_exists('listReferenceNumber', $data)) {
            $object->listReferenceNumber = $data['listReferenceNumber'];
            unset($data['listReferenceNumber']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $this->denormalizer->denormalize($data['name'], \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsName::class, 'json', $context);
            unset($data['name']);
        }
        if (\array_key_exists('reasonListed', $data)) {
            $object->reasonListed = $data['reasonListed'];
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
        if (array_key_exists('additionalInfo', get_object_vars($data)) && null !== ($data->additionalInfo ?? null)) {
            $values = [];
            foreach ($data->additionalInfo ?? null as $value) {
                $values[] = $value === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['additionalInfo'] = $values;
        }
        if (array_key_exists('addresses', get_object_vars($data)) && null !== ($data->addresses ?? null)) {
            $values_1 = [];
            foreach ($data->addresses ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['addresses'] = $values_1;
        }
        if (array_key_exists('akAs', get_object_vars($data)) && null !== ($data->akAs ?? null)) {
            $values_2 = [];
            foreach ($data->akAs ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['akAs'] = $values_2;
        }
        if (array_key_exists('comments', get_object_vars($data)) && null !== ($data->comments ?? null)) {
            $dataArray['comments'] = $data->comments ?? null;
        }
        if (array_key_exists('dateListed', get_object_vars($data)) && null !== ($data->dateListed ?? null)) {
            $dataArray['dateListed'] = $data->dateListed ?? null;
        }
        if (array_key_exists('entityType', get_object_vars($data)) && null !== ($data->entityType ?? null)) {
            $dataArray['entityType'] = $data->entityType ?? null;
        }
        if (array_key_exists('iDs', get_object_vars($data)) && null !== ($data->iDs ?? null)) {
            $values_3 = [];
            foreach ($data->iDs ?? null as $value_3) {
                $values_3[] = $value_3 === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['iDs'] = $values_3;
        }
        if (array_key_exists('listReferenceNumber', get_object_vars($data)) && null !== ($data->listReferenceNumber ?? null)) {
            $dataArray['listReferenceNumber'] = $data->listReferenceNumber ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = ($data->name ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->name ?? null, 'json', $context));
        }
        if (array_key_exists('reasonListed', get_object_vars($data)) && null !== ($data->reasonListed ?? null)) {
            $dataArray['reasonListed'] = $data->reasonListed ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_4) {
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