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
class UserMarketplacePurchaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\UserMarketplacePurchase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\UserMarketplacePurchase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\UserMarketplacePurchase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('on_free_trial', $data) && \is_int($data['on_free_trial'])) {
            $data['on_free_trial'] = (bool) $data['on_free_trial'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\UserMarketplacePurchaseConstraint());
        }
        if (\array_key_exists('billing_cycle', $data)) {
            $object->setBillingCycle($data['billing_cycle']);
            unset($data['billing_cycle']);
        }
        if (\array_key_exists('next_billing_date', $data) && $data['next_billing_date'] !== null) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['next_billing_date']);
            if (false === $date) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['next_billing_date'], 'Y-m-d\TH:i:sP');
            }
            $object->setNextBillingDate($date);
            unset($data['next_billing_date']);
        }
        elseif (\array_key_exists('next_billing_date', $data) && $data['next_billing_date'] === null) {
            $object->setNextBillingDate(null);
            unset($data['next_billing_date']);
        }
        if (\array_key_exists('unit_count', $data) && $data['unit_count'] !== null) {
            $object->setUnitCount($data['unit_count']);
            unset($data['unit_count']);
        }
        elseif (\array_key_exists('unit_count', $data) && $data['unit_count'] === null) {
            $object->setUnitCount(null);
            unset($data['unit_count']);
        }
        if (\array_key_exists('on_free_trial', $data)) {
            $object->setOnFreeTrial($data['on_free_trial']);
            unset($data['on_free_trial']);
        }
        if (\array_key_exists('free_trial_ends_on', $data) && $data['free_trial_ends_on'] !== null) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['free_trial_ends_on']);
            if (false === $date_1) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['free_trial_ends_on'], 'Y-m-d\TH:i:sP');
            }
            $object->setFreeTrialEndsOn($date_1);
            unset($data['free_trial_ends_on']);
        }
        elseif (\array_key_exists('free_trial_ends_on', $data) && $data['free_trial_ends_on'] === null) {
            $object->setFreeTrialEndsOn(null);
            unset($data['free_trial_ends_on']);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_2) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setUpdatedAt($date_2);
            unset($data['updated_at']);
        }
        elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
            unset($data['updated_at']);
        }
        if (\array_key_exists('account', $data)) {
            $object->setAccount($this->denormalizer->denormalize($data['account'], \Github\Model\MarketplaceAccount::class, 'json', $context));
            unset($data['account']);
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
        $dataArray['billing_cycle'] = $data->getBillingCycle();
        $dataArray['next_billing_date'] = $data->getNextBillingDate()?->format('Y-m-d\TH:i:sP');
        $dataArray['unit_count'] = $data->getUnitCount();
        $dataArray['on_free_trial'] = $data->getOnFreeTrial();
        $dataArray['free_trial_ends_on'] = $data->getFreeTrialEndsOn()?->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['account'] = $data->getAccount() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getAccount(), 'json', $context));
        $dataArray['plan'] = $data->getPlan() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getPlan(), 'json', $context));
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\UserMarketplacePurchaseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\UserMarketplacePurchase::class => false];
    }
}