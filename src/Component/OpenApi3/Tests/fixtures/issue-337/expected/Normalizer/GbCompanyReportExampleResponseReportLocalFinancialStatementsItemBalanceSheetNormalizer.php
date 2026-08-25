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
            $object->setTangibleAssets($data['tangibleAssets']);
            unset($data['tangibleAssets']);
        }
        if (\array_key_exists('intangibleAssets', $data)) {
            $object->setIntangibleAssets($data['intangibleAssets']);
            unset($data['intangibleAssets']);
        }
        if (\array_key_exists('totalFixedAssets', $data)) {
            $object->setTotalFixedAssets($data['totalFixedAssets']);
            unset($data['totalFixedAssets']);
        }
        if (\array_key_exists('stock', $data)) {
            $object->setStock($data['stock']);
            unset($data['stock']);
        }
        if (\array_key_exists('tradeDebtors', $data)) {
            $object->setTradeDebtors($data['tradeDebtors']);
            unset($data['tradeDebtors']);
        }
        if (\array_key_exists('otherDebtors', $data)) {
            $object->setOtherDebtors($data['otherDebtors']);
            unset($data['otherDebtors']);
        }
        if (\array_key_exists('cash', $data)) {
            $object->setCash($data['cash']);
            unset($data['cash']);
        }
        if (\array_key_exists('miscCurrentAssets', $data)) {
            $object->setMiscCurrentAssets($data['miscCurrentAssets']);
            unset($data['miscCurrentAssets']);
        }
        if (\array_key_exists('totalCurrentAssets', $data)) {
            $object->setTotalCurrentAssets($data['totalCurrentAssets']);
            unset($data['totalCurrentAssets']);
        }
        if (\array_key_exists('totalAssets', $data)) {
            $object->setTotalAssets($data['totalAssets']);
            unset($data['totalAssets']);
        }
        if (\array_key_exists('tradeCreditors', $data)) {
            $object->setTradeCreditors($data['tradeCreditors']);
            unset($data['tradeCreditors']);
        }
        if (\array_key_exists('bankBorrowingsCurrent', $data)) {
            $object->setBankBorrowingsCurrent($data['bankBorrowingsCurrent']);
            unset($data['bankBorrowingsCurrent']);
        }
        if (\array_key_exists('otherShortTermFinance', $data)) {
            $object->setOtherShortTermFinance($data['otherShortTermFinance']);
            unset($data['otherShortTermFinance']);
        }
        if (\array_key_exists('miscCurrentLiabilities', $data)) {
            $object->setMiscCurrentLiabilities($data['miscCurrentLiabilities']);
            unset($data['miscCurrentLiabilities']);
        }
        if (\array_key_exists('totalCurrentLiabilities', $data)) {
            $object->setTotalCurrentLiabilities($data['totalCurrentLiabilities']);
            unset($data['totalCurrentLiabilities']);
        }
        if (\array_key_exists('otherLongTermFinance', $data)) {
            $object->setOtherLongTermFinance($data['otherLongTermFinance']);
            unset($data['otherLongTermFinance']);
        }
        if (\array_key_exists('totalLongTermLiabilities', $data)) {
            $object->setTotalLongTermLiabilities($data['totalLongTermLiabilities']);
            unset($data['totalLongTermLiabilities']);
        }
        if (\array_key_exists('totalLiabilities', $data)) {
            $object->setTotalLiabilities($data['totalLiabilities']);
            unset($data['totalLiabilities']);
        }
        if (\array_key_exists('netAssets', $data)) {
            $object->setNetAssets($data['netAssets']);
            unset($data['netAssets']);
        }
        if (\array_key_exists('issuedShareCapital', $data)) {
            $object->setIssuedShareCapital($data['issuedShareCapital']);
            unset($data['issuedShareCapital']);
        }
        if (\array_key_exists('revaluationReserve', $data)) {
            $object->setRevaluationReserve($data['revaluationReserve']);
            unset($data['revaluationReserve']);
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
        if ($data->isInitialized('tangibleAssets') && null !== $data->getTangibleAssets()) {
            $dataArray['tangibleAssets'] = $data->getTangibleAssets();
        }
        if ($data->isInitialized('intangibleAssets') && null !== $data->getIntangibleAssets()) {
            $dataArray['intangibleAssets'] = $data->getIntangibleAssets();
        }
        if ($data->isInitialized('totalFixedAssets') && null !== $data->getTotalFixedAssets()) {
            $dataArray['totalFixedAssets'] = $data->getTotalFixedAssets();
        }
        if ($data->isInitialized('stock') && null !== $data->getStock()) {
            $dataArray['stock'] = $data->getStock();
        }
        if ($data->isInitialized('tradeDebtors') && null !== $data->getTradeDebtors()) {
            $dataArray['tradeDebtors'] = $data->getTradeDebtors();
        }
        if ($data->isInitialized('otherDebtors') && null !== $data->getOtherDebtors()) {
            $dataArray['otherDebtors'] = $data->getOtherDebtors();
        }
        if ($data->isInitialized('cash') && null !== $data->getCash()) {
            $dataArray['cash'] = $data->getCash();
        }
        if ($data->isInitialized('miscCurrentAssets') && null !== $data->getMiscCurrentAssets()) {
            $dataArray['miscCurrentAssets'] = $data->getMiscCurrentAssets();
        }
        if ($data->isInitialized('totalCurrentAssets') && null !== $data->getTotalCurrentAssets()) {
            $dataArray['totalCurrentAssets'] = $data->getTotalCurrentAssets();
        }
        if ($data->isInitialized('totalAssets') && null !== $data->getTotalAssets()) {
            $dataArray['totalAssets'] = $data->getTotalAssets();
        }
        if ($data->isInitialized('tradeCreditors') && null !== $data->getTradeCreditors()) {
            $dataArray['tradeCreditors'] = $data->getTradeCreditors();
        }
        if ($data->isInitialized('bankBorrowingsCurrent') && null !== $data->getBankBorrowingsCurrent()) {
            $dataArray['bankBorrowingsCurrent'] = $data->getBankBorrowingsCurrent();
        }
        if ($data->isInitialized('otherShortTermFinance') && null !== $data->getOtherShortTermFinance()) {
            $dataArray['otherShortTermFinance'] = $data->getOtherShortTermFinance();
        }
        if ($data->isInitialized('miscCurrentLiabilities') && null !== $data->getMiscCurrentLiabilities()) {
            $dataArray['miscCurrentLiabilities'] = $data->getMiscCurrentLiabilities();
        }
        if ($data->isInitialized('totalCurrentLiabilities') && null !== $data->getTotalCurrentLiabilities()) {
            $dataArray['totalCurrentLiabilities'] = $data->getTotalCurrentLiabilities();
        }
        if ($data->isInitialized('otherLongTermFinance') && null !== $data->getOtherLongTermFinance()) {
            $dataArray['otherLongTermFinance'] = $data->getOtherLongTermFinance();
        }
        if ($data->isInitialized('totalLongTermLiabilities') && null !== $data->getTotalLongTermLiabilities()) {
            $dataArray['totalLongTermLiabilities'] = $data->getTotalLongTermLiabilities();
        }
        if ($data->isInitialized('totalLiabilities') && null !== $data->getTotalLiabilities()) {
            $dataArray['totalLiabilities'] = $data->getTotalLiabilities();
        }
        if ($data->isInitialized('netAssets') && null !== $data->getNetAssets()) {
            $dataArray['netAssets'] = $data->getNetAssets();
        }
        if ($data->isInitialized('issuedShareCapital') && null !== $data->getIssuedShareCapital()) {
            $dataArray['issuedShareCapital'] = $data->getIssuedShareCapital();
        }
        if ($data->isInitialized('revaluationReserve') && null !== $data->getRevaluationReserve()) {
            $dataArray['revaluationReserve'] = $data->getRevaluationReserve();
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