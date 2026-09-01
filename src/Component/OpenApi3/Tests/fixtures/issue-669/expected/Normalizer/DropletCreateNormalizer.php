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
class DropletCreateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\DropletCreate::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\DropletCreate::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\DropletCreate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('backups', $data) && \is_int($data['backups'])) {
            $data['backups'] = (bool) $data['backups'];
        }
        if (\array_key_exists('ipv6', $data) && \is_int($data['ipv6'])) {
            $data['ipv6'] = (bool) $data['ipv6'];
        }
        if (\array_key_exists('monitoring', $data) && \is_int($data['monitoring'])) {
            $data['monitoring'] = (bool) $data['monitoring'];
        }
        if (\array_key_exists('private_networking', $data) && \is_int($data['private_networking'])) {
            $data['private_networking'] = (bool) $data['private_networking'];
        }
        if (\array_key_exists('with_droplet_agent', $data) && \is_int($data['with_droplet_agent'])) {
            $data['with_droplet_agent'] = (bool) $data['with_droplet_agent'];
        }
        if (\array_key_exists('region', $data)) {
            $object->region = $data['region'];
            unset($data['region']);
        }
        if (\array_key_exists('size', $data)) {
            $object->size = $data['size'];
            unset($data['size']);
        }
        if (\array_key_exists('image', $data)) {
            $value = $data['image'];
            if (is_string($data['image'])) {
                $value = $data['image'];
            } elseif (is_int($data['image'])) {
                $value = $data['image'];
            }
            $object->image = $value;
            unset($data['image']);
        }
        if (\array_key_exists('ssh_keys', $data)) {
            $values = [];
            foreach ($data['ssh_keys'] as $value_1) {
                $value_2 = $value_1;
                if (is_string($value_1)) {
                    $value_2 = $value_1;
                } elseif (is_int($value_1)) {
                    $value_2 = $value_1;
                }
                $values[] = $value_2;
            }
            $object->sshKeys = $values;
            unset($data['ssh_keys']);
        }
        if (\array_key_exists('backups', $data)) {
            $object->backups = $data['backups'];
            unset($data['backups']);
        }
        if (\array_key_exists('backup_policy', $data)) {
            $object->backupPolicy = $this->denormalizer->denormalize($data['backup_policy'], \Jane\Generated\DigitalOcean\Model\DropletCreateBackupPolicy::class, 'json', $context);
            unset($data['backup_policy']);
        }
        if (\array_key_exists('ipv6', $data)) {
            $object->ipv6 = $data['ipv6'];
            unset($data['ipv6']);
        }
        if (\array_key_exists('monitoring', $data)) {
            $object->monitoring = $data['monitoring'];
            unset($data['monitoring']);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_1 = [];
            foreach ($data['tags'] as $value_3) {
                $values_1[] = $value_3;
            }
            $object->tags = $values_1;
            unset($data['tags']);
        }
        elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->tags = null;
            unset($data['tags']);
        }
        if (\array_key_exists('user_data', $data)) {
            $object->userData = $data['user_data'];
            unset($data['user_data']);
        }
        if (\array_key_exists('private_networking', $data)) {
            $object->privateNetworking = $data['private_networking'];
            unset($data['private_networking']);
        }
        if (\array_key_exists('volumes', $data)) {
            $values_2 = [];
            foreach ($data['volumes'] as $value_4) {
                $values_2[] = $value_4;
            }
            $object->volumes = $values_2;
            unset($data['volumes']);
        }
        if (\array_key_exists('vpc_uuid', $data)) {
            $object->vpcUuid = $data['vpc_uuid'];
            unset($data['vpc_uuid']);
        }
        if (\array_key_exists('with_droplet_agent', $data)) {
            $object->withDropletAgent = $data['with_droplet_agent'];
            unset($data['with_droplet_agent']);
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
        if (array_key_exists('region', get_object_vars($data)) && null !== ($data->region ?? null)) {
            $dataArray['region'] = $data->region ?? null;
        }
        $dataArray['size'] = $data->size ?? null;
        $value = $data->image ?? null;
        if (is_string($data->image ?? null)) {
            $value = $data->image ?? null;
        } elseif (is_int($data->image ?? null)) {
            $value = $data->image ?? null;
        }
        $dataArray['image'] = $value;
        if (array_key_exists('sshKeys', get_object_vars($data)) && null !== ($data->sshKeys ?? null)) {
            $values = [];
            foreach ($data->sshKeys ?? null as $value_1) {
                $value_2 = $value_1;
                if (is_string($value_1)) {
                    $value_2 = $value_1;
                } elseif (is_int($value_1)) {
                    $value_2 = $value_1;
                }
                $values[] = $value_2;
            }
            $dataArray['ssh_keys'] = $values;
        }
        if (array_key_exists('backups', get_object_vars($data)) && null !== ($data->backups ?? null)) {
            $dataArray['backups'] = $data->backups ?? null;
        }
        if (array_key_exists('backupPolicy', get_object_vars($data)) && null !== ($data->backupPolicy ?? null)) {
            $dataArray['backup_policy'] = ($data->backupPolicy ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->backupPolicy ?? null, 'json', $context));
        }
        if (array_key_exists('ipv6', get_object_vars($data)) && null !== ($data->ipv6 ?? null)) {
            $dataArray['ipv6'] = $data->ipv6 ?? null;
        }
        if (array_key_exists('monitoring', get_object_vars($data)) && null !== ($data->monitoring ?? null)) {
            $dataArray['monitoring'] = $data->monitoring ?? null;
        }
        if (array_key_exists('tags', get_object_vars($data)) && null !== ($data->tags ?? null)) {
            $values_1 = [];
            foreach ($data->tags ?? null as $value_3) {
                $values_1[] = $value_3;
            }
            $dataArray['tags'] = $values_1;
        }
        if (array_key_exists('userData', get_object_vars($data)) && null !== ($data->userData ?? null)) {
            $dataArray['user_data'] = $data->userData ?? null;
        }
        if (array_key_exists('privateNetworking', get_object_vars($data)) && null !== ($data->privateNetworking ?? null)) {
            $dataArray['private_networking'] = $data->privateNetworking ?? null;
        }
        if (array_key_exists('volumes', get_object_vars($data)) && null !== ($data->volumes ?? null)) {
            $values_2 = [];
            foreach ($data->volumes ?? null as $value_4) {
                $values_2[] = $value_4;
            }
            $dataArray['volumes'] = $values_2;
        }
        if (array_key_exists('vpcUuid', get_object_vars($data)) && null !== ($data->vpcUuid ?? null)) {
            $dataArray['vpc_uuid'] = $data->vpcUuid ?? null;
        }
        if (array_key_exists('withDropletAgent', get_object_vars($data)) && null !== ($data->withDropletAgent ?? null)) {
            $dataArray['with_droplet_agent'] = $data->withDropletAgent ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\DropletCreate::class => false];
    }
}