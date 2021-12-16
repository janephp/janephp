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
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItem';
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
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('yearEndDate', $data)) {
            $object->setYearEndDate($data['yearEndDate']);
        }
        if (\array_key_exists('numberOfWeeks', $data)) {
            $object->setNumberOfWeeks($data['numberOfWeeks']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($data['currency']);
        }
        if (\array_key_exists('consolidatedAccounts', $data)) {
            $object->setConsolidatedAccounts($data['consolidatedAccounts']);
        }
        if (\array_key_exists('auditQualification', $data)) {
            $object->setAuditQualification($data['auditQualification']);
        }
        if (\array_key_exists('profitAndLoss', $data)) {
            $object->setProfitAndLoss($this->denormalizer->denormalize($data['profitAndLoss'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss', 'json', $context));
        }
        if (\array_key_exists('balanceSheet', $data)) {
            $object->setBalanceSheet($this->denormalizer->denormalize($data['balanceSheet'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet', 'json', $context));
        }
        if (\array_key_exists('cashFlow', $data)) {
            $object->setCashFlow($this->denormalizer->denormalize($data['cashFlow'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow', 'json', $context));
        }
        if (\array_key_exists('otherFinancials', $data)) {
            $object->setOtherFinancials($this->denormalizer->denormalize($data['otherFinancials'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials', 'json', $context));
        }
        if (\array_key_exists('ratios', $data)) {
            $object->setRatios($this->denormalizer->denormalize($data['ratios'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getYearEndDate()) {
            $data['yearEndDate'] = $object->getYearEndDate();
        }
        if (null !== $object->getNumberOfWeeks()) {
            $data['numberOfWeeks'] = $object->getNumberOfWeeks();
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if (null !== $object->getConsolidatedAccounts()) {
            $data['consolidatedAccounts'] = $object->getConsolidatedAccounts();
        }
        if (null !== $object->getAuditQualification()) {
            $data['auditQualification'] = $object->getAuditQualification();
        }
        if (null !== $object->getProfitAndLoss()) {
            $data['profitAndLoss'] = $this->normalizer->normalize($object->getProfitAndLoss(), 'json', $context);
        }
        if (null !== $object->getBalanceSheet()) {
            $data['balanceSheet'] = $this->normalizer->normalize($object->getBalanceSheet(), 'json', $context);
        }
        if (null !== $object->getCashFlow()) {
            $data['cashFlow'] = $this->normalizer->normalize($object->getCashFlow(), 'json', $context);
        }
        if (null !== $object->getOtherFinancials()) {
            $data['otherFinancials'] = $this->normalizer->normalize($object->getOtherFinancials(), 'json', $context);
        }
        if (null !== $object->getRatios()) {
            $data['ratios'] = $this->normalizer->normalize($object->getRatios(), 'json', $context);
        }
        return $data;
    }
}