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
class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflictsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts';
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
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addressConflict', $data)) {
            $object->setAddressConflict($data['addressConflict']);
            unset($data['addressConflict']);
        }
        if (\array_key_exists('citizenshipConflict', $data)) {
            $object->setCitizenshipConflict($data['citizenshipConflict']);
            unset($data['citizenshipConflict']);
        }
        if (\array_key_exists('countryConflict', $data)) {
            $object->setCountryConflict($data['countryConflict']);
            unset($data['countryConflict']);
        }
        if (\array_key_exists('dobConflict', $data)) {
            $object->setDobConflict($data['dobConflict']);
            unset($data['dobConflict']);
        }
        if (\array_key_exists('entityTypeConflict', $data)) {
            $object->setEntityTypeConflict($data['entityTypeConflict']);
            unset($data['entityTypeConflict']);
        }
        if (\array_key_exists('genderConflict', $data)) {
            $object->setGenderConflict($data['genderConflict']);
            unset($data['genderConflict']);
        }
        if (\array_key_exists('idConflict', $data)) {
            $object->setIdConflict($data['idConflict']);
            unset($data['idConflict']);
        }
        if (\array_key_exists('phoneConflict', $data)) {
            $object->setPhoneConflict($data['phoneConflict']);
            unset($data['phoneConflict']);
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
        if ($object->isInitialized('addressConflict') && null !== $object->getAddressConflict()) {
            $data['addressConflict'] = $object->getAddressConflict();
        }
        if ($object->isInitialized('citizenshipConflict') && null !== $object->getCitizenshipConflict()) {
            $data['citizenshipConflict'] = $object->getCitizenshipConflict();
        }
        if ($object->isInitialized('countryConflict') && null !== $object->getCountryConflict()) {
            $data['countryConflict'] = $object->getCountryConflict();
        }
        if ($object->isInitialized('dobConflict') && null !== $object->getDobConflict()) {
            $data['dobConflict'] = $object->getDobConflict();
        }
        if ($object->isInitialized('entityTypeConflict') && null !== $object->getEntityTypeConflict()) {
            $data['entityTypeConflict'] = $object->getEntityTypeConflict();
        }
        if ($object->isInitialized('genderConflict') && null !== $object->getGenderConflict()) {
            $data['genderConflict'] = $object->getGenderConflict();
        }
        if ($object->isInitialized('idConflict') && null !== $object->getIdConflict()) {
            $data['idConflict'] = $object->getIdConflict();
        }
        if ($object->isInitialized('phoneConflict') && null !== $object->getPhoneConflict()) {
            $data['phoneConflict'] = $object->getPhoneConflict();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}