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
class GbCompanyReportExampleResponseReportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReport';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReport';
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
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReport();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('companyId', $data)) {
            $object->setCompanyId($data['companyId']);
            unset($data['companyId']);
        }
        if (\array_key_exists('language', $data)) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        }
        if (\array_key_exists('companySummary', $data)) {
            $object->setCompanySummary($this->denormalizer->denormalize($data['companySummary'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanySummary', 'json', $context));
            unset($data['companySummary']);
        }
        if (\array_key_exists('companyIdentification', $data)) {
            $object->setCompanyIdentification($this->denormalizer->denormalize($data['companyIdentification'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentification', 'json', $context));
            unset($data['companyIdentification']);
        }
        if (\array_key_exists('creditScore', $data)) {
            $object->setCreditScore($this->denormalizer->denormalize($data['creditScore'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScore', 'json', $context));
            unset($data['creditScore']);
        }
        if (\array_key_exists('contactInformation', $data)) {
            $object->setContactInformation($this->denormalizer->denormalize($data['contactInformation'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportContactInformation', 'json', $context));
            unset($data['contactInformation']);
        }
        if (\array_key_exists('shareCapitalStructure', $data)) {
            $object->setShareCapitalStructure($this->denormalizer->denormalize($data['shareCapitalStructure'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportShareCapitalStructure', 'json', $context));
            unset($data['shareCapitalStructure']);
        }
        if (\array_key_exists('directors', $data)) {
            $object->setDirectors($this->denormalizer->denormalize($data['directors'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportDirectors', 'json', $context));
            unset($data['directors']);
        }
        if (\array_key_exists('otherInformation', $data)) {
            $object->setOtherInformation($this->denormalizer->denormalize($data['otherInformation'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportOtherInformation', 'json', $context));
            unset($data['otherInformation']);
        }
        if (\array_key_exists('groupStructure', $data)) {
            $object->setGroupStructure($this->denormalizer->denormalize($data['groupStructure'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportGroupStructure', 'json', $context));
            unset($data['groupStructure']);
        }
        if (\array_key_exists('extendedGroupStructure', $data)) {
            $values = array();
            foreach ($data['extendedGroupStructure'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportExtendedGroupStructureItem', 'json', $context);
            }
            $object->setExtendedGroupStructure($values);
            unset($data['extendedGroupStructure']);
        }
        if (\array_key_exists('financialStatements', $data)) {
            $values_1 = array();
            foreach ($data['financialStatements'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportFinancialStatementsItem', 'json', $context);
            }
            $object->setFinancialStatements($values_1);
            unset($data['financialStatements']);
        }
        if (\array_key_exists('localFinancialStatements', $data)) {
            $values_2 = array();
            foreach ($data['localFinancialStatements'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItem', 'json', $context);
            }
            $object->setLocalFinancialStatements($values_2);
            unset($data['localFinancialStatements']);
        }
        if (\array_key_exists('paymentData', $data)) {
            $object->setPaymentData($this->denormalizer->denormalize($data['paymentData'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportPaymentData', 'json', $context));
            unset($data['paymentData']);
        }
        if (\array_key_exists('negativeInformation', $data)) {
            $object->setNegativeInformation($this->denormalizer->denormalize($data['negativeInformation'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformation', 'json', $context));
            unset($data['negativeInformation']);
        }
        if (\array_key_exists('additionalInformation', $data)) {
            $object->setAdditionalInformation($this->denormalizer->denormalize($data['additionalInformation'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformation', 'json', $context));
            unset($data['additionalInformation']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        if ($object->isInitialized('companyId') && null !== $object->getCompanyId()) {
            $data['companyId'] = $object->getCompanyId();
        }
        if ($object->isInitialized('language') && null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if ($object->isInitialized('companySummary') && null !== $object->getCompanySummary()) {
            $data['companySummary'] = $this->normalizer->normalize($object->getCompanySummary(), 'json', $context);
        }
        if ($object->isInitialized('companyIdentification') && null !== $object->getCompanyIdentification()) {
            $data['companyIdentification'] = $this->normalizer->normalize($object->getCompanyIdentification(), 'json', $context);
        }
        if ($object->isInitialized('creditScore') && null !== $object->getCreditScore()) {
            $data['creditScore'] = $this->normalizer->normalize($object->getCreditScore(), 'json', $context);
        }
        if ($object->isInitialized('contactInformation') && null !== $object->getContactInformation()) {
            $data['contactInformation'] = $this->normalizer->normalize($object->getContactInformation(), 'json', $context);
        }
        if ($object->isInitialized('shareCapitalStructure') && null !== $object->getShareCapitalStructure()) {
            $data['shareCapitalStructure'] = $this->normalizer->normalize($object->getShareCapitalStructure(), 'json', $context);
        }
        if ($object->isInitialized('directors') && null !== $object->getDirectors()) {
            $data['directors'] = $this->normalizer->normalize($object->getDirectors(), 'json', $context);
        }
        if ($object->isInitialized('otherInformation') && null !== $object->getOtherInformation()) {
            $data['otherInformation'] = $this->normalizer->normalize($object->getOtherInformation(), 'json', $context);
        }
        if ($object->isInitialized('groupStructure') && null !== $object->getGroupStructure()) {
            $data['groupStructure'] = $this->normalizer->normalize($object->getGroupStructure(), 'json', $context);
        }
        if ($object->isInitialized('extendedGroupStructure') && null !== $object->getExtendedGroupStructure()) {
            $values = array();
            foreach ($object->getExtendedGroupStructure() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['extendedGroupStructure'] = $values;
        }
        if ($object->isInitialized('financialStatements') && null !== $object->getFinancialStatements()) {
            $values_1 = array();
            foreach ($object->getFinancialStatements() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['financialStatements'] = $values_1;
        }
        if ($object->isInitialized('localFinancialStatements') && null !== $object->getLocalFinancialStatements()) {
            $values_2 = array();
            foreach ($object->getLocalFinancialStatements() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['localFinancialStatements'] = $values_2;
        }
        if ($object->isInitialized('paymentData') && null !== $object->getPaymentData()) {
            $data['paymentData'] = $this->normalizer->normalize($object->getPaymentData(), 'json', $context);
        }
        if ($object->isInitialized('negativeInformation') && null !== $object->getNegativeInformation()) {
            $data['negativeInformation'] = $this->normalizer->normalize($object->getNegativeInformation(), 'json', $context);
        }
        if ($object->isInitialized('additionalInformation') && null !== $object->getAdditionalInformation()) {
            $data['additionalInformation'] = $this->normalizer->normalize($object->getAdditionalInformation(), 'json', $context);
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReport' => false);
    }
}