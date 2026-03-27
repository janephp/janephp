<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CombinedBillingUsageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\CombinedBillingUsage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\CombinedBillingUsage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\CombinedBillingUsage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\CombinedBillingUsageConstraint());
        }
        if (\array_key_exists('days_left_in_billing_cycle', $data)) {
            $object->setDaysLeftInBillingCycle($data['days_left_in_billing_cycle']);
            unset($data['days_left_in_billing_cycle']);
        }
        if (\array_key_exists('estimated_paid_storage_for_month', $data)) {
            $object->setEstimatedPaidStorageForMonth($data['estimated_paid_storage_for_month']);
            unset($data['estimated_paid_storage_for_month']);
        }
        if (\array_key_exists('estimated_storage_for_month', $data)) {
            $object->setEstimatedStorageForMonth($data['estimated_storage_for_month']);
            unset($data['estimated_storage_for_month']);
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
        if ($data->isInitialized('daysLeftInBillingCycle') && null !== $data->getDaysLeftInBillingCycle()) {
            $dataArray['days_left_in_billing_cycle'] = $data->getDaysLeftInBillingCycle();
        }
        if ($data->isInitialized('estimatedPaidStorageForMonth') && null !== $data->getEstimatedPaidStorageForMonth()) {
            $dataArray['estimated_paid_storage_for_month'] = $data->getEstimatedPaidStorageForMonth();
        }
        if ($data->isInitialized('estimatedStorageForMonth') && null !== $data->getEstimatedStorageForMonth()) {
            $dataArray['estimated_storage_for_month'] = $data->getEstimatedStorageForMonth();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\CombinedBillingUsageConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\CombinedBillingUsage::class => false];
    }
}