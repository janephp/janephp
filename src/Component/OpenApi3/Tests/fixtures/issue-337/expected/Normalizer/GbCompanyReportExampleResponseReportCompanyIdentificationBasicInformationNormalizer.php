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
class GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation';
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
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('businessName', $data)) {
            $object->setBusinessName($data['businessName']);
            unset($data['businessName']);
        }
        if (\array_key_exists('registeredCompanyName', $data)) {
            $object->setRegisteredCompanyName($data['registeredCompanyName']);
            unset($data['registeredCompanyName']);
        }
        if (\array_key_exists('companyRegistrationNumber', $data)) {
            $object->setCompanyRegistrationNumber($data['companyRegistrationNumber']);
            unset($data['companyRegistrationNumber']);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($data['country']);
            unset($data['country']);
        }
        if (\array_key_exists('companyRegistrationDate', $data)) {
            $object->setCompanyRegistrationDate($data['companyRegistrationDate']);
            unset($data['companyRegistrationDate']);
        }
        if (\array_key_exists('legalForm', $data)) {
            $object->setLegalForm($this->denormalizer->denormalize($data['legalForm'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationLegalForm', 'json', $context));
            unset($data['legalForm']);
        }
        if (\array_key_exists('companyStatus', $data)) {
            $object->setCompanyStatus($this->denormalizer->denormalize($data['companyStatus'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationCompanyStatus', 'json', $context));
            unset($data['companyStatus']);
        }
        if (\array_key_exists('principalActivity', $data)) {
            $object->setPrincipalActivity($this->denormalizer->denormalize($data['principalActivity'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivity', 'json', $context));
            unset($data['principalActivity']);
        }
        if (\array_key_exists('contactAddress', $data)) {
            $object->setContactAddress($this->denormalizer->denormalize($data['contactAddress'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationContactAddress', 'json', $context));
            unset($data['contactAddress']);
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
        if ($object->isInitialized('businessName') && null !== $object->getBusinessName()) {
            $data['businessName'] = $object->getBusinessName();
        }
        if ($object->isInitialized('registeredCompanyName') && null !== $object->getRegisteredCompanyName()) {
            $data['registeredCompanyName'] = $object->getRegisteredCompanyName();
        }
        if ($object->isInitialized('companyRegistrationNumber') && null !== $object->getCompanyRegistrationNumber()) {
            $data['companyRegistrationNumber'] = $object->getCompanyRegistrationNumber();
        }
        if ($object->isInitialized('country') && null !== $object->getCountry()) {
            $data['country'] = $object->getCountry();
        }
        if ($object->isInitialized('companyRegistrationDate') && null !== $object->getCompanyRegistrationDate()) {
            $data['companyRegistrationDate'] = $object->getCompanyRegistrationDate();
        }
        if ($object->isInitialized('legalForm') && null !== $object->getLegalForm()) {
            $data['legalForm'] = $object->getLegalForm() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getLegalForm(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('companyStatus') && null !== $object->getCompanyStatus()) {
            $data['companyStatus'] = $object->getCompanyStatus() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getCompanyStatus(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('principalActivity') && null !== $object->getPrincipalActivity()) {
            $data['principalActivity'] = $object->getPrincipalActivity() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getPrincipalActivity(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('contactAddress') && null !== $object->getContactAddress()) {
            $data['contactAddress'] = $object->getContactAddress() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getContactAddress(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation' => false);
    }
}