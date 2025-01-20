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
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItem();
        if (\array_key_exists('numberOfWeeks', $data) && \is_int($data['numberOfWeeks'])) {
            $data['numberOfWeeks'] = (double) $data['numberOfWeeks'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('yearEndDate', $data)) {
            $object->setYearEndDate($data['yearEndDate']);
            unset($data['yearEndDate']);
        }
        if (\array_key_exists('numberOfWeeks', $data)) {
            $object->setNumberOfWeeks($data['numberOfWeeks']);
            unset($data['numberOfWeeks']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($data['currency']);
            unset($data['currency']);
        }
        if (\array_key_exists('consolidatedAccounts', $data)) {
            $object->setConsolidatedAccounts($data['consolidatedAccounts']);
            unset($data['consolidatedAccounts']);
        }
        if (\array_key_exists('auditQualification', $data)) {
            $object->setAuditQualification($data['auditQualification']);
            unset($data['auditQualification']);
        }
        if (\array_key_exists('profitAndLoss', $data)) {
            $object->setProfitAndLoss($this->denormalizer->denormalize($data['profitAndLoss'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss::class, 'json', $context));
            unset($data['profitAndLoss']);
        }
        if (\array_key_exists('balanceSheet', $data)) {
            $object->setBalanceSheet($this->denormalizer->denormalize($data['balanceSheet'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet::class, 'json', $context));
            unset($data['balanceSheet']);
        }
        if (\array_key_exists('cashFlow', $data)) {
            $object->setCashFlow($this->denormalizer->denormalize($data['cashFlow'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow::class, 'json', $context));
            unset($data['cashFlow']);
        }
        if (\array_key_exists('otherFinancials', $data)) {
            $object->setOtherFinancials($this->denormalizer->denormalize($data['otherFinancials'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials::class, 'json', $context));
            unset($data['otherFinancials']);
        }
        if (\array_key_exists('ratios', $data)) {
            $object->setRatios($this->denormalizer->denormalize($data['ratios'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios::class, 'json', $context));
            unset($data['ratios']);
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
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('yearEndDate') && null !== $data->getYearEndDate()) {
            $dataArray['yearEndDate'] = $data->getYearEndDate();
        }
        if ($data->isInitialized('numberOfWeeks') && null !== $data->getNumberOfWeeks()) {
            $dataArray['numberOfWeeks'] = $data->getNumberOfWeeks();
        }
        if ($data->isInitialized('currency') && null !== $data->getCurrency()) {
            $dataArray['currency'] = $data->getCurrency();
        }
        if ($data->isInitialized('consolidatedAccounts') && null !== $data->getConsolidatedAccounts()) {
            $dataArray['consolidatedAccounts'] = $data->getConsolidatedAccounts();
        }
        if ($data->isInitialized('auditQualification') && null !== $data->getAuditQualification()) {
            $dataArray['auditQualification'] = $data->getAuditQualification();
        }
        if ($data->isInitialized('profitAndLoss') && null !== $data->getProfitAndLoss()) {
            $dataArray['profitAndLoss'] = $this->normalizer->normalize($data->getProfitAndLoss(), 'json', $context);
        }
        if ($data->isInitialized('balanceSheet') && null !== $data->getBalanceSheet()) {
            $dataArray['balanceSheet'] = $this->normalizer->normalize($data->getBalanceSheet(), 'json', $context);
        }
        if ($data->isInitialized('cashFlow') && null !== $data->getCashFlow()) {
            $dataArray['cashFlow'] = $this->normalizer->normalize($data->getCashFlow(), 'json', $context);
        }
        if ($data->isInitialized('otherFinancials') && null !== $data->getOtherFinancials()) {
            $dataArray['otherFinancials'] = $this->normalizer->normalize($data->getOtherFinancials(), 'json', $context);
        }
        if ($data->isInitialized('ratios') && null !== $data->getRatios()) {
            $dataArray['ratios'] = $this->normalizer->normalize($data->getRatios(), 'json', $context);
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItem::class => false];
    }
}