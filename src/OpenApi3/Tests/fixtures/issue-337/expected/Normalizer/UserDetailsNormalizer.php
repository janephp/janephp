<?php

namespace CreditSafe\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class UserDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\UserDetails';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\UserDetails';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\UserDetails();
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
        }
        if (\array_key_exists('createdDate', $data)) {
            $object->setCreatedDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdDate']));
        }
        if (\array_key_exists('csCustomerId', $data)) {
            $object->setCsCustomerId($data['csCustomerId']);
        }
        if (\array_key_exists('csUserId', $data)) {
            $object->setCsUserId($data['csUserId']);
        }
        if (\array_key_exists('isAutoTracker', $data)) {
            $object->setIsAutoTracker($data['isAutoTracker']);
        }
        if (\array_key_exists('languageCode', $data)) {
            $object->setLanguageCode($data['languageCode']);
        }
        if (\array_key_exists('lastAccessDate', $data)) {
            $object->setLastAccessDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastAccessDate']));
        }
        if (\array_key_exists('modifiedDate', $data)) {
            $object->setModifiedDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['modifiedDate']));
        }
        if (\array_key_exists('contractEndDate', $data)) {
            $object->setContractEndDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['contractEndDate']));
        }
        if (\array_key_exists('userId', $data)) {
            $object->setUserId($data['userId']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCountryCode()) {
            $data['countryCode'] = $object->getCountryCode();
        }
        if (null !== $object->getCreatedDate()) {
            $data['createdDate'] = $object->getCreatedDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getCsCustomerId()) {
            $data['csCustomerId'] = $object->getCsCustomerId();
        }
        if (null !== $object->getCsUserId()) {
            $data['csUserId'] = $object->getCsUserId();
        }
        if (null !== $object->getIsAutoTracker()) {
            $data['isAutoTracker'] = $object->getIsAutoTracker();
        }
        if (null !== $object->getLanguageCode()) {
            $data['languageCode'] = $object->getLanguageCode();
        }
        if (null !== $object->getLastAccessDate()) {
            $data['lastAccessDate'] = $object->getLastAccessDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getModifiedDate()) {
            $data['modifiedDate'] = $object->getModifiedDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getContractEndDate()) {
            $data['contractEndDate'] = $object->getContractEndDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUserId()) {
            $data['userId'] = $object->getUserId();
        }
        return $data;
    }
}