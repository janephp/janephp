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
class GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('totalTangibleAssets') && null !== $data->getTotalTangibleAssets()) {
            $dataArray['totalTangibleAssets'] = $data->getTotalTangibleAssets();
        }
        if ($data->isInitialized('totalIntangibleAssets') && null !== $data->getTotalIntangibleAssets()) {
            $dataArray['totalIntangibleAssets'] = $data->getTotalIntangibleAssets();
        }
        if ($data->isInitialized('totalOtherFixedAssets') && null !== $data->getTotalOtherFixedAssets()) {
            $dataArray['totalOtherFixedAssets'] = $data->getTotalOtherFixedAssets();
        }
        if ($data->isInitialized('totalFixedAssets') && null !== $data->getTotalFixedAssets()) {
            $dataArray['totalFixedAssets'] = $data->getTotalFixedAssets();
        }
        if ($data->isInitialized('totalInventories') && null !== $data->getTotalInventories()) {
            $dataArray['totalInventories'] = $data->getTotalInventories();
        }
        if ($data->isInitialized('tradeReceivables') && null !== $data->getTradeReceivables()) {
            $dataArray['tradeReceivables'] = $data->getTradeReceivables();
        }
        if ($data->isInitialized('miscellaneousReceivables') && null !== $data->getMiscellaneousReceivables()) {
            $dataArray['miscellaneousReceivables'] = $data->getMiscellaneousReceivables();
        }
        if ($data->isInitialized('totalReceivables') && null !== $data->getTotalReceivables()) {
            $dataArray['totalReceivables'] = $data->getTotalReceivables();
        }
        if ($data->isInitialized('cash') && null !== $data->getCash()) {
            $dataArray['cash'] = $data->getCash();
        }
        if ($data->isInitialized('otherCurrentAssets') && null !== $data->getOtherCurrentAssets()) {
            $dataArray['otherCurrentAssets'] = $data->getOtherCurrentAssets();
        }
        if ($data->isInitialized('totalCurrentAssets') && null !== $data->getTotalCurrentAssets()) {
            $dataArray['totalCurrentAssets'] = $data->getTotalCurrentAssets();
        }
        if ($data->isInitialized('totalAssets') && null !== $data->getTotalAssets()) {
            $dataArray['totalAssets'] = $data->getTotalAssets();
        }
        if ($data->isInitialized('tradePayables') && null !== $data->getTradePayables()) {
            $dataArray['tradePayables'] = $data->getTradePayables();
        }
        if ($data->isInitialized('bankLiabilities') && null !== $data->getBankLiabilities()) {
            $dataArray['bankLiabilities'] = $data->getBankLiabilities();
        }
        if ($data->isInitialized('otherLoansOrFinance') && null !== $data->getOtherLoansOrFinance()) {
            $dataArray['otherLoansOrFinance'] = $data->getOtherLoansOrFinance();
        }
        if ($data->isInitialized('miscellaneousLiabilities') && null !== $data->getMiscellaneousLiabilities()) {
            $dataArray['miscellaneousLiabilities'] = $data->getMiscellaneousLiabilities();
        }
        if ($data->isInitialized('totalCurrentLiabilities') && null !== $data->getTotalCurrentLiabilities()) {
            $dataArray['totalCurrentLiabilities'] = $data->getTotalCurrentLiabilities();
        }
        if ($data->isInitialized('bankLiabilitiesDueAfter1Year') && null !== $data->getBankLiabilitiesDueAfter1Year()) {
            $dataArray['bankLiabilitiesDueAfter1Year'] = $data->getBankLiabilitiesDueAfter1Year();
        }
        if ($data->isInitialized('otherLoansOrFinanceDueAfter1Year') && null !== $data->getOtherLoansOrFinanceDueAfter1Year()) {
            $dataArray['otherLoansOrFinanceDueAfter1Year'] = $data->getOtherLoansOrFinanceDueAfter1Year();
        }
        if ($data->isInitialized('miscellaneousLiabilitiesDueAfter1Year') && null !== $data->getMiscellaneousLiabilitiesDueAfter1Year()) {
            $dataArray['miscellaneousLiabilitiesDueAfter1Year'] = $data->getMiscellaneousLiabilitiesDueAfter1Year();
        }
        if ($data->isInitialized('totalLongTermLiabilities') && null !== $data->getTotalLongTermLiabilities()) {
            $dataArray['totalLongTermLiabilities'] = $data->getTotalLongTermLiabilities();
        }
        if ($data->isInitialized('totalLiabilities') && null !== $data->getTotalLiabilities()) {
            $dataArray['totalLiabilities'] = $data->getTotalLiabilities();
        }
        if ($data->isInitialized('calledUpShareCapital') && null !== $data->getCalledUpShareCapital()) {
            $dataArray['calledUpShareCapital'] = $data->getCalledUpShareCapital();
        }
        if ($data->isInitialized('revenueReserves') && null !== $data->getRevenueReserves()) {
            $dataArray['revenueReserves'] = $data->getRevenueReserves();
        }
        if ($data->isInitialized('otherReserves') && null !== $data->getOtherReserves()) {
            $dataArray['otherReserves'] = $data->getOtherReserves();
        }
        if ($data->isInitialized('totalShareholdersEquity') && null !== $data->getTotalShareholdersEquity()) {
            $dataArray['totalShareholdersEquity'] = $data->getTotalShareholdersEquity();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet::class => false];
    }
}