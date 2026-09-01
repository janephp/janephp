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
class DropletImageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\DropletImage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\DropletImage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\DropletImage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('size_gigabytes', $data) && \is_int($data['size_gigabytes'])) {
            $data['size_gigabytes'] = (float) $data['size_gigabytes'];
        }
        if (\array_key_exists('public', $data) && \is_int($data['public'])) {
            $data['public'] = (bool) $data['public'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
            unset($data['type']);
        }
        if (\array_key_exists('distribution', $data)) {
            $object->distribution = $data['distribution'];
            unset($data['distribution']);
        }
        if (\array_key_exists('slug', $data) && $data['slug'] !== null) {
            $object->slug = $data['slug'];
            unset($data['slug']);
        }
        elseif (\array_key_exists('slug', $data) && $data['slug'] === null) {
            $object->slug = null;
            unset($data['slug']);
        }
        if (\array_key_exists('public', $data)) {
            $object->public = $data['public'];
            unset($data['public']);
        }
        if (\array_key_exists('regions', $data)) {
            $values = [];
            foreach ($data['regions'] as $value) {
                $values[] = $value;
            }
            $object->regions = $values;
            unset($data['regions']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('min_disk_size', $data) && $data['min_disk_size'] !== null) {
            $object->minDiskSize = $data['min_disk_size'];
            unset($data['min_disk_size']);
        }
        elseif (\array_key_exists('min_disk_size', $data) && $data['min_disk_size'] === null) {
            $object->minDiskSize = null;
            unset($data['min_disk_size']);
        }
        if (\array_key_exists('size_gigabytes', $data) && $data['size_gigabytes'] !== null) {
            $object->sizeGigabytes = $data['size_gigabytes'];
            unset($data['size_gigabytes']);
        }
        elseif (\array_key_exists('size_gigabytes', $data) && $data['size_gigabytes'] === null) {
            $object->sizeGigabytes = null;
            unset($data['size_gigabytes']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_1 = [];
            foreach ($data['tags'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->tags = $values_1;
            unset($data['tags']);
        }
        elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->tags = null;
            unset($data['tags']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('error_message', $data)) {
            $object->errorMessage = $data['error_message'];
            unset($data['error_message']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
        }
        if (array_key_exists('distribution', get_object_vars($data)) && null !== ($data->distribution ?? null)) {
            $dataArray['distribution'] = $data->distribution ?? null;
        }
        if (array_key_exists('slug', get_object_vars($data)) && null !== ($data->slug ?? null)) {
            $dataArray['slug'] = $data->slug ?? null;
        }
        if (array_key_exists('public', get_object_vars($data)) && null !== ($data->public ?? null)) {
            $dataArray['public'] = $data->public ?? null;
        }
        if (array_key_exists('regions', get_object_vars($data)) && null !== ($data->regions ?? null)) {
            $values = [];
            foreach ($data->regions ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['regions'] = $values;
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['created_at'] = ($data->createdAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('minDiskSize', get_object_vars($data)) && null !== ($data->minDiskSize ?? null)) {
            $dataArray['min_disk_size'] = $data->minDiskSize ?? null;
        }
        if (array_key_exists('sizeGigabytes', get_object_vars($data)) && null !== ($data->sizeGigabytes ?? null)) {
            $dataArray['size_gigabytes'] = $data->sizeGigabytes ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('tags', get_object_vars($data)) && null !== ($data->tags ?? null)) {
            $values_1 = [];
            foreach ($data->tags ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['tags'] = $values_1;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('errorMessage', get_object_vars($data)) && null !== ($data->errorMessage ?? null)) {
            $dataArray['error_message'] = $data->errorMessage ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\DropletImage::class => false];
    }
}