<?php

namespace Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\CheckArray;
use Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Model\Project::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Model\Project::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Model\Project();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('hourly_rate', $data) && \is_int($data['hourly_rate'])) {
            $data['hourly_rate'] = (float) $data['hourly_rate'];
        }
        if (\array_key_exists('budget', $data) && \is_int($data['budget'])) {
            $data['budget'] = (float) $data['budget'];
        }
        if (\array_key_exists('over_budget_notification_percentage', $data) && \is_int($data['over_budget_notification_percentage'])) {
            $data['over_budget_notification_percentage'] = (float) $data['over_budget_notification_percentage'];
        }
        if (\array_key_exists('cost_budget', $data) && \is_int($data['cost_budget'])) {
            $data['cost_budget'] = (float) $data['cost_budget'];
        }
        if (\array_key_exists('fee', $data) && \is_int($data['fee'])) {
            $data['fee'] = (float) $data['fee'];
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
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('client', $data)) {
            $object->client = $this->denormalizer->denormalize($data['client'], \Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Model\ProjectClient::class, 'json', $context);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('code', $data)) {
            $object->code = $data['code'];
        }
        if (\array_key_exists('is_active', $data)) {
            $object->isActive = $data['is_active'];
        }
        if (\array_key_exists('is_billable', $data)) {
            $object->isBillable = $data['is_billable'];
        }
        if (\array_key_exists('is_fixed_fee', $data)) {
            $object->isFixedFee = $data['is_fixed_fee'];
        }
        if (\array_key_exists('bill_by', $data)) {
            $object->billBy = $data['bill_by'];
        }
        if (\array_key_exists('hourly_rate', $data)) {
            $object->hourlyRate = $data['hourly_rate'];
        }
        if (\array_key_exists('budget', $data)) {
            $object->budget = $data['budget'];
        }
        if (\array_key_exists('budget_by', $data)) {
            $object->budgetBy = $data['budget_by'];
        }
        if (\array_key_exists('budget_is_monthly', $data)) {
            $object->budgetIsMonthly = $data['budget_is_monthly'];
        }
        if (\array_key_exists('notify_when_over_budget', $data)) {
            $object->notifyWhenOverBudget = $data['notify_when_over_budget'];
        }
        if (\array_key_exists('over_budget_notification_percentage', $data)) {
            $object->overBudgetNotificationPercentage = $data['over_budget_notification_percentage'];
        }
        if (\array_key_exists('over_budget_notification_date', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['over_budget_notification_date']);
            if (false === $date) {
                throw new \Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\InvalidDateException($data['over_budget_notification_date'], 'Y-m-d');
            }
            $object->overBudgetNotificationDate = $date->setTime(0, 0, 0);
        }
        if (\array_key_exists('show_budget_to_all', $data)) {
            $object->showBudgetToAll = $data['show_budget_to_all'];
        }
        if (\array_key_exists('cost_budget', $data)) {
            $object->costBudget = $data['cost_budget'];
        }
        if (\array_key_exists('cost_budget_include_expenses', $data)) {
            $object->costBudgetIncludeExpenses = $data['cost_budget_include_expenses'];
        }
        if (\array_key_exists('fee', $data)) {
            $object->fee = $data['fee'];
        }
        if (\array_key_exists('notes', $data)) {
            $object->notes = $data['notes'];
        }
        if (\array_key_exists('starts_on', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d', $data['starts_on']);
            if (false === $date_1) {
                throw new \Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\InvalidDateException($data['starts_on'], 'Y-m-d');
            }
            $object->startsOn = $date_1->setTime(0, 0, 0);
        }
        if (\array_key_exists('ends_on', $data)) {
            $date_2 = \DateTime::createFromFormat('Y-m-d', $data['ends_on']);
            if (false === $date_2) {
                throw new \Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\InvalidDateException($data['ends_on'], 'Y-m-d');
            }
            $object->endsOn = $date_2->setTime(0, 0, 0);
        }
        if (\array_key_exists('created_at', $data)) {
            $date_3 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date_3) {
                throw new \Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date_3;
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_4 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_4) {
                throw new \Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->updatedAt = $date_4;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('client', get_object_vars($data)) && null !== ($data->client ?? null)) {
            $dataArray['client'] = ($data->client ?? null) === null ? null : new \Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($this->normalizer->normalize($data->client ?? null, 'json', $context));
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('code', get_object_vars($data)) && null !== ($data->code ?? null)) {
            $dataArray['code'] = $data->code ?? null;
        }
        if (array_key_exists('isActive', get_object_vars($data)) && null !== ($data->isActive ?? null)) {
            $dataArray['is_active'] = $data->isActive ?? null;
        }
        if (array_key_exists('isBillable', get_object_vars($data)) && null !== ($data->isBillable ?? null)) {
            $dataArray['is_billable'] = $data->isBillable ?? null;
        }
        if (array_key_exists('isFixedFee', get_object_vars($data)) && null !== ($data->isFixedFee ?? null)) {
            $dataArray['is_fixed_fee'] = $data->isFixedFee ?? null;
        }
        if (array_key_exists('billBy', get_object_vars($data)) && null !== ($data->billBy ?? null)) {
            $dataArray['bill_by'] = $data->billBy ?? null;
        }
        if (array_key_exists('hourlyRate', get_object_vars($data)) && null !== ($data->hourlyRate ?? null)) {
            $dataArray['hourly_rate'] = $data->hourlyRate ?? null;
        }
        if (array_key_exists('budget', get_object_vars($data)) && null !== ($data->budget ?? null)) {
            $dataArray['budget'] = $data->budget ?? null;
        }
        if (array_key_exists('budgetBy', get_object_vars($data)) && null !== ($data->budgetBy ?? null)) {
            $dataArray['budget_by'] = $data->budgetBy ?? null;
        }
        if (array_key_exists('budgetIsMonthly', get_object_vars($data)) && null !== ($data->budgetIsMonthly ?? null)) {
            $dataArray['budget_is_monthly'] = $data->budgetIsMonthly ?? null;
        }
        if (array_key_exists('notifyWhenOverBudget', get_object_vars($data)) && null !== ($data->notifyWhenOverBudget ?? null)) {
            $dataArray['notify_when_over_budget'] = $data->notifyWhenOverBudget ?? null;
        }
        if (array_key_exists('overBudgetNotificationPercentage', get_object_vars($data)) && null !== ($data->overBudgetNotificationPercentage ?? null)) {
            $dataArray['over_budget_notification_percentage'] = $data->overBudgetNotificationPercentage ?? null;
        }
        if (array_key_exists('overBudgetNotificationDate', get_object_vars($data)) && null !== ($data->overBudgetNotificationDate ?? null)) {
            $dataArray['over_budget_notification_date'] = ($data->overBudgetNotificationDate ?? null)->format('Y-m-d');
        }
        if (array_key_exists('showBudgetToAll', get_object_vars($data)) && null !== ($data->showBudgetToAll ?? null)) {
            $dataArray['show_budget_to_all'] = $data->showBudgetToAll ?? null;
        }
        if (array_key_exists('costBudget', get_object_vars($data)) && null !== ($data->costBudget ?? null)) {
            $dataArray['cost_budget'] = $data->costBudget ?? null;
        }
        if (array_key_exists('costBudgetIncludeExpenses', get_object_vars($data)) && null !== ($data->costBudgetIncludeExpenses ?? null)) {
            $dataArray['cost_budget_include_expenses'] = $data->costBudgetIncludeExpenses ?? null;
        }
        if (array_key_exists('fee', get_object_vars($data)) && null !== ($data->fee ?? null)) {
            $dataArray['fee'] = $data->fee ?? null;
        }
        if (array_key_exists('notes', get_object_vars($data)) && null !== ($data->notes ?? null)) {
            $dataArray['notes'] = $data->notes ?? null;
        }
        if (array_key_exists('startsOn', get_object_vars($data)) && null !== ($data->startsOn ?? null)) {
            $dataArray['starts_on'] = ($data->startsOn ?? null)->format('Y-m-d');
        }
        if (array_key_exists('endsOn', get_object_vars($data)) && null !== ($data->endsOn ?? null)) {
            $dataArray['ends_on'] = ($data->endsOn ?? null)->format('Y-m-d');
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['created_at'] = ($data->createdAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['updated_at'] = ($data->updatedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Model\Project::class => false];
    }
}