<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CompanyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\OpenApi2\Tests\Expected\Model\Company::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\OpenApi2\Tests\Expected\Model\Company::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\OpenApi2\Tests\Expected\Model\Company();
        if (\array_key_exists('is_active', $data) && \is_int($data['is_active'])) {
            $data['is_active'] = (bool) $data['is_active'];
        }
        if (\array_key_exists('wants_timestamp_timers', $data) && \is_int($data['wants_timestamp_timers'])) {
            $data['wants_timestamp_timers'] = (bool) $data['wants_timestamp_timers'];
        }
        if (\array_key_exists('expense_feature', $data) && \is_int($data['expense_feature'])) {
            $data['expense_feature'] = (bool) $data['expense_feature'];
        }
        if (\array_key_exists('invoice_feature', $data) && \is_int($data['invoice_feature'])) {
            $data['invoice_feature'] = (bool) $data['invoice_feature'];
        }
        if (\array_key_exists('estimate_feature', $data) && \is_int($data['estimate_feature'])) {
            $data['estimate_feature'] = (bool) $data['estimate_feature'];
        }
        if (\array_key_exists('approval_feature', $data) && \is_int($data['approval_feature'])) {
            $data['approval_feature'] = (bool) $data['approval_feature'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('base_uri', $data)) {
            $object->setBaseUri($data['base_uri']);
        }
        if (\array_key_exists('full_domain', $data)) {
            $object->setFullDomain($data['full_domain']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('is_active', $data)) {
            $object->setIsActive($data['is_active']);
        }
        if (\array_key_exists('week_start_day', $data)) {
            $object->setWeekStartDay($data['week_start_day']);
        }
        if (\array_key_exists('wants_timestamp_timers', $data)) {
            $object->setWantsTimestampTimers($data['wants_timestamp_timers']);
        }
        if (\array_key_exists('time_format', $data)) {
            $object->setTimeFormat($data['time_format']);
        }
        if (\array_key_exists('plan_type', $data)) {
            $object->setPlanType($data['plan_type']);
        }
        if (\array_key_exists('clock', $data)) {
            $object->setClock($data['clock']);
        }
        if (\array_key_exists('decimal_symbol', $data)) {
            $object->setDecimalSymbol($data['decimal_symbol']);
        }
        if (\array_key_exists('thousands_separator', $data)) {
            $object->setThousandsSeparator($data['thousands_separator']);
        }
        if (\array_key_exists('color_scheme', $data)) {
            $object->setColorScheme($data['color_scheme']);
        }
        if (\array_key_exists('weekly_capacity', $data)) {
            $object->setWeeklyCapacity($data['weekly_capacity']);
        }
        if (\array_key_exists('expense_feature', $data)) {
            $object->setExpenseFeature($data['expense_feature']);
        }
        if (\array_key_exists('invoice_feature', $data)) {
            $object->setInvoiceFeature($data['invoice_feature']);
        }
        if (\array_key_exists('estimate_feature', $data)) {
            $object->setEstimateFeature($data['estimate_feature']);
        }
        if (\array_key_exists('approval_feature', $data)) {
            $object->setApprovalFeature($data['approval_feature']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('baseUri') && null !== $data->getBaseUri()) {
            $dataArray['base_uri'] = $data->getBaseUri();
        }
        if ($data->isInitialized('fullDomain') && null !== $data->getFullDomain()) {
            $dataArray['full_domain'] = $data->getFullDomain();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('isActive') && null !== $data->getIsActive()) {
            $dataArray['is_active'] = $data->getIsActive();
        }
        if ($data->isInitialized('weekStartDay') && null !== $data->getWeekStartDay()) {
            $dataArray['week_start_day'] = $data->getWeekStartDay();
        }
        if ($data->isInitialized('wantsTimestampTimers') && null !== $data->getWantsTimestampTimers()) {
            $dataArray['wants_timestamp_timers'] = $data->getWantsTimestampTimers();
        }
        if ($data->isInitialized('timeFormat') && null !== $data->getTimeFormat()) {
            $dataArray['time_format'] = $data->getTimeFormat();
        }
        if ($data->isInitialized('planType') && null !== $data->getPlanType()) {
            $dataArray['plan_type'] = $data->getPlanType();
        }
        if ($data->isInitialized('clock') && null !== $data->getClock()) {
            $dataArray['clock'] = $data->getClock();
        }
        if ($data->isInitialized('decimalSymbol') && null !== $data->getDecimalSymbol()) {
            $dataArray['decimal_symbol'] = $data->getDecimalSymbol();
        }
        if ($data->isInitialized('thousandsSeparator') && null !== $data->getThousandsSeparator()) {
            $dataArray['thousands_separator'] = $data->getThousandsSeparator();
        }
        if ($data->isInitialized('colorScheme') && null !== $data->getColorScheme()) {
            $dataArray['color_scheme'] = $data->getColorScheme();
        }
        if ($data->isInitialized('weeklyCapacity') && null !== $data->getWeeklyCapacity()) {
            $dataArray['weekly_capacity'] = $data->getWeeklyCapacity();
        }
        if ($data->isInitialized('expenseFeature') && null !== $data->getExpenseFeature()) {
            $dataArray['expense_feature'] = $data->getExpenseFeature();
        }
        if ($data->isInitialized('invoiceFeature') && null !== $data->getInvoiceFeature()) {
            $dataArray['invoice_feature'] = $data->getInvoiceFeature();
        }
        if ($data->isInitialized('estimateFeature') && null !== $data->getEstimateFeature()) {
            $dataArray['estimate_feature'] = $data->getEstimateFeature();
        }
        if ($data->isInitialized('approvalFeature') && null !== $data->getApprovalFeature()) {
            $dataArray['approval_feature'] = $data->getApprovalFeature();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\OpenApi2\Tests\Expected\Model\Company::class => false];
    }
}