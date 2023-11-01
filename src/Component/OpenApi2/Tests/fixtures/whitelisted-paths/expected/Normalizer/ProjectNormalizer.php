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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Project';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Project';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\OpenApi2\Tests\Expected\Model\Project();
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
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('client', $data)) {
                $object->setClient($this->denormalizer->denormalize($data['client'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectClient', 'json', $context));
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
            if (\array_key_exists('over_budget_notification_date', $data)) {
                $object->setOverBudgetNotificationDate(\DateTime::createFromFormat('Y-m-d', $data['over_budget_notification_date'])->setTime(0, 0, 0));
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
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('client') && null !== $object->getClient()) {
                $data['client'] = $this->normalizer->normalize($object->getClient(), 'json', $context);
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('isBillable') && null !== $object->getIsBillable()) {
                $data['is_billable'] = $object->getIsBillable();
            }
            if ($object->isInitialized('isFixedFee') && null !== $object->getIsFixedFee()) {
                $data['is_fixed_fee'] = $object->getIsFixedFee();
            }
            if ($object->isInitialized('billBy') && null !== $object->getBillBy()) {
                $data['bill_by'] = $object->getBillBy();
            }
            if ($object->isInitialized('hourlyRate') && null !== $object->getHourlyRate()) {
                $data['hourly_rate'] = $object->getHourlyRate();
            }
            if ($object->isInitialized('budget') && null !== $object->getBudget()) {
                $data['budget'] = $object->getBudget();
            }
            if ($object->isInitialized('budgetBy') && null !== $object->getBudgetBy()) {
                $data['budget_by'] = $object->getBudgetBy();
            }
            if ($object->isInitialized('budgetIsMonthly') && null !== $object->getBudgetIsMonthly()) {
                $data['budget_is_monthly'] = $object->getBudgetIsMonthly();
            }
            if ($object->isInitialized('notifyWhenOverBudget') && null !== $object->getNotifyWhenOverBudget()) {
                $data['notify_when_over_budget'] = $object->getNotifyWhenOverBudget();
            }
            if ($object->isInitialized('overBudgetNotificationPercentage') && null !== $object->getOverBudgetNotificationPercentage()) {
                $data['over_budget_notification_percentage'] = $object->getOverBudgetNotificationPercentage();
            }
            if ($object->isInitialized('overBudgetNotificationDate') && null !== $object->getOverBudgetNotificationDate()) {
                $data['over_budget_notification_date'] = $object->getOverBudgetNotificationDate()->format('Y-m-d');
            }
            if ($object->isInitialized('showBudgetToAll') && null !== $object->getShowBudgetToAll()) {
                $data['show_budget_to_all'] = $object->getShowBudgetToAll();
            }
            if ($object->isInitialized('costBudget') && null !== $object->getCostBudget()) {
                $data['cost_budget'] = $object->getCostBudget();
            }
            if ($object->isInitialized('costBudgetIncludeExpenses') && null !== $object->getCostBudgetIncludeExpenses()) {
                $data['cost_budget_include_expenses'] = $object->getCostBudgetIncludeExpenses();
            }
            if ($object->isInitialized('fee') && null !== $object->getFee()) {
                $data['fee'] = $object->getFee();
            }
            if ($object->isInitialized('notes') && null !== $object->getNotes()) {
                $data['notes'] = $object->getNotes();
            }
            if ($object->isInitialized('startsOn') && null !== $object->getStartsOn()) {
                $data['starts_on'] = $object->getStartsOn()->format('Y-m-d');
            }
            if ($object->isInitialized('endsOn') && null !== $object->getEndsOn()) {
                $data['ends_on'] = $object->getEndsOn()->format('Y-m-d');
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\OpenApi2\\Tests\\Expected\\Model\\Project' => false];
        }
    }
} else {
    class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Project';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Project';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\OpenApi2\Tests\Expected\Model\Project();
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
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('client', $data)) {
                $object->setClient($this->denormalizer->denormalize($data['client'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectClient', 'json', $context));
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
            if (\array_key_exists('over_budget_notification_date', $data)) {
                $object->setOverBudgetNotificationDate(\DateTime::createFromFormat('Y-m-d', $data['over_budget_notification_date'])->setTime(0, 0, 0));
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
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('client') && null !== $object->getClient()) {
                $data['client'] = $this->normalizer->normalize($object->getClient(), 'json', $context);
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('isBillable') && null !== $object->getIsBillable()) {
                $data['is_billable'] = $object->getIsBillable();
            }
            if ($object->isInitialized('isFixedFee') && null !== $object->getIsFixedFee()) {
                $data['is_fixed_fee'] = $object->getIsFixedFee();
            }
            if ($object->isInitialized('billBy') && null !== $object->getBillBy()) {
                $data['bill_by'] = $object->getBillBy();
            }
            if ($object->isInitialized('hourlyRate') && null !== $object->getHourlyRate()) {
                $data['hourly_rate'] = $object->getHourlyRate();
            }
            if ($object->isInitialized('budget') && null !== $object->getBudget()) {
                $data['budget'] = $object->getBudget();
            }
            if ($object->isInitialized('budgetBy') && null !== $object->getBudgetBy()) {
                $data['budget_by'] = $object->getBudgetBy();
            }
            if ($object->isInitialized('budgetIsMonthly') && null !== $object->getBudgetIsMonthly()) {
                $data['budget_is_monthly'] = $object->getBudgetIsMonthly();
            }
            if ($object->isInitialized('notifyWhenOverBudget') && null !== $object->getNotifyWhenOverBudget()) {
                $data['notify_when_over_budget'] = $object->getNotifyWhenOverBudget();
            }
            if ($object->isInitialized('overBudgetNotificationPercentage') && null !== $object->getOverBudgetNotificationPercentage()) {
                $data['over_budget_notification_percentage'] = $object->getOverBudgetNotificationPercentage();
            }
            if ($object->isInitialized('overBudgetNotificationDate') && null !== $object->getOverBudgetNotificationDate()) {
                $data['over_budget_notification_date'] = $object->getOverBudgetNotificationDate()->format('Y-m-d');
            }
            if ($object->isInitialized('showBudgetToAll') && null !== $object->getShowBudgetToAll()) {
                $data['show_budget_to_all'] = $object->getShowBudgetToAll();
            }
            if ($object->isInitialized('costBudget') && null !== $object->getCostBudget()) {
                $data['cost_budget'] = $object->getCostBudget();
            }
            if ($object->isInitialized('costBudgetIncludeExpenses') && null !== $object->getCostBudgetIncludeExpenses()) {
                $data['cost_budget_include_expenses'] = $object->getCostBudgetIncludeExpenses();
            }
            if ($object->isInitialized('fee') && null !== $object->getFee()) {
                $data['fee'] = $object->getFee();
            }
            if ($object->isInitialized('notes') && null !== $object->getNotes()) {
                $data['notes'] = $object->getNotes();
            }
            if ($object->isInitialized('startsOn') && null !== $object->getStartsOn()) {
                $data['starts_on'] = $object->getStartsOn()->format('Y-m-d');
            }
            if ($object->isInitialized('endsOn') && null !== $object->getEndsOn()) {
                $data['ends_on'] = $object->getEndsOn()->format('Y-m-d');
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\OpenApi2\\Tests\\Expected\\Model\\Project' => false];
        }
    }
}