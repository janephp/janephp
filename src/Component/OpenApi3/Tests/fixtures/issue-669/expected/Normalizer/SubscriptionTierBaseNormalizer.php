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
        $object = new \Jane\Generated\DigitalOcean\Model\SubscriptionTierBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('allow_storage_overage', $data) && \is_int($data['allow_storage_overage'])) {
            $data['allow_storage_overage'] = (bool) $data['allow_storage_overage'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('slug', $data)) {
            $object->slug = $data['slug'];
            unset($data['slug']);
        }
        if (\array_key_exists('included_repositories', $data)) {
            $object->includedRepositories = $data['included_repositories'];
            unset($data['included_repositories']);
        }
        if (\array_key_exists('included_storage_bytes', $data)) {
            $object->includedStorageBytes = $data['included_storage_bytes'];
            unset($data['included_storage_bytes']);
        }
        if (\array_key_exists('allow_storage_overage', $data)) {
            $object->allowStorageOverage = $data['allow_storage_overage'];
            unset($data['allow_storage_overage']);
        }
        if (\array_key_exists('included_bandwidth_bytes', $data)) {
            $object->includedBandwidthBytes = $data['included_bandwidth_bytes'];
            unset($data['included_bandwidth_bytes']);
        }
        if (\array_key_exists('monthly_price_in_cents', $data)) {
            $object->monthlyPriceInCents = $data['monthly_price_in_cents'];
            unset($data['monthly_price_in_cents']);
        }
        if (\array_key_exists('storage_overage_price_in_cents', $data)) {
            $object->storageOveragePriceInCents = $data['storage_overage_price_in_cents'];
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
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('slug', get_object_vars($data)) && null !== ($data->slug ?? null)) {
            $dataArray['slug'] = $data->slug ?? null;
        }
        if (array_key_exists('includedRepositories', get_object_vars($data)) && null !== ($data->includedRepositories ?? null)) {
            $dataArray['included_repositories'] = $data->includedRepositories ?? null;
        }
        if (array_key_exists('includedStorageBytes', get_object_vars($data)) && null !== ($data->includedStorageBytes ?? null)) {
            $dataArray['included_storage_bytes'] = $data->includedStorageBytes ?? null;
        }
        if (array_key_exists('allowStorageOverage', get_object_vars($data)) && null !== ($data->allowStorageOverage ?? null)) {
            $dataArray['allow_storage_overage'] = $data->allowStorageOverage ?? null;
        }
        if (array_key_exists('includedBandwidthBytes', get_object_vars($data)) && null !== ($data->includedBandwidthBytes ?? null)) {
            $dataArray['included_bandwidth_bytes'] = $data->includedBandwidthBytes ?? null;
        }
        if (array_key_exists('monthlyPriceInCents', get_object_vars($data)) && null !== ($data->monthlyPriceInCents ?? null)) {
            $dataArray['monthly_price_in_cents'] = $data->monthlyPriceInCents ?? null;
        }
        if (array_key_exists('storageOveragePriceInCents', get_object_vars($data)) && null !== ($data->storageOveragePriceInCents ?? null)) {
            $dataArray['storage_overage_price_in_cents'] = $data->storageOveragePriceInCents ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
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