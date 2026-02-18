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
class ProjectsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\OpenApi2\Tests\Expected\Model\ProjectsPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\OpenApi2\Tests\Expected\Model\ProjectsPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\OpenApi2\Tests\Expected\Model\ProjectsPostBody();
        if (\array_key_exists('hourly_rate', $data) && \is_int($data['hourly_rate'])) {
            $data['hourly_rate'] = (double) $data['hourly_rate'];
        }
        if (\array_key_exists('budget', $data) && \is_int($data['budget'])) {
            $data['budget'] = (double) $data['budget'];
        }
        if (\array_key_exists('over_budget_notification_percentage', $data) && \is_int($data['over_budget_notification_percentage'])) {
            $data['over_budget_notification_percentage'] = (double) $data['over_budget_notification_percentage'];
        }
        if (\array_key_exists('cost_budget', $data) && \is_int($data['cost_budget'])) {
            $data['cost_budget'] = (double) $data['cost_budget'];
        }
        if (\array_key_exists('fee', $data) && \is_int($data['fee'])) {
            $data['fee'] = (double) $data['fee'];
        }
        if (\array_key_exists('is_active', $data) && \is_int($data['is_active'])) {
            $data['is_active'] = (bool) $data['is_active'];
        }
        if (\array_key_exists('is_billable', $data) && \is_int($data['is_billable'])) {
            $data['is_billable'] = (bool) $data['is_billable'];
        }
        if (\array_key_exists('is_fixed_fee', $data) && \is_int($data['is_fixed_fee'])) {
            $data['is_fixed_fee'] = (bool) $data['is_fixed_fee'];
        }
        if (\array_key_exists('budget_is_monthly', $data) && \is_int($data['budget_is_monthly'])) {
            $data['budget_is_monthly'] = (bool) $data['budget_is_monthly'];
        }
        if (\array_key_exists('notify_when_over_budget', $data) && \is_int($data['notify_when_over_budget'])) {
            $data['notify_when_over_budget'] = (bool) $data['notify_when_over_budget'];
        }
        if (\array_key_exists('show_budget_to_all', $data) && \is_int($data['show_budget_to_all'])) {
            $data['show_budget_to_all'] = (bool) $data['show_budget_to_all'];
        }
        if (\array_key_exists('cost_budget_include_expenses', $data) && \is_int($data['cost_budget_include_expenses'])) {
            $data['cost_budget_include_expenses'] = (bool) $data['cost_budget_include_expenses'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('client_id', $data)) {
            $object->setClientId($data['client_id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (\array_key_exists('is_active', $data)) {
            $object->setIsActive($data['is_active']);
        }
        if (\array_key_exists('is_billable', $data)) {
            $object->setIsBillable($data['is_billable']);
        }
        if (\array_key_exists('is_fixed_fee', $data)) {
            $object->setIsFixedFee($data['is_fixed_fee']);
        }
        if (\array_key_exists('bill_by', $data)) {
            $object->setBillBy($data['bill_by']);
        }
        if (\array_key_exists('hourly_rate', $data)) {
            $object->setHourlyRate($data['hourly_rate']);
        }
        if (\array_key_exists('budget', $data)) {
            $object->setBudget($data['budget']);
        }
        if (\array_key_exists('budget_by', $data)) {
            $object->setBudgetBy($data['budget_by']);
        }
        if (\array_key_exists('budget_is_monthly', $data)) {
            $object->setBudgetIsMonthly($data['budget_is_monthly']);
        }
        if (\array_key_exists('notify_when_over_budget', $data)) {
            $object->setNotifyWhenOverBudget($data['notify_when_over_budget']);
        }
        if (\array_key_exists('over_budget_notification_percentage', $data)) {
            $object->setOverBudgetNotificationPercentage($data['over_budget_notification_percentage']);
        }
        if (\array_key_exists('show_budget_to_all', $data)) {
            $object->setShowBudgetToAll($data['show_budget_to_all']);
        }
        if (\array_key_exists('cost_budget', $data)) {
            $object->setCostBudget($data['cost_budget']);
        }
        if (\array_key_exists('cost_budget_include_expenses', $data)) {
            $object->setCostBudgetIncludeExpenses($data['cost_budget_include_expenses']);
        }
        if (\array_key_exists('fee', $data)) {
            $object->setFee($data['fee']);
        }
        if (\array_key_exists('notes', $data)) {
            $object->setNotes($data['notes']);
        }
        if (\array_key_exists('starts_on', $data)) {
            $object->setStartsOn(\DateTime::createFromFormat('Y-m-d', $data['starts_on'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('ends_on', $data)) {
            $object->setEndsOn(\DateTime::createFromFormat('Y-m-d', $data['ends_on'])->setTime(0, 0, 0));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['client_id'] = $data->getClientId();
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('code') && null !== $data->getCode()) {
            $dataArray['code'] = $data->getCode();
        }
        if ($data->isInitialized('isActive') && null !== $data->getIsActive()) {
            $dataArray['is_active'] = $data->getIsActive();
        }
        $dataArray['is_billable'] = $data->getIsBillable();
        if ($data->isInitialized('isFixedFee') && null !== $data->getIsFixedFee()) {
            $dataArray['is_fixed_fee'] = $data->getIsFixedFee();
        }
        $dataArray['bill_by'] = $data->getBillBy();
        if ($data->isInitialized('hourlyRate') && null !== $data->getHourlyRate()) {
            $dataArray['hourly_rate'] = $data->getHourlyRate();
        }
        if ($data->isInitialized('budget') && null !== $data->getBudget()) {
            $dataArray['budget'] = $data->getBudget();
        }
        $dataArray['budget_by'] = $data->getBudgetBy();
        if ($data->isInitialized('budgetIsMonthly') && null !== $data->getBudgetIsMonthly()) {
            $dataArray['budget_is_monthly'] = $data->getBudgetIsMonthly();
        }
        if ($data->isInitialized('notifyWhenOverBudget') && null !== $data->getNotifyWhenOverBudget()) {
            $dataArray['notify_when_over_budget'] = $data->getNotifyWhenOverBudget();
        }
        if ($data->isInitialized('overBudgetNotificationPercentage') && null !== $data->getOverBudgetNotificationPercentage()) {
            $dataArray['over_budget_notification_percentage'] = $data->getOverBudgetNotificationPercentage();
        }
        if ($data->isInitialized('showBudgetToAll') && null !== $data->getShowBudgetToAll()) {
            $dataArray['show_budget_to_all'] = $data->getShowBudgetToAll();
        }
        if ($data->isInitialized('costBudget') && null !== $data->getCostBudget()) {
            $dataArray['cost_budget'] = $data->getCostBudget();
        }
        if ($data->isInitialized('costBudgetIncludeExpenses') && null !== $data->getCostBudgetIncludeExpenses()) {
            $dataArray['cost_budget_include_expenses'] = $data->getCostBudgetIncludeExpenses();
        }
        if ($data->isInitialized('fee') && null !== $data->getFee()) {
            $dataArray['fee'] = $data->getFee();
        }
        if ($data->isInitialized('notes') && null !== $data->getNotes()) {
            $dataArray['notes'] = $data->getNotes();
        }
        if ($data->isInitialized('startsOn') && null !== $data->getStartsOn()) {
            $dataArray['starts_on'] = $data->getStartsOn()->format('Y-m-d');
        }
        if ($data->isInitialized('endsOn') && null !== $data->getEndsOn()) {
            $dataArray['ends_on'] = $data->getEndsOn()->format('Y-m-d');
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\OpenApi2\Tests\Expected\Model\ProjectsPostBody::class => false];
    }
}