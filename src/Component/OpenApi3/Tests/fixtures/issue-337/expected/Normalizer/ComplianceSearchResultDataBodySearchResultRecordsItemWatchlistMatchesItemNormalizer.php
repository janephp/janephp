<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem();
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
            $object->setConflicts($this->denormalizer->denormalize($data['conflicts'], 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts', 'json', $context));
            unset($data['conflicts']);
        }
        if (\array_key_exists('entityDetails', $data)) {
            $object->setEntityDetails($this->denormalizer->denormalize($data['entityDetails'], 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails', 'json', $context));
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
            $object->setFile($this->denormalizer->denormalize($data['file'], 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFile', 'json', $context));
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('acceptListID') && null !== $object->getAcceptListID()) {
            $data['acceptListID'] = $object->getAcceptListID();
        }
        if ($object->isInitialized('addedToAcceptList') && null !== $object->getAddedToAcceptList()) {
            $data['addedToAcceptList'] = $object->getAddedToAcceptList();
        }
        if ($object->isInitialized('addressName') && null !== $object->getAddressName()) {
            $data['addressName'] = $object->getAddressName();
        }
        if ($object->isInitialized('autoFalsePositive') && null !== $object->getAutoFalsePositive()) {
            $data['autoFalsePositive'] = $object->getAutoFalsePositive();
        }
        if ($object->isInitialized('bestAddressIsPartial') && null !== $object->getBestAddressIsPartial()) {
            $data['bestAddressIsPartial'] = $object->getBestAddressIsPartial();
        }
        if ($object->isInitialized('bestCountryScore') && null !== $object->getBestCountryScore()) {
            $data['bestCountryScore'] = $object->getBestCountryScore();
        }
        if ($object->isInitialized('bestCountryType') && null !== $object->getBestCountryType()) {
            $data['bestCountryType'] = $object->getBestCountryType();
        }
        if ($object->isInitialized('bestDOBIsPartial') && null !== $object->getBestDOBIsPartial()) {
            $data['bestDOBIsPartial'] = $object->getBestDOBIsPartial();
        }
        if ($object->isInitialized('bestName') && null !== $object->getBestName()) {
            $data['bestName'] = $object->getBestName();
        }
        if ($object->isInitialized('bestNameScore') && null !== $object->getBestNameScore()) {
            $data['bestNameScore'] = $object->getBestNameScore();
        }
        if ($object->isInitialized('checkSum') && null !== $object->getCheckSum()) {
            $data['checkSum'] = $object->getCheckSum();
        }
        if ($object->isInitialized('conflicts') && null !== $object->getConflicts()) {
            $data['conflicts'] = $this->normalizer->normalize($object->getConflicts(), 'json', $context);
        }
        if ($object->isInitialized('entityDetails') && null !== $object->getEntityDetails()) {
            $data['entityDetails'] = $this->normalizer->normalize($object->getEntityDetails(), 'json', $context);
        }
        if ($object->isInitialized('entityName') && null !== $object->getEntityName()) {
            $data['entityName'] = $object->getEntityName();
        }
        if ($object->isInitialized('entityScore') && null !== $object->getEntityScore()) {
            $data['entityScore'] = $object->getEntityScore();
        }
        if ($object->isInitialized('entityUniqueID') && null !== $object->getEntityUniqueID()) {
            $data['entityUniqueID'] = $object->getEntityUniqueID();
        }
        if ($object->isInitialized('falsePositive') && null !== $object->getFalsePositive()) {
            $data['falsePositive'] = $object->getFalsePositive();
        }
        if ($object->isInitialized('file') && null !== $object->getFile()) {
            $data['file'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
        }
        if ($object->isInitialized('gatewayOFACScreeningIndicatorMatch') && null !== $object->getGatewayOFACScreeningIndicatorMatch()) {
            $data['gatewayOFACScreeningIndicatorMatch'] = $object->getGatewayOFACScreeningIndicatorMatch();
        }
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('matchReAlert') && null !== $object->getMatchReAlert()) {
            $data['matchReAlert'] = $object->getMatchReAlert();
        }
        if ($object->isInitialized('previousResultID') && null !== $object->getPreviousResultID()) {
            $data['previousResultID'] = $object->getPreviousResultID();
        }
        if ($object->isInitialized('reasonListed') && null !== $object->getReasonListed()) {
            $data['reasonListed'] = $object->getReasonListed();
        }
        if ($object->isInitialized('resultDate') && null !== $object->getResultDate()) {
            $data['resultDate'] = $object->getResultDate();
        }
        if ($object->isInitialized('secondaryOFACScreeningIndicatorMatch') && null !== $object->getSecondaryOFACScreeningIndicatorMatch()) {
            $data['secondaryOFACScreeningIndicatorMatch'] = $object->getSecondaryOFACScreeningIndicatorMatch();
        }
        if ($object->isInitialized('trueMatch') && null !== $object->getTrueMatch()) {
            $data['trueMatch'] = $object->getTrueMatch();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}