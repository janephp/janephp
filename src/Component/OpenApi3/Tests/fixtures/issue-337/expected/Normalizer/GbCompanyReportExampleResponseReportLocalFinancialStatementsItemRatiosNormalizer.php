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
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatiosNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios';
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
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios();
        if (\array_key_exists('preTaxProfitMargin', $data) && \is_int($data['preTaxProfitMargin'])) {
            $data['preTaxProfitMargin'] = (double) $data['preTaxProfitMargin'];
        }
        if (\array_key_exists('returnOnCapitalEmployed', $data) && \is_int($data['returnOnCapitalEmployed'])) {
            $data['returnOnCapitalEmployed'] = (double) $data['returnOnCapitalEmployed'];
        }
        if (\array_key_exists('returnOnTotalAssetsEmployed', $data) && \is_int($data['returnOnTotalAssetsEmployed'])) {
            $data['returnOnTotalAssetsEmployed'] = (double) $data['returnOnTotalAssetsEmployed'];
        }
        if (\array_key_exists('returnOnNetAssetsEmployed', $data) && \is_int($data['returnOnNetAssetsEmployed'])) {
            $data['returnOnNetAssetsEmployed'] = (double) $data['returnOnNetAssetsEmployed'];
        }
        if (\array_key_exists('salesOrNetWorkingCapital', $data) && \is_int($data['salesOrNetWorkingCapital'])) {
            $data['salesOrNetWorkingCapital'] = (double) $data['salesOrNetWorkingCapital'];
        }
        if (\array_key_exists('stocKTurnoverRatio', $data) && \is_int($data['stocKTurnoverRatio'])) {
            $data['stocKTurnoverRatio'] = (double) $data['stocKTurnoverRatio'];
        }
        if (\array_key_exists('debtorDays', $data) && \is_int($data['debtorDays'])) {
            $data['debtorDays'] = (double) $data['debtorDays'];
        }
        if (\array_key_exists('creditorDays', $data) && \is_int($data['creditorDays'])) {
            $data['creditorDays'] = (double) $data['creditorDays'];
        }
        if (\array_key_exists('currentRatio', $data) && \is_int($data['currentRatio'])) {
            $data['currentRatio'] = (double) $data['currentRatio'];
        }
        if (\array_key_exists('liquidityRatioOrAcidTest', $data) && \is_int($data['liquidityRatioOrAcidTest'])) {
            $data['liquidityRatioOrAcidTest'] = (double) $data['liquidityRatioOrAcidTest'];
        }
        if (\array_key_exists('currentDebtRatio', $data) && \is_int($data['currentDebtRatio'])) {
            $data['currentDebtRatio'] = (double) $data['currentDebtRatio'];
        }
        if (\array_key_exists('gearing', $data) && \is_int($data['gearing'])) {
            $data['gearing'] = (double) $data['gearing'];
        }
        if (\array_key_exists('equityInPercentage', $data) && \is_int($data['equityInPercentage'])) {
            $data['equityInPercentage'] = (double) $data['equityInPercentage'];
        }
        if (\array_key_exists('totalDebtRatio', $data) && \is_int($data['totalDebtRatio'])) {
            $data['totalDebtRatio'] = (double) $data['totalDebtRatio'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('preTaxProfitMargin', $data)) {
            $object->setPreTaxProfitMargin($data['preTaxProfitMargin']);
            unset($data['preTaxProfitMargin']);
        }
        if (\array_key_exists('returnOnCapitalEmployed', $data)) {
            $object->setReturnOnCapitalEmployed($data['returnOnCapitalEmployed']);
            unset($data['returnOnCapitalEmployed']);
        }
        if (\array_key_exists('returnOnTotalAssetsEmployed', $data)) {
            $object->setReturnOnTotalAssetsEmployed($data['returnOnTotalAssetsEmployed']);
            unset($data['returnOnTotalAssetsEmployed']);
        }
        if (\array_key_exists('returnOnNetAssetsEmployed', $data)) {
            $object->setReturnOnNetAssetsEmployed($data['returnOnNetAssetsEmployed']);
            unset($data['returnOnNetAssetsEmployed']);
        }
        if (\array_key_exists('salesOrNetWorkingCapital', $data)) {
            $object->setSalesOrNetWorkingCapital($data['salesOrNetWorkingCapital']);
            unset($data['salesOrNetWorkingCapital']);
        }
        if (\array_key_exists('stocKTurnoverRatio', $data)) {
            $object->setStocKTurnoverRatio($data['stocKTurnoverRatio']);
            unset($data['stocKTurnoverRatio']);
        }
        if (\array_key_exists('debtorDays', $data)) {
            $object->setDebtorDays($data['debtorDays']);
            unset($data['debtorDays']);
        }
        if (\array_key_exists('creditorDays', $data)) {
            $object->setCreditorDays($data['creditorDays']);
            unset($data['creditorDays']);
        }
        if (\array_key_exists('currentRatio', $data)) {
            $object->setCurrentRatio($data['currentRatio']);
            unset($data['currentRatio']);
        }
        if (\array_key_exists('liquidityRatioOrAcidTest', $data)) {
            $object->setLiquidityRatioOrAcidTest($data['liquidityRatioOrAcidTest']);
            unset($data['liquidityRatioOrAcidTest']);
        }
        if (\array_key_exists('currentDebtRatio', $data)) {
            $object->setCurrentDebtRatio($data['currentDebtRatio']);
            unset($data['currentDebtRatio']);
        }
        if (\array_key_exists('gearing', $data)) {
            $object->setGearing($data['gearing']);
            unset($data['gearing']);
        }
        if (\array_key_exists('equityInPercentage', $data)) {
            $object->setEquityInPercentage($data['equityInPercentage']);
            unset($data['equityInPercentage']);
        }
        if (\array_key_exists('totalDebtRatio', $data)) {
            $object->setTotalDebtRatio($data['totalDebtRatio']);
            unset($data['totalDebtRatio']);
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
        if ($object->isInitialized('preTaxProfitMargin') && null !== $object->getPreTaxProfitMargin()) {
            $data['preTaxProfitMargin'] = $object->getPreTaxProfitMargin();
        }
        if ($object->isInitialized('returnOnCapitalEmployed') && null !== $object->getReturnOnCapitalEmployed()) {
            $data['returnOnCapitalEmployed'] = $object->getReturnOnCapitalEmployed();
        }
        if ($object->isInitialized('returnOnTotalAssetsEmployed') && null !== $object->getReturnOnTotalAssetsEmployed()) {
            $data['returnOnTotalAssetsEmployed'] = $object->getReturnOnTotalAssetsEmployed();
        }
        if ($object->isInitialized('returnOnNetAssetsEmployed') && null !== $object->getReturnOnNetAssetsEmployed()) {
            $data['returnOnNetAssetsEmployed'] = $object->getReturnOnNetAssetsEmployed();
        }
        if ($object->isInitialized('salesOrNetWorkingCapital') && null !== $object->getSalesOrNetWorkingCapital()) {
            $data['salesOrNetWorkingCapital'] = $object->getSalesOrNetWorkingCapital();
        }
        if ($object->isInitialized('stocKTurnoverRatio') && null !== $object->getStocKTurnoverRatio()) {
            $data['stocKTurnoverRatio'] = $object->getStocKTurnoverRatio();
        }
        if ($object->isInitialized('debtorDays') && null !== $object->getDebtorDays()) {
            $data['debtorDays'] = $object->getDebtorDays();
        }
        if ($object->isInitialized('creditorDays') && null !== $object->getCreditorDays()) {
            $data['creditorDays'] = $object->getCreditorDays();
        }
        if ($object->isInitialized('currentRatio') && null !== $object->getCurrentRatio()) {
            $data['currentRatio'] = $object->getCurrentRatio();
        }
        if ($object->isInitialized('liquidityRatioOrAcidTest') && null !== $object->getLiquidityRatioOrAcidTest()) {
            $data['liquidityRatioOrAcidTest'] = $object->getLiquidityRatioOrAcidTest();
        }
        if ($object->isInitialized('currentDebtRatio') && null !== $object->getCurrentDebtRatio()) {
            $data['currentDebtRatio'] = $object->getCurrentDebtRatio();
        }
        if ($object->isInitialized('gearing') && null !== $object->getGearing()) {
            $data['gearing'] = $object->getGearing();
        }
        if ($object->isInitialized('equityInPercentage') && null !== $object->getEquityInPercentage()) {
            $data['equityInPercentage'] = $object->getEquityInPercentage();
        }
        if ($object->isInitialized('totalDebtRatio') && null !== $object->getTotalDebtRatio()) {
            $data['totalDebtRatio'] = $object->getTotalDebtRatio();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}