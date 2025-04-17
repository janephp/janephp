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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem();
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('acceptListID', $data)) {
            $object->setAcceptListID($data['acceptListID']);
            unset($data['acceptListID']);
        }
        if (\array_key_exists('addedToAcceptList', $data)) {
            $object->setAddedToAcceptList($data['addedToAcceptList']);
            unset($data['addedToAcceptList']);
        }
        if (\array_key_exists('addressName', $data)) {
            $object->setAddressName($data['addressName']);
            unset($data['addressName']);
        }
        if (\array_key_exists('autoFalsePositive', $data)) {
            $object->setAutoFalsePositive($data['autoFalsePositive']);
            unset($data['autoFalsePositive']);
        }
        if (\array_key_exists('bestAddressIsPartial', $data)) {
            $object->setBestAddressIsPartial($data['bestAddressIsPartial']);
            unset($data['bestAddressIsPartial']);
        }
        if (\array_key_exists('bestCountryScore', $data)) {
            $object->setBestCountryScore($data['bestCountryScore']);
            unset($data['bestCountryScore']);
        }
        if (\array_key_exists('bestCountryType', $data)) {
            $object->setBestCountryType($data['bestCountryType']);
            unset($data['bestCountryType']);
        }
        if (\array_key_exists('bestDOBIsPartial', $data)) {
            $object->setBestDOBIsPartial($data['bestDOBIsPartial']);
            unset($data['bestDOBIsPartial']);
        }
        if (\array_key_exists('bestName', $data)) {
            $object->setBestName($data['bestName']);
            unset($data['bestName']);
        }
        if (\array_key_exists('bestNameScore', $data)) {
            $object->setBestNameScore($data['bestNameScore']);
            unset($data['bestNameScore']);
        }
        if (\array_key_exists('checkSum', $data)) {
            $object->setCheckSum($data['checkSum']);
            unset($data['checkSum']);
        }
        if (\array_key_exists('conflicts', $data)) {
            $object->setConflicts($this->denormalizer->denormalize($data['conflicts'], \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts::class, 'json', $context));
            unset($data['conflicts']);
        }
        if (\array_key_exists('entityDetails', $data)) {
            $object->setEntityDetails($this->denormalizer->denormalize($data['entityDetails'], \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails::class, 'json', $context));
            unset($data['entityDetails']);
        }
        if (\array_key_exists('entityName', $data)) {
            $object->setEntityName($data['entityName']);
            unset($data['entityName']);
        }
        if (\array_key_exists('entityScore', $data)) {
            $object->setEntityScore($data['entityScore']);
            unset($data['entityScore']);
        }
        if (\array_key_exists('entityUniqueID', $data)) {
            $object->setEntityUniqueID($data['entityUniqueID']);
            unset($data['entityUniqueID']);
        }
        if (\array_key_exists('falsePositive', $data)) {
            $object->setFalsePositive($data['falsePositive']);
            unset($data['falsePositive']);
        }
        if (\array_key_exists('file', $data)) {
            $object->setFile($this->denormalizer->denormalize($data['file'], \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFile::class, 'json', $context));
            unset($data['file']);
        }
        if (\array_key_exists('gatewayOFACScreeningIndicatorMatch', $data)) {
            $object->setGatewayOFACScreeningIndicatorMatch($data['gatewayOFACScreeningIndicatorMatch']);
            unset($data['gatewayOFACScreeningIndicatorMatch']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('matchReAlert', $data)) {
            $object->setMatchReAlert($data['matchReAlert']);
            unset($data['matchReAlert']);
        }
        if (\array_key_exists('previousResultID', $data)) {
            $object->setPreviousResultID($data['previousResultID']);
            unset($data['previousResultID']);
        }
        if (\array_key_exists('reasonListed', $data)) {
            $object->setReasonListed($data['reasonListed']);
            unset($data['reasonListed']);
        }
        if (\array_key_exists('resultDate', $data)) {
            $object->setResultDate($data['resultDate']);
            unset($data['resultDate']);
        }
        if (\array_key_exists('secondaryOFACScreeningIndicatorMatch', $data)) {
            $object->setSecondaryOFACScreeningIndicatorMatch($data['secondaryOFACScreeningIndicatorMatch']);
            unset($data['secondaryOFACScreeningIndicatorMatch']);
        }
        if (\array_key_exists('trueMatch', $data)) {
            $object->setTrueMatch($data['trueMatch']);
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
        if ($data->isInitialized('acceptListID') && null !== $data->getAcceptListID()) {
            $dataArray['acceptListID'] = $data->getAcceptListID();
        }
        if ($data->isInitialized('addedToAcceptList') && null !== $data->getAddedToAcceptList()) {
            $dataArray['addedToAcceptList'] = $data->getAddedToAcceptList();
        }
        if ($data->isInitialized('addressName') && null !== $data->getAddressName()) {
            $dataArray['addressName'] = $data->getAddressName();
        }
        if ($data->isInitialized('autoFalsePositive') && null !== $data->getAutoFalsePositive()) {
            $dataArray['autoFalsePositive'] = $data->getAutoFalsePositive();
        }
        if ($data->isInitialized('bestAddressIsPartial') && null !== $data->getBestAddressIsPartial()) {
            $dataArray['bestAddressIsPartial'] = $data->getBestAddressIsPartial();
        }
        if ($data->isInitialized('bestCountryScore') && null !== $data->getBestCountryScore()) {
            $dataArray['bestCountryScore'] = $data->getBestCountryScore();
        }
        if ($data->isInitialized('bestCountryType') && null !== $data->getBestCountryType()) {
            $dataArray['bestCountryType'] = $data->getBestCountryType();
        }
        if ($data->isInitialized('bestDOBIsPartial') && null !== $data->getBestDOBIsPartial()) {
            $dataArray['bestDOBIsPartial'] = $data->getBestDOBIsPartial();
        }
        if ($data->isInitialized('bestName') && null !== $data->getBestName()) {
            $dataArray['bestName'] = $data->getBestName();
        }
        if ($data->isInitialized('bestNameScore') && null !== $data->getBestNameScore()) {
            $dataArray['bestNameScore'] = $data->getBestNameScore();
        }
        if ($data->isInitialized('checkSum') && null !== $data->getCheckSum()) {
            $dataArray['checkSum'] = $data->getCheckSum();
        }
        if ($data->isInitialized('conflicts') && null !== $data->getConflicts()) {
            $dataArray['conflicts'] = $this->normalizer->normalize($data->getConflicts(), 'json', $context);
        }
        if ($data->isInitialized('entityDetails') && null !== $data->getEntityDetails()) {
            $dataArray['entityDetails'] = $this->normalizer->normalize($data->getEntityDetails(), 'json', $context);
        }
        if ($data->isInitialized('entityName') && null !== $data->getEntityName()) {
            $dataArray['entityName'] = $data->getEntityName();
        }
        if ($data->isInitialized('entityScore') && null !== $data->getEntityScore()) {
            $dataArray['entityScore'] = $data->getEntityScore();
        }
        if ($data->isInitialized('entityUniqueID') && null !== $data->getEntityUniqueID()) {
            $dataArray['entityUniqueID'] = $data->getEntityUniqueID();
        }
        if ($data->isInitialized('falsePositive') && null !== $data->getFalsePositive()) {
            $dataArray['falsePositive'] = $data->getFalsePositive();
        }
        if ($data->isInitialized('file') && null !== $data->getFile()) {
            $dataArray['file'] = $this->normalizer->normalize($data->getFile(), 'json', $context);
        }
        if ($data->isInitialized('gatewayOFACScreeningIndicatorMatch') && null !== $data->getGatewayOFACScreeningIndicatorMatch()) {
            $dataArray['gatewayOFACScreeningIndicatorMatch'] = $data->getGatewayOFACScreeningIndicatorMatch();
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('matchReAlert') && null !== $data->getMatchReAlert()) {
            $dataArray['matchReAlert'] = $data->getMatchReAlert();
        }
        if ($data->isInitialized('previousResultID') && null !== $data->getPreviousResultID()) {
            $dataArray['previousResultID'] = $data->getPreviousResultID();
        }
        if ($data->isInitialized('reasonListed') && null !== $data->getReasonListed()) {
            $dataArray['reasonListed'] = $data->getReasonListed();
        }
        if ($data->isInitialized('resultDate') && null !== $data->getResultDate()) {
            $dataArray['resultDate'] = $data->getResultDate();
        }
        if ($data->isInitialized('secondaryOFACScreeningIndicatorMatch') && null !== $data->getSecondaryOFACScreeningIndicatorMatch()) {
            $dataArray['secondaryOFACScreeningIndicatorMatch'] = $data->getSecondaryOFACScreeningIndicatorMatch();
        }
        if ($data->isInitialized('trueMatch') && null !== $data->getTrueMatch()) {
            $dataArray['trueMatch'] = $data->getTrueMatch();
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
        return [\CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem::class => false];
    }
}