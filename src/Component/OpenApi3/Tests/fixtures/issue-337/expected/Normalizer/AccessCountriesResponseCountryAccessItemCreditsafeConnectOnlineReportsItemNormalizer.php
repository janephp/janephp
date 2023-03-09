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
class AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem';
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
        $object = new \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('countryName', $data)) {
            $object->setCountryName($data['countryName']);
            unset($data['countryName']);
        }
        if (\array_key_exists('templateName', $data)) {
            $object->setTemplateName($data['templateName']);
            unset($data['templateName']);
        }
        if (\array_key_exists('countryIso2', $data)) {
            $object->setCountryIso2($data['countryIso2']);
            unset($data['countryIso2']);
        }
        if (\array_key_exists('startDate', $data)) {
            $object->setStartDate($data['startDate']);
            unset($data['startDate']);
        }
        if (\array_key_exists('expireDate', $data)) {
            $object->setExpireDate($data['expireDate']);
            unset($data['expireDate']);
        }
        if (\array_key_exists('paid', $data)) {
            $object->setPaid($data['paid']);
            unset($data['paid']);
        }
        if (\array_key_exists('used', $data)) {
            $object->setUsed($data['used']);
            unset($data['used']);
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
        if ($object->isInitialized('countryName') && null !== $object->getCountryName()) {
            $data['countryName'] = $object->getCountryName();
        }
        if ($object->isInitialized('templateName') && null !== $object->getTemplateName()) {
            $data['templateName'] = $object->getTemplateName();
        }
        if ($object->isInitialized('countryIso2') && null !== $object->getCountryIso2()) {
            $data['countryIso2'] = $object->getCountryIso2();
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['startDate'] = $object->getStartDate();
        }
        if ($object->isInitialized('expireDate') && null !== $object->getExpireDate()) {
            $data['expireDate'] = $object->getExpireDate();
        }
        if ($object->isInitialized('paid') && null !== $object->getPaid()) {
            $data['paid'] = $object->getPaid();
        }
        if ($object->isInitialized('used') && null !== $object->getUsed()) {
            $data['used'] = $object->getUsed();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}