<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ImageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\Image::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\Image::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\Image();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\ImageConstraint());
        }
        if (\array_key_exists('Id', $data)) {
            $object->setId($data['Id']);
        }
        if (\array_key_exists('RepoTags', $data)) {
            $values = [];
            foreach ($data['RepoTags'] as $value) {
                $values[] = $value;
            }
            $object->setRepoTags($values);
        }
        if (\array_key_exists('RepoDigests', $data)) {
            $values_1 = [];
            foreach ($data['RepoDigests'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRepoDigests($values_1);
        }
        if (\array_key_exists('Parent', $data)) {
            $object->setParent($data['Parent']);
        }
        if (\array_key_exists('Comment', $data)) {
            $object->setComment($data['Comment']);
        }
        if (\array_key_exists('Created', $data)) {
            $object->setCreated($data['Created']);
        }
        if (\array_key_exists('Container', $data)) {
            $object->setContainer($data['Container']);
        }
        if (\array_key_exists('ContainerConfig', $data)) {
            $object->setContainerConfig($this->denormalizer->denormalize($data['ContainerConfig'], \Docker\Api\Model\ContainerConfig::class, 'json', $context));
        }
        if (\array_key_exists('DockerVersion', $data)) {
            $object->setDockerVersion($data['DockerVersion']);
        }
        if (\array_key_exists('Author', $data)) {
            $object->setAuthor($data['Author']);
        }
        if (\array_key_exists('Config', $data)) {
            $object->setConfig($this->denormalizer->denormalize($data['Config'], \Docker\Api\Model\ContainerConfig::class, 'json', $context));
        }
        if (\array_key_exists('Architecture', $data)) {
            $object->setArchitecture($data['Architecture']);
        }
        if (\array_key_exists('Os', $data)) {
            $object->setOs($data['Os']);
        }
        if (\array_key_exists('OsVersion', $data)) {
            $object->setOsVersion($data['OsVersion']);
        }
        if (\array_key_exists('Size', $data)) {
            $object->setSize($data['Size']);
        }
        if (\array_key_exists('VirtualSize', $data)) {
            $object->setVirtualSize($data['VirtualSize']);
        }
        if (\array_key_exists('GraphDriver', $data)) {
            $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], \Docker\Api\Model\GraphDriverData::class, 'json', $context));
        }
        if (\array_key_exists('RootFS', $data)) {
            $object->setRootFS($this->denormalizer->denormalize($data['RootFS'], \Docker\Api\Model\ImageRootFS::class, 'json', $context));
        }
        if (\array_key_exists('Metadata', $data)) {
            $object->setMetadata($this->denormalizer->denormalize($data['Metadata'], \Docker\Api\Model\ImageMetadata::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['Id'] = $data->getId();
        if ($data->isInitialized('repoTags') && null !== $data->getRepoTags()) {
            $values = [];
            foreach ($data->getRepoTags() as $value) {
                $values[] = $value;
            }
            $dataArray['RepoTags'] = $values;
        }
        if ($data->isInitialized('repoDigests') && null !== $data->getRepoDigests()) {
            $values_1 = [];
            foreach ($data->getRepoDigests() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['RepoDigests'] = $values_1;
        }
        $dataArray['Parent'] = $data->getParent();
        $dataArray['Comment'] = $data->getComment();
        $dataArray['Created'] = $data->getCreated();
        $dataArray['Container'] = $data->getContainer();
        if ($data->isInitialized('containerConfig') && null !== $data->getContainerConfig()) {
            $dataArray['ContainerConfig'] = $data->getContainerConfig() === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->getContainerConfig(), 'json', $context));
        }
        $dataArray['DockerVersion'] = $data->getDockerVersion();
        $dataArray['Author'] = $data->getAuthor();
        if ($data->isInitialized('config') && null !== $data->getConfig()) {
            $dataArray['Config'] = $data->getConfig() === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->getConfig(), 'json', $context));
        }
        $dataArray['Architecture'] = $data->getArchitecture();
        $dataArray['Os'] = $data->getOs();
        if ($data->isInitialized('osVersion') && null !== $data->getOsVersion()) {
            $dataArray['OsVersion'] = $data->getOsVersion();
        }
        $dataArray['Size'] = $data->getSize();
        $dataArray['VirtualSize'] = $data->getVirtualSize();
        $dataArray['GraphDriver'] = $data->getGraphDriver() === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->getGraphDriver(), 'json', $context));
        $dataArray['RootFS'] = $data->getRootFS() === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->getRootFS(), 'json', $context));
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $dataArray['Metadata'] = $data->getMetadata() === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->getMetadata(), 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\ImageConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\Image::class => false];
    }
}