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
class SelectiveDestroyAssociatedResourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\SelectiveDestroyAssociatedResource::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\SelectiveDestroyAssociatedResource::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\SelectiveDestroyAssociatedResource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('floating_ips', $data)) {
            $values = [];
            foreach ($data['floating_ips'] as $value) {
                $values[] = $value;
            }
            $object->floatingIps = $values;
            unset($data['floating_ips']);
        }
        if (\array_key_exists('reserved_ips', $data)) {
            $values_1 = [];
            foreach ($data['reserved_ips'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->reservedIps = $values_1;
            unset($data['reserved_ips']);
        }
        if (\array_key_exists('snapshots', $data)) {
            $values_2 = [];
            foreach ($data['snapshots'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->snapshots = $values_2;
            unset($data['snapshots']);
        }
        if (\array_key_exists('volumes', $data)) {
            $values_3 = [];
            foreach ($data['volumes'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->volumes = $values_3;
            unset($data['volumes']);
        }
        if (\array_key_exists('volume_snapshots', $data)) {
            $values_4 = [];
            foreach ($data['volume_snapshots'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->volumeSnapshots = $values_4;
            unset($data['volume_snapshots']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('floatingIps', get_object_vars($data)) && null !== ($data->floatingIps ?? null)) {
            $values = [];
            foreach ($data->floatingIps ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['floating_ips'] = $values;
        }
        if (array_key_exists('reservedIps', get_object_vars($data)) && null !== ($data->reservedIps ?? null)) {
            $values_1 = [];
            foreach ($data->reservedIps ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['reserved_ips'] = $values_1;
        }
        if (array_key_exists('snapshots', get_object_vars($data)) && null !== ($data->snapshots ?? null)) {
            $values_2 = [];
            foreach ($data->snapshots ?? null as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['snapshots'] = $values_2;
        }
        if (array_key_exists('volumes', get_object_vars($data)) && null !== ($data->volumes ?? null)) {
            $values_3 = [];
            foreach ($data->volumes ?? null as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['volumes'] = $values_3;
        }
        if (array_key_exists('volumeSnapshots', get_object_vars($data)) && null !== ($data->volumeSnapshots ?? null)) {
            $values_4 = [];
            foreach ($data->volumeSnapshots ?? null as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['volume_snapshots'] = $values_4;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\SelectiveDestroyAssociatedResource::class => false];
    }
}