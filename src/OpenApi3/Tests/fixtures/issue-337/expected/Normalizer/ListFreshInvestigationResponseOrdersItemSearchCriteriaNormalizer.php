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
class ListFreshInvestigationResponseOrdersItemSearchCriteriaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\ListFreshInvestigationResponseOrdersItemSearchCriteria';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ListFreshInvestigationResponseOrdersItemSearchCriteria';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItemSearchCriteria();
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('vatNo', $data)) {
            $object->setVatNo($data['vatNo']);
        }
        if (\array_key_exists('regNo', $data)) {
            $object->setRegNo($data['regNo']);
        }
        if (\array_key_exists('additionalInfo', $data)) {
            $object->setAdditionalInfo($data['additionalInfo']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], 'CreditSafe\\API\\Model\\ListFreshInvestigationResponseOrdersItemSearchCriteriaAddress', 'json', $context));
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getVatNo()) {
            $data['vatNo'] = $object->getVatNo();
        }
        if (null !== $object->getRegNo()) {
            $data['regNo'] = $object->getRegNo();
        }
        if (null !== $object->getAdditionalInfo()) {
            $data['additionalInfo'] = $object->getAdditionalInfo();
        }
        if (null !== $object->getAddress()) {
            $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if (null !== $object->getCountryCode()) {
            $data['countryCode'] = $object->getCountryCode();
        }
        return $data;
    }
}