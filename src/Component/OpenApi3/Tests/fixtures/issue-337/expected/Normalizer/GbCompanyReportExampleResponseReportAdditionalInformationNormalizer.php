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
class GbCompanyReportExampleResponseReportAdditionalInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformation';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformation';
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
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('companyHistory', $data)) {
            $values = array();
            foreach ($data['companyHistory'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationCompanyHistoryItem', 'json', $context);
            }
            $object->setCompanyHistory($values);
            unset($data['companyHistory']);
        }
        if (\array_key_exists('mortgageSummary', $data)) {
            $object->setMortgageSummary($this->denormalizer->denormalize($data['mortgageSummary'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary', 'json', $context));
            unset($data['mortgageSummary']);
        }
        if (\array_key_exists('mortgageDetails', $data)) {
            $values_1 = array();
            foreach ($data['mortgageDetails'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem', 'json', $context);
            }
            $object->setMortgageDetails($values_1);
            unset($data['mortgageDetails']);
        }
        if (\array_key_exists('commentaries', $data)) {
            $values_2 = array();
            foreach ($data['commentaries'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItem', 'json', $context);
            }
            $object->setCommentaries($values_2);
            unset($data['commentaries']);
        }
        if (\array_key_exists('ratingHistory', $data)) {
            $values_3 = array();
            foreach ($data['ratingHistory'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationRatingHistoryItem', 'json', $context);
            }
            $object->setRatingHistory($values_3);
            unset($data['ratingHistory']);
        }
        if (\array_key_exists('creditLimitHistory', $data)) {
            $values_4 = array();
            foreach ($data['creditLimitHistory'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItem', 'json', $context);
            }
            $object->setCreditLimitHistory($values_4);
            unset($data['creditLimitHistory']);
        }
        if (\array_key_exists('badDebtDetails', $data)) {
            $values_5 = array();
            foreach ($data['badDebtDetails'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem', 'json', $context);
            }
            $object->setBadDebtDetails($values_5);
            unset($data['badDebtDetails']);
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_6;
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
        if ($object->isInitialized('companyHistory') && null !== $object->getCompanyHistory()) {
            $values = array();
            foreach ($object->getCompanyHistory() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['companyHistory'] = $values;
        }
        if ($object->isInitialized('mortgageSummary') && null !== $object->getMortgageSummary()) {
            $data['mortgageSummary'] = $this->normalizer->normalize($object->getMortgageSummary(), 'json', $context);
        }
        if ($object->isInitialized('mortgageDetails') && null !== $object->getMortgageDetails()) {
            $values_1 = array();
            foreach ($object->getMortgageDetails() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['mortgageDetails'] = $values_1;
        }
        if ($object->isInitialized('commentaries') && null !== $object->getCommentaries()) {
            $values_2 = array();
            foreach ($object->getCommentaries() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['commentaries'] = $values_2;
        }
        if ($object->isInitialized('ratingHistory') && null !== $object->getRatingHistory()) {
            $values_3 = array();
            foreach ($object->getRatingHistory() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['ratingHistory'] = $values_3;
        }
        if ($object->isInitialized('creditLimitHistory') && null !== $object->getCreditLimitHistory()) {
            $values_4 = array();
            foreach ($object->getCreditLimitHistory() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['creditLimitHistory'] = $values_4;
        }
        if ($object->isInitialized('badDebtDetails') && null !== $object->getBadDebtDetails()) {
            $values_5 = array();
            foreach ($object->getBadDebtDetails() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['badDebtDetails'] = $values_5;
        }
        foreach ($object as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_6;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformation' => false);
    }
}