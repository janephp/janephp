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
class ReservedIpv6Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ReservedIpv6::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ReservedIpv6::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ReservedIpv6();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ip', $data)) {
            $object->setIp($data['ip']);
            unset($data['ip']);
        }
        if (\array_key_exists('reserved_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['reserved_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['reserved_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setReservedAt($date);
            unset($data['reserved_at']);
        }
        if (\array_key_exists('region_slug', $data)) {
            $object->setRegionSlug($data['region_slug']);
            unset($data['region_slug']);
        }
        if (\array_key_exists('droplet', $data)) {
            $value = $data['droplet'];
            if (is_array($data['droplet']) && $this->isOnlyNumericKeys($data['droplet'])) {
                $values = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
                foreach ($data['droplet'] as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            } elseif (is_array($data['droplet']) and \array_key_exists('id', $data['droplet']) and \array_key_exists('name', $data['droplet']) and \array_key_exists('memory', $data['droplet']) and \array_key_exists('vcpus', $data['droplet']) and \array_key_exists('disk', $data['droplet']) and \array_key_exists('locked', $data['droplet']) and (\array_key_exists('status', $data['droplet']) and ($data['droplet']['status'] == 'new' or $data['droplet']['status'] == 'active' or $data['droplet']['status'] == 'off' or $data['droplet']['status'] == 'archive')) and \array_key_exists('created_at', $data['droplet']) and \array_key_exists('features', $data['droplet']) and \array_key_exists('backup_ids', $data['droplet']) and \array_key_exists('next_backup_window', $data['droplet']) and \array_key_exists('snapshot_ids', $data['droplet']) and \array_key_exists('image', $data['droplet']) and \array_key_exists('volume_ids', $data['droplet']) and \array_key_exists('size', $data['droplet']) and \array_key_exists('size_slug', $data['droplet']) and \array_key_exists('networks', $data['droplet']) and \array_key_exists('region', $data['droplet']) and \array_key_exists('tags', $data['droplet'])) {
                $value = $this->denormalizer->denormalize($data['droplet'], \Jane\Generated\DigitalOcean\Model\Droplet::class, 'json', $context);
            }
            $object->setDroplet($value);
            unset($data['droplet']);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('ip') && null !== $data->getIp()) {
            $dataArray['ip'] = $data->getIp();
        }
        if ($data->isInitialized('reservedAt') && null !== $data->getReservedAt()) {
            $dataArray['reserved_at'] = $data->getReservedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('regionSlug') && null !== $data->getRegionSlug()) {
            $dataArray['region_slug'] = $data->getRegionSlug();
        }
        if ($data->isInitialized('droplet') && null !== $data->getDroplet()) {
            $value = $data->getDroplet();
            if (is_object($data->getDroplet())) {
                $values = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
                foreach ($data->getDroplet() as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            } elseif (is_object($data->getDroplet())) {
                $value = $data->getDroplet() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getDroplet(), 'json', $context));
            }
            $dataArray['droplet'] = $value;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ReservedIpv6::class => false];
    }
}