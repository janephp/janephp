<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
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
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation';
    }
    public function supportsNormalization($data, $format = null)
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
        }
        if (\array_key_exists('registeredCompanyName', $data)) {
            $object->setRegisteredCompanyName($data['registeredCompanyName']);
        }
        if (\array_key_exists('companyRegistrationNumber', $data)) {
            $object->setCompanyRegistrationNumber($data['companyRegistrationNumber']);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($data['country']);
        }
        if (\array_key_exists('companyRegistrationDate', $data)) {
            $object->setCompanyRegistrationDate($data['companyRegistrationDate']);
        }
        if (\array_key_exists('legalForm', $data)) {
            $object->setLegalForm($this->denormalizer->denormalize($data['legalForm'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationLegalForm', 'json', $context));
        }
        if (\array_key_exists('companyStatus', $data)) {
            $object->setCompanyStatus($this->denormalizer->denormalize($data['companyStatus'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationCompanyStatus', 'json', $context));
        }
        if (\array_key_exists('principalActivity', $data)) {
            $object->setPrincipalActivity($this->denormalizer->denormalize($data['principalActivity'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivity', 'json', $context));
        }
        if (\array_key_exists('contactAddress', $data)) {
            $object->setContactAddress($this->denormalizer->denormalize($data['contactAddress'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationContactAddress', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBusinessName()) {
            $data['businessName'] = $object->getBusinessName();
        }
        if (null !== $object->getRegisteredCompanyName()) {
            $data['registeredCompanyName'] = $object->getRegisteredCompanyName();
        }
        if (null !== $object->getCompanyRegistrationNumber()) {
            $data['companyRegistrationNumber'] = $object->getCompanyRegistrationNumber();
        }
        if (null !== $object->getCountry()) {
            $data['country'] = $object->getCountry();
        }
        if (null !== $object->getCompanyRegistrationDate()) {
            $data['companyRegistrationDate'] = $object->getCompanyRegistrationDate();
        }
        if (null !== $object->getLegalForm()) {
            $data['legalForm'] = $this->normalizer->normalize($object->getLegalForm(), 'json', $context);
        }
        if (null !== $object->getCompanyStatus()) {
            $data['companyStatus'] = $this->normalizer->normalize($object->getCompanyStatus(), 'json', $context);
        }
        if (null !== $object->getPrincipalActivity()) {
            $data['principalActivity'] = $this->normalizer->normalize($object->getPrincipalActivity(), 'json', $context);
        }
        if (null !== $object->getContactAddress()) {
            $data['contactAddress'] = $this->normalizer->normalize($object->getContactAddress(), 'json', $context);
        }
        return $data;
    }
}