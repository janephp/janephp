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
class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem();
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
        if (\array_key_exists('addressName', $data) && \is_int($data['addressName'])) {
            $data['addressName'] = (bool) $data['addressName'];
        }
        if (\array_key_exists('autoFalsePositive', $data) && \is_int($data['autoFalsePositive'])) {
            $data['autoFalsePositive'] = (bool) $data['autoFalsePositive'];
        }
        if (\array_key_exists('bestAddressIsPartial', $data) && \is_int($data['bestAddressIsPartial'])) {
            $data['bestAddressIsPartial'] = (bool) $data['bestAddressIsPartial'];
        }
        if (\array_key_exists('bestDOBIsPartial', $data) && \is_int($data['bestDOBIsPartial'])) {
            $data['bestDOBIsPartial'] = (bool) $data['bestDOBIsPartial'];
        }
        if (\array_key_exists('falsePositive', $data) && \is_int($data['falsePositive'])) {
            $data['falsePositive'] = (bool) $data['falsePositive'];
        }
        if (\array_key_exists('gatewayOFACScreeningIndicatorMatch', $data) && \is_int($data['gatewayOFACScreeningIndicatorMatch'])) {
            $data['gatewayOFACScreeningIndicatorMatch'] = (bool) $data['gatewayOFACScreeningIndicatorMatch'];
        }
        if (\array_key_exists('matchReAlert', $data) && \is_int($data['matchReAlert'])) {
            $data['matchReAlert'] = (bool) $data['matchReAlert'];
        }
        if (\array_key_exists('secondaryOFACScreeningIndicatorMatch', $data) && \is_int($data['secondaryOFACScreeningIndicatorMatch'])) {
            $data['secondaryOFACScreeningIndicatorMatch'] = (bool) $data['secondaryOFACScreeningIndicatorMatch'];
        }
        if (\array_key_exists('trueMatch', $data) && \is_int($data['trueMatch'])) {
            $data['trueMatch'] = (bool) $data['trueMatch'];
        }
        if (\array_key_exists('acceptListID', $data)) {
            $object->acceptListID = $data['acceptListID'];
            unset($data['acceptListID']);
        }
        if (\array_key_exists('addedToAcceptList', $data)) {
            $object->addedToAcceptList = $data['addedToAcceptList'];
            unset($data['addedToAcceptList']);
        }
        if (\array_key_exists('addressName', $data)) {
            $object->addressName = $data['addressName'];
            unset($data['addressName']);
        }
        if (\array_key_exists('autoFalsePositive', $data)) {
            $object->autoFalsePositive = $data['autoFalsePositive'];
            unset($data['autoFalsePositive']);
        }
        if (\array_key_exists('bestAddressIsPartial', $data)) {
            $object->bestAddressIsPartial = $data['bestAddressIsPartial'];
            unset($data['bestAddressIsPartial']);
        }
        if (\array_key_exists('bestCountryScore', $data)) {
            $object->bestCountryScore = $data['bestCountryScore'];
            unset($data['bestCountryScore']);
        }
        if (\array_key_exists('bestCountryType', $data)) {
            $object->bestCountryType = $data['bestCountryType'];
            unset($data['bestCountryType']);
        }
        if (\array_key_exists('bestDOBIsPartial', $data)) {
            $object->bestDOBIsPartial = $data['bestDOBIsPartial'];
            unset($data['bestDOBIsPartial']);
        }
        if (\array_key_exists('bestName', $data)) {
            $object->bestName = $data['bestName'];
            unset($data['bestName']);
        }
        if (\array_key_exists('bestNameScore', $data)) {
            $object->bestNameScore = $data['bestNameScore'];
            unset($data['bestNameScore']);
        }
        if (\array_key_exists('checkSum', $data)) {
            $object->checkSum = $data['checkSum'];
            unset($data['checkSum']);
        }
        if (\array_key_exists('conflicts', $data)) {
            $object->conflicts = $this->denormalizer->denormalize($data['conflicts'], \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts::class, 'json', $context);
            unset($data['conflicts']);
        }
        if (\array_key_exists('entityDetails', $data)) {
            $object->entityDetails = $this->denormalizer->denormalize($data['entityDetails'], \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails::class, 'json', $context);
            unset($data['entityDetails']);
        }
        if (\array_key_exists('entityName', $data)) {
            $object->entityName = $data['entityName'];
            unset($data['entityName']);
        }
        if (\array_key_exists('entityScore', $data)) {
            $object->entityScore = $data['entityScore'];
            unset($data['entityScore']);
        }
        if (\array_key_exists('entityUniqueID', $data)) {
            $object->entityUniqueID = $data['entityUniqueID'];
            unset($data['entityUniqueID']);
        }
        if (\array_key_exists('falsePositive', $data)) {
            $object->falsePositive = $data['falsePositive'];
            unset($data['falsePositive']);
        }
        if (\array_key_exists('file', $data)) {
            $object->file = $this->denormalizer->denormalize($data['file'], \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFile::class, 'json', $context);
            unset($data['file']);
        }
        if (\array_key_exists('gatewayOFACScreeningIndicatorMatch', $data)) {
            $object->gatewayOFACScreeningIndicatorMatch = $data['gatewayOFACScreeningIndicatorMatch'];
            unset($data['gatewayOFACScreeningIndicatorMatch']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('matchReAlert', $data)) {
            $object->matchReAlert = $data['matchReAlert'];
            unset($data['matchReAlert']);
        }
        if (\array_key_exists('previousResultID', $data)) {
            $object->previousResultID = $data['previousResultID'];
            unset($data['previousResultID']);
        }
        if (\array_key_exists('reasonListed', $data)) {
            $object->reasonListed = $data['reasonListed'];
            unset($data['reasonListed']);
        }
        if (\array_key_exists('resultDate', $data)) {
            $object->resultDate = $data['resultDate'];
            unset($data['resultDate']);
        }
        if (\array_key_exists('secondaryOFACScreeningIndicatorMatch', $data)) {
            $object->secondaryOFACScreeningIndicatorMatch = $data['secondaryOFACScreeningIndicatorMatch'];
            unset($data['secondaryOFACScreeningIndicatorMatch']);
        }
        if (\array_key_exists('trueMatch', $data)) {
            $object->trueMatch = $data['trueMatch'];
            unset($data['trueMatch']);
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
        if (array_key_exists('acceptListID', get_object_vars($data)) && null !== ($data->acceptListID ?? null)) {
            $dataArray['acceptListID'] = $data->acceptListID ?? null;
        }
        if (array_key_exists('addedToAcceptList', get_object_vars($data)) && null !== ($data->addedToAcceptList ?? null)) {
            $dataArray['addedToAcceptList'] = $data->addedToAcceptList ?? null;
        }
        if (array_key_exists('addressName', get_object_vars($data)) && null !== ($data->addressName ?? null)) {
            $dataArray['addressName'] = $data->addressName ?? null;
        }
        if (array_key_exists('autoFalsePositive', get_object_vars($data)) && null !== ($data->autoFalsePositive ?? null)) {
            $dataArray['autoFalsePositive'] = $data->autoFalsePositive ?? null;
        }
        if (array_key_exists('bestAddressIsPartial', get_object_vars($data)) && null !== ($data->bestAddressIsPartial ?? null)) {
            $dataArray['bestAddressIsPartial'] = $data->bestAddressIsPartial ?? null;
        }
        if (array_key_exists('bestCountryScore', get_object_vars($data)) && null !== ($data->bestCountryScore ?? null)) {
            $dataArray['bestCountryScore'] = $data->bestCountryScore ?? null;
        }
        if (array_key_exists('bestCountryType', get_object_vars($data)) && null !== ($data->bestCountryType ?? null)) {
            $dataArray['bestCountryType'] = $data->bestCountryType ?? null;
        }
        if (array_key_exists('bestDOBIsPartial', get_object_vars($data)) && null !== ($data->bestDOBIsPartial ?? null)) {
            $dataArray['bestDOBIsPartial'] = $data->bestDOBIsPartial ?? null;
        }
        if (array_key_exists('bestName', get_object_vars($data)) && null !== ($data->bestName ?? null)) {
            $dataArray['bestName'] = $data->bestName ?? null;
        }
        if (array_key_exists('bestNameScore', get_object_vars($data)) && null !== ($data->bestNameScore ?? null)) {
            $dataArray['bestNameScore'] = $data->bestNameScore ?? null;
        }
        if (array_key_exists('checkSum', get_object_vars($data)) && null !== ($data->checkSum ?? null)) {
            $dataArray['checkSum'] = $data->checkSum ?? null;
        }
        if (array_key_exists('conflicts', get_object_vars($data)) && null !== ($data->conflicts ?? null)) {
            $dataArray['conflicts'] = ($data->conflicts ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->conflicts ?? null, 'json', $context));
        }
        if (array_key_exists('entityDetails', get_object_vars($data)) && null !== ($data->entityDetails ?? null)) {
            $dataArray['entityDetails'] = ($data->entityDetails ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->entityDetails ?? null, 'json', $context));
        }
        if (array_key_exists('entityName', get_object_vars($data)) && null !== ($data->entityName ?? null)) {
            $dataArray['entityName'] = $data->entityName ?? null;
        }
        if (array_key_exists('entityScore', get_object_vars($data)) && null !== ($data->entityScore ?? null)) {
            $dataArray['entityScore'] = $data->entityScore ?? null;
        }
        if (array_key_exists('entityUniqueID', get_object_vars($data)) && null !== ($data->entityUniqueID ?? null)) {
            $dataArray['entityUniqueID'] = $data->entityUniqueID ?? null;
        }
        if (array_key_exists('falsePositive', get_object_vars($data)) && null !== ($data->falsePositive ?? null)) {
            $dataArray['falsePositive'] = $data->falsePositive ?? null;
        }
        if (array_key_exists('file', get_object_vars($data)) && null !== ($data->file ?? null)) {
            $dataArray['file'] = ($data->file ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->file ?? null, 'json', $context));
        }
        if (array_key_exists('gatewayOFACScreeningIndicatorMatch', get_object_vars($data)) && null !== ($data->gatewayOFACScreeningIndicatorMatch ?? null)) {
            $dataArray['gatewayOFACScreeningIndicatorMatch'] = $data->gatewayOFACScreeningIndicatorMatch ?? null;
        }
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('matchReAlert', get_object_vars($data)) && null !== ($data->matchReAlert ?? null)) {
            $dataArray['matchReAlert'] = $data->matchReAlert ?? null;
        }
        if (array_key_exists('previousResultID', get_object_vars($data)) && null !== ($data->previousResultID ?? null)) {
            $dataArray['previousResultID'] = $data->previousResultID ?? null;
        }
        if (array_key_exists('reasonListed', get_object_vars($data)) && null !== ($data->reasonListed ?? null)) {
            $dataArray['reasonListed'] = $data->reasonListed ?? null;
        }
        if (array_key_exists('resultDate', get_object_vars($data)) && null !== ($data->resultDate ?? null)) {
            $dataArray['resultDate'] = $data->resultDate ?? null;
        }
        if (array_key_exists('secondaryOFACScreeningIndicatorMatch', get_object_vars($data)) && null !== ($data->secondaryOFACScreeningIndicatorMatch ?? null)) {
            $dataArray['secondaryOFACScreeningIndicatorMatch'] = $data->secondaryOFACScreeningIndicatorMatch ?? null;
        }
        if (array_key_exists('trueMatch', get_object_vars($data)) && null !== ($data->trueMatch ?? null)) {
            $dataArray['trueMatch'] = $data->trueMatch ?? null;
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
        return [\CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem::class => false];
    }
}