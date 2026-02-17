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
class AppsInstanceSizeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppsInstanceSize::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppsInstanceSize::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\AppsInstanceSize();
        if (\array_key_exists('deprecation_intent', $data) && \is_int($data['deprecation_intent'])) {
            $data['deprecation_intent'] = (bool) $data['deprecation_intent'];
        }
        if (\array_key_exists('scalable', $data) && \is_int($data['scalable'])) {
            $data['scalable'] = (bool) $data['scalable'];
        }
        if (\array_key_exists('single_instance_only', $data) && \is_int($data['single_instance_only'])) {
            $data['single_instance_only'] = (bool) $data['single_instance_only'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bandwidth_allowance_gib', $data)) {
            $object->setBandwidthAllowanceGib($data['bandwidth_allowance_gib']);
            unset($data['bandwidth_allowance_gib']);
        }
        if (\array_key_exists('cpu_type', $data)) {
            $object->setCpuType($data['cpu_type']);
            unset($data['cpu_type']);
        }
        if (\array_key_exists('cpus', $data)) {
            $object->setCpus($data['cpus']);
            unset($data['cpus']);
        }
        if (\array_key_exists('deprecation_intent', $data)) {
            $object->setDeprecationIntent($data['deprecation_intent']);
            unset($data['deprecation_intent']);
        }
        if (\array_key_exists('memory_bytes', $data)) {
            $object->setMemoryBytes($data['memory_bytes']);
            unset($data['memory_bytes']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('scalable', $data)) {
            $object->setScalable($data['scalable']);
            unset($data['scalable']);
        }
        if (\array_key_exists('single_instance_only', $data)) {
            $object->setSingleInstanceOnly($data['single_instance_only']);
            unset($data['single_instance_only']);
        }
        if (\array_key_exists('slug', $data)) {
            $object->setSlug($data['slug']);
            unset($data['slug']);
        }
        if (\array_key_exists('tier_downgrade_to', $data)) {
            $object->setTierDowngradeTo($data['tier_downgrade_to']);
            unset($data['tier_downgrade_to']);
        }
        if (\array_key_exists('tier_slug', $data)) {
            $object->setTierSlug($data['tier_slug']);
            unset($data['tier_slug']);
        }
        if (\array_key_exists('tier_upgrade_to', $data)) {
            $object->setTierUpgradeTo($data['tier_upgrade_to']);
            unset($data['tier_upgrade_to']);
        }
        if (\array_key_exists('usd_per_month', $data)) {
            $object->setUsdPerMonth($data['usd_per_month']);
            unset($data['usd_per_month']);
        }
        if (\array_key_exists('usd_per_second', $data)) {
            $object->setUsdPerSecond($data['usd_per_second']);
            unset($data['usd_per_second']);
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
        if ($data->isInitialized('bandwidthAllowanceGib') && null !== $data->getBandwidthAllowanceGib()) {
            $dataArray['bandwidth_allowance_gib'] = $data->getBandwidthAllowanceGib();
        }
        if ($data->isInitialized('cpuType') && null !== $data->getCpuType()) {
            $dataArray['cpu_type'] = $data->getCpuType();
        }
        if ($data->isInitialized('cpus') && null !== $data->getCpus()) {
            $dataArray['cpus'] = $data->getCpus();
        }
        if ($data->isInitialized('deprecationIntent') && null !== $data->getDeprecationIntent()) {
            $dataArray['deprecation_intent'] = $data->getDeprecationIntent();
        }
        if ($data->isInitialized('memoryBytes') && null !== $data->getMemoryBytes()) {
            $dataArray['memory_bytes'] = $data->getMemoryBytes();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('scalable') && null !== $data->getScalable()) {
            $dataArray['scalable'] = $data->getScalable();
        }
        if ($data->isInitialized('singleInstanceOnly') && null !== $data->getSingleInstanceOnly()) {
            $dataArray['single_instance_only'] = $data->getSingleInstanceOnly();
        }
        if ($data->isInitialized('slug') && null !== $data->getSlug()) {
            $dataArray['slug'] = $data->getSlug();
        }
        if ($data->isInitialized('tierDowngradeTo') && null !== $data->getTierDowngradeTo()) {
            $dataArray['tier_downgrade_to'] = $data->getTierDowngradeTo();
        }
        if ($data->isInitialized('tierSlug') && null !== $data->getTierSlug()) {
            $dataArray['tier_slug'] = $data->getTierSlug();
        }
        if ($data->isInitialized('tierUpgradeTo') && null !== $data->getTierUpgradeTo()) {
            $dataArray['tier_upgrade_to'] = $data->getTierUpgradeTo();
        }
        if ($data->isInitialized('usdPerMonth') && null !== $data->getUsdPerMonth()) {
            $dataArray['usd_per_month'] = $data->getUsdPerMonth();
        }
        if ($data->isInitialized('usdPerSecond') && null !== $data->getUsdPerSecond()) {
            $dataArray['usd_per_second'] = $data->getUsdPerSecond();
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
        return [\Jane\Generated\DigitalOcean\Model\AppsInstanceSize::class => false];
    }
}