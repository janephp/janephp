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
class MarketplacePurchaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\MarketplacePurchase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\MarketplacePurchase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\MarketplacePurchase();
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
            $this->validate($data, new \Github\Validator\MarketplacePurchaseConstraint());
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('login', $data)) {
            $object->setLogin($data['login']);
            unset($data['login']);
        }
        if (\array_key_exists('organization_billing_email', $data)) {
            $object->setOrganizationBillingEmail($data['organization_billing_email']);
            unset($data['organization_billing_email']);
        }
        if (\array_key_exists('marketplace_pending_change', $data) && $data['marketplace_pending_change'] !== null) {
            $object->setMarketplacePendingChange($this->denormalizer->denormalize($data['marketplace_pending_change'], \Github\Model\MarketplacePurchaseMarketplacePendingChange::class, 'json', $context));
            unset($data['marketplace_pending_change']);
        }
        elseif (\array_key_exists('marketplace_pending_change', $data) && $data['marketplace_pending_change'] === null) {
            $object->setMarketplacePendingChange(null);
            unset($data['marketplace_pending_change']);
        }
        if (\array_key_exists('marketplace_purchase', $data)) {
            $object->setMarketplacePurchase($this->denormalizer->denormalize($data['marketplace_purchase'], \Github\Model\MarketplacePurchaseMarketplacePurchase::class, 'json', $context));
            unset($data['marketplace_purchase']);
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
        $dataArray['url'] = $data->getUrl();
        $dataArray['type'] = $data->getType();
        $dataArray['id'] = $data->getId();
        $dataArray['login'] = $data->getLogin();
        if ($data->isInitialized('organizationBillingEmail') && null !== $data->getOrganizationBillingEmail()) {
            $dataArray['organization_billing_email'] = $data->getOrganizationBillingEmail();
        }
        if ($data->isInitialized('marketplacePendingChange') && null !== $data->getMarketplacePendingChange()) {
            $dataArray['marketplace_pending_change'] = $data->getMarketplacePendingChange() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getMarketplacePendingChange(), 'json', $context));
        }
        $dataArray['marketplace_purchase'] = $data->getMarketplacePurchase() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getMarketplacePurchase(), 'json', $context));
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\MarketplacePurchaseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\MarketplacePurchase::class => false];
    }
}