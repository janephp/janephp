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
class GbCompanyReportExampleResponseReportExtendedGroupStructureItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportExtendedGroupStructureItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportExtendedGroupStructureItem';
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
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportExtendedGroupStructureItem();
        if (\array_key_exists('level', $data) && \is_int($data['level'])) {
            $data['level'] = (double) $data['level'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($data['country']);
            unset($data['country']);
        }
        if (\array_key_exists('safeNumber', $data)) {
            $object->setSafeNumber($data['safeNumber']);
            unset($data['safeNumber']);
        }
        if (\array_key_exists('companyName', $data)) {
            $object->setCompanyName($data['companyName']);
            unset($data['companyName']);
        }
        if (\array_key_exists('registeredNumber', $data)) {
            $object->setRegisteredNumber($data['registeredNumber']);
            unset($data['registeredNumber']);
        }
        if (\array_key_exists('latestAnnualAccounts', $data)) {
            $object->setLatestAnnualAccounts($data['latestAnnualAccounts']);
            unset($data['latestAnnualAccounts']);
        }
        if (\array_key_exists('level', $data)) {
            $object->setLevel($data['level']);
            unset($data['level']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('country') && null !== $object->getCountry()) {
            $data['country'] = $object->getCountry();
        }
        if ($object->isInitialized('safeNumber') && null !== $object->getSafeNumber()) {
            $data['safeNumber'] = $object->getSafeNumber();
        }
        if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
            $data['companyName'] = $object->getCompanyName();
        }
        if ($object->isInitialized('registeredNumber') && null !== $object->getRegisteredNumber()) {
            $data['registeredNumber'] = $object->getRegisteredNumber();
        }
        if ($object->isInitialized('latestAnnualAccounts') && null !== $object->getLatestAnnualAccounts()) {
            $data['latestAnnualAccounts'] = $object->getLatestAnnualAccounts();
        }
        if ($object->isInitialized('level') && null !== $object->getLevel()) {
            $data['level'] = $object->getLevel();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}