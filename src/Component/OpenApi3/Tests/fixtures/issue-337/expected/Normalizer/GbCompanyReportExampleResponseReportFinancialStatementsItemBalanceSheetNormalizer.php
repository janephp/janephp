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
            $data['totalTangibleAssets'] = (float) $data['totalTangibleAssets'];
        }
        if (\array_key_exists('totalIntangibleAssets', $data) && \is_int($data['totalIntangibleAssets'])) {
            $data['totalIntangibleAssets'] = (float) $data['totalIntangibleAssets'];
        }
        if (\array_key_exists('totalOtherFixedAssets', $data) && \is_int($data['totalOtherFixedAssets'])) {
            $data['totalOtherFixedAssets'] = (float) $data['totalOtherFixedAssets'];
        }
        if (\array_key_exists('totalFixedAssets', $data) && \is_int($data['totalFixedAssets'])) {
            $data['totalFixedAssets'] = (float) $data['totalFixedAssets'];
        }
        if (\array_key_exists('totalInventories', $data) && \is_int($data['totalInventories'])) {
            $data['totalInventories'] = (float) $data['totalInventories'];
        }
        if (\array_key_exists('tradeReceivables', $data) && \is_int($data['tradeReceivables'])) {
            $data['tradeReceivables'] = (float) $data['tradeReceivables'];
        }
        if (\array_key_exists('miscellaneousReceivables', $data) && \is_int($data['miscellaneousReceivables'])) {
            $data['miscellaneousReceivables'] = (float) $data['miscellaneousReceivables'];
        }
        if (\array_key_exists('totalReceivables', $data) && \is_int($data['totalReceivables'])) {
            $data['totalReceivables'] = (float) $data['totalReceivables'];
        }
        if (\array_key_exists('cash', $data) && \is_int($data['cash'])) {
            $data['cash'] = (float) $data['cash'];
        }
        if (\array_key_exists('otherCurrentAssets', $data) && \is_int($data['otherCurrentAssets'])) {
            $data['otherCurrentAssets'] = (float) $data['otherCurrentAssets'];
        }
        if (\array_key_exists('totalCurrentAssets', $data) && \is_int($data['totalCurrentAssets'])) {
            $data['totalCurrentAssets'] = (float) $data['totalCurrentAssets'];
        }
        if (\array_key_exists('totalAssets', $data) && \is_int($data['totalAssets'])) {
            $data['totalAssets'] = (float) $data['totalAssets'];
        }
        if (\array_key_exists('tradePayables', $data) && \is_int($data['tradePayables'])) {
            $data['tradePayables'] = (float) $data['tradePayables'];
        }
        if (\array_key_exists('bankLiabilities', $data) && \is_int($data['bankLiabilities'])) {
            $data['bankLiabilities'] = (float) $data['bankLiabilities'];
        }
        if (\array_key_exists('otherLoansOrFinance', $data) && \is_int($data['otherLoansOrFinance'])) {
            $data['otherLoansOrFinance'] = (float) $data['otherLoansOrFinance'];
        }
        if (\array_key_exists('miscellaneousLiabilities', $data) && \is_int($data['miscellaneousLiabilities'])) {
            $data['miscellaneousLiabilities'] = (float) $data['miscellaneousLiabilities'];
        }
        if (\array_key_exists('totalCurrentLiabilities', $data) && \is_int($data['totalCurrentLiabilities'])) {
            $data['totalCurrentLiabilities'] = (float) $data['totalCurrentLiabilities'];
        }
        if (\array_key_exists('bankLiabilitiesDueAfter1Year', $data) && \is_int($data['bankLiabilitiesDueAfter1Year'])) {
            $data['bankLiabilitiesDueAfter1Year'] = (float) $data['bankLiabilitiesDueAfter1Year'];
        }
        if (\array_key_exists('otherLoansOrFinanceDueAfter1Year', $data) && \is_int($data['otherLoansOrFinanceDueAfter1Year'])) {
            $data['otherLoansOrFinanceDueAfter1Year'] = (float) $data['otherLoansOrFinanceDueAfter1Year'];
        }
        if (\array_key_exists('miscellaneousLiabilitiesDueAfter1Year', $data) && \is_int($data['miscellaneousLiabilitiesDueAfter1Year'])) {
            $data['miscellaneousLiabilitiesDueAfter1Year'] = (float) $data['miscellaneousLiabilitiesDueAfter1Year'];
        }
        if (\array_key_exists('totalLongTermLiabilities', $data) && \is_int($data['totalLongTermLiabilities'])) {
            $data['totalLongTermLiabilities'] = (float) $data['totalLongTermLiabilities'];
        }
        if (\array_key_exists('totalLiabilities', $data) && \is_int($data['totalLiabilities'])) {
            $data['totalLiabilities'] = (float) $data['totalLiabilities'];
        }
        if (\array_key_exists('calledUpShareCapital', $data) && \is_int($data['calledUpShareCapital'])) {
            $data['calledUpShareCapital'] = (float) $data['calledUpShareCapital'];
        }
        if (\array_key_exists('revenueReserves', $data) && \is_int($data['revenueReserves'])) {
            $data['revenueReserves'] = (float) $data['revenueReserves'];
        }
        if (\array_key_exists('otherReserves', $data) && \is_int($data['otherReserves'])) {
            $data['otherReserves'] = (float) $data['otherReserves'];
        }
        if (\array_key_exists('totalShareholdersEquity', $data) && \is_int($data['totalShareholdersEquity'])) {
            $data['totalShareholdersEquity'] = (float) $data['totalShareholdersEquity'];
        }
        if (\array_key_exists('totalTangibleAssets', $data)) {
            $object->totalTangibleAssets = $data['totalTangibleAssets'];
            unset($data['totalTangibleAssets']);
        }
        if (\array_key_exists('totalIntangibleAssets', $data)) {
            $object->totalIntangibleAssets = $data['totalIntangibleAssets'];
            unset($data['totalIntangibleAssets']);
        }
        if (\array_key_exists('totalOtherFixedAssets', $data)) {
            $object->totalOtherFixedAssets = $data['totalOtherFixedAssets'];
            unset($data['totalOtherFixedAssets']);
        }
        if (\array_key_exists('totalFixedAssets', $data)) {
            $object->totalFixedAssets = $data['totalFixedAssets'];
            unset($data['totalFixedAssets']);
        }
        if (\array_key_exists('totalInventories', $data)) {
            $object->totalInventories = $data['totalInventories'];
            unset($data['totalInventories']);
        }
        if (\array_key_exists('tradeReceivables', $data)) {
            $object->tradeReceivables = $data['tradeReceivables'];
            unset($data['tradeReceivables']);
        }
        if (\array_key_exists('miscellaneousReceivables', $data)) {
            $object->miscellaneousReceivables = $data['miscellaneousReceivables'];
            unset($data['miscellaneousReceivables']);
        }
        if (\array_key_exists('totalReceivables', $data)) {
            $object->totalReceivables = $data['totalReceivables'];
            unset($data['totalReceivables']);
        }
        if (\array_key_exists('cash', $data)) {
            $object->cash = $data['cash'];
            unset($data['cash']);
        }
        if (\array_key_exists('otherCurrentAssets', $data)) {
            $object->otherCurrentAssets = $data['otherCurrentAssets'];
            unset($data['otherCurrentAssets']);
        }
        if (\array_key_exists('totalCurrentAssets', $data)) {
            $object->totalCurrentAssets = $data['totalCurrentAssets'];
            unset($data['totalCurrentAssets']);
        }
        if (\array_key_exists('totalAssets', $data)) {
            $object->totalAssets = $data['totalAssets'];
            unset($data['totalAssets']);
        }
        if (\array_key_exists('tradePayables', $data)) {
            $object->tradePayables = $data['tradePayables'];
            unset($data['tradePayables']);
        }
        if (\array_key_exists('bankLiabilities', $data)) {
            $object->bankLiabilities = $data['bankLiabilities'];
            unset($data['bankLiabilities']);
        }
        if (\array_key_exists('otherLoansOrFinance', $data)) {
            $object->otherLoansOrFinance = $data['otherLoansOrFinance'];
            unset($data['otherLoansOrFinance']);
        }
        if (\array_key_exists('miscellaneousLiabilities', $data)) {
            $object->miscellaneousLiabilities = $data['miscellaneousLiabilities'];
            unset($data['miscellaneousLiabilities']);
        }
        if (\array_key_exists('totalCurrentLiabilities', $data)) {
            $object->totalCurrentLiabilities = $data['totalCurrentLiabilities'];
            unset($data['totalCurrentLiabilities']);
        }
        if (\array_key_exists('bankLiabilitiesDueAfter1Year', $data)) {
            $object->bankLiabilitiesDueAfter1Year = $data['bankLiabilitiesDueAfter1Year'];
            unset($data['bankLiabilitiesDueAfter1Year']);
        }
        if (\array_key_exists('otherLoansOrFinanceDueAfter1Year', $data)) {
            $object->otherLoansOrFinanceDueAfter1Year = $data['otherLoansOrFinanceDueAfter1Year'];
            unset($data['otherLoansOrFinanceDueAfter1Year']);
        }
        if (\array_key_exists('miscellaneousLiabilitiesDueAfter1Year', $data)) {
            $object->miscellaneousLiabilitiesDueAfter1Year = $data['miscellaneousLiabilitiesDueAfter1Year'];
            unset($data['miscellaneousLiabilitiesDueAfter1Year']);
        }
        if (\array_key_exists('totalLongTermLiabilities', $data)) {
            $object->totalLongTermLiabilities = $data['totalLongTermLiabilities'];
            unset($data['totalLongTermLiabilities']);
        }
        if (\array_key_exists('totalLiabilities', $data)) {
            $object->totalLiabilities = $data['totalLiabilities'];
            unset($data['totalLiabilities']);
        }
        if (\array_key_exists('calledUpShareCapital', $data)) {
            $object->calledUpShareCapital = $data['calledUpShareCapital'];
            unset($data['calledUpShareCapital']);
        }
        if (\array_key_exists('revenueReserves', $data)) {
            $object->revenueReserves = $data['revenueReserves'];
            unset($data['revenueReserves']);
        }
        if (\array_key_exists('otherReserves', $data)) {
            $object->otherReserves = $data['otherReserves'];
            unset($data['otherReserves']);
        }
        if (\array_key_exists('totalShareholdersEquity', $data)) {
            $object->totalShareholdersEquity = $data['totalShareholdersEquity'];
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
        if (array_key_exists('totalTangibleAssets', get_object_vars($data)) && null !== ($data->totalTangibleAssets ?? null)) {
            $dataArray['totalTangibleAssets'] = $data->totalTangibleAssets ?? null;
        }
        if (array_key_exists('totalIntangibleAssets', get_object_vars($data)) && null !== ($data->totalIntangibleAssets ?? null)) {
            $dataArray['totalIntangibleAssets'] = $data->totalIntangibleAssets ?? null;
        }
        if (array_key_exists('totalOtherFixedAssets', get_object_vars($data)) && null !== ($data->totalOtherFixedAssets ?? null)) {
            $dataArray['totalOtherFixedAssets'] = $data->totalOtherFixedAssets ?? null;
        }
        if (array_key_exists('totalFixedAssets', get_object_vars($data)) && null !== ($data->totalFixedAssets ?? null)) {
            $dataArray['totalFixedAssets'] = $data->totalFixedAssets ?? null;
        }
        if (array_key_exists('totalInventories', get_object_vars($data)) && null !== ($data->totalInventories ?? null)) {
            $dataArray['totalInventories'] = $data->totalInventories ?? null;
        }
        if (array_key_exists('tradeReceivables', get_object_vars($data)) && null !== ($data->tradeReceivables ?? null)) {
            $dataArray['tradeReceivables'] = $data->tradeReceivables ?? null;
        }
        if (array_key_exists('miscellaneousReceivables', get_object_vars($data)) && null !== ($data->miscellaneousReceivables ?? null)) {
            $dataArray['miscellaneousReceivables'] = $data->miscellaneousReceivables ?? null;
        }
        if (array_key_exists('totalReceivables', get_object_vars($data)) && null !== ($data->totalReceivables ?? null)) {
            $dataArray['totalReceivables'] = $data->totalReceivables ?? null;
        }
        if (array_key_exists('cash', get_object_vars($data)) && null !== ($data->cash ?? null)) {
            $dataArray['cash'] = $data->cash ?? null;
        }
        if (array_key_exists('otherCurrentAssets', get_object_vars($data)) && null !== ($data->otherCurrentAssets ?? null)) {
            $dataArray['otherCurrentAssets'] = $data->otherCurrentAssets ?? null;
        }
        if (array_key_exists('totalCurrentAssets', get_object_vars($data)) && null !== ($data->totalCurrentAssets ?? null)) {
            $dataArray['totalCurrentAssets'] = $data->totalCurrentAssets ?? null;
        }
        if (array_key_exists('totalAssets', get_object_vars($data)) && null !== ($data->totalAssets ?? null)) {
            $dataArray['totalAssets'] = $data->totalAssets ?? null;
        }
        if (array_key_exists('tradePayables', get_object_vars($data)) && null !== ($data->tradePayables ?? null)) {
            $dataArray['tradePayables'] = $data->tradePayables ?? null;
        }
        if (array_key_exists('bankLiabilities', get_object_vars($data)) && null !== ($data->bankLiabilities ?? null)) {
            $dataArray['bankLiabilities'] = $data->bankLiabilities ?? null;
        }
        if (array_key_exists('otherLoansOrFinance', get_object_vars($data)) && null !== ($data->otherLoansOrFinance ?? null)) {
            $dataArray['otherLoansOrFinance'] = $data->otherLoansOrFinance ?? null;
        }
        if (array_key_exists('miscellaneousLiabilities', get_object_vars($data)) && null !== ($data->miscellaneousLiabilities ?? null)) {
            $dataArray['miscellaneousLiabilities'] = $data->miscellaneousLiabilities ?? null;
        }
        if (array_key_exists('totalCurrentLiabilities', get_object_vars($data)) && null !== ($data->totalCurrentLiabilities ?? null)) {
            $dataArray['totalCurrentLiabilities'] = $data->totalCurrentLiabilities ?? null;
        }
        if (array_key_exists('bankLiabilitiesDueAfter1Year', get_object_vars($data)) && null !== ($data->bankLiabilitiesDueAfter1Year ?? null)) {
            $dataArray['bankLiabilitiesDueAfter1Year'] = $data->bankLiabilitiesDueAfter1Year ?? null;
        }
        if (array_key_exists('otherLoansOrFinanceDueAfter1Year', get_object_vars($data)) && null !== ($data->otherLoansOrFinanceDueAfter1Year ?? null)) {
            $dataArray['otherLoansOrFinanceDueAfter1Year'] = $data->otherLoansOrFinanceDueAfter1Year ?? null;
        }
        if (array_key_exists('miscellaneousLiabilitiesDueAfter1Year', get_object_vars($data)) && null !== ($data->miscellaneousLiabilitiesDueAfter1Year ?? null)) {
            $dataArray['miscellaneousLiabilitiesDueAfter1Year'] = $data->miscellaneousLiabilitiesDueAfter1Year ?? null;
        }
        if (array_key_exists('totalLongTermLiabilities', get_object_vars($data)) && null !== ($data->totalLongTermLiabilities ?? null)) {
            $dataArray['totalLongTermLiabilities'] = $data->totalLongTermLiabilities ?? null;
        }
        if (array_key_exists('totalLiabilities', get_object_vars($data)) && null !== ($data->totalLiabilities ?? null)) {
            $dataArray['totalLiabilities'] = $data->totalLiabilities ?? null;
        }
        if (array_key_exists('calledUpShareCapital', get_object_vars($data)) && null !== ($data->calledUpShareCapital ?? null)) {
            $dataArray['calledUpShareCapital'] = $data->calledUpShareCapital ?? null;
        }
        if (array_key_exists('revenueReserves', get_object_vars($data)) && null !== ($data->revenueReserves ?? null)) {
            $dataArray['revenueReserves'] = $data->revenueReserves ?? null;
        }
        if (array_key_exists('otherReserves', get_object_vars($data)) && null !== ($data->otherReserves ?? null)) {
            $dataArray['otherReserves'] = $data->otherReserves ?? null;
        }
        if (array_key_exists('totalShareholdersEquity', get_object_vars($data)) && null !== ($data->totalShareholdersEquity ?? null)) {
            $dataArray['totalShareholdersEquity'] = $data->totalShareholdersEquity ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
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