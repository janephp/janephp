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
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('memory', $data)) {
            $object->memory = $data['memory'];
            unset($data['memory']);
        }
        if (\array_key_exists('vcpus', $data)) {
            $object->vcpus = $data['vcpus'];
            unset($data['vcpus']);
        }
        if (\array_key_exists('disk', $data)) {
            $object->disk = $data['disk'];
            unset($data['disk']);
        }
        if (\array_key_exists('disk_info', $data)) {
            $values = [];
            foreach ($data['disk_info'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\DiskInfo::class, 'json', $context);
            }
            $object->diskInfo = $values;
            unset($data['disk_info']);
        }
        if (\array_key_exists('locked', $data)) {
            $object->locked = $data['locked'];
            unset($data['locked']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('kernel', $data) && $data['kernel'] !== null) {
            $object->kernel = $this->denormalizer->denormalize($data['kernel'], \Jane\Generated\DigitalOcean\Model\Kernel::class, 'json', $context);
            unset($data['kernel']);
        }
        elseif (\array_key_exists('kernel', $data) && $data['kernel'] === null) {
            $object->kernel = null;
            unset($data['kernel']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('features', $data)) {
            $values_1 = [];
            foreach ($data['features'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->features = $values_1;
            unset($data['features']);
        }
        if (\array_key_exists('backup_ids', $data)) {
            $values_2 = [];
            foreach ($data['backup_ids'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->backupIds = $values_2;
            unset($data['backup_ids']);
        }
        if (\array_key_exists('next_backup_window', $data)) {
            $object->nextBackupWindow = $this->denormalizer->denormalize($data['next_backup_window'], \Jane\Generated\DigitalOcean\Model\DropletNextBackupWindow::class, 'json', $context);
            unset($data['next_backup_window']);
        }
        if (\array_key_exists('snapshot_ids', $data)) {
            $values_3 = [];
            foreach ($data['snapshot_ids'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->snapshotIds = $values_3;
            unset($data['snapshot_ids']);
        }
        if (\array_key_exists('image', $data)) {
            $object->image = $this->denormalizer->denormalize($data['image'], \Jane\Generated\DigitalOcean\Model\DropletImage::class, 'json', $context);
            unset($data['image']);
        }
        if (\array_key_exists('volume_ids', $data)) {
            $values_4 = [];
            foreach ($data['volume_ids'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->volumeIds = $values_4;
            unset($data['volume_ids']);
        }
        if (\array_key_exists('size', $data)) {
            $object->size = $this->denormalizer->denormalize($data['size'], \Jane\Generated\DigitalOcean\Model\Size::class, 'json', $context);
            unset($data['size']);
        }
        if (\array_key_exists('size_slug', $data)) {
            $object->sizeSlug = $data['size_slug'];
            unset($data['size_slug']);
        }
        if (\array_key_exists('networks', $data)) {
            $object->networks = $this->denormalizer->denormalize($data['networks'], \Jane\Generated\DigitalOcean\Model\DropletNetworks::class, 'json', $context);
            unset($data['networks']);
        }
        if (\array_key_exists('region', $data)) {
            $object->region = $this->denormalizer->denormalize($data['region'], \Jane\Generated\DigitalOcean\Model\Region::class, 'json', $context);
            unset($data['region']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_5 = [];
            foreach ($data['tags'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->tags = $values_5;
            unset($data['tags']);
        }
        if (\array_key_exists('vpc_uuid', $data)) {
            $object->vpcUuid = $data['vpc_uuid'];
            unset($data['vpc_uuid']);
        }
        if (\array_key_exists('gpu_info', $data)) {
            $object->gpuInfo = $this->denormalizer->denormalize($data['gpu_info'], \Jane\Generated\DigitalOcean\Model\GpuInfo::class, 'json', $context);
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
        $dataArray['id'] = $data->id ?? null;
        $dataArray['name'] = $data->name ?? null;
        $dataArray['memory'] = $data->memory ?? null;
        $dataArray['vcpus'] = $data->vcpus ?? null;
        $dataArray['disk'] = $data->disk ?? null;
        if (array_key_exists('diskInfo', get_object_vars($data)) && null !== ($data->diskInfo ?? null)) {
            $values = [];
            foreach ($data->diskInfo ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['disk_info'] = $values;
        }
        $dataArray['locked'] = $data->locked ?? null;
        $dataArray['status'] = $data->status ?? null;
        if (array_key_exists('kernel', get_object_vars($data)) && null !== ($data->kernel ?? null)) {
            $dataArray['kernel'] = ($data->kernel ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->kernel ?? null, 'json', $context));
        }
        $dataArray['created_at'] = ($data->createdAt ?? null)->format('Y-m-d\TH:i:sP');
        $values_1 = [];
        foreach ($data->features ?? null as $value_1) {
            $values_1[] = $value_1;
        }
        $dataArray['features'] = $values_1;
        $values_2 = [];
        foreach ($data->backupIds ?? null as $value_2) {
            $values_2[] = $value_2;
        }
        $dataArray['backup_ids'] = $values_2;
        $dataArray['next_backup_window'] = ($data->nextBackupWindow ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->nextBackupWindow ?? null, 'json', $context));
        $values_3 = [];
        foreach ($data->snapshotIds ?? null as $value_3) {
            $values_3[] = $value_3;
        }
        $dataArray['snapshot_ids'] = $values_3;
        $dataArray['image'] = ($data->image ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->image ?? null, 'json', $context));
        $values_4 = [];
        foreach ($data->volumeIds ?? null as $value_4) {
            $values_4[] = $value_4;
        }
        $dataArray['volume_ids'] = $values_4;
        $dataArray['size'] = ($data->size ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->size ?? null, 'json', $context));
        $dataArray['size_slug'] = $data->sizeSlug ?? null;
        $dataArray['networks'] = ($data->networks ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->networks ?? null, 'json', $context));
        $dataArray['region'] = ($data->region ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->region ?? null, 'json', $context));
        $values_5 = [];
        foreach ($data->tags ?? null as $value_5) {
            $values_5[] = $value_5;
        }
        $dataArray['tags'] = $values_5;
        if (array_key_exists('vpcUuid', get_object_vars($data)) && null !== ($data->vpcUuid ?? null)) {
            $dataArray['vpc_uuid'] = $data->vpcUuid ?? null;
        }
        if (array_key_exists('gpuInfo', get_object_vars($data)) && null !== ($data->gpuInfo ?? null)) {
            $dataArray['gpu_info'] = ($data->gpuInfo ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->gpuInfo ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_6) {
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