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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\TagsResources();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('count', $data)) {
            $object->setCount($data['count']);
            unset($data['count']);
        }
        if (\array_key_exists('last_tagged_uri', $data)) {
            $object->setLastTaggedUri($data['last_tagged_uri']);
            unset($data['last_tagged_uri']);
        }
        if (\array_key_exists('droplets', $data)) {
            $object->setDroplets($this->denormalizer->denormalize($data['droplets'], \Jane\Generated\DigitalOcean\Model\TagsResourcesdroplets::class, 'json', $context));
            unset($data['droplets']);
        }
        if (\array_key_exists('imgages', $data)) {
            $object->setImgages($this->denormalizer->denormalize($data['imgages'], \Jane\Generated\DigitalOcean\Model\TagsResourcesimgages::class, 'json', $context));
            unset($data['imgages']);
        }
        if (\array_key_exists('volumes', $data)) {
            $object->setVolumes($this->denormalizer->denormalize($data['volumes'], \Jane\Generated\DigitalOcean\Model\TagsResourcesvolumes::class, 'json', $context));
            unset($data['volumes']);
        }
        if (\array_key_exists('volume_snapshots', $data)) {
            $object->setVolumeSnapshots($this->denormalizer->denormalize($data['volume_snapshots'], \Jane\Generated\DigitalOcean\Model\TagsResourcesvolumeSnapshots::class, 'json', $context));
            unset($data['volume_snapshots']);
        }
        if (\array_key_exists('databases', $data)) {
            $object->setDatabases($this->denormalizer->denormalize($data['databases'], \Jane\Generated\DigitalOcean\Model\TagsResourcesdatabases::class, 'json', $context));
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
        if ($data->isInitialized('count') && null !== $data->getCount()) {
            $dataArray['count'] = $data->getCount();
        }
        if ($data->isInitialized('lastTaggedUri') && null !== $data->getLastTaggedUri()) {
            $dataArray['last_tagged_uri'] = $data->getLastTaggedUri();
        }
        if ($data->isInitialized('droplets') && null !== $data->getDroplets()) {
            $dataArray['droplets'] = $this->normalizer->normalize($data->getDroplets(), 'json', $context);
        }
        if ($data->isInitialized('imgages') && null !== $data->getImgages()) {
            $dataArray['imgages'] = $this->normalizer->normalize($data->getImgages(), 'json', $context);
        }
        if ($data->isInitialized('volumes') && null !== $data->getVolumes()) {
            $dataArray['volumes'] = $this->normalizer->normalize($data->getVolumes(), 'json', $context);
        }
        if ($data->isInitialized('volumeSnapshots') && null !== $data->getVolumeSnapshots()) {
            $dataArray['volume_snapshots'] = $this->normalizer->normalize($data->getVolumeSnapshots(), 'json', $context);
        }
        if ($data->isInitialized('databases') && null !== $data->getDatabases()) {
            $dataArray['databases'] = $this->normalizer->normalize($data->getDatabases(), 'json', $context);
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
        return [\Jane\Generated\DigitalOcean\Model\TagsResources::class => false];
    }
}