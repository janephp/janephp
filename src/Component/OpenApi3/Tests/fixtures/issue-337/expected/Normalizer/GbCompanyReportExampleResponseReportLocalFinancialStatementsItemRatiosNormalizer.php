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
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatiosNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('preTaxProfitMargin', $data)) {
            $object->setPreTaxProfitMargin($data['preTaxProfitMargin']);
        }
        if (\array_key_exists('returnOnCapitalEmployed', $data)) {
            $object->setReturnOnCapitalEmployed($data['returnOnCapitalEmployed']);
        }
        if (\array_key_exists('returnOnTotalAssetsEmployed', $data)) {
            $object->setReturnOnTotalAssetsEmployed($data['returnOnTotalAssetsEmployed']);
        }
        if (\array_key_exists('returnOnNetAssetsEmployed', $data)) {
            $object->setReturnOnNetAssetsEmployed($data['returnOnNetAssetsEmployed']);
        }
        if (\array_key_exists('salesOrNetWorkingCapital', $data)) {
            $object->setSalesOrNetWorkingCapital($data['salesOrNetWorkingCapital']);
        }
        if (\array_key_exists('stocKTurnoverRatio', $data)) {
            $object->setStocKTurnoverRatio($data['stocKTurnoverRatio']);
        }
        if (\array_key_exists('debtorDays', $data)) {
            $object->setDebtorDays($data['debtorDays']);
        }
        if (\array_key_exists('creditorDays', $data)) {
            $object->setCreditorDays($data['creditorDays']);
        }
        if (\array_key_exists('currentRatio', $data)) {
            $object->setCurrentRatio($data['currentRatio']);
        }
        if (\array_key_exists('liquidityRatioOrAcidTest', $data)) {
            $object->setLiquidityRatioOrAcidTest($data['liquidityRatioOrAcidTest']);
        }
        if (\array_key_exists('currentDebtRatio', $data)) {
            $object->setCurrentDebtRatio($data['currentDebtRatio']);
        }
        if (\array_key_exists('gearing', $data)) {
            $object->setGearing($data['gearing']);
        }
        if (\array_key_exists('equityInPercentage', $data)) {
            $object->setEquityInPercentage($data['equityInPercentage']);
        }
        if (\array_key_exists('totalDebtRatio', $data)) {
            $object->setTotalDebtRatio($data['totalDebtRatio']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPreTaxProfitMargin()) {
            $data['preTaxProfitMargin'] = $object->getPreTaxProfitMargin();
        }
        if (null !== $object->getReturnOnCapitalEmployed()) {
            $data['returnOnCapitalEmployed'] = $object->getReturnOnCapitalEmployed();
        }
        if (null !== $object->getReturnOnTotalAssetsEmployed()) {
            $data['returnOnTotalAssetsEmployed'] = $object->getReturnOnTotalAssetsEmployed();
        }
        if (null !== $object->getReturnOnNetAssetsEmployed()) {
            $data['returnOnNetAssetsEmployed'] = $object->getReturnOnNetAssetsEmployed();
        }
        if (null !== $object->getSalesOrNetWorkingCapital()) {
            $data['salesOrNetWorkingCapital'] = $object->getSalesOrNetWorkingCapital();
        }
        if (null !== $object->getStocKTurnoverRatio()) {
            $data['stocKTurnoverRatio'] = $object->getStocKTurnoverRatio();
        }
        if (null !== $object->getDebtorDays()) {
            $data['debtorDays'] = $object->getDebtorDays();
        }
        if (null !== $object->getCreditorDays()) {
            $data['creditorDays'] = $object->getCreditorDays();
        }
        if (null !== $object->getCurrentRatio()) {
            $data['currentRatio'] = $object->getCurrentRatio();
        }
        if (null !== $object->getLiquidityRatioOrAcidTest()) {
            $data['liquidityRatioOrAcidTest'] = $object->getLiquidityRatioOrAcidTest();
        }
        if (null !== $object->getCurrentDebtRatio()) {
            $data['currentDebtRatio'] = $object->getCurrentDebtRatio();
        }
        if (null !== $object->getGearing()) {
            $data['gearing'] = $object->getGearing();
        }
        if (null !== $object->getEquityInPercentage()) {
            $data['equityInPercentage'] = $object->getEquityInPercentage();
        }
        if (null !== $object->getTotalDebtRatio()) {
            $data['totalDebtRatio'] = $object->getTotalDebtRatio();
        }
        return $data;
    }
}