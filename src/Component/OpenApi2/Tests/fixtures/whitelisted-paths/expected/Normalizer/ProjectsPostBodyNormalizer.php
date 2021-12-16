<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectsPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectsPostBody';
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
        $object = new \Jane\OpenApi2\Tests\Expected\Model\ProjectsPostBody();
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['client_id'] = $object->getClientId();
        $data['name'] = $object->getName();
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if (null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        $data['is_billable'] = $object->getIsBillable();
        if (null !== $object->getIsFixedFee()) {
            $data['is_fixed_fee'] = $object->getIsFixedFee();
        }
        $data['bill_by'] = $object->getBillBy();
        if (null !== $object->getHourlyRate()) {
            $data['hourly_rate'] = $object->getHourlyRate();
        }
        if (null !== $object->getBudget()) {
            $data['budget'] = $object->getBudget();
        }
        $data['budget_by'] = $object->getBudgetBy();
        if (null !== $object->getBudgetIsMonthly()) {
            $data['budget_is_monthly'] = $object->getBudgetIsMonthly();
        }
        if (null !== $object->getNotifyWhenOverBudget()) {
            $data['notify_when_over_budget'] = $object->getNotifyWhenOverBudget();
        }
        if (null !== $object->getOverBudgetNotificationPercentage()) {
            $data['over_budget_notification_percentage'] = $object->getOverBudgetNotificationPercentage();
        }
        if (null !== $object->getShowBudgetToAll()) {
            $data['show_budget_to_all'] = $object->getShowBudgetToAll();
        }
        if (null !== $object->getCostBudget()) {
            $data['cost_budget'] = $object->getCostBudget();
        }
        if (null !== $object->getCostBudgetIncludeExpenses()) {
            $data['cost_budget_include_expenses'] = $object->getCostBudgetIncludeExpenses();
        }
        if (null !== $object->getFee()) {
            $data['fee'] = $object->getFee();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getStartsOn()) {
            $data['starts_on'] = $object->getStartsOn()->format('Y-m-d');
        }
        if (null !== $object->getEndsOn()) {
            $data['ends_on'] = $object->getEndsOn()->format('Y-m-d');
        }
        return $data;
    }
}