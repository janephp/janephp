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
class GbCompanyReportExampleResponseReportFinancialStatementsItemRatiosNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemRatios::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemRatios::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemRatios();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('preTaxProfitMargin', $data) && \is_int($data['preTaxProfitMargin'])) {
            $data['preTaxProfitMargin'] = (float) $data['preTaxProfitMargin'];
        }
        if (\array_key_exists('returnOnCapitalEmployed', $data) && \is_int($data['returnOnCapitalEmployed'])) {
            $data['returnOnCapitalEmployed'] = (float) $data['returnOnCapitalEmployed'];
        }
        if (\array_key_exists('returnOnTotalAssetsEmployed', $data) && \is_int($data['returnOnTotalAssetsEmployed'])) {
            $data['returnOnTotalAssetsEmployed'] = (float) $data['returnOnTotalAssetsEmployed'];
        }
        if (\array_key_exists('returnOnNetAssetsEmployed', $data) && \is_int($data['returnOnNetAssetsEmployed'])) {
            $data['returnOnNetAssetsEmployed'] = (float) $data['returnOnNetAssetsEmployed'];
        }
        if (\array_key_exists('salesOrNetWorkingCapital', $data) && \is_int($data['salesOrNetWorkingCapital'])) {
            $data['salesOrNetWorkingCapital'] = (float) $data['salesOrNetWorkingCapital'];
        }
        if (\array_key_exists('stockTurnoverRatio', $data) && \is_int($data['stockTurnoverRatio'])) {
            $data['stockTurnoverRatio'] = (float) $data['stockTurnoverRatio'];
        }
        if (\array_key_exists('debtorDays', $data) && \is_int($data['debtorDays'])) {
            $data['debtorDays'] = (float) $data['debtorDays'];
        }
        if (\array_key_exists('creditorDays', $data) && \is_int($data['creditorDays'])) {
            $data['creditorDays'] = (float) $data['creditorDays'];
        }
        if (\array_key_exists('currentRatio', $data) && \is_int($data['currentRatio'])) {
            $data['currentRatio'] = (float) $data['currentRatio'];
        }
        if (\array_key_exists('liquidityRatioOrAcidTest', $data) && \is_int($data['liquidityRatioOrAcidTest'])) {
            $data['liquidityRatioOrAcidTest'] = (float) $data['liquidityRatioOrAcidTest'];
        }
        if (\array_key_exists('currentDebtRatio', $data) && \is_int($data['currentDebtRatio'])) {
            $data['currentDebtRatio'] = (float) $data['currentDebtRatio'];
        }
        if (\array_key_exists('gearing', $data) && \is_int($data['gearing'])) {
            $data['gearing'] = (float) $data['gearing'];
        }
        if (\array_key_exists('equityInPercentage', $data) && \is_int($data['equityInPercentage'])) {
            $data['equityInPercentage'] = (float) $data['equityInPercentage'];
        }
        if (\array_key_exists('totalDebtRatio', $data) && \is_int($data['totalDebtRatio'])) {
            $data['totalDebtRatio'] = (float) $data['totalDebtRatio'];
        }
        if (\array_key_exists('preTaxProfitMargin', $data)) {
            $object->preTaxProfitMargin = $data['preTaxProfitMargin'];
            unset($data['preTaxProfitMargin']);
        }
        if (\array_key_exists('returnOnCapitalEmployed', $data)) {
            $object->returnOnCapitalEmployed = $data['returnOnCapitalEmployed'];
            unset($data['returnOnCapitalEmployed']);
        }
        if (\array_key_exists('returnOnTotalAssetsEmployed', $data)) {
            $object->returnOnTotalAssetsEmployed = $data['returnOnTotalAssetsEmployed'];
            unset($data['returnOnTotalAssetsEmployed']);
        }
        if (\array_key_exists('returnOnNetAssetsEmployed', $data)) {
            $object->returnOnNetAssetsEmployed = $data['returnOnNetAssetsEmployed'];
            unset($data['returnOnNetAssetsEmployed']);
        }
        if (\array_key_exists('salesOrNetWorkingCapital', $data)) {
            $object->salesOrNetWorkingCapital = $data['salesOrNetWorkingCapital'];
            unset($data['salesOrNetWorkingCapital']);
        }
        if (\array_key_exists('stockTurnoverRatio', $data)) {
            $object->stockTurnoverRatio = $data['stockTurnoverRatio'];
            unset($data['stockTurnoverRatio']);
        }
        if (\array_key_exists('debtorDays', $data)) {
            $object->debtorDays = $data['debtorDays'];
            unset($data['debtorDays']);
        }
        if (\array_key_exists('creditorDays', $data)) {
            $object->creditorDays = $data['creditorDays'];
            unset($data['creditorDays']);
        }
        if (\array_key_exists('currentRatio', $data)) {
            $object->currentRatio = $data['currentRatio'];
            unset($data['currentRatio']);
        }
        if (\array_key_exists('liquidityRatioOrAcidTest', $data)) {
            $object->liquidityRatioOrAcidTest = $data['liquidityRatioOrAcidTest'];
            unset($data['liquidityRatioOrAcidTest']);
        }
        if (\array_key_exists('currentDebtRatio', $data)) {
            $object->currentDebtRatio = $data['currentDebtRatio'];
            unset($data['currentDebtRatio']);
        }
        if (\array_key_exists('gearing', $data)) {
            $object->gearing = $data['gearing'];
            unset($data['gearing']);
        }
        if (\array_key_exists('equityInPercentage', $data)) {
            $object->equityInPercentage = $data['equityInPercentage'];
            unset($data['equityInPercentage']);
        }
        if (\array_key_exists('totalDebtRatio', $data)) {
            $object->totalDebtRatio = $data['totalDebtRatio'];
            unset($data['totalDebtRatio']);
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
        if (array_key_exists('preTaxProfitMargin', get_object_vars($data)) && null !== ($data->preTaxProfitMargin ?? null)) {
            $dataArray['preTaxProfitMargin'] = $data->preTaxProfitMargin ?? null;
        }
        if (array_key_exists('returnOnCapitalEmployed', get_object_vars($data)) && null !== ($data->returnOnCapitalEmployed ?? null)) {
            $dataArray['returnOnCapitalEmployed'] = $data->returnOnCapitalEmployed ?? null;
        }
        if (array_key_exists('returnOnTotalAssetsEmployed', get_object_vars($data)) && null !== ($data->returnOnTotalAssetsEmployed ?? null)) {
            $dataArray['returnOnTotalAssetsEmployed'] = $data->returnOnTotalAssetsEmployed ?? null;
        }
        if (array_key_exists('returnOnNetAssetsEmployed', get_object_vars($data)) && null !== ($data->returnOnNetAssetsEmployed ?? null)) {
            $dataArray['returnOnNetAssetsEmployed'] = $data->returnOnNetAssetsEmployed ?? null;
        }
        if (array_key_exists('salesOrNetWorkingCapital', get_object_vars($data)) && null !== ($data->salesOrNetWorkingCapital ?? null)) {
            $dataArray['salesOrNetWorkingCapital'] = $data->salesOrNetWorkingCapital ?? null;
        }
        if (array_key_exists('stockTurnoverRatio', get_object_vars($data)) && null !== ($data->stockTurnoverRatio ?? null)) {
            $dataArray['stockTurnoverRatio'] = $data->stockTurnoverRatio ?? null;
        }
        if (array_key_exists('debtorDays', get_object_vars($data)) && null !== ($data->debtorDays ?? null)) {
            $dataArray['debtorDays'] = $data->debtorDays ?? null;
        }
        if (array_key_exists('creditorDays', get_object_vars($data)) && null !== ($data->creditorDays ?? null)) {
            $dataArray['creditorDays'] = $data->creditorDays ?? null;
        }
        if (array_key_exists('currentRatio', get_object_vars($data)) && null !== ($data->currentRatio ?? null)) {
            $dataArray['currentRatio'] = $data->currentRatio ?? null;
        }
        if (array_key_exists('liquidityRatioOrAcidTest', get_object_vars($data)) && null !== ($data->liquidityRatioOrAcidTest ?? null)) {
            $dataArray['liquidityRatioOrAcidTest'] = $data->liquidityRatioOrAcidTest ?? null;
        }
        if (array_key_exists('currentDebtRatio', get_object_vars($data)) && null !== ($data->currentDebtRatio ?? null)) {
            $dataArray['currentDebtRatio'] = $data->currentDebtRatio ?? null;
        }
        if (array_key_exists('gearing', get_object_vars($data)) && null !== ($data->gearing ?? null)) {
            $dataArray['gearing'] = $data->gearing ?? null;
        }
        if (array_key_exists('equityInPercentage', get_object_vars($data)) && null !== ($data->equityInPercentage ?? null)) {
            $dataArray['equityInPercentage'] = $data->equityInPercentage ?? null;
        }
        if (array_key_exists('totalDebtRatio', get_object_vars($data)) && null !== ($data->totalDebtRatio ?? null)) {
            $dataArray['totalDebtRatio'] = $data->totalDebtRatio ?? null;
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemRatios::class => false];
    }
}