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
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('tangibleAssets', $data) && \is_int($data['tangibleAssets'])) {
            $data['tangibleAssets'] = (float) $data['tangibleAssets'];
        }
        if (\array_key_exists('intangibleAssets', $data) && \is_int($data['intangibleAssets'])) {
            $data['intangibleAssets'] = (float) $data['intangibleAssets'];
        }
        if (\array_key_exists('totalFixedAssets', $data) && \is_int($data['totalFixedAssets'])) {
            $data['totalFixedAssets'] = (float) $data['totalFixedAssets'];
        }
        if (\array_key_exists('stock', $data) && \is_int($data['stock'])) {
            $data['stock'] = (float) $data['stock'];
        }
        if (\array_key_exists('tradeDebtors', $data) && \is_int($data['tradeDebtors'])) {
            $data['tradeDebtors'] = (float) $data['tradeDebtors'];
        }
        if (\array_key_exists('otherDebtors', $data) && \is_int($data['otherDebtors'])) {
            $data['otherDebtors'] = (float) $data['otherDebtors'];
        }
        if (\array_key_exists('cash', $data) && \is_int($data['cash'])) {
            $data['cash'] = (float) $data['cash'];
        }
        if (\array_key_exists('miscCurrentAssets', $data) && \is_int($data['miscCurrentAssets'])) {
            $data['miscCurrentAssets'] = (float) $data['miscCurrentAssets'];
        }
        if (\array_key_exists('totalCurrentAssets', $data) && \is_int($data['totalCurrentAssets'])) {
            $data['totalCurrentAssets'] = (float) $data['totalCurrentAssets'];
        }
        if (\array_key_exists('totalAssets', $data) && \is_int($data['totalAssets'])) {
            $data['totalAssets'] = (float) $data['totalAssets'];
        }
        if (\array_key_exists('tradeCreditors', $data) && \is_int($data['tradeCreditors'])) {
            $data['tradeCreditors'] = (float) $data['tradeCreditors'];
        }
        if (\array_key_exists('bankBorrowingsCurrent', $data) && \is_int($data['bankBorrowingsCurrent'])) {
            $data['bankBorrowingsCurrent'] = (float) $data['bankBorrowingsCurrent'];
        }
        if (\array_key_exists('otherShortTermFinance', $data) && \is_int($data['otherShortTermFinance'])) {
            $data['otherShortTermFinance'] = (float) $data['otherShortTermFinance'];
        }
        if (\array_key_exists('miscCurrentLiabilities', $data) && \is_int($data['miscCurrentLiabilities'])) {
            $data['miscCurrentLiabilities'] = (float) $data['miscCurrentLiabilities'];
        }
        if (\array_key_exists('totalCurrentLiabilities', $data) && \is_int($data['totalCurrentLiabilities'])) {
            $data['totalCurrentLiabilities'] = (float) $data['totalCurrentLiabilities'];
        }
        if (\array_key_exists('otherLongTermFinance', $data) && \is_int($data['otherLongTermFinance'])) {
            $data['otherLongTermFinance'] = (float) $data['otherLongTermFinance'];
        }
        if (\array_key_exists('totalLongTermLiabilities', $data) && \is_int($data['totalLongTermLiabilities'])) {
            $data['totalLongTermLiabilities'] = (float) $data['totalLongTermLiabilities'];
        }
        if (\array_key_exists('totalLiabilities', $data) && \is_int($data['totalLiabilities'])) {
            $data['totalLiabilities'] = (float) $data['totalLiabilities'];
        }
        if (\array_key_exists('netAssets', $data) && \is_int($data['netAssets'])) {
            $data['netAssets'] = (float) $data['netAssets'];
        }
        if (\array_key_exists('issuedShareCapital', $data) && \is_int($data['issuedShareCapital'])) {
            $data['issuedShareCapital'] = (float) $data['issuedShareCapital'];
        }
        if (\array_key_exists('revaluationReserve', $data) && \is_int($data['revaluationReserve'])) {
            $data['revaluationReserve'] = (float) $data['revaluationReserve'];
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
        if (\array_key_exists('tangibleAssets', $data)) {
            $object->tangibleAssets = $data['tangibleAssets'];
            unset($data['tangibleAssets']);
        }
        if (\array_key_exists('intangibleAssets', $data)) {
            $object->intangibleAssets = $data['intangibleAssets'];
            unset($data['intangibleAssets']);
        }
        if (\array_key_exists('totalFixedAssets', $data)) {
            $object->totalFixedAssets = $data['totalFixedAssets'];
            unset($data['totalFixedAssets']);
        }
        if (\array_key_exists('stock', $data)) {
            $object->stock = $data['stock'];
            unset($data['stock']);
        }
        if (\array_key_exists('tradeDebtors', $data)) {
            $object->tradeDebtors = $data['tradeDebtors'];
            unset($data['tradeDebtors']);
        }
        if (\array_key_exists('otherDebtors', $data)) {
            $object->otherDebtors = $data['otherDebtors'];
            unset($data['otherDebtors']);
        }
        if (\array_key_exists('cash', $data)) {
            $object->cash = $data['cash'];
            unset($data['cash']);
        }
        if (\array_key_exists('miscCurrentAssets', $data)) {
            $object->miscCurrentAssets = $data['miscCurrentAssets'];
            unset($data['miscCurrentAssets']);
        }
        if (\array_key_exists('totalCurrentAssets', $data)) {
            $object->totalCurrentAssets = $data['totalCurrentAssets'];
            unset($data['totalCurrentAssets']);
        }
        if (\array_key_exists('totalAssets', $data)) {
            $object->totalAssets = $data['totalAssets'];
            unset($data['totalAssets']);
        }
        if (\array_key_exists('tradeCreditors', $data)) {
            $object->tradeCreditors = $data['tradeCreditors'];
            unset($data['tradeCreditors']);
        }
        if (\array_key_exists('bankBorrowingsCurrent', $data)) {
            $object->bankBorrowingsCurrent = $data['bankBorrowingsCurrent'];
            unset($data['bankBorrowingsCurrent']);
        }
        if (\array_key_exists('otherShortTermFinance', $data)) {
            $object->otherShortTermFinance = $data['otherShortTermFinance'];
            unset($data['otherShortTermFinance']);
        }
        if (\array_key_exists('miscCurrentLiabilities', $data)) {
            $object->miscCurrentLiabilities = $data['miscCurrentLiabilities'];
            unset($data['miscCurrentLiabilities']);
        }
        if (\array_key_exists('totalCurrentLiabilities', $data)) {
            $object->totalCurrentLiabilities = $data['totalCurrentLiabilities'];
            unset($data['totalCurrentLiabilities']);
        }
        if (\array_key_exists('otherLongTermFinance', $data)) {
            $object->otherLongTermFinance = $data['otherLongTermFinance'];
            unset($data['otherLongTermFinance']);
        }
        if (\array_key_exists('totalLongTermLiabilities', $data)) {
            $object->totalLongTermLiabilities = $data['totalLongTermLiabilities'];
            unset($data['totalLongTermLiabilities']);
        }
        if (\array_key_exists('totalLiabilities', $data)) {
            $object->totalLiabilities = $data['totalLiabilities'];
            unset($data['totalLiabilities']);
        }
        if (\array_key_exists('netAssets', $data)) {
            $object->netAssets = $data['netAssets'];
            unset($data['netAssets']);
        }
        if (\array_key_exists('issuedShareCapital', $data)) {
            $object->issuedShareCapital = $data['issuedShareCapital'];
            unset($data['issuedShareCapital']);
        }
        if (\array_key_exists('revaluationReserve', $data)) {
            $object->revaluationReserve = $data['revaluationReserve'];
            unset($data['revaluationReserve']);
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
        if (array_key_exists('tangibleAssets', get_object_vars($data)) && null !== ($data->tangibleAssets ?? null)) {
            $dataArray['tangibleAssets'] = $data->tangibleAssets ?? null;
        }
        if (array_key_exists('intangibleAssets', get_object_vars($data)) && null !== ($data->intangibleAssets ?? null)) {
            $dataArray['intangibleAssets'] = $data->intangibleAssets ?? null;
        }
        if (array_key_exists('totalFixedAssets', get_object_vars($data)) && null !== ($data->totalFixedAssets ?? null)) {
            $dataArray['totalFixedAssets'] = $data->totalFixedAssets ?? null;
        }
        if (array_key_exists('stock', get_object_vars($data)) && null !== ($data->stock ?? null)) {
            $dataArray['stock'] = $data->stock ?? null;
        }
        if (array_key_exists('tradeDebtors', get_object_vars($data)) && null !== ($data->tradeDebtors ?? null)) {
            $dataArray['tradeDebtors'] = $data->tradeDebtors ?? null;
        }
        if (array_key_exists('otherDebtors', get_object_vars($data)) && null !== ($data->otherDebtors ?? null)) {
            $dataArray['otherDebtors'] = $data->otherDebtors ?? null;
        }
        if (array_key_exists('cash', get_object_vars($data)) && null !== ($data->cash ?? null)) {
            $dataArray['cash'] = $data->cash ?? null;
        }
        if (array_key_exists('miscCurrentAssets', get_object_vars($data)) && null !== ($data->miscCurrentAssets ?? null)) {
            $dataArray['miscCurrentAssets'] = $data->miscCurrentAssets ?? null;
        }
        if (array_key_exists('totalCurrentAssets', get_object_vars($data)) && null !== ($data->totalCurrentAssets ?? null)) {
            $dataArray['totalCurrentAssets'] = $data->totalCurrentAssets ?? null;
        }
        if (array_key_exists('totalAssets', get_object_vars($data)) && null !== ($data->totalAssets ?? null)) {
            $dataArray['totalAssets'] = $data->totalAssets ?? null;
        }
        if (array_key_exists('tradeCreditors', get_object_vars($data)) && null !== ($data->tradeCreditors ?? null)) {
            $dataArray['tradeCreditors'] = $data->tradeCreditors ?? null;
        }
        if (array_key_exists('bankBorrowingsCurrent', get_object_vars($data)) && null !== ($data->bankBorrowingsCurrent ?? null)) {
            $dataArray['bankBorrowingsCurrent'] = $data->bankBorrowingsCurrent ?? null;
        }
        if (array_key_exists('otherShortTermFinance', get_object_vars($data)) && null !== ($data->otherShortTermFinance ?? null)) {
            $dataArray['otherShortTermFinance'] = $data->otherShortTermFinance ?? null;
        }
        if (array_key_exists('miscCurrentLiabilities', get_object_vars($data)) && null !== ($data->miscCurrentLiabilities ?? null)) {
            $dataArray['miscCurrentLiabilities'] = $data->miscCurrentLiabilities ?? null;
        }
        if (array_key_exists('totalCurrentLiabilities', get_object_vars($data)) && null !== ($data->totalCurrentLiabilities ?? null)) {
            $dataArray['totalCurrentLiabilities'] = $data->totalCurrentLiabilities ?? null;
        }
        if (array_key_exists('otherLongTermFinance', get_object_vars($data)) && null !== ($data->otherLongTermFinance ?? null)) {
            $dataArray['otherLongTermFinance'] = $data->otherLongTermFinance ?? null;
        }
        if (array_key_exists('totalLongTermLiabilities', get_object_vars($data)) && null !== ($data->totalLongTermLiabilities ?? null)) {
            $dataArray['totalLongTermLiabilities'] = $data->totalLongTermLiabilities ?? null;
        }
        if (array_key_exists('totalLiabilities', get_object_vars($data)) && null !== ($data->totalLiabilities ?? null)) {
            $dataArray['totalLiabilities'] = $data->totalLiabilities ?? null;
        }
        if (array_key_exists('netAssets', get_object_vars($data)) && null !== ($data->netAssets ?? null)) {
            $dataArray['netAssets'] = $data->netAssets ?? null;
        }
        if (array_key_exists('issuedShareCapital', get_object_vars($data)) && null !== ($data->issuedShareCapital ?? null)) {
            $dataArray['issuedShareCapital'] = $data->issuedShareCapital ?? null;
        }
        if (array_key_exists('revaluationReserve', get_object_vars($data)) && null !== ($data->revaluationReserve ?? null)) {
            $dataArray['revaluationReserve'] = $data->revaluationReserve ?? null;
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet::class => false];
    }
}