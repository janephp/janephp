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
        $object = new \Jane\OpenApi2\Tests\Expected\Model\Company();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
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
        if (\array_key_exists('base_uri', $data)) {
            $object->baseUri = $data['base_uri'];
        }
        if (\array_key_exists('full_domain', $data)) {
            $object->fullDomain = $data['full_domain'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('is_active', $data)) {
            $object->isActive = $data['is_active'];
        }
        if (\array_key_exists('week_start_day', $data)) {
            $object->weekStartDay = $data['week_start_day'];
        }
        if (\array_key_exists('wants_timestamp_timers', $data)) {
            $object->wantsTimestampTimers = $data['wants_timestamp_timers'];
        }
        if (\array_key_exists('time_format', $data)) {
            $object->timeFormat = $data['time_format'];
        }
        if (\array_key_exists('plan_type', $data)) {
            $object->planType = $data['plan_type'];
        }
        if (\array_key_exists('clock', $data)) {
            $object->clock = $data['clock'];
        }
        if (\array_key_exists('decimal_symbol', $data)) {
            $object->decimalSymbol = $data['decimal_symbol'];
        }
        if (\array_key_exists('thousands_separator', $data)) {
            $object->thousandsSeparator = $data['thousands_separator'];
        }
        if (\array_key_exists('color_scheme', $data)) {
            $object->colorScheme = $data['color_scheme'];
        }
        if (\array_key_exists('weekly_capacity', $data)) {
            $object->weeklyCapacity = $data['weekly_capacity'];
        }
        if (\array_key_exists('expense_feature', $data)) {
            $object->expenseFeature = $data['expense_feature'];
        }
        if (\array_key_exists('invoice_feature', $data)) {
            $object->invoiceFeature = $data['invoice_feature'];
        }
        if (\array_key_exists('estimate_feature', $data)) {
            $object->estimateFeature = $data['estimate_feature'];
        }
        if (\array_key_exists('approval_feature', $data)) {
            $object->approvalFeature = $data['approval_feature'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('baseUri', get_object_vars($data)) && null !== ($data->baseUri ?? null)) {
            $dataArray['base_uri'] = $data->baseUri ?? null;
        }
        if (array_key_exists('fullDomain', get_object_vars($data)) && null !== ($data->fullDomain ?? null)) {
            $dataArray['full_domain'] = $data->fullDomain ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('isActive', get_object_vars($data)) && null !== ($data->isActive ?? null)) {
            $dataArray['is_active'] = $data->isActive ?? null;
        }
        if (array_key_exists('weekStartDay', get_object_vars($data)) && null !== ($data->weekStartDay ?? null)) {
            $dataArray['week_start_day'] = $data->weekStartDay ?? null;
        }
        if (array_key_exists('wantsTimestampTimers', get_object_vars($data)) && null !== ($data->wantsTimestampTimers ?? null)) {
            $dataArray['wants_timestamp_timers'] = $data->wantsTimestampTimers ?? null;
        }
        if (array_key_exists('timeFormat', get_object_vars($data)) && null !== ($data->timeFormat ?? null)) {
            $dataArray['time_format'] = $data->timeFormat ?? null;
        }
        if (array_key_exists('planType', get_object_vars($data)) && null !== ($data->planType ?? null)) {
            $dataArray['plan_type'] = $data->planType ?? null;
        }
        if (array_key_exists('clock', get_object_vars($data)) && null !== ($data->clock ?? null)) {
            $dataArray['clock'] = $data->clock ?? null;
        }
        if (array_key_exists('decimalSymbol', get_object_vars($data)) && null !== ($data->decimalSymbol ?? null)) {
            $dataArray['decimal_symbol'] = $data->decimalSymbol ?? null;
        }
        if (array_key_exists('thousandsSeparator', get_object_vars($data)) && null !== ($data->thousandsSeparator ?? null)) {
            $dataArray['thousands_separator'] = $data->thousandsSeparator ?? null;
        }
        if (array_key_exists('colorScheme', get_object_vars($data)) && null !== ($data->colorScheme ?? null)) {
            $dataArray['color_scheme'] = $data->colorScheme ?? null;
        }
        if (array_key_exists('weeklyCapacity', get_object_vars($data)) && null !== ($data->weeklyCapacity ?? null)) {
            $dataArray['weekly_capacity'] = $data->weeklyCapacity ?? null;
        }
        if (array_key_exists('expenseFeature', get_object_vars($data)) && null !== ($data->expenseFeature ?? null)) {
            $dataArray['expense_feature'] = $data->expenseFeature ?? null;
        }
        if (array_key_exists('invoiceFeature', get_object_vars($data)) && null !== ($data->invoiceFeature ?? null)) {
            $dataArray['invoice_feature'] = $data->invoiceFeature ?? null;
        }
        if (array_key_exists('estimateFeature', get_object_vars($data)) && null !== ($data->estimateFeature ?? null)) {
            $dataArray['estimate_feature'] = $data->estimateFeature ?? null;
        }
        if (array_key_exists('approvalFeature', get_object_vars($data)) && null !== ($data->approvalFeature ?? null)) {
            $dataArray['approval_feature'] = $data->approvalFeature ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\OpenApi2\Tests\Expected\Model\Company::class => false];
    }
}