<?php

namespace CreditSafe\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem();
        if (\array_key_exists('acceptListID', $data)) {
            $object->setAcceptListID($data['acceptListID']);
        }
        if (\array_key_exists('addedToAcceptList', $data)) {
            $object->setAddedToAcceptList($data['addedToAcceptList']);
        }
        if (\array_key_exists('addressName', $data)) {
            $object->setAddressName($data['addressName']);
        }
        if (\array_key_exists('autoFalsePositive', $data)) {
            $object->setAutoFalsePositive($data['autoFalsePositive']);
        }
        if (\array_key_exists('bestAddressIsPartial', $data)) {
            $object->setBestAddressIsPartial($data['bestAddressIsPartial']);
        }
        if (\array_key_exists('bestCountryScore', $data)) {
            $object->setBestCountryScore($data['bestCountryScore']);
        }
        if (\array_key_exists('bestCountryType', $data)) {
            $object->setBestCountryType($data['bestCountryType']);
        }
        if (\array_key_exists('bestDOBIsPartial', $data)) {
            $object->setBestDOBIsPartial($data['bestDOBIsPartial']);
        }
        if (\array_key_exists('bestName', $data)) {
            $object->setBestName($data['bestName']);
        }
        if (\array_key_exists('bestNameScore', $data)) {
            $object->setBestNameScore($data['bestNameScore']);
        }
        if (\array_key_exists('checkSum', $data)) {
            $object->setCheckSum($data['checkSum']);
        }
        if (\array_key_exists('conflicts', $data)) {
            $object->setConflicts($this->denormalizer->denormalize($data['conflicts'], 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts', 'json', $context));
        }
        if (\array_key_exists('entityDetails', $data)) {
            $object->setEntityDetails($this->denormalizer->denormalize($data['entityDetails'], 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails', 'json', $context));
        }
        if (\array_key_exists('entityName', $data)) {
            $object->setEntityName($data['entityName']);
        }
        if (\array_key_exists('entityScore', $data)) {
            $object->setEntityScore($data['entityScore']);
        }
        if (\array_key_exists('entityUniqueID', $data)) {
            $object->setEntityUniqueID($data['entityUniqueID']);
        }
        if (\array_key_exists('falsePositive', $data)) {
            $object->setFalsePositive($data['falsePositive']);
        }
        if (\array_key_exists('file', $data)) {
            $object->setFile($this->denormalizer->denormalize($data['file'], 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFile', 'json', $context));
        }
        if (\array_key_exists('gatewayOFACScreeningIndicatorMatch', $data)) {
            $object->setGatewayOFACScreeningIndicatorMatch($data['gatewayOFACScreeningIndicatorMatch']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('matchReAlert', $data)) {
            $object->setMatchReAlert($data['matchReAlert']);
        }
        if (\array_key_exists('previousResultID', $data)) {
            $object->setPreviousResultID($data['previousResultID']);
        }
        if (\array_key_exists('reasonListed', $data)) {
            $object->setReasonListed($data['reasonListed']);
        }
        if (\array_key_exists('resultDate', $data)) {
            $object->setResultDate($data['resultDate']);
        }
        if (\array_key_exists('secondaryOFACScreeningIndicatorMatch', $data)) {
            $object->setSecondaryOFACScreeningIndicatorMatch($data['secondaryOFACScreeningIndicatorMatch']);
        }
        if (\array_key_exists('trueMatch', $data)) {
            $object->setTrueMatch($data['trueMatch']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAcceptListID()) {
            $data['acceptListID'] = $object->getAcceptListID();
        }
        if (null !== $object->getAddedToAcceptList()) {
            $data['addedToAcceptList'] = $object->getAddedToAcceptList();
        }
        if (null !== $object->getAddressName()) {
            $data['addressName'] = $object->getAddressName();
        }
        if (null !== $object->getAutoFalsePositive()) {
            $data['autoFalsePositive'] = $object->getAutoFalsePositive();
        }
        if (null !== $object->getBestAddressIsPartial()) {
            $data['bestAddressIsPartial'] = $object->getBestAddressIsPartial();
        }
        if (null !== $object->getBestCountryScore()) {
            $data['bestCountryScore'] = $object->getBestCountryScore();
        }
        if (null !== $object->getBestCountryType()) {
            $data['bestCountryType'] = $object->getBestCountryType();
        }
        if (null !== $object->getBestDOBIsPartial()) {
            $data['bestDOBIsPartial'] = $object->getBestDOBIsPartial();
        }
        if (null !== $object->getBestName()) {
            $data['bestName'] = $object->getBestName();
        }
        if (null !== $object->getBestNameScore()) {
            $data['bestNameScore'] = $object->getBestNameScore();
        }
        if (null !== $object->getCheckSum()) {
            $data['checkSum'] = $object->getCheckSum();
        }
        if (null !== $object->getConflicts()) {
            $data['conflicts'] = $this->normalizer->normalize($object->getConflicts(), 'json', $context);
        }
        if (null !== $object->getEntityDetails()) {
            $data['entityDetails'] = $this->normalizer->normalize($object->getEntityDetails(), 'json', $context);
        }
        if (null !== $object->getEntityName()) {
            $data['entityName'] = $object->getEntityName();
        }
        if (null !== $object->getEntityScore()) {
            $data['entityScore'] = $object->getEntityScore();
        }
        if (null !== $object->getEntityUniqueID()) {
            $data['entityUniqueID'] = $object->getEntityUniqueID();
        }
        if (null !== $object->getFalsePositive()) {
            $data['falsePositive'] = $object->getFalsePositive();
        }
        if (null !== $object->getFile()) {
            $data['file'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
        }
        if (null !== $object->getGatewayOFACScreeningIndicatorMatch()) {
            $data['gatewayOFACScreeningIndicatorMatch'] = $object->getGatewayOFACScreeningIndicatorMatch();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getMatchReAlert()) {
            $data['matchReAlert'] = $object->getMatchReAlert();
        }
        if (null !== $object->getPreviousResultID()) {
            $data['previousResultID'] = $object->getPreviousResultID();
        }
        if (null !== $object->getReasonListed()) {
            $data['reasonListed'] = $object->getReasonListed();
        }
        if (null !== $object->getResultDate()) {
            $data['resultDate'] = $object->getResultDate();
        }
        if (null !== $object->getSecondaryOFACScreeningIndicatorMatch()) {
            $data['secondaryOFACScreeningIndicatorMatch'] = $object->getSecondaryOFACScreeningIndicatorMatch();
        }
        if (null !== $object->getTrueMatch()) {
            $data['trueMatch'] = $object->getTrueMatch();
        }
        return $data;
    }
}