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
        $object = new \Jane\Generated\DigitalOcean\Model\AppsInstanceSize();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('deprecation_intent', $data) && \is_int($data['deprecation_intent'])) {
            $data['deprecation_intent'] = (bool) $data['deprecation_intent'];
        }
        if (\array_key_exists('scalable', $data) && \is_int($data['scalable'])) {
            $data['scalable'] = (bool) $data['scalable'];
        }
        if (\array_key_exists('single_instance_only', $data) && \is_int($data['single_instance_only'])) {
            $data['single_instance_only'] = (bool) $data['single_instance_only'];
        }
        if (\array_key_exists('bandwidth_allowance_gib', $data)) {
            $object->bandwidthAllowanceGib = $data['bandwidth_allowance_gib'];
            unset($data['bandwidth_allowance_gib']);
        }
        if (\array_key_exists('cpu_type', $data)) {
            $object->cpuType = $data['cpu_type'];
            unset($data['cpu_type']);
        }
        if (\array_key_exists('cpus', $data)) {
            $object->cpus = $data['cpus'];
            unset($data['cpus']);
        }
        if (\array_key_exists('deprecation_intent', $data)) {
            $object->deprecationIntent = $data['deprecation_intent'];
            unset($data['deprecation_intent']);
        }
        if (\array_key_exists('memory_bytes', $data)) {
            $object->memoryBytes = $data['memory_bytes'];
            unset($data['memory_bytes']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('scalable', $data)) {
            $object->scalable = $data['scalable'];
            unset($data['scalable']);
        }
        if (\array_key_exists('single_instance_only', $data)) {
            $object->singleInstanceOnly = $data['single_instance_only'];
            unset($data['single_instance_only']);
        }
        if (\array_key_exists('slug', $data)) {
            $object->slug = $data['slug'];
            unset($data['slug']);
        }
        if (\array_key_exists('tier_downgrade_to', $data)) {
            $object->tierDowngradeTo = $data['tier_downgrade_to'];
            unset($data['tier_downgrade_to']);
        }
        if (\array_key_exists('tier_slug', $data)) {
            $object->tierSlug = $data['tier_slug'];
            unset($data['tier_slug']);
        }
        if (\array_key_exists('tier_upgrade_to', $data)) {
            $object->tierUpgradeTo = $data['tier_upgrade_to'];
            unset($data['tier_upgrade_to']);
        }
        if (\array_key_exists('usd_per_month', $data)) {
            $object->usdPerMonth = $data['usd_per_month'];
            unset($data['usd_per_month']);
        }
        if (\array_key_exists('usd_per_second', $data)) {
            $object->usdPerSecond = $data['usd_per_second'];
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
        if (array_key_exists('bandwidthAllowanceGib', get_object_vars($data)) && null !== ($data->bandwidthAllowanceGib ?? null)) {
            $dataArray['bandwidth_allowance_gib'] = $data->bandwidthAllowanceGib ?? null;
        }
        if (array_key_exists('cpuType', get_object_vars($data)) && null !== ($data->cpuType ?? null)) {
            $dataArray['cpu_type'] = $data->cpuType ?? null;
        }
        if (array_key_exists('cpus', get_object_vars($data)) && null !== ($data->cpus ?? null)) {
            $dataArray['cpus'] = $data->cpus ?? null;
        }
        if (array_key_exists('deprecationIntent', get_object_vars($data)) && null !== ($data->deprecationIntent ?? null)) {
            $dataArray['deprecation_intent'] = $data->deprecationIntent ?? null;
        }
        if (array_key_exists('memoryBytes', get_object_vars($data)) && null !== ($data->memoryBytes ?? null)) {
            $dataArray['memory_bytes'] = $data->memoryBytes ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('scalable', get_object_vars($data)) && null !== ($data->scalable ?? null)) {
            $dataArray['scalable'] = $data->scalable ?? null;
        }
        if (array_key_exists('singleInstanceOnly', get_object_vars($data)) && null !== ($data->singleInstanceOnly ?? null)) {
            $dataArray['single_instance_only'] = $data->singleInstanceOnly ?? null;
        }
        if (array_key_exists('slug', get_object_vars($data)) && null !== ($data->slug ?? null)) {
            $dataArray['slug'] = $data->slug ?? null;
        }
        if (array_key_exists('tierDowngradeTo', get_object_vars($data)) && null !== ($data->tierDowngradeTo ?? null)) {
            $dataArray['tier_downgrade_to'] = $data->tierDowngradeTo ?? null;
        }
        if (array_key_exists('tierSlug', get_object_vars($data)) && null !== ($data->tierSlug ?? null)) {
            $dataArray['tier_slug'] = $data->tierSlug ?? null;
        }
        if (array_key_exists('tierUpgradeTo', get_object_vars($data)) && null !== ($data->tierUpgradeTo ?? null)) {
            $dataArray['tier_upgrade_to'] = $data->tierUpgradeTo ?? null;
        }
        if (array_key_exists('usdPerMonth', get_object_vars($data)) && null !== ($data->usdPerMonth ?? null)) {
            $dataArray['usd_per_month'] = $data->usdPerMonth ?? null;
        }
        if (array_key_exists('usdPerSecond', get_object_vars($data)) && null !== ($data->usdPerSecond ?? null)) {
            $dataArray['usd_per_second'] = $data->usdPerSecond ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\AppsInstanceSize::class => false];
    }
}