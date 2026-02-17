<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SubscriptionTierBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\SubscriptionTierBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\SubscriptionTierBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\SubscriptionTierBase();
        if (\array_key_exists('allow_storage_overage', $data) && \is_int($data['allow_storage_overage'])) {
            $data['allow_storage_overage'] = (bool) $data['allow_storage_overage'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('slug', $data)) {
            $object->setSlug($data['slug']);
            unset($data['slug']);
        }
        if (\array_key_exists('included_repositories', $data)) {
            $object->setIncludedRepositories($data['included_repositories']);
            unset($data['included_repositories']);
        }
        if (\array_key_exists('included_storage_bytes', $data)) {
            $object->setIncludedStorageBytes($data['included_storage_bytes']);
            unset($data['included_storage_bytes']);
        }
        if (\array_key_exists('allow_storage_overage', $data)) {
            $object->setAllowStorageOverage($data['allow_storage_overage']);
            unset($data['allow_storage_overage']);
        }
        if (\array_key_exists('included_bandwidth_bytes', $data)) {
            $object->setIncludedBandwidthBytes($data['included_bandwidth_bytes']);
            unset($data['included_bandwidth_bytes']);
        }
        if (\array_key_exists('monthly_price_in_cents', $data)) {
            $object->setMonthlyPriceInCents($data['monthly_price_in_cents']);
            unset($data['monthly_price_in_cents']);
        }
        if (\array_key_exists('storage_overage_price_in_cents', $data)) {
            $object->setStorageOveragePriceInCents($data['storage_overage_price_in_cents']);
            unset($data['storage_overage_price_in_cents']);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('slug') && null !== $data->getSlug()) {
            $dataArray['slug'] = $data->getSlug();
        }
        if ($data->isInitialized('includedRepositories') && null !== $data->getIncludedRepositories()) {
            $dataArray['included_repositories'] = $data->getIncludedRepositories();
        }
        if ($data->isInitialized('includedStorageBytes') && null !== $data->getIncludedStorageBytes()) {
            $dataArray['included_storage_bytes'] = $data->getIncludedStorageBytes();
        }
        if ($data->isInitialized('allowStorageOverage') && null !== $data->getAllowStorageOverage()) {
            $dataArray['allow_storage_overage'] = $data->getAllowStorageOverage();
        }
        if ($data->isInitialized('includedBandwidthBytes') && null !== $data->getIncludedBandwidthBytes()) {
            $dataArray['included_bandwidth_bytes'] = $data->getIncludedBandwidthBytes();
        }
        if ($data->isInitialized('monthlyPriceInCents') && null !== $data->getMonthlyPriceInCents()) {
            $dataArray['monthly_price_in_cents'] = $data->getMonthlyPriceInCents();
        }
        if ($data->isInitialized('storageOveragePriceInCents') && null !== $data->getStorageOveragePriceInCents()) {
            $dataArray['storage_overage_price_in_cents'] = $data->getStorageOveragePriceInCents();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\SubscriptionTierBase::class => false];
    }
}