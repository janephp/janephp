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
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLossNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss';
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
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss();
        if (\array_key_exists('turnover', $data) && \is_int($data['turnover'])) {
            $data['turnover'] = (double) $data['turnover'];
        }
        if (\array_key_exists('costOfSales', $data) && \is_int($data['costOfSales'])) {
            $data['costOfSales'] = (double) $data['costOfSales'];
        }
        if (\array_key_exists('grossProfit', $data) && \is_int($data['grossProfit'])) {
            $data['grossProfit'] = (double) $data['grossProfit'];
        }
        if (\array_key_exists('depreciation', $data) && \is_int($data['depreciation'])) {
            $data['depreciation'] = (double) $data['depreciation'];
        }
        if (\array_key_exists('auditFees', $data) && \is_int($data['auditFees'])) {
            $data['auditFees'] = (double) $data['auditFees'];
        }
        if (\array_key_exists('wagesAndSalaries', $data) && \is_int($data['wagesAndSalaries'])) {
            $data['wagesAndSalaries'] = (double) $data['wagesAndSalaries'];
        }
        if (\array_key_exists('directorsRemuneration', $data) && \is_int($data['directorsRemuneration'])) {
            $data['directorsRemuneration'] = (double) $data['directorsRemuneration'];
        }
        if (\array_key_exists('operatingProfit', $data) && \is_int($data['operatingProfit'])) {
            $data['operatingProfit'] = (double) $data['operatingProfit'];
        }
        if (\array_key_exists('interestExpense', $data) && \is_int($data['interestExpense'])) {
            $data['interestExpense'] = (double) $data['interestExpense'];
        }
        if (\array_key_exists('profitBeforeTax', $data) && \is_int($data['profitBeforeTax'])) {
            $data['profitBeforeTax'] = (double) $data['profitBeforeTax'];
        }
        if (\array_key_exists('taxation', $data) && \is_int($data['taxation'])) {
            $data['taxation'] = (double) $data['taxation'];
        }
        if (\array_key_exists('profitAfterTax', $data) && \is_int($data['profitAfterTax'])) {
            $data['profitAfterTax'] = (double) $data['profitAfterTax'];
        }
        if (\array_key_exists('dividends', $data) && \is_int($data['dividends'])) {
            $data['dividends'] = (double) $data['dividends'];
        }
        if (\array_key_exists('retainedProfit', $data) && \is_int($data['retainedProfit'])) {
            $data['retainedProfit'] = (double) $data['retainedProfit'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('turnover', $data)) {
            $object->setTurnover($data['turnover']);
            unset($data['turnover']);
        }
        if (\array_key_exists('costOfSales', $data)) {
            $object->setCostOfSales($data['costOfSales']);
            unset($data['costOfSales']);
        }
        if (\array_key_exists('grossProfit', $data)) {
            $object->setGrossProfit($data['grossProfit']);
            unset($data['grossProfit']);
        }
        if (\array_key_exists('depreciation', $data)) {
            $object->setDepreciation($data['depreciation']);
            unset($data['depreciation']);
        }
        if (\array_key_exists('auditFees', $data)) {
            $object->setAuditFees($data['auditFees']);
            unset($data['auditFees']);
        }
        if (\array_key_exists('wagesAndSalaries', $data)) {
            $object->setWagesAndSalaries($data['wagesAndSalaries']);
            unset($data['wagesAndSalaries']);
        }
        if (\array_key_exists('directorsRemuneration', $data)) {
            $object->setDirectorsRemuneration($data['directorsRemuneration']);
            unset($data['directorsRemuneration']);
        }
        if (\array_key_exists('operatingProfit', $data)) {
            $object->setOperatingProfit($data['operatingProfit']);
            unset($data['operatingProfit']);
        }
        if (\array_key_exists('interestExpense', $data)) {
            $object->setInterestExpense($data['interestExpense']);
            unset($data['interestExpense']);
        }
        if (\array_key_exists('profitBeforeTax', $data)) {
            $object->setProfitBeforeTax($data['profitBeforeTax']);
            unset($data['profitBeforeTax']);
        }
        if (\array_key_exists('taxation', $data)) {
            $object->setTaxation($data['taxation']);
            unset($data['taxation']);
        }
        if (\array_key_exists('profitAfterTax', $data)) {
            $object->setProfitAfterTax($data['profitAfterTax']);
            unset($data['profitAfterTax']);
        }
        if (\array_key_exists('dividends', $data)) {
            $object->setDividends($data['dividends']);
            unset($data['dividends']);
        }
        if (\array_key_exists('retainedProfit', $data)) {
            $object->setRetainedProfit($data['retainedProfit']);
            unset($data['retainedProfit']);
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
        if ($object->isInitialized('turnover') && null !== $object->getTurnover()) {
            $data['turnover'] = $object->getTurnover();
        }
        if ($object->isInitialized('costOfSales') && null !== $object->getCostOfSales()) {
            $data['costOfSales'] = $object->getCostOfSales();
        }
        if ($object->isInitialized('grossProfit') && null !== $object->getGrossProfit()) {
            $data['grossProfit'] = $object->getGrossProfit();
        }
        if ($object->isInitialized('depreciation') && null !== $object->getDepreciation()) {
            $data['depreciation'] = $object->getDepreciation();
        }
        if ($object->isInitialized('auditFees') && null !== $object->getAuditFees()) {
            $data['auditFees'] = $object->getAuditFees();
        }
        if ($object->isInitialized('wagesAndSalaries') && null !== $object->getWagesAndSalaries()) {
            $data['wagesAndSalaries'] = $object->getWagesAndSalaries();
        }
        if ($object->isInitialized('directorsRemuneration') && null !== $object->getDirectorsRemuneration()) {
            $data['directorsRemuneration'] = $object->getDirectorsRemuneration();
        }
        if ($object->isInitialized('operatingProfit') && null !== $object->getOperatingProfit()) {
            $data['operatingProfit'] = $object->getOperatingProfit();
        }
        if ($object->isInitialized('interestExpense') && null !== $object->getInterestExpense()) {
            $data['interestExpense'] = $object->getInterestExpense();
        }
        if ($object->isInitialized('profitBeforeTax') && null !== $object->getProfitBeforeTax()) {
            $data['profitBeforeTax'] = $object->getProfitBeforeTax();
        }
        if ($object->isInitialized('taxation') && null !== $object->getTaxation()) {
            $data['taxation'] = $object->getTaxation();
        }
        if ($object->isInitialized('profitAfterTax') && null !== $object->getProfitAfterTax()) {
            $data['profitAfterTax'] = $object->getProfitAfterTax();
        }
        if ($object->isInitialized('dividends') && null !== $object->getDividends()) {
            $data['dividends'] = $object->getDividends();
        }
        if ($object->isInitialized('retainedProfit') && null !== $object->getRetainedProfit()) {
            $data['retainedProfit'] = $object->getRetainedProfit();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}