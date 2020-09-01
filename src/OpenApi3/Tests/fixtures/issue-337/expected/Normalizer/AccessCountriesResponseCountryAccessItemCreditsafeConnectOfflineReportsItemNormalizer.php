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
class AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItem();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('countryIso2', $data)) {
            $object->setCountryIso2($data['countryIso2']);
        }
        if (\array_key_exists('startDate', $data)) {
            $object->setStartDate($data['startDate']);
        }
        if (\array_key_exists('expireDate', $data)) {
            $object->setExpireDate($data['expireDate']);
        }
        if (\array_key_exists('paid', $data)) {
            $object->setPaid($data['paid']);
        }
        if (\array_key_exists('used', $data)) {
            $object->setUsed($data['used']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getCountryIso2()) {
            $data['countryIso2'] = $object->getCountryIso2();
        }
        if (null !== $object->getStartDate()) {
            $data['startDate'] = $object->getStartDate();
        }
        if (null !== $object->getExpireDate()) {
            $data['expireDate'] = $object->getExpireDate();
        }
        if (null !== $object->getPaid()) {
            $data['paid'] = $object->getPaid();
        }
        if (null !== $object->getUsed()) {
            $data['used'] = $object->getUsed();
        }
        return $data;
    }
}