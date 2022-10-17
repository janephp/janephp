<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\UserMarketplacePurchase';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\UserMarketplacePurchase';
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
        $object = new \Github\Model\UserMarketplacePurchase();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\UserMarketplacePurchaseConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('billing_cycle', $data)) {
            $object->setBillingCycle($data['billing_cycle']);
            unset($data['billing_cycle']);
        }
        if (\array_key_exists('next_billing_date', $data) && $data['next_billing_date'] !== null) {
            $object->setNextBillingDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['next_billing_date']));
            unset($data['next_billing_date']);
        }
        elseif (\array_key_exists('next_billing_date', $data) && $data['next_billing_date'] === null) {
            $object->setNextBillingDate(null);
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
            $object->setFreeTrialEndsOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['free_trial_ends_on']));
            unset($data['free_trial_ends_on']);
        }
        elseif (\array_key_exists('free_trial_ends_on', $data) && $data['free_trial_ends_on'] === null) {
            $object->setFreeTrialEndsOn(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('account', $data)) {
            $object->setAccount($this->denormalizer->denormalize($data['account'], 'Github\\Model\\MarketplaceAccount', 'json', $context));
            unset($data['account']);
        }
        if (\array_key_exists('plan', $data)) {
            $object->setPlan($this->denormalizer->denormalize($data['plan'], 'Github\\Model\\MarketplaceListingPlan', 'json', $context));
            unset($data['plan']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['billing_cycle'] = $object->getBillingCycle();
        $data['next_billing_date'] = $object->getNextBillingDate()->format('Y-m-d\\TH:i:sP');
        $data['unit_count'] = $object->getUnitCount();
        $data['on_free_trial'] = $object->getOnFreeTrial();
        $data['free_trial_ends_on'] = $object->getFreeTrialEndsOn()->format('Y-m-d\\TH:i:sP');
        $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        $data['account'] = $this->normalizer->normalize($object->getAccount(), 'json', $context);
        $data['plan'] = $this->normalizer->normalize($object->getPlan(), 'json', $context);
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\UserMarketplacePurchaseConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}