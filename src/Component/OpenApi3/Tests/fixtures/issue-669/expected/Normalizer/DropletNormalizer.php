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
class DropletNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\Droplet::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\Droplet::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\Droplet();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('locked', $data) && \is_int($data['locked'])) {
            $data['locked'] = (bool) $data['locked'];
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('memory', $data)) {
            $object->setMemory($data['memory']);
            unset($data['memory']);
        }
        if (\array_key_exists('vcpus', $data)) {
            $object->setVcpus($data['vcpus']);
            unset($data['vcpus']);
        }
        if (\array_key_exists('disk', $data)) {
            $object->setDisk($data['disk']);
            unset($data['disk']);
        }
        if (\array_key_exists('disk_info', $data)) {
            $values = [];
            foreach ($data['disk_info'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\DiskInfo::class, 'json', $context);
            }
            $object->setDiskInfo($values);
            unset($data['disk_info']);
        }
        if (\array_key_exists('locked', $data)) {
            $object->setLocked($data['locked']);
            unset($data['locked']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('kernel', $data) && $data['kernel'] !== null) {
            $object->setKernel($this->denormalizer->denormalize($data['kernel'], \Jane\Generated\DigitalOcean\Model\Kernel::class, 'json', $context));
            unset($data['kernel']);
        }
        elseif (\array_key_exists('kernel', $data) && $data['kernel'] === null) {
            $object->setKernel(null);
            unset($data['kernel']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCreatedAt($date);
            unset($data['created_at']);
        }
        if (\array_key_exists('features', $data)) {
            $values_1 = [];
            foreach ($data['features'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setFeatures($values_1);
            unset($data['features']);
        }
        if (\array_key_exists('backup_ids', $data)) {
            $values_2 = [];
            foreach ($data['backup_ids'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setBackupIds($values_2);
            unset($data['backup_ids']);
        }
        if (\array_key_exists('next_backup_window', $data)) {
            $object->setNextBackupWindow($this->denormalizer->denormalize($data['next_backup_window'], \Jane\Generated\DigitalOcean\Model\DropletNextBackupWindow::class, 'json', $context));
            unset($data['next_backup_window']);
        }
        if (\array_key_exists('snapshot_ids', $data)) {
            $values_3 = [];
            foreach ($data['snapshot_ids'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setSnapshotIds($values_3);
            unset($data['snapshot_ids']);
        }
        if (\array_key_exists('image', $data)) {
            $object->setImage($this->denormalizer->denormalize($data['image'], \Jane\Generated\DigitalOcean\Model\DropletImage::class, 'json', $context));
            unset($data['image']);
        }
        if (\array_key_exists('volume_ids', $data)) {
            $values_4 = [];
            foreach ($data['volume_ids'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setVolumeIds($values_4);
            unset($data['volume_ids']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($this->denormalizer->denormalize($data['size'], \Jane\Generated\DigitalOcean\Model\Size::class, 'json', $context));
            unset($data['size']);
        }
        if (\array_key_exists('size_slug', $data)) {
            $object->setSizeSlug($data['size_slug']);
            unset($data['size_slug']);
        }
        if (\array_key_exists('networks', $data)) {
            $object->setNetworks($this->denormalizer->denormalize($data['networks'], \Jane\Generated\DigitalOcean\Model\DropletNetworks::class, 'json', $context));
            unset($data['networks']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($this->denormalizer->denormalize($data['region'], \Jane\Generated\DigitalOcean\Model\Region::class, 'json', $context));
            unset($data['region']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_5 = [];
            foreach ($data['tags'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setTags($values_5);
            unset($data['tags']);
        }
        if (\array_key_exists('vpc_uuid', $data)) {
            $object->setVpcUuid($data['vpc_uuid']);
            unset($data['vpc_uuid']);
        }
        if (\array_key_exists('gpu_info', $data)) {
            $object->setGpuInfo($this->denormalizer->denormalize($data['gpu_info'], \Jane\Generated\DigitalOcean\Model\GpuInfo::class, 'json', $context));
            unset($data['gpu_info']);
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_6;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['name'] = $data->getName();
        $dataArray['memory'] = $data->getMemory();
        $dataArray['vcpus'] = $data->getVcpus();
        $dataArray['disk'] = $data->getDisk();
        if ($data->isInitialized('diskInfo') && null !== $data->getDiskInfo()) {
            $values = [];
            foreach ($data->getDiskInfo() as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['disk_info'] = $values;
        }
        $dataArray['locked'] = $data->getLocked();
        $dataArray['status'] = $data->getStatus();
        if ($data->isInitialized('kernel') && null !== $data->getKernel()) {
            $dataArray['kernel'] = $data->getKernel() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getKernel(), 'json', $context));
        }
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $values_1 = [];
        foreach ($data->getFeatures() as $value_1) {
            $values_1[] = $value_1;
        }
        $dataArray['features'] = $values_1;
        $values_2 = [];
        foreach ($data->getBackupIds() as $value_2) {
            $values_2[] = $value_2;
        }
        $dataArray['backup_ids'] = $values_2;
        $dataArray['next_backup_window'] = $data->getNextBackupWindow() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getNextBackupWindow(), 'json', $context));
        $values_3 = [];
        foreach ($data->getSnapshotIds() as $value_3) {
            $values_3[] = $value_3;
        }
        $dataArray['snapshot_ids'] = $values_3;
        $dataArray['image'] = $data->getImage() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getImage(), 'json', $context));
        $values_4 = [];
        foreach ($data->getVolumeIds() as $value_4) {
            $values_4[] = $value_4;
        }
        $dataArray['volume_ids'] = $values_4;
        $dataArray['size'] = $data->getSize() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getSize(), 'json', $context));
        $dataArray['size_slug'] = $data->getSizeSlug();
        $dataArray['networks'] = $data->getNetworks() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getNetworks(), 'json', $context));
        $dataArray['region'] = $data->getRegion() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getRegion(), 'json', $context));
        $values_5 = [];
        foreach ($data->getTags() as $value_5) {
            $values_5[] = $value_5;
        }
        $dataArray['tags'] = $values_5;
        if ($data->isInitialized('vpcUuid') && null !== $data->getVpcUuid()) {
            $dataArray['vpc_uuid'] = $data->getVpcUuid();
        }
        if ($data->isInitialized('gpuInfo') && null !== $data->getGpuInfo()) {
            $dataArray['gpu_info'] = $data->getGpuInfo() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getGpuInfo(), 'json', $context));
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_6;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\Droplet::class => false];
    }
}