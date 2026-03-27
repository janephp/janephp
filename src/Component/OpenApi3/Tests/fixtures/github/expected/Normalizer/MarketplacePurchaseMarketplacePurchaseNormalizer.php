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
class MarketplacePurchaseMarketplacePurchaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\MarketplacePurchaseMarketplacePurchase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\MarketplacePurchaseMarketplacePurchase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\MarketplacePurchaseMarketplacePurchase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('is_installed', $data) && \is_int($data['is_installed'])) {
            $data['is_installed'] = (bool) $data['is_installed'];
        }
        if (\array_key_exists('on_free_trial', $data) && \is_int($data['on_free_trial'])) {
            $data['on_free_trial'] = (bool) $data['on_free_trial'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\MarketplacePurchaseMarketplacePurchaseConstraint());
        }
        if (\array_key_exists('billing_cycle', $data)) {
            $object->setBillingCycle($data['billing_cycle']);
            unset($data['billing_cycle']);
        }
        if (\array_key_exists('next_billing_date', $data) && $data['next_billing_date'] !== null) {
            $object->setNextBillingDate($data['next_billing_date']);
            unset($data['next_billing_date']);
        }
        elseif (\array_key_exists('next_billing_date', $data) && $data['next_billing_date'] === null) {
            $object->setNextBillingDate(null);
        }
        if (\array_key_exists('is_installed', $data)) {
            $object->setIsInstalled($data['is_installed']);
            unset($data['is_installed']);
        }
        if (\array_key_exists('unit_count', $data) && $data['unit_count'] !== null) {
            $object->setUnitCount($data['unit_count']);
            unset($data['unit_count']);
        }
        elseif (\array_key_exists('unit_count', $data) && $data['unit_count'] === null) {
            $object->setUnitCount(null);
        }
        if (\array_key_exists('on_free_trial', $data)) {
            $object->setOnFreeTrial($data['on_free_trial']);
            unset($data['on_free_trial']);
        }
        if (\array_key_exists('free_trial_ends_on', $data) && $data['free_trial_ends_on'] !== null) {
            $object->setFreeTrialEndsOn($data['free_trial_ends_on']);
            unset($data['free_trial_ends_on']);
        }
        elseif (\array_key_exists('free_trial_ends_on', $data) && $data['free_trial_ends_on'] === null) {
            $object->setFreeTrialEndsOn(null);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
            unset($data['updated_at']);
        }
        if (\array_key_exists('plan', $data)) {
            $object->setPlan($this->denormalizer->denormalize($data['plan'], \Github\Model\MarketplaceListingPlan::class, 'json', $context));
            unset($data['plan']);
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
        if ($data->isInitialized('billingCycle') && null !== $data->getBillingCycle()) {
            $dataArray['billing_cycle'] = $data->getBillingCycle();
        }
        if ($data->isInitialized('nextBillingDate')) {
            $dataArray['next_billing_date'] = $data->getNextBillingDate();
        }
        if ($data->isInitialized('isInstalled') && null !== $data->getIsInstalled()) {
            $dataArray['is_installed'] = $data->getIsInstalled();
        }
        if ($data->isInitialized('unitCount')) {
            $dataArray['unit_count'] = $data->getUnitCount();
        }
        if ($data->isInitialized('onFreeTrial') && null !== $data->getOnFreeTrial()) {
            $dataArray['on_free_trial'] = $data->getOnFreeTrial();
        }
        if ($data->isInitialized('freeTrialEndsOn')) {
            $dataArray['free_trial_ends_on'] = $data->getFreeTrialEndsOn();
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt();
        }
        if ($data->isInitialized('plan') && null !== $data->getPlan()) {
            $dataArray['plan'] = $this->normalizer->normalize($data->getPlan(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\MarketplacePurchaseMarketplacePurchaseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\MarketplacePurchaseMarketplacePurchase::class => false];
    }
}