<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Company';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Company';
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
        $object = new \Jane\OpenApi2\Tests\Expected\Model\Company();
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('baseUri') && null !== $object->getBaseUri()) {
            $data['base_uri'] = $object->getBaseUri();
        }
        if ($object->isInitialized('fullDomain') && null !== $object->getFullDomain()) {
            $data['full_domain'] = $object->getFullDomain();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        if ($object->isInitialized('weekStartDay') && null !== $object->getWeekStartDay()) {
            $data['week_start_day'] = $object->getWeekStartDay();
        }
        if ($object->isInitialized('wantsTimestampTimers') && null !== $object->getWantsTimestampTimers()) {
            $data['wants_timestamp_timers'] = $object->getWantsTimestampTimers();
        }
        if ($object->isInitialized('timeFormat') && null !== $object->getTimeFormat()) {
            $data['time_format'] = $object->getTimeFormat();
        }
        if ($object->isInitialized('planType') && null !== $object->getPlanType()) {
            $data['plan_type'] = $object->getPlanType();
        }
        if ($object->isInitialized('clock') && null !== $object->getClock()) {
            $data['clock'] = $object->getClock();
        }
        if ($object->isInitialized('decimalSymbol') && null !== $object->getDecimalSymbol()) {
            $data['decimal_symbol'] = $object->getDecimalSymbol();
        }
        if ($object->isInitialized('thousandsSeparator') && null !== $object->getThousandsSeparator()) {
            $data['thousands_separator'] = $object->getThousandsSeparator();
        }
        if ($object->isInitialized('colorScheme') && null !== $object->getColorScheme()) {
            $data['color_scheme'] = $object->getColorScheme();
        }
        if ($object->isInitialized('weeklyCapacity') && null !== $object->getWeeklyCapacity()) {
            $data['weekly_capacity'] = $object->getWeeklyCapacity();
        }
        if ($object->isInitialized('expenseFeature') && null !== $object->getExpenseFeature()) {
            $data['expense_feature'] = $object->getExpenseFeature();
        }
        if ($object->isInitialized('invoiceFeature') && null !== $object->getInvoiceFeature()) {
            $data['invoice_feature'] = $object->getInvoiceFeature();
        }
        if ($object->isInitialized('estimateFeature') && null !== $object->getEstimateFeature()) {
            $data['estimate_feature'] = $object->getEstimateFeature();
        }
        if ($object->isInitialized('approvalFeature') && null !== $object->getApprovalFeature()) {
            $data['approval_feature'] = $object->getApprovalFeature();
        }
        return $data;
    }
}