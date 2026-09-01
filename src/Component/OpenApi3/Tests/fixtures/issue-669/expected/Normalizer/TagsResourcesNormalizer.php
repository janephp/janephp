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
class TagsResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\TagsResources::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\TagsResources::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\TagsResources();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('count', $data)) {
            $object->count = $data['count'];
            unset($data['count']);
        }
        if (\array_key_exists('last_tagged_uri', $data)) {
            $object->lastTaggedUri = $data['last_tagged_uri'];
            unset($data['last_tagged_uri']);
        }
        if (\array_key_exists('droplets', $data)) {
            $object->droplets = $this->denormalizer->denormalize($data['droplets'], \Jane\Generated\DigitalOcean\Model\TagsResourcesDroplets::class, 'json', $context);
            unset($data['droplets']);
        }
        if (\array_key_exists('imgages', $data)) {
            $object->imgages = $this->denormalizer->denormalize($data['imgages'], \Jane\Generated\DigitalOcean\Model\TagsResourcesImgages::class, 'json', $context);
            unset($data['imgages']);
        }
        if (\array_key_exists('volumes', $data)) {
            $object->volumes = $this->denormalizer->denormalize($data['volumes'], \Jane\Generated\DigitalOcean\Model\TagsResourcesVolumes::class, 'json', $context);
            unset($data['volumes']);
        }
        if (\array_key_exists('volume_snapshots', $data)) {
            $object->volumeSnapshots = $this->denormalizer->denormalize($data['volume_snapshots'], \Jane\Generated\DigitalOcean\Model\TagsResourcesVolumeSnapshots::class, 'json', $context);
            unset($data['volume_snapshots']);
        }
        if (\array_key_exists('databases', $data)) {
            $object->databases = $this->denormalizer->denormalize($data['databases'], \Jane\Generated\DigitalOcean\Model\TagsResourcesDatabases::class, 'json', $context);
            unset($data['databases']);
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
        if (array_key_exists('count', get_object_vars($data)) && null !== ($data->count ?? null)) {
            $dataArray['count'] = $data->count ?? null;
        }
        if (array_key_exists('lastTaggedUri', get_object_vars($data)) && null !== ($data->lastTaggedUri ?? null)) {
            $dataArray['last_tagged_uri'] = $data->lastTaggedUri ?? null;
        }
        if (array_key_exists('droplets', get_object_vars($data)) && null !== ($data->droplets ?? null)) {
            $dataArray['droplets'] = ($data->droplets ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->droplets ?? null, 'json', $context));
        }
        if (array_key_exists('imgages', get_object_vars($data)) && null !== ($data->imgages ?? null)) {
            $dataArray['imgages'] = ($data->imgages ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->imgages ?? null, 'json', $context));
        }
        if (array_key_exists('volumes', get_object_vars($data)) && null !== ($data->volumes ?? null)) {
            $dataArray['volumes'] = ($data->volumes ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->volumes ?? null, 'json', $context));
        }
        if (array_key_exists('volumeSnapshots', get_object_vars($data)) && null !== ($data->volumeSnapshots ?? null)) {
            $dataArray['volume_snapshots'] = ($data->volumeSnapshots ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->volumeSnapshots ?? null, 'json', $context));
        }
        if (array_key_exists('databases', get_object_vars($data)) && null !== ($data->databases ?? null)) {
            $dataArray['databases'] = ($data->databases ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->databases ?? null, 'json', $context));
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
        return [\Jane\Generated\DigitalOcean\Model\TagsResources::class => false];
    }
}