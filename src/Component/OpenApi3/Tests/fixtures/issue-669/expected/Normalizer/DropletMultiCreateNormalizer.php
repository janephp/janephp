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
class DropletMultiCreateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\DropletMultiCreate::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\DropletMultiCreate::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\DropletMultiCreate();
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('names', $data)) {
            $values = [];
            foreach ($data['names'] as $value) {
                $values[] = $value;
            }
            $object->setNames($values);
            unset($data['names']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($data['region']);
            unset($data['region']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
            unset($data['size']);
        }
        if (\array_key_exists('image', $data)) {
            $object->setImage($data['image']);
            unset($data['image']);
        }
        if (\array_key_exists('ssh_keys', $data)) {
            $values_1 = [];
            foreach ($data['ssh_keys'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSshKeys($values_1);
            unset($data['ssh_keys']);
        }
        if (\array_key_exists('backups', $data)) {
            $object->setBackups($data['backups']);
            unset($data['backups']);
        }
        if (\array_key_exists('backup_policy', $data)) {
            $object->setBackupPolicy($this->denormalizer->denormalize($data['backup_policy'], \Jane\Generated\DigitalOcean\Model\DropletCreateBackupPolicy::class, 'json', $context));
            unset($data['backup_policy']);
        }
        if (\array_key_exists('ipv6', $data)) {
            $object->setIpv6($data['ipv6']);
            unset($data['ipv6']);
        }
        if (\array_key_exists('monitoring', $data)) {
            $object->setMonitoring($data['monitoring']);
            unset($data['monitoring']);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_2 = [];
            foreach ($data['tags'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTags($values_2);
            unset($data['tags']);
        }
        elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        if (\array_key_exists('user_data', $data)) {
            $object->setUserData($data['user_data']);
            unset($data['user_data']);
        }
        if (\array_key_exists('private_networking', $data)) {
            $object->setPrivateNetworking($data['private_networking']);
            unset($data['private_networking']);
        }
        if (\array_key_exists('volumes', $data)) {
            $values_3 = [];
            foreach ($data['volumes'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setVolumes($values_3);
            unset($data['volumes']);
        }
        if (\array_key_exists('vpc_uuid', $data)) {
            $object->setVpcUuid($data['vpc_uuid']);
            unset($data['vpc_uuid']);
        }
        if (\array_key_exists('with_droplet_agent', $data)) {
            $object->setWithDropletAgent($data['with_droplet_agent']);
            unset($data['with_droplet_agent']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getNames() as $value) {
            $values[] = $value;
        }
        $dataArray['names'] = $values;
        if ($data->isInitialized('region') && null !== $data->getRegion()) {
            $dataArray['region'] = $data->getRegion();
        }
        $dataArray['size'] = $data->getSize();
        $dataArray['image'] = $data->getImage();
        if ($data->isInitialized('sshKeys') && null !== $data->getSshKeys()) {
            $values_1 = [];
            foreach ($data->getSshKeys() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['ssh_keys'] = $values_1;
        }
        if ($data->isInitialized('backups') && null !== $data->getBackups()) {
            $dataArray['backups'] = $data->getBackups();
        }
        if ($data->isInitialized('backupPolicy') && null !== $data->getBackupPolicy()) {
            $dataArray['backup_policy'] = $this->normalizer->normalize($data->getBackupPolicy(), 'json', $context);
        }
        if ($data->isInitialized('ipv6') && null !== $data->getIpv6()) {
            $dataArray['ipv6'] = $data->getIpv6();
        }
        if ($data->isInitialized('monitoring') && null !== $data->getMonitoring()) {
            $dataArray['monitoring'] = $data->getMonitoring();
        }
        if ($data->isInitialized('tags')) {
            $values_2 = [];
            foreach ($data->getTags() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['tags'] = $values_2;
        }
        if ($data->isInitialized('userData') && null !== $data->getUserData()) {
            $dataArray['user_data'] = $data->getUserData();
        }
        if ($data->isInitialized('privateNetworking') && null !== $data->getPrivateNetworking()) {
            $dataArray['private_networking'] = $data->getPrivateNetworking();
        }
        if ($data->isInitialized('volumes') && null !== $data->getVolumes()) {
            $values_3 = [];
            foreach ($data->getVolumes() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['volumes'] = $values_3;
        }
        if ($data->isInitialized('vpcUuid') && null !== $data->getVpcUuid()) {
            $dataArray['vpc_uuid'] = $data->getVpcUuid();
        }
        if ($data->isInitialized('withDropletAgent') && null !== $data->getWithDropletAgent()) {
            $dataArray['with_droplet_agent'] = $data->getWithDropletAgent();
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\DropletMultiCreate::class => false];
    }
}