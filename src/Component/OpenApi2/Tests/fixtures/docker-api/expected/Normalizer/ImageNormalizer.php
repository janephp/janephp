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
            $object->id = $data['Id'];
        }
        if (\array_key_exists('RepoTags', $data)) {
            $values = [];
            foreach ($data['RepoTags'] as $value) {
                $values[] = $value;
            }
            $object->repoTags = $values;
        }
        if (\array_key_exists('RepoDigests', $data)) {
            $values_1 = [];
            foreach ($data['RepoDigests'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->repoDigests = $values_1;
        }
        if (\array_key_exists('Parent', $data)) {
            $object->parent = $data['Parent'];
        }
        if (\array_key_exists('Comment', $data)) {
            $object->comment = $data['Comment'];
        }
        if (\array_key_exists('Created', $data)) {
            $object->created = $data['Created'];
        }
        if (\array_key_exists('Container', $data)) {
            $object->container = $data['Container'];
        }
        if (\array_key_exists('ContainerConfig', $data)) {
            $object->containerConfig = $this->denormalizer->denormalize($data['ContainerConfig'], \Docker\Api\Model\ContainerConfig::class, 'json', $context);
        }
        if (\array_key_exists('DockerVersion', $data)) {
            $object->dockerVersion = $data['DockerVersion'];
        }
        if (\array_key_exists('Author', $data)) {
            $object->author = $data['Author'];
        }
        if (\array_key_exists('Config', $data)) {
            $object->config = $this->denormalizer->denormalize($data['Config'], \Docker\Api\Model\ContainerConfig::class, 'json', $context);
        }
        if (\array_key_exists('Architecture', $data)) {
            $object->architecture = $data['Architecture'];
        }
        if (\array_key_exists('Os', $data)) {
            $object->os = $data['Os'];
        }
        if (\array_key_exists('OsVersion', $data)) {
            $object->osVersion = $data['OsVersion'];
        }
        if (\array_key_exists('Size', $data)) {
            $object->size = $data['Size'];
        }
        if (\array_key_exists('VirtualSize', $data)) {
            $object->virtualSize = $data['VirtualSize'];
        }
        if (\array_key_exists('GraphDriver', $data)) {
            $object->graphDriver = $this->denormalizer->denormalize($data['GraphDriver'], \Docker\Api\Model\GraphDriverData::class, 'json', $context);
        }
        if (\array_key_exists('RootFS', $data)) {
            $object->rootFS = $this->denormalizer->denormalize($data['RootFS'], \Docker\Api\Model\ImageRootFS::class, 'json', $context);
        }
        if (\array_key_exists('Metadata', $data)) {
            $object->metadata = $this->denormalizer->denormalize($data['Metadata'], \Docker\Api\Model\ImageMetadata::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['Id'] = $data->id ?? null;
        if (array_key_exists('repoTags', get_object_vars($data)) && null !== ($data->repoTags ?? null)) {
            $values = [];
            foreach ($data->repoTags ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['RepoTags'] = $values;
        }
        if (array_key_exists('repoDigests', get_object_vars($data)) && null !== ($data->repoDigests ?? null)) {
            $values_1 = [];
            foreach ($data->repoDigests ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['RepoDigests'] = $values_1;
        }
        $dataArray['Parent'] = $data->parent ?? null;
        $dataArray['Comment'] = $data->comment ?? null;
        $dataArray['Created'] = $data->created ?? null;
        $dataArray['Container'] = $data->container ?? null;
        if (array_key_exists('containerConfig', get_object_vars($data)) && null !== ($data->containerConfig ?? null)) {
            $dataArray['ContainerConfig'] = ($data->containerConfig ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->containerConfig ?? null, 'json', $context));
        }
        $dataArray['DockerVersion'] = $data->dockerVersion ?? null;
        $dataArray['Author'] = $data->author ?? null;
        if (array_key_exists('config', get_object_vars($data)) && null !== ($data->config ?? null)) {
            $dataArray['Config'] = ($data->config ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->config ?? null, 'json', $context));
        }
        $dataArray['Architecture'] = $data->architecture ?? null;
        $dataArray['Os'] = $data->os ?? null;
        if (array_key_exists('osVersion', get_object_vars($data)) && null !== ($data->osVersion ?? null)) {
            $dataArray['OsVersion'] = $data->osVersion ?? null;
        }
        $dataArray['Size'] = $data->size ?? null;
        $dataArray['VirtualSize'] = $data->virtualSize ?? null;
        $dataArray['GraphDriver'] = ($data->graphDriver ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->graphDriver ?? null, 'json', $context));
        $dataArray['RootFS'] = ($data->rootFS ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->rootFS ?? null, 'json', $context));
        if (array_key_exists('metadata', get_object_vars($data)) && null !== ($data->metadata ?? null)) {
            $dataArray['Metadata'] = ($data->metadata ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->metadata ?? null, 'json', $context));
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