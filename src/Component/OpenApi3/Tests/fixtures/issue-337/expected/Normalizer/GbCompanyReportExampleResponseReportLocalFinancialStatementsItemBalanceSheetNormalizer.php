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
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet';
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
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet();
        if (\array_key_exists('tangibleAssets', $data) && \is_int($data['tangibleAssets'])) {
            $data['tangibleAssets'] = (double) $data['tangibleAssets'];
        }
        if (\array_key_exists('intangibleAssets', $data) && \is_int($data['intangibleAssets'])) {
            $data['intangibleAssets'] = (double) $data['intangibleAssets'];
        }
        if (\array_key_exists('totalFixedAssets', $data) && \is_int($data['totalFixedAssets'])) {
            $data['totalFixedAssets'] = (double) $data['totalFixedAssets'];
        }
        if (\array_key_exists('stock', $data) && \is_int($data['stock'])) {
            $data['stock'] = (double) $data['stock'];
        }
        if (\array_key_exists('tradeDebtors', $data) && \is_int($data['tradeDebtors'])) {
            $data['tradeDebtors'] = (double) $data['tradeDebtors'];
        }
        if (\array_key_exists('otherDebtors', $data) && \is_int($data['otherDebtors'])) {
            $data['otherDebtors'] = (double) $data['otherDebtors'];
        }
        if (\array_key_exists('cash', $data) && \is_int($data['cash'])) {
            $data['cash'] = (double) $data['cash'];
        }
        if (\array_key_exists('miscCurrentAssets', $data) && \is_int($data['miscCurrentAssets'])) {
            $data['miscCurrentAssets'] = (double) $data['miscCurrentAssets'];
        }
        if (\array_key_exists('totalCurrentAssets', $data) && \is_int($data['totalCurrentAssets'])) {
            $data['totalCurrentAssets'] = (double) $data['totalCurrentAssets'];
        }
        if (\array_key_exists('totalAssets', $data) && \is_int($data['totalAssets'])) {
            $data['totalAssets'] = (double) $data['totalAssets'];
        }
        if (\array_key_exists('tradeCreditors', $data) && \is_int($data['tradeCreditors'])) {
            $data['tradeCreditors'] = (double) $data['tradeCreditors'];
        }
        if (\array_key_exists('bankBorrowingsCurrent', $data) && \is_int($data['bankBorrowingsCurrent'])) {
            $data['bankBorrowingsCurrent'] = (double) $data['bankBorrowingsCurrent'];
        }
        if (\array_key_exists('otherShortTermFinance', $data) && \is_int($data['otherShortTermFinance'])) {
            $data['otherShortTermFinance'] = (double) $data['otherShortTermFinance'];
        }
        if (\array_key_exists('miscCurrentLiabilities', $data) && \is_int($data['miscCurrentLiabilities'])) {
            $data['miscCurrentLiabilities'] = (double) $data['miscCurrentLiabilities'];
        }
        if (\array_key_exists('totalCurrentLiabilities', $data) && \is_int($data['totalCurrentLiabilities'])) {
            $data['totalCurrentLiabilities'] = (double) $data['totalCurrentLiabilities'];
        }
        if (\array_key_exists('otherLongTermFinance', $data) && \is_int($data['otherLongTermFinance'])) {
            $data['otherLongTermFinance'] = (double) $data['otherLongTermFinance'];
        }
        if (\array_key_exists('totalLongTermLiabilities', $data) && \is_int($data['totalLongTermLiabilities'])) {
            $data['totalLongTermLiabilities'] = (double) $data['totalLongTermLiabilities'];
        }
        if (\array_key_exists('totalLiabilities', $data) && \is_int($data['totalLiabilities'])) {
            $data['totalLiabilities'] = (double) $data['totalLiabilities'];
        }
        if (\array_key_exists('netAssets', $data) && \is_int($data['netAssets'])) {
            $data['netAssets'] = (double) $data['netAssets'];
        }
        if (\array_key_exists('issuedShareCapital', $data) && \is_int($data['issuedShareCapital'])) {
            $data['issuedShareCapital'] = (double) $data['issuedShareCapital'];
        }
        if (\array_key_exists('revaluationReserve', $data) && \is_int($data['revaluationReserve'])) {
            $data['revaluationReserve'] = (double) $data['revaluationReserve'];
        }
        if (\array_key_exists('revenueReserves', $data) && \is_int($data['revenueReserves'])) {
            $data['revenueReserves'] = (double) $data['revenueReserves'];
        }
        if (\array_key_exists('otherReserves', $data) && \is_int($data['otherReserves'])) {
            $data['otherReserves'] = (double) $data['otherReserves'];
        }
        if (\array_key_exists('totalShareholdersEquity', $data) && \is_int($data['totalShareholdersEquity'])) {
            $data['totalShareholdersEquity'] = (double) $data['totalShareholdersEquity'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tangibleAssets', $data)) {
            $object->setTangibleAssets($data['tangibleAssets']);
        }
        if (\array_key_exists('intangibleAssets', $data)) {
            $object->setIntangibleAssets($data['intangibleAssets']);
        }
        if (\array_key_exists('totalFixedAssets', $data)) {
            $object->setTotalFixedAssets($data['totalFixedAssets']);
        }
        if (\array_key_exists('stock', $data)) {
            $object->setStock($data['stock']);
        }
        if (\array_key_exists('tradeDebtors', $data)) {
            $object->setTradeDebtors($data['tradeDebtors']);
        }
        if (\array_key_exists('otherDebtors', $data)) {
            $object->setOtherDebtors($data['otherDebtors']);
        }
        if (\array_key_exists('cash', $data)) {
            $object->setCash($data['cash']);
        }
        if (\array_key_exists('miscCurrentAssets', $data)) {
            $object->setMiscCurrentAssets($data['miscCurrentAssets']);
        }
        if (\array_key_exists('totalCurrentAssets', $data)) {
            $object->setTotalCurrentAssets($data['totalCurrentAssets']);
        }
        if (\array_key_exists('totalAssets', $data)) {
            $object->setTotalAssets($data['totalAssets']);
        }
        if (\array_key_exists('tradeCreditors', $data)) {
            $object->setTradeCreditors($data['tradeCreditors']);
        }
        if (\array_key_exists('bankBorrowingsCurrent', $data)) {
            $object->setBankBorrowingsCurrent($data['bankBorrowingsCurrent']);
        }
        if (\array_key_exists('otherShortTermFinance', $data)) {
            $object->setOtherShortTermFinance($data['otherShortTermFinance']);
        }
        if (\array_key_exists('miscCurrentLiabilities', $data)) {
            $object->setMiscCurrentLiabilities($data['miscCurrentLiabilities']);
        }
        if (\array_key_exists('totalCurrentLiabilities', $data)) {
            $object->setTotalCurrentLiabilities($data['totalCurrentLiabilities']);
        }
        if (\array_key_exists('otherLongTermFinance', $data)) {
            $object->setOtherLongTermFinance($data['otherLongTermFinance']);
        }
        if (\array_key_exists('totalLongTermLiabilities', $data)) {
            $object->setTotalLongTermLiabilities($data['totalLongTermLiabilities']);
        }
        if (\array_key_exists('totalLiabilities', $data)) {
            $object->setTotalLiabilities($data['totalLiabilities']);
        }
        if (\array_key_exists('netAssets', $data)) {
            $object->setNetAssets($data['netAssets']);
        }
        if (\array_key_exists('issuedShareCapital', $data)) {
            $object->setIssuedShareCapital($data['issuedShareCapital']);
        }
        if (\array_key_exists('revaluationReserve', $data)) {
            $object->setRevaluationReserve($data['revaluationReserve']);
        }
        if (\array_key_exists('revenueReserves', $data)) {
            $object->setRevenueReserves($data['revenueReserves']);
        }
        if (\array_key_exists('otherReserves', $data)) {
            $object->setOtherReserves($data['otherReserves']);
        }
        if (\array_key_exists('totalShareholdersEquity', $data)) {
            $object->setTotalShareholdersEquity($data['totalShareholdersEquity']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTangibleAssets()) {
            $data['tangibleAssets'] = $object->getTangibleAssets();
        }
        if (null !== $object->getIntangibleAssets()) {
            $data['intangibleAssets'] = $object->getIntangibleAssets();
        }
        if (null !== $object->getTotalFixedAssets()) {
            $data['totalFixedAssets'] = $object->getTotalFixedAssets();
        }
        if (null !== $object->getStock()) {
            $data['stock'] = $object->getStock();
        }
        if (null !== $object->getTradeDebtors()) {
            $data['tradeDebtors'] = $object->getTradeDebtors();
        }
        if (null !== $object->getOtherDebtors()) {
            $data['otherDebtors'] = $object->getOtherDebtors();
        }
        if (null !== $object->getCash()) {
            $data['cash'] = $object->getCash();
        }
        if (null !== $object->getMiscCurrentAssets()) {
            $data['miscCurrentAssets'] = $object->getMiscCurrentAssets();
        }
        if (null !== $object->getTotalCurrentAssets()) {
            $data['totalCurrentAssets'] = $object->getTotalCurrentAssets();
        }
        if (null !== $object->getTotalAssets()) {
            $data['totalAssets'] = $object->getTotalAssets();
        }
        if (null !== $object->getTradeCreditors()) {
            $data['tradeCreditors'] = $object->getTradeCreditors();
        }
        if (null !== $object->getBankBorrowingsCurrent()) {
            $data['bankBorrowingsCurrent'] = $object->getBankBorrowingsCurrent();
        }
        if (null !== $object->getOtherShortTermFinance()) {
            $data['otherShortTermFinance'] = $object->getOtherShortTermFinance();
        }
        if (null !== $object->getMiscCurrentLiabilities()) {
            $data['miscCurrentLiabilities'] = $object->getMiscCurrentLiabilities();
        }
        if (null !== $object->getTotalCurrentLiabilities()) {
            $data['totalCurrentLiabilities'] = $object->getTotalCurrentLiabilities();
        }
        if (null !== $object->getOtherLongTermFinance()) {
            $data['otherLongTermFinance'] = $object->getOtherLongTermFinance();
        }
        if (null !== $object->getTotalLongTermLiabilities()) {
            $data['totalLongTermLiabilities'] = $object->getTotalLongTermLiabilities();
        }
        if (null !== $object->getTotalLiabilities()) {
            $data['totalLiabilities'] = $object->getTotalLiabilities();
        }
        if (null !== $object->getNetAssets()) {
            $data['netAssets'] = $object->getNetAssets();
        }
        if (null !== $object->getIssuedShareCapital()) {
            $data['issuedShareCapital'] = $object->getIssuedShareCapital();
        }
        if (null !== $object->getRevaluationReserve()) {
            $data['revaluationReserve'] = $object->getRevaluationReserve();
        }
        if (null !== $object->getRevenueReserves()) {
            $data['revenueReserves'] = $object->getRevenueReserves();
        }
        if (null !== $object->getOtherReserves()) {
            $data['otherReserves'] = $object->getOtherReserves();
        }
        if (null !== $object->getTotalShareholdersEquity()) {
            $data['totalShareholdersEquity'] = $object->getTotalShareholdersEquity();
        }
        return $data;
    }
}