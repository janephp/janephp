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
class GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet';
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
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('totalTangibleAssets', $data)) {
            $object->setTotalTangibleAssets($data['totalTangibleAssets']);
        }
        if (\array_key_exists('totalIntangibleAssets', $data)) {
            $object->setTotalIntangibleAssets($data['totalIntangibleAssets']);
        }
        if (\array_key_exists('totalOtherFixedAssets', $data)) {
            $object->setTotalOtherFixedAssets($data['totalOtherFixedAssets']);
        }
        if (\array_key_exists('totalFixedAssets', $data)) {
            $object->setTotalFixedAssets($data['totalFixedAssets']);
        }
        if (\array_key_exists('totalInventories', $data)) {
            $object->setTotalInventories($data['totalInventories']);
        }
        if (\array_key_exists('tradeReceivables', $data)) {
            $object->setTradeReceivables($data['tradeReceivables']);
        }
        if (\array_key_exists('miscellaneousReceivables', $data)) {
            $object->setMiscellaneousReceivables($data['miscellaneousReceivables']);
        }
        if (\array_key_exists('totalReceivables', $data)) {
            $object->setTotalReceivables($data['totalReceivables']);
        }
        if (\array_key_exists('cash', $data)) {
            $object->setCash($data['cash']);
        }
        if (\array_key_exists('otherCurrentAssets', $data)) {
            $object->setOtherCurrentAssets($data['otherCurrentAssets']);
        }
        if (\array_key_exists('totalCurrentAssets', $data)) {
            $object->setTotalCurrentAssets($data['totalCurrentAssets']);
        }
        if (\array_key_exists('totalAssets', $data)) {
            $object->setTotalAssets($data['totalAssets']);
        }
        if (\array_key_exists('tradePayables', $data)) {
            $object->setTradePayables($data['tradePayables']);
        }
        if (\array_key_exists('bankLiabilities', $data)) {
            $object->setBankLiabilities($data['bankLiabilities']);
        }
        if (\array_key_exists('otherLoansOrFinance', $data)) {
            $object->setOtherLoansOrFinance($data['otherLoansOrFinance']);
        }
        if (\array_key_exists('miscellaneousLiabilities', $data)) {
            $object->setMiscellaneousLiabilities($data['miscellaneousLiabilities']);
        }
        if (\array_key_exists('totalCurrentLiabilities', $data)) {
            $object->setTotalCurrentLiabilities($data['totalCurrentLiabilities']);
        }
        if (\array_key_exists('bankLiabilitiesDueAfter1Year', $data)) {
            $object->setBankLiabilitiesDueAfter1Year($data['bankLiabilitiesDueAfter1Year']);
        }
        if (\array_key_exists('otherLoansOrFinanceDueAfter1Year', $data)) {
            $object->setOtherLoansOrFinanceDueAfter1Year($data['otherLoansOrFinanceDueAfter1Year']);
        }
        if (\array_key_exists('miscellaneousLiabilitiesDueAfter1Year', $data)) {
            $object->setMiscellaneousLiabilitiesDueAfter1Year($data['miscellaneousLiabilitiesDueAfter1Year']);
        }
        if (\array_key_exists('totalLongTermLiabilities', $data)) {
            $object->setTotalLongTermLiabilities($data['totalLongTermLiabilities']);
        }
        if (\array_key_exists('totalLiabilities', $data)) {
            $object->setTotalLiabilities($data['totalLiabilities']);
        }
        if (\array_key_exists('calledUpShareCapital', $data)) {
            $object->setCalledUpShareCapital($data['calledUpShareCapital']);
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
        if (null !== $object->getTotalTangibleAssets()) {
            $data['totalTangibleAssets'] = $object->getTotalTangibleAssets();
        }
        if (null !== $object->getTotalIntangibleAssets()) {
            $data['totalIntangibleAssets'] = $object->getTotalIntangibleAssets();
        }
        if (null !== $object->getTotalOtherFixedAssets()) {
            $data['totalOtherFixedAssets'] = $object->getTotalOtherFixedAssets();
        }
        if (null !== $object->getTotalFixedAssets()) {
            $data['totalFixedAssets'] = $object->getTotalFixedAssets();
        }
        if (null !== $object->getTotalInventories()) {
            $data['totalInventories'] = $object->getTotalInventories();
        }
        if (null !== $object->getTradeReceivables()) {
            $data['tradeReceivables'] = $object->getTradeReceivables();
        }
        if (null !== $object->getMiscellaneousReceivables()) {
            $data['miscellaneousReceivables'] = $object->getMiscellaneousReceivables();
        }
        if (null !== $object->getTotalReceivables()) {
            $data['totalReceivables'] = $object->getTotalReceivables();
        }
        if (null !== $object->getCash()) {
            $data['cash'] = $object->getCash();
        }
        if (null !== $object->getOtherCurrentAssets()) {
            $data['otherCurrentAssets'] = $object->getOtherCurrentAssets();
        }
        if (null !== $object->getTotalCurrentAssets()) {
            $data['totalCurrentAssets'] = $object->getTotalCurrentAssets();
        }
        if (null !== $object->getTotalAssets()) {
            $data['totalAssets'] = $object->getTotalAssets();
        }
        if (null !== $object->getTradePayables()) {
            $data['tradePayables'] = $object->getTradePayables();
        }
        if (null !== $object->getBankLiabilities()) {
            $data['bankLiabilities'] = $object->getBankLiabilities();
        }
        if (null !== $object->getOtherLoansOrFinance()) {
            $data['otherLoansOrFinance'] = $object->getOtherLoansOrFinance();
        }
        if (null !== $object->getMiscellaneousLiabilities()) {
            $data['miscellaneousLiabilities'] = $object->getMiscellaneousLiabilities();
        }
        if (null !== $object->getTotalCurrentLiabilities()) {
            $data['totalCurrentLiabilities'] = $object->getTotalCurrentLiabilities();
        }
        if (null !== $object->getBankLiabilitiesDueAfter1Year()) {
            $data['bankLiabilitiesDueAfter1Year'] = $object->getBankLiabilitiesDueAfter1Year();
        }
        if (null !== $object->getOtherLoansOrFinanceDueAfter1Year()) {
            $data['otherLoansOrFinanceDueAfter1Year'] = $object->getOtherLoansOrFinanceDueAfter1Year();
        }
        if (null !== $object->getMiscellaneousLiabilitiesDueAfter1Year()) {
            $data['miscellaneousLiabilitiesDueAfter1Year'] = $object->getMiscellaneousLiabilitiesDueAfter1Year();
        }
        if (null !== $object->getTotalLongTermLiabilities()) {
            $data['totalLongTermLiabilities'] = $object->getTotalLongTermLiabilities();
        }
        if (null !== $object->getTotalLiabilities()) {
            $data['totalLiabilities'] = $object->getTotalLiabilities();
        }
        if (null !== $object->getCalledUpShareCapital()) {
            $data['calledUpShareCapital'] = $object->getCalledUpShareCapital();
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