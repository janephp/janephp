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
class GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
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
        if (\array_key_exists('totalTangibleAssets', $data) && \is_int($data['totalTangibleAssets'])) {
            $data['totalTangibleAssets'] = (double) $data['totalTangibleAssets'];
        }
        if (\array_key_exists('totalIntangibleAssets', $data) && \is_int($data['totalIntangibleAssets'])) {
            $data['totalIntangibleAssets'] = (double) $data['totalIntangibleAssets'];
        }
        if (\array_key_exists('totalOtherFixedAssets', $data) && \is_int($data['totalOtherFixedAssets'])) {
            $data['totalOtherFixedAssets'] = (double) $data['totalOtherFixedAssets'];
        }
        if (\array_key_exists('totalFixedAssets', $data) && \is_int($data['totalFixedAssets'])) {
            $data['totalFixedAssets'] = (double) $data['totalFixedAssets'];
        }
        if (\array_key_exists('totalInventories', $data) && \is_int($data['totalInventories'])) {
            $data['totalInventories'] = (double) $data['totalInventories'];
        }
        if (\array_key_exists('tradeReceivables', $data) && \is_int($data['tradeReceivables'])) {
            $data['tradeReceivables'] = (double) $data['tradeReceivables'];
        }
        if (\array_key_exists('miscellaneousReceivables', $data) && \is_int($data['miscellaneousReceivables'])) {
            $data['miscellaneousReceivables'] = (double) $data['miscellaneousReceivables'];
        }
        if (\array_key_exists('totalReceivables', $data) && \is_int($data['totalReceivables'])) {
            $data['totalReceivables'] = (double) $data['totalReceivables'];
        }
        if (\array_key_exists('cash', $data) && \is_int($data['cash'])) {
            $data['cash'] = (double) $data['cash'];
        }
        if (\array_key_exists('otherCurrentAssets', $data) && \is_int($data['otherCurrentAssets'])) {
            $data['otherCurrentAssets'] = (double) $data['otherCurrentAssets'];
        }
        if (\array_key_exists('totalCurrentAssets', $data) && \is_int($data['totalCurrentAssets'])) {
            $data['totalCurrentAssets'] = (double) $data['totalCurrentAssets'];
        }
        if (\array_key_exists('totalAssets', $data) && \is_int($data['totalAssets'])) {
            $data['totalAssets'] = (double) $data['totalAssets'];
        }
        if (\array_key_exists('tradePayables', $data) && \is_int($data['tradePayables'])) {
            $data['tradePayables'] = (double) $data['tradePayables'];
        }
        if (\array_key_exists('bankLiabilities', $data) && \is_int($data['bankLiabilities'])) {
            $data['bankLiabilities'] = (double) $data['bankLiabilities'];
        }
        if (\array_key_exists('otherLoansOrFinance', $data) && \is_int($data['otherLoansOrFinance'])) {
            $data['otherLoansOrFinance'] = (double) $data['otherLoansOrFinance'];
        }
        if (\array_key_exists('miscellaneousLiabilities', $data) && \is_int($data['miscellaneousLiabilities'])) {
            $data['miscellaneousLiabilities'] = (double) $data['miscellaneousLiabilities'];
        }
        if (\array_key_exists('totalCurrentLiabilities', $data) && \is_int($data['totalCurrentLiabilities'])) {
            $data['totalCurrentLiabilities'] = (double) $data['totalCurrentLiabilities'];
        }
        if (\array_key_exists('bankLiabilitiesDueAfter1Year', $data) && \is_int($data['bankLiabilitiesDueAfter1Year'])) {
            $data['bankLiabilitiesDueAfter1Year'] = (double) $data['bankLiabilitiesDueAfter1Year'];
        }
        if (\array_key_exists('otherLoansOrFinanceDueAfter1Year', $data) && \is_int($data['otherLoansOrFinanceDueAfter1Year'])) {
            $data['otherLoansOrFinanceDueAfter1Year'] = (double) $data['otherLoansOrFinanceDueAfter1Year'];
        }
        if (\array_key_exists('miscellaneousLiabilitiesDueAfter1Year', $data) && \is_int($data['miscellaneousLiabilitiesDueAfter1Year'])) {
            $data['miscellaneousLiabilitiesDueAfter1Year'] = (double) $data['miscellaneousLiabilitiesDueAfter1Year'];
        }
        if (\array_key_exists('totalLongTermLiabilities', $data) && \is_int($data['totalLongTermLiabilities'])) {
            $data['totalLongTermLiabilities'] = (double) $data['totalLongTermLiabilities'];
        }
        if (\array_key_exists('totalLiabilities', $data) && \is_int($data['totalLiabilities'])) {
            $data['totalLiabilities'] = (double) $data['totalLiabilities'];
        }
        if (\array_key_exists('calledUpShareCapital', $data) && \is_int($data['calledUpShareCapital'])) {
            $data['calledUpShareCapital'] = (double) $data['calledUpShareCapital'];
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
        if (\array_key_exists('totalTangibleAssets', $data)) {
            $object->setTotalTangibleAssets($data['totalTangibleAssets']);
            unset($data['totalTangibleAssets']);
        }
        if (\array_key_exists('totalIntangibleAssets', $data)) {
            $object->setTotalIntangibleAssets($data['totalIntangibleAssets']);
            unset($data['totalIntangibleAssets']);
        }
        if (\array_key_exists('totalOtherFixedAssets', $data)) {
            $object->setTotalOtherFixedAssets($data['totalOtherFixedAssets']);
            unset($data['totalOtherFixedAssets']);
        }
        if (\array_key_exists('totalFixedAssets', $data)) {
            $object->setTotalFixedAssets($data['totalFixedAssets']);
            unset($data['totalFixedAssets']);
        }
        if (\array_key_exists('totalInventories', $data)) {
            $object->setTotalInventories($data['totalInventories']);
            unset($data['totalInventories']);
        }
        if (\array_key_exists('tradeReceivables', $data)) {
            $object->setTradeReceivables($data['tradeReceivables']);
            unset($data['tradeReceivables']);
        }
        if (\array_key_exists('miscellaneousReceivables', $data)) {
            $object->setMiscellaneousReceivables($data['miscellaneousReceivables']);
            unset($data['miscellaneousReceivables']);
        }
        if (\array_key_exists('totalReceivables', $data)) {
            $object->setTotalReceivables($data['totalReceivables']);
            unset($data['totalReceivables']);
        }
        if (\array_key_exists('cash', $data)) {
            $object->setCash($data['cash']);
            unset($data['cash']);
        }
        if (\array_key_exists('otherCurrentAssets', $data)) {
            $object->setOtherCurrentAssets($data['otherCurrentAssets']);
            unset($data['otherCurrentAssets']);
        }
        if (\array_key_exists('totalCurrentAssets', $data)) {
            $object->setTotalCurrentAssets($data['totalCurrentAssets']);
            unset($data['totalCurrentAssets']);
        }
        if (\array_key_exists('totalAssets', $data)) {
            $object->setTotalAssets($data['totalAssets']);
            unset($data['totalAssets']);
        }
        if (\array_key_exists('tradePayables', $data)) {
            $object->setTradePayables($data['tradePayables']);
            unset($data['tradePayables']);
        }
        if (\array_key_exists('bankLiabilities', $data)) {
            $object->setBankLiabilities($data['bankLiabilities']);
            unset($data['bankLiabilities']);
        }
        if (\array_key_exists('otherLoansOrFinance', $data)) {
            $object->setOtherLoansOrFinance($data['otherLoansOrFinance']);
            unset($data['otherLoansOrFinance']);
        }
        if (\array_key_exists('miscellaneousLiabilities', $data)) {
            $object->setMiscellaneousLiabilities($data['miscellaneousLiabilities']);
            unset($data['miscellaneousLiabilities']);
        }
        if (\array_key_exists('totalCurrentLiabilities', $data)) {
            $object->setTotalCurrentLiabilities($data['totalCurrentLiabilities']);
            unset($data['totalCurrentLiabilities']);
        }
        if (\array_key_exists('bankLiabilitiesDueAfter1Year', $data)) {
            $object->setBankLiabilitiesDueAfter1Year($data['bankLiabilitiesDueAfter1Year']);
            unset($data['bankLiabilitiesDueAfter1Year']);
        }
        if (\array_key_exists('otherLoansOrFinanceDueAfter1Year', $data)) {
            $object->setOtherLoansOrFinanceDueAfter1Year($data['otherLoansOrFinanceDueAfter1Year']);
            unset($data['otherLoansOrFinanceDueAfter1Year']);
        }
        if (\array_key_exists('miscellaneousLiabilitiesDueAfter1Year', $data)) {
            $object->setMiscellaneousLiabilitiesDueAfter1Year($data['miscellaneousLiabilitiesDueAfter1Year']);
            unset($data['miscellaneousLiabilitiesDueAfter1Year']);
        }
        if (\array_key_exists('totalLongTermLiabilities', $data)) {
            $object->setTotalLongTermLiabilities($data['totalLongTermLiabilities']);
            unset($data['totalLongTermLiabilities']);
        }
        if (\array_key_exists('totalLiabilities', $data)) {
            $object->setTotalLiabilities($data['totalLiabilities']);
            unset($data['totalLiabilities']);
        }
        if (\array_key_exists('calledUpShareCapital', $data)) {
            $object->setCalledUpShareCapital($data['calledUpShareCapital']);
            unset($data['calledUpShareCapital']);
        }
        if (\array_key_exists('revenueReserves', $data)) {
            $object->setRevenueReserves($data['revenueReserves']);
            unset($data['revenueReserves']);
        }
        if (\array_key_exists('otherReserves', $data)) {
            $object->setOtherReserves($data['otherReserves']);
            unset($data['otherReserves']);
        }
        if (\array_key_exists('totalShareholdersEquity', $data)) {
            $object->setTotalShareholdersEquity($data['totalShareholdersEquity']);
            unset($data['totalShareholdersEquity']);
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
        if ($object->isInitialized('totalTangibleAssets') && null !== $object->getTotalTangibleAssets()) {
            $data['totalTangibleAssets'] = $object->getTotalTangibleAssets();
        }
        if ($object->isInitialized('totalIntangibleAssets') && null !== $object->getTotalIntangibleAssets()) {
            $data['totalIntangibleAssets'] = $object->getTotalIntangibleAssets();
        }
        if ($object->isInitialized('totalOtherFixedAssets') && null !== $object->getTotalOtherFixedAssets()) {
            $data['totalOtherFixedAssets'] = $object->getTotalOtherFixedAssets();
        }
        if ($object->isInitialized('totalFixedAssets') && null !== $object->getTotalFixedAssets()) {
            $data['totalFixedAssets'] = $object->getTotalFixedAssets();
        }
        if ($object->isInitialized('totalInventories') && null !== $object->getTotalInventories()) {
            $data['totalInventories'] = $object->getTotalInventories();
        }
        if ($object->isInitialized('tradeReceivables') && null !== $object->getTradeReceivables()) {
            $data['tradeReceivables'] = $object->getTradeReceivables();
        }
        if ($object->isInitialized('miscellaneousReceivables') && null !== $object->getMiscellaneousReceivables()) {
            $data['miscellaneousReceivables'] = $object->getMiscellaneousReceivables();
        }
        if ($object->isInitialized('totalReceivables') && null !== $object->getTotalReceivables()) {
            $data['totalReceivables'] = $object->getTotalReceivables();
        }
        if ($object->isInitialized('cash') && null !== $object->getCash()) {
            $data['cash'] = $object->getCash();
        }
        if ($object->isInitialized('otherCurrentAssets') && null !== $object->getOtherCurrentAssets()) {
            $data['otherCurrentAssets'] = $object->getOtherCurrentAssets();
        }
        if ($object->isInitialized('totalCurrentAssets') && null !== $object->getTotalCurrentAssets()) {
            $data['totalCurrentAssets'] = $object->getTotalCurrentAssets();
        }
        if ($object->isInitialized('totalAssets') && null !== $object->getTotalAssets()) {
            $data['totalAssets'] = $object->getTotalAssets();
        }
        if ($object->isInitialized('tradePayables') && null !== $object->getTradePayables()) {
            $data['tradePayables'] = $object->getTradePayables();
        }
        if ($object->isInitialized('bankLiabilities') && null !== $object->getBankLiabilities()) {
            $data['bankLiabilities'] = $object->getBankLiabilities();
        }
        if ($object->isInitialized('otherLoansOrFinance') && null !== $object->getOtherLoansOrFinance()) {
            $data['otherLoansOrFinance'] = $object->getOtherLoansOrFinance();
        }
        if ($object->isInitialized('miscellaneousLiabilities') && null !== $object->getMiscellaneousLiabilities()) {
            $data['miscellaneousLiabilities'] = $object->getMiscellaneousLiabilities();
        }
        if ($object->isInitialized('totalCurrentLiabilities') && null !== $object->getTotalCurrentLiabilities()) {
            $data['totalCurrentLiabilities'] = $object->getTotalCurrentLiabilities();
        }
        if ($object->isInitialized('bankLiabilitiesDueAfter1Year') && null !== $object->getBankLiabilitiesDueAfter1Year()) {
            $data['bankLiabilitiesDueAfter1Year'] = $object->getBankLiabilitiesDueAfter1Year();
        }
        if ($object->isInitialized('otherLoansOrFinanceDueAfter1Year') && null !== $object->getOtherLoansOrFinanceDueAfter1Year()) {
            $data['otherLoansOrFinanceDueAfter1Year'] = $object->getOtherLoansOrFinanceDueAfter1Year();
        }
        if ($object->isInitialized('miscellaneousLiabilitiesDueAfter1Year') && null !== $object->getMiscellaneousLiabilitiesDueAfter1Year()) {
            $data['miscellaneousLiabilitiesDueAfter1Year'] = $object->getMiscellaneousLiabilitiesDueAfter1Year();
        }
        if ($object->isInitialized('totalLongTermLiabilities') && null !== $object->getTotalLongTermLiabilities()) {
            $data['totalLongTermLiabilities'] = $object->getTotalLongTermLiabilities();
        }
        if ($object->isInitialized('totalLiabilities') && null !== $object->getTotalLiabilities()) {
            $data['totalLiabilities'] = $object->getTotalLiabilities();
        }
        if ($object->isInitialized('calledUpShareCapital') && null !== $object->getCalledUpShareCapital()) {
            $data['calledUpShareCapital'] = $object->getCalledUpShareCapital();
        }
        if ($object->isInitialized('revenueReserves') && null !== $object->getRevenueReserves()) {
            $data['revenueReserves'] = $object->getRevenueReserves();
        }
        if ($object->isInitialized('otherReserves') && null !== $object->getOtherReserves()) {
            $data['otherReserves'] = $object->getOtherReserves();
        }
        if ($object->isInitialized('totalShareholdersEquity') && null !== $object->getTotalShareholdersEquity()) {
            $data['totalShareholdersEquity'] = $object->getTotalShareholdersEquity();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}