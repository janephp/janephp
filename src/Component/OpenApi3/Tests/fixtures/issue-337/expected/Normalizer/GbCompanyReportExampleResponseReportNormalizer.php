<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
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
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReport::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReport::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $object->setCompanySummary($this->denormalizer->denormalize($data['companySummary'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummary::class, 'json', $context));
            unset($data['companySummary']);
        }
        if (\array_key_exists('companyIdentification', $data)) {
            $object->setCompanyIdentification($this->denormalizer->denormalize($data['companyIdentification'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentification::class, 'json', $context));
            unset($data['companyIdentification']);
        }
        if (\array_key_exists('creditScore', $data)) {
            $object->setCreditScore($this->denormalizer->denormalize($data['creditScore'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScore::class, 'json', $context));
            unset($data['creditScore']);
        }
        if (\array_key_exists('contactInformation', $data)) {
            $object->setContactInformation($this->denormalizer->denormalize($data['contactInformation'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportContactInformation::class, 'json', $context));
            unset($data['contactInformation']);
        }
        if (\array_key_exists('shareCapitalStructure', $data)) {
            $object->setShareCapitalStructure($this->denormalizer->denormalize($data['shareCapitalStructure'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructure::class, 'json', $context));
            unset($data['shareCapitalStructure']);
        }
        if (\array_key_exists('directors', $data)) {
            $object->setDirectors($this->denormalizer->denormalize($data['directors'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectors::class, 'json', $context));
            unset($data['directors']);
        }
        if (\array_key_exists('otherInformation', $data)) {
            $object->setOtherInformation($this->denormalizer->denormalize($data['otherInformation'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportOtherInformation::class, 'json', $context));
            unset($data['otherInformation']);
        }
        if (\array_key_exists('groupStructure', $data)) {
            $object->setGroupStructure($this->denormalizer->denormalize($data['groupStructure'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportGroupStructure::class, 'json', $context));
            unset($data['groupStructure']);
        }
        if (\array_key_exists('extendedGroupStructure', $data)) {
            $values = [];
            foreach ($data['extendedGroupStructure'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportExtendedGroupStructureItem::class, 'json', $context);
            }
            $object->setExtendedGroupStructure($values);
            unset($data['extendedGroupStructure']);
        }
        if (\array_key_exists('financialStatements', $data)) {
            $values_1 = [];
            foreach ($data['financialStatements'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItem::class, 'json', $context);
            }
            $object->setFinancialStatements($values_1);
            unset($data['financialStatements']);
        }
        if (\array_key_exists('localFinancialStatements', $data)) {
            $values_2 = [];
            foreach ($data['localFinancialStatements'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItem::class, 'json', $context);
            }
            $object->setLocalFinancialStatements($values_2);
            unset($data['localFinancialStatements']);
        }
        if (\array_key_exists('paymentData', $data)) {
            $object->setPaymentData($this->denormalizer->denormalize($data['paymentData'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportPaymentData::class, 'json', $context));
            unset($data['paymentData']);
        }
        if (\array_key_exists('negativeInformation', $data)) {
            $object->setNegativeInformation($this->denormalizer->denormalize($data['negativeInformation'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformation::class, 'json', $context));
            unset($data['negativeInformation']);
        }
        if (\array_key_exists('additionalInformation', $data)) {
            $object->setAdditionalInformation($this->denormalizer->denormalize($data['additionalInformation'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformation::class, 'json', $context));
            unset($data['additionalInformation']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('companyId') && null !== $data->getCompanyId()) {
            $dataArray['companyId'] = $data->getCompanyId();
        }
        if ($data->isInitialized('language') && null !== $data->getLanguage()) {
            $dataArray['language'] = $data->getLanguage();
        }
        if ($data->isInitialized('companySummary') && null !== $data->getCompanySummary()) {
            $dataArray['companySummary'] = $this->normalizer->normalize($data->getCompanySummary(), 'json', $context);
        }
        if ($data->isInitialized('companyIdentification') && null !== $data->getCompanyIdentification()) {
            $dataArray['companyIdentification'] = $this->normalizer->normalize($data->getCompanyIdentification(), 'json', $context);
        }
        if ($data->isInitialized('creditScore') && null !== $data->getCreditScore()) {
            $dataArray['creditScore'] = $this->normalizer->normalize($data->getCreditScore(), 'json', $context);
        }
        if ($data->isInitialized('contactInformation') && null !== $data->getContactInformation()) {
            $dataArray['contactInformation'] = $this->normalizer->normalize($data->getContactInformation(), 'json', $context);
        }
        if ($data->isInitialized('shareCapitalStructure') && null !== $data->getShareCapitalStructure()) {
            $dataArray['shareCapitalStructure'] = $this->normalizer->normalize($data->getShareCapitalStructure(), 'json', $context);
        }
        if ($data->isInitialized('directors') && null !== $data->getDirectors()) {
            $dataArray['directors'] = $this->normalizer->normalize($data->getDirectors(), 'json', $context);
        }
        if ($data->isInitialized('otherInformation') && null !== $data->getOtherInformation()) {
            $dataArray['otherInformation'] = $this->normalizer->normalize($data->getOtherInformation(), 'json', $context);
        }
        if ($data->isInitialized('groupStructure') && null !== $data->getGroupStructure()) {
            $dataArray['groupStructure'] = $this->normalizer->normalize($data->getGroupStructure(), 'json', $context);
        }
        if ($data->isInitialized('extendedGroupStructure') && null !== $data->getExtendedGroupStructure()) {
            $values = [];
            foreach ($data->getExtendedGroupStructure() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['extendedGroupStructure'] = $values;
        }
        if ($data->isInitialized('financialStatements') && null !== $data->getFinancialStatements()) {
            $values_1 = [];
            foreach ($data->getFinancialStatements() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['financialStatements'] = $values_1;
        }
        if ($data->isInitialized('localFinancialStatements') && null !== $data->getLocalFinancialStatements()) {
            $values_2 = [];
            foreach ($data->getLocalFinancialStatements() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['localFinancialStatements'] = $values_2;
        }
        if ($data->isInitialized('paymentData') && null !== $data->getPaymentData()) {
            $dataArray['paymentData'] = $this->normalizer->normalize($data->getPaymentData(), 'json', $context);
        }
        if ($data->isInitialized('negativeInformation') && null !== $data->getNegativeInformation()) {
            $dataArray['negativeInformation'] = $this->normalizer->normalize($data->getNegativeInformation(), 'json', $context);
        }
        if ($data->isInitialized('additionalInformation') && null !== $data->getAdditionalInformation()) {
            $dataArray['additionalInformation'] = $this->normalizer->normalize($data->getAdditionalInformation(), 'json', $context);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReport::class => false];
    }
}